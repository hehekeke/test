<?php
	
	//写一个函数，算出两个文件的相对路径,如:
	// $a = ‘/a/b/c/d/e.php’;
	// $b =’/a/b/12/34/c.php’;
$a = '/a/b/c/d/e.php';
$b ='/a/b/12/34/c.php';

$path1 = explode("/",dirname($a));
$path2 = explode("/",dirname($b));
$aLen = count($path1);
$bLen = count($path2);
$maxLen = max($aLen,$bLen);
$path = "";
for ($i=0; $i < $maxLen; $i++) { 
	if($path1[$i] != $path2[$i] && isset($path1[$i])){
		if(isset($path2[$i])){
			$bUrl[] = $path2[$i];
			$path.='../';
		}else{
			$bUrl[] = $path2[$i];
		}
	}
}

echo $path.implode("/",$bUrl)."/".basename($b);
