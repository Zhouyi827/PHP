<?php
header('Content-type:text/html;charset=utf-8');
date_default_timezone_set("PRC");
$btvalues = $_POST['bt-text'];
$nrvalues = $_POST['nr-text'];
$date = date("Y-m-d H:m:s");
$lybtn = $_POST['ly-btn'];
if($btvalues == ''||$nrvalues == ''){
	echo '内容为空,不能添加';
	exit;
}
//链接数据库
$con = mysql_connect('www.zy.com','root','123456');
if(!$con){
	echo '很糟糕! 获取SQL数据不成功.';
	exit;
}
//3,选择数据库 SQL语句
mysql_select_db('mes');
//添加一条数据
$sql="INSERT INTO mes_info VALUES('1','$btvalues','$nrvalues','$date')";

 //编码
//mysql_query("set names utf8");
//$sql="SELECT * FROM mes_info";

//拿到结果
$query=mysql_query($sql);
if($query == true){
openlog('index.php');
}else{
	echo '失败';
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>添加留言</title>
<link rel="stylesheet" type="text/css" href="./../components/bootstrap/dist/css/bootstrap.css">
<style>
li.ly-list{
margin: 5px;
}
h3{
	display: inline-block;
	margin: 0;
	font-size: 16px;
}
ul{
	list-style: none;
}
.zx-list li{
	margin: 5px 0;
}
.nr-text{
	resize: none;
	height: 200px !important;
}
</style>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
	    <a href="index.php" class="btn navbar-btn">留言板</a>
		<a href="insert.php" class="btn navbar-btn disabled active">发布留言</a>
	</div>
</nav>
<div class="container">
	<div class="col-lg-4 col-md-4 col-xl-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading"><i class=""></i>排行</div>
			<div class="panel panel-body">
				<ul class="zx-list">
					<li><a href="javascript:;">留言1</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-xl-8">
		<form action="insert.php" method="post">
			<div class="panel panel-primary">
				<div class="panel panel-heading"><i class="glyphicon glyphicon-pencil"></i>&nbsp留言主题</div>
				<div class="panel panel-body">
					<input type="text" name="bt-text" class="form-control">
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel panel-heading"><i class="glyphicon glyphicon-pencil"></i>&nbsp留言内容</div>
				<div class="panel panel-body">
					<textarea name="nr-text" class="form-control nr-text col-lg-8 col-md-8 col-xl-8"></textarea>
				</div>
			</div>
			<div class="pull-right">
				<input type="submit" name="ly-btn" value="发布留言" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>
</body>
<script src="./../components/jquery/dist/jquery.min.js"></script>
<script src="./../components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>



