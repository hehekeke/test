<?php
namespace Common;

class Object{
	protected $array = Array();
	
	public function __set($key ,$value)
	{
		var_dump(__METHOD__);
		$this->array[$key] = $value;
	}

	public function __get($key){
		var_dump(__METHOD__);
		return $this->array[$key];
	}

	public function __call($func,$param){
		var_dump($func,$param);
		return "magic function";
	}
	public static function __callStatic($func,$param){
		var_dump($func,$param);
		return "magic static function";
	}

	public function toString()
	{
		return __CLASS__;
	}
	public function __invoke($param){
		var_dump($param);
		return "invoke";
	}
}