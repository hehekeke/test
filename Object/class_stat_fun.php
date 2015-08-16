<?php

//在编程过程中
// 静态方法的作用 
//    1.操作静态变量
//    2.不能操作非静态变量
//    
//  普通的成员方法  即可以操作 静态变量 
//                   也可以操作非静态变量
class Student{
	public static $fee = 0;
	public static function entrySchool($ifee){
		self::$fee+=$ifee;
	}
}
$stu1 = new Student();
$stu1::entrySchool(2000);

$stu2 = new Student();
$stu2::entrySchool(2000);

echo Student::$fee;
