<?php

namespace App\Http\Controllers;

use Exception;
use Cache;
use Mail;
use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\EmailVerificationNotification;
use App\Exceptions\InvalidRequestException;


class EmailVerificationController extends Controller
{
    public function verify(Request $request)
    {
    	//从url中获取email和token 两个参数
    	$email = $request->input('email');
    	$token = $request->input('token');
    	//如果有一个为空说明不是合法的验证链接，直接抛出异常。
    	if (!$email || !$token) {
    		throw new InvalidRequestException('验证链接不正确');
    	}
    	// 根据邮箱从数据库中获取对应的用户
    	// 通常来说能通过 token 校验的情况下不可能出现用户不存在
    	// 但是为了代码的健壮性我们还是要做这个判断
    	if (!$user = User::where('email', $email)->first()){
    		throw new InvalidRequestException('用户不存在');
    	}

    	//将指定的 key 缓存中删除，由于已经完成了验证，这个缓存就没有必要继续保留。
    	Cache::forget('email_verification_'.$email);
    	//最关键的是要吧对应用户的 email_verified 字段改为 true.
    	$user->update(['email_verified' => true]);
    	//最后告知用户邮箱验证成功。
    	return view('pages.success',['msg' => '邮箱验证成功']);

    }

    public function send(Request $request)
    {
    	$user = $request->user();
    	//判断用户是否已经激活
    	if ($user->email_verified) {
    		throw new InvalidRequestException('你已经验证过邮箱了');
    	} 
    	//调用 notify() 方法用来发送我们定义好的通知类
    	$user->notify(new EmailVerificationNotification());
    	return view('pages.success', ['msg' => '邮件发送成功']);
    }
}
