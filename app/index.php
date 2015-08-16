<?php
require_once('Response.php');
$arr = array(
	'id'=>'1',
	'name'=>'wyq'
);

Response::json(200,"访问陈功",$arr);