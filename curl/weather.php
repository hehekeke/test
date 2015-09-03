<?php
header("Content-Type:text/html; charset=utf-8");  
$data = 'theCityName=合肥';  
$curl = curl_init();//初始化  
curl_setopt($curl,CURLOPT_URL,"http://www.webxml.com.cn/WebServices/WeatherWebService.asmx/getWeatherbyCityName");  
curl_setopt($curl, CURLOPT_USERAGENT, "user-agent:Mozilla/5.0 (Windows NT 5.1; rv:24.0) Gecko/20100101 Firefox/24.0"); //判断浏览器  
curl_setopt($curl,CURLOPT_HEADER,0); //启用时会将头文件的信息作为数据流输出。这里不启用  
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true); //如果成功只将结果返回，不自动输出任何内容。如果失败返回FALSE  
curl_setopt($curl,CURLOPT_POST,1); //如果你想PHP去做一个正规的HTTP POST，设置这个选项为一个非零值。这个POST是普通的 application/x-www-from-urlencoded 类型，多数被HTML表单使用。  
curl_setopt($curl,CURLOPT_POSTFIELDS,$data);//需要POST的数据  
curl_setopt($curl,CURLOPT_HTTPHEADER,array("
	application/x-www-form-urlencoded;charset=utf-8",
	"Content-Length:".strlen($data)
	)
);  
$rtn = curl_exec($curl); //执行  
if(!curl_errno($curl)){  
	$info = curl_getinfo($curlobj);  
	print_r($info);  
	echo $rtn;  
} else {  
	echo 'Curl error:'.curl_error($curl);  
}  
curl_close($curl);  