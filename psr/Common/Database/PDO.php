<?php

namespace Common\Database;
use Common\IDatabase;
class PDO implements IDatabase{
	  protected $conn;
	  function connect($host,$username,$password,$dbame){
	  	$conn = new \PDO("mysql::host=$host;dbname=$dbname",$username,$password,)
	  	$this->conn = $conn;
	  }

	  function query($sql){
	  	return $this->conn->query($sql);
			
	  }
	  function close(){
	  	unset($this->conn);
	  }

} 