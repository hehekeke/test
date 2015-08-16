<?php


//析构方法 主要用于 释放资源 
//会自动调用
//调用顺序 是  先创建的 后销毁 
//        栈的 先进后出 原则 
//        
//  总结：
//       1.__desruct()
//       2.没有返回值
//       3.释放资源的操作 并不是销毁对象的本身
//       4.在系统销毁对象之前   会自动的调用 析构方法
//       5.一个类 中 最多要一个析构方法
//       6.没有参数
class Person{
	public $name;
	public $age;
	public function __construct($iname,$iage)
	{
		$this->name = $iname;
		$this->age = $iage;
	}
	public function __destruct(){
		echo $this->name." is destruct<br>";
	}
}

$p1 = new Person("1","16");

$p2 = new Person("2","18");
$p3 = new Person("3","18");
$p4 =  new Person("1","18");