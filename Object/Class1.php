<?php

//这个案例说明  对象在赋值传递的时候 是传递一个地址 
class Person{
	public $name;
	public $age;
}

$a = new Person();
$a->name = 'xiaoming';
$a->age = '20';
$b = $a;
echo $b->name;

//说明 在函数中  对象传递的 也是一个地址
$p = new Person();
$p->age = '30';
function test($p){
	$p->age = '330';
}
test($p);
echo  $p->age;
