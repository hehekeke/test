<?php

// 1. 写一个函数，尽可能高效的，从一个标准 url 里取出文件的扩展名
//           例如: http://www.php186.com/index.php 需要取出 php 或 .php 

function getExtends1($str){
	//implode 数组变为字符串   

	$str = explode(".", $str);
	return $str[count($str)-1];
}

function getExtends2($str){
	 $arr = parse_url($url);
	 return $arr;
}

$str = "http://www.php186.com/index.php";

$strExtend1 = getExtends1($str);
echo $strExtend1."<br/>";

$strExtend2 = getExtends2($str);
print_r($strExtend2)
echo $strExtend2."<br/>";