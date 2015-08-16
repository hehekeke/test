<?php
//preg_match  preg_match_all
//
$pattern = '/[0-9]/';
$subject = "dfdfadas234dsfdsaf4543dsfdsa";
// $subject = array("df3",'edfdsf','fdafcvv6');
$m1 = $m2 = array();
$t1=preg_match($pattern,$subject,$m1);
$t2=preg_match_all($pattern,$subject,$m2);

//preg_replace  preg_filter

$replacement = "8";
$t3=preg_replace($pattern,$replacement,$subject);
$t4=preg_filter($pattern,$replacement,$subject);


//preg_grep
$arr = preg_grep($pattern, $subject);
show($arr);
//preg_split
$arr = preg_split($pattern, $subject);
show($arr);
//preg_quote
$str = 'qre{asdf}[1234]';
$str = preg_quote($str);
show($str);

function show($var = null){
	if(empty($var)){
		echo "null";
	}elseif(is_array($var) || is_object($var)){
		echo "<pre>";
		print_r($var);
		echo "</pre>";
	}else{
		//string int float
		echo $var;
	}
}

