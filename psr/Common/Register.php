<?php
namespace Common;
class Register{
	protected static $objects;
	function set($alias,$object){
		self::$objects[$alias] = $object;
	}
	function _unset($alias){
		unset(self::$objects[$alias]);
	}

	public static function get($name){
		return self::$objects[$name];
	}

}