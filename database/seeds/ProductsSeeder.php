<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 创建 30 个商品
        $products = factory(App\Models\Product::class, 30)->create();
        foreach($products as $product){
        	//创建 3 个 sku，并且每个 product_id 的字段为当前循环商品的id
        	$skus = factory(App\Models\ProductSku::class, 3)->create(['product_id' => $product->id]);
        	// 找出最低的 sku 价格 把商品的价格设置为该价格
        	$product->update(['price'=> $skus->min('price')]);
        }
    }
}
