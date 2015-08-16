<?php

namespace Common\Database;
use Common\IDatabase;
class MySQLi implements IDatabase{
	protected $conn;
	  function connect($host,$username,$password,$dbame){
	  	$conn =	mysqli_connect($host,$username,$password,$dbame);
	  	$this->conn = $conn;
	  }

	  function query($sql){

	  	$res = mysqli_query($this->conn,$sql);
	  	$count = mysqli_num_rows($res);
	  	$result_array = mysqli_fetch_array($res);
	  	var_dump($result_array);
  		
	  }
	  function close(){
	  	mysqli_close($this->conn);
	  }
} 