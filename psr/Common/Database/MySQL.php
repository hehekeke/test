<?php

namespace Common\Database;
use Common\IDatabase;
class MySQL implements IDatabase{
	protected $conn;
	  function connect($host,$username,$password,$dbame){
	  	$conn =	mysql_connect($host,$username,$password);
	  	mysql_select_db($dbame,$conn);
	  	$this->conn = $conn;
	  }

	  function query($sql){
	  	$res = mysql_query($sql,$this->conn);
  		return $res;
	  }
	  function close(){
	  	mysql_close($this->conn);
	  }

} 