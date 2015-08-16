<?php
// file_exists("aa.text") or die(" file is exists");
date_default_timezone_set("PRC");
function my_error($errno,$errmes){
	$err_info = "$errno"."---------------"."$errmes";
	$date = date("Y-m-d H:i:s",time());
	error_log($date.$err_info."\r\n",3,"error.txt");
}

// set_error_handler("my_error",E_WARNING);



set_error_handler("my_error",E_USER_ERROR);
$age = 700;
if($age>120){
	// trigger_error("age is > 120",E_USER_WARNING);
	trigger_error("age is > 120",E_USER_ERROR);
}

echo "ok";

