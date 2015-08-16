<?php

namespace Common;
class Database{
	protected $db;
	private function __construct(){

	}
	static function getInstance(){
		if(self::$db){
			return self::$db;
		}else{
			self::$db = new slef();
		}
	}
	function where($where){

		return $this;
	}
	function order($order){
		return $this;
	}
	function limit($limit){
		return $this;
	}
}