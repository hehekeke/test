<?php



//$this 本质是对象的地址 那个对象调用 就是那个对象的
//   这个是系统自动分配的 
//   $this  不再class类 之外使用
class Person{
	public $name;
	public $age;
	public function __construct($iname,$iage)
	{
		$this->name = $iname;
		$this->age = $iage;
	}
}

$p = new Person("wyq",20);
echo $p->name;