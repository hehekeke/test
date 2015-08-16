<?php

class Person{
	public $name;
	public $age;
	//当两个同时存在的时候    会先使用construct函数
	public function  Person(){
		echo "111111";
	}
	public function __construct()
	{
		echo "I am construct";
	}
}

$p = new Person();