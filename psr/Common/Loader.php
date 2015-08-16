<?php

namespace Common;

class Loader{
	static function autoLoad($class){
		require_once BASEDIR."/".$class.".php";
	}
}