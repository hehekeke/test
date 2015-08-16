<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>无标题</title>
</head>
<body>

</body>
</html>
<?php
$page = isset($_GET['p'])?$_GET['p']:1;
$host='localhost';
$username = "root";
$passwd = "";
$dbname = "msup_oready";
$showPage = 5;
$conn = new \PDO("mysql::host=$host;dbname=$dbname",$username,$passwd);
$statpoisiton = ($page-1)*10;
$sql = "select title from olidc_training limit " .$statpoisiton. " , 10";
$res = $conn->query($sql);
$total_sql = "select count(*) from olidc_training" ;
$count_data = $conn->query($total_sql);
while($row = $count_data->fetch()){
	$count = $row['count(*)'];
}
$total_pages = ceil($count/10);
$i = 1;
while($row = $res->fetch()){
	echo   $i."--------------".$row['title']."<br/>";
	$i++;
}
unset($conn);

$page_banner = "";
if($page>1){
	$page_banner .= "<a href='".$_SERVER['PHP_SELF']."?p=1'>首页</a>";
	$page_banner .= "<a href='".$_SERVER['PHP_SELF']."?p=".($page-1)."'>上一页</a>";
}
$pageOffset = ($showPage-1)/2;
$start = 1;
$end = $total_pages;
if($total_pages>$showPage){
	if($page>$pageOffset+1){
		$page_banner .="...";
	}
	if($page>$pageOffset){
		$start = $page-$pageOffset;
		$end = $total_pages>$page+$pageOffset?$page+$pageOffset:$total_pages;
	}else{
		$start = 1;
		$end = $total_pages>$showPage?$showPage:$total_pages;
	}
	if($page+$pageOffset>$total_pages){
		$start = $start - ($page+$pageOffset-$end);
	}
}
for ($i=$start; $i <=$end ; $i++) { 
	$page_banner .= "<a href='".$_SERVER['PHP_SELF']."?p=".$i."'>".$i."</a>";
}
//尾部。。。
if($total_pages>$showPage && $total_pages>$page+$pageOffset){
	$page_banner .= "...";
}
if($page<$total_pages){
	$page_banner .= "<a href='".$_SERVER['PHP_SELF']."?p=".($page+1)."'>下一页</a>";
	$page_banner .= "<a href='".$_SERVER['PHP_SELF']."?p={$total_pages}'>尾页</a>";
}

$page_banner .="共${total_pages}页";
$page_banner .="<form action='".$_SERVER['PHP_SELF']."' method=get>";
$page_banner .="到第<input type=text size =2 name='p'>页";
$page_banner .="<input type=submit value='确定'>";
$page_banner .="</form>";
echo $page_banner;