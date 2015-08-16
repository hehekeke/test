<?php
define("BASEDIR",__DIR__);
include BASEDIR.'/Common/Loader.php';
spl_autoload_register("\\Common\\Loader::autoLoad");
// Common\Object::test();
// App\Controller\Home\Index::test();



// $stack = new SplStack();
// $stack->push("data1");
// $stack->push("data2");
// $stack->push("data3");
// $stack->push("data4");

// echo $stack->pop();
// echo $stack->pop();
// echo $stack->pop();
// echo $stack->pop();

// $queue = new SplQueue();
// $queue->enqueue("data1\n");
// $queue->enqueue("data2\n");
// $queue->enqueue("data3\n");
// $queue->enqueue("data4\n");

// echo $queue->dequeue();
// echo $queue->dequeue();
// echo $queue->dequeue();
// echo $queue->dequeue();


// $heap = new SplMinHeap();
// $heap->insert("data1\n");
// $heap->insert("data2\n");
// $heap->insert("data3");
// echo $heap->extract();
// echo $heap->extract();
// echo $heap->extract();


// $array = new SplFixedArray(10);
// $array[0] = 123;
// $array[9] = 1234;
// var_dump($array);



// $db = new Common\Database();
// $db->where("id=1")->where("name=2")->order("id desc")->limit();


// $object = new Common\Object();
// $object->title = 'hello';
// echo $object->title;
// echo $object->test("hello",123);
// echo  Common\Object::test("hello",1234);
// echo $object("test1");

// $db = Common\Factory::createDataBase();
// $db = Common\Database::getInstance();



// $db = Common\Register::get("db1");

// $db = new Common\Database\Mysql();
$db = new Common\Database\MySQLi();
$db->connect("127.0.0.1",'root',"","test");

$res = $db->query("select * from customer");
$db->close();