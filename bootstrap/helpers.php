<?php
function test_helper(){
	return 'OK';
}

function route_class()
{
	return str_replace('.', '-', Route::currentRouteName());
}

function parse_xml($xml)
{
	// 用 simplexml_load_string 函数初步解析 xml， 返回值为对象，再通过 normalize_xml 函数将对象转换成数组
	//return normalize_xml(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_COMPACT | LIBXML_NOCDATA | LIBXML_NOBLANKS));
	
}

