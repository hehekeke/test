<?php

class Response{
	public static function json($code,$message='',$data=array())
	{
		if(!is_integer($code)){
			return "";
		}
		$result = array(
			'code'=>$code,
			'message'=>$message,
			'data'=>$data
		);
		echo json_encode($result);
		exit();
	}
}