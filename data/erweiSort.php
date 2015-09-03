<?php
/**
 *    $array   要排序的数组
 *    $subkey  要排序的字段名称
 *    $sort_ascending  是正序还是逆序 
 */

function sksort(&$array, $subkey="id", $sort_ascending=false) {
    //判断是否是一个数组
    if (count($array))
        $temp_array[key($array)] = array_shift($array);//
    foreach($array as $key => $val){
        $offset = 0;
        $found = false;
        foreach($temp_array as $tmp_key => $tmp_val)
        {
            if(!$found and strtolower($val[$subkey]) > strtolower($tmp_val[$subkey]))
            {
                $temp_array = array_merge(    (array)array_slice($temp_array,0,$offset),
                                            array($key => $val),
                                            array_slice($temp_array,$offset)
                                          );
                $found = true;
            }
            $offset++;
        }
        if(!$found) $temp_array = array_merge($temp_array, array($key => $val));
    }

    if ($sort_ascending) $array = array_reverse($temp_array);

    else $array = $temp_array;
}
$data = array(
    array(
        'age'=>'23'
    ),
    array(
        'age'=>'25'
    ),
    array(
        'age'=>'24'
    ),
);