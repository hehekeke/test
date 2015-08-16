<?php

//静态变量   【访问修饰符】  static  变量名
//
//访问静态变量
//      1.在类内
//         1.self::$变量名
//         2.类名::$变量名
//      2.在类外
//         1.类名::$变量名
class Person{
	public static $num = 0;
	public function join_game(){
		self::$num+=1;
	}
	public $name;
	public $age;
	public function __construct($iname,$iage)
	{
		$this->name = $iname;
		$this->age = $iage;
	}
}

$p1 = new Person("xiaowang","20");
$p1->join_game();

$p2 = new Person("xiaohong","20");
$p2->join_game();

$p2 = new Person("xiaobai","20");
$p2->join_game();
echo "total num is ".Person::$num;