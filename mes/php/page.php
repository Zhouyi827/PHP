<?php
header("Content-type:text/html;charset=utf-8");
$page= isset($_GET['page']) ? $_GET['page'] : 1;
//每次获取页数
$pagesize = 2;
//获取当前页 计算偏移量
$offset = ($page-1)*$pagesize;
$con = mysql_connect("www.zy.com","root","123456");
mysql_query("use mes");
$s = "select * from message";
$num = mysql_query($s);
$total = mysql_num_rows($num);
$pagemax = ceil($total/$pagesize);
mysql_query("set names utf8");
$sql = "select * from message order by id desc limit $offset,$pagesize";
$res = mysql_query($sql);
$arr = array();
while($rows = mysql_fetch_assoc($res)){
	$arr[] = $rows;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<ul>
<?php foreach($arr as $key => $value): ?>
	<li><?php echo $value["title"]; ?></li>
<?php endforeach;?>
</ul>
	<a href="page.php?page=2">首页</a>
	<a href="page.php?page=<?php echo $page<=1? $page : $page-1; ?>">上一页</a>
	<a href="page.php?page=<?php echo $page>=$pagemax ? $pagemax : $page+1; ?>">下一页</a>
	<a href="page.php?page=<?php echo $pagemax;?>">末页</a>	
</body>
</html>
