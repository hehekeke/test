<?php
function BubbleSort($arr){

	$temp = "";
	for ($i=0; $i < count($arr); $i++) { 
		//这个从第一个数据开始  跟后面的其他数据开始比较
		for ($j=$i+1; $j <count($arr) ; $j++) { 
			//从刚开始的数据开始  跟后面的数据开始
			//如果后面的比前面的小 就开始交换数据
			if($arr[$i]>$arr[$j]){
				$temp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $temp;
			}
		}
	}
	return $arr;
}
$arr = array(9 ,4 ,5, 6, 8 ,3 ,2, 7 ,10, 1);
print_r(BubbleSort($arr));