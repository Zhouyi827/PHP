<?php
header("Content-type:text/html;charset=utf-8");
ini_set('date.timezone','PRC');
// 获取数据
// 链接数据库
$con =  mysql_connect('www.zy.com','root','123456');
//选择数据库
mysql_query("use mes");
//编码
mysql_query("SET NAMES utf8");
//获取数据SQL语句
$sql = "SELECT * FROM mes_info";
//发送SQL语句
$res = mysql_query($sql);
//转换成数据
$rows = array();
while($s = mysql_fetch_assoc($res)){
	$rows[] = $s;
}
/*echo '<pre>';
var_dump($rows);
echo '</pre>';*/
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
					<?php foreach ($rows as $k => $v): ?>
						<li><a href="javascript:;"><?php echo $v['title']?></a></li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-xl-8">
		<form action="add.php" method="post">
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



