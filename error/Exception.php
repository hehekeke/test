<?php

function my_exception($e){
	echo "I'm is top exception-----".$e->getMessage();
}
set_exception_handler("my_exception");

function addUser($name){
	if($name == "wyq"){
	}else{
		throw new Exception("add false");
	}
}

function UpdateUser($name){
	if($name == "wyq"){

	}else{
		throw new Exception("update false");
	}
}
function A() {
	try {
		addUser("wyq");
		UpdateUser("sss");
	} catch (Exception $e) {
		// echo $e->getLine();
		throw $e;
		// echo $e->getMessage();
	}
}
function b(){
	try {
		$i = 8/0;
	} catch (Exception $e) {
		echo $e->getMessage();
	}

}

// A();
b();
