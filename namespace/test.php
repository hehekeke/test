<?php
spl_autoload_register("autoload1");
Test1::test();

Test2::test();

function autoload1($class){
	require __DIR__.'/'.$class.".php";
}