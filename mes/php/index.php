<?php
header("Content-type:text/html;charset=utf-8");
ini_set('date.timezone','PRC');
$page= isset($_GET['page']) ? $_GET['page'] : 1;
//每次获取页数
$pagesize = 2;
//获取当前页 计算偏移量
$offset = ($page-1)*$pagesize;
// 获取数据
// 链接数据库
$con =  mysql_connect('www.zy.com','root','123456');
//选择数据库
mysql_query("use mes");
$s = "select * from message";
$num = mysql_query($s);
$total = mysql_num_rows($num);
$pagemax = ceil($total/$pagesize);
mysql_query("set names utf8");
$sql = "select * from message order by id desc limit $offset,$pagesize";
$res = mysql_query($sql);
//编码
mysql_query("SET NAMES utf8");
//获取数据SQL语句
$sql = "SELECT * FROM message ORDER BY id DESC limit $offset,$pagesize";
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
<title>留言板</title>
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
</style>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
	    <a href="show.html" class="btn navbar-btn disabled active">留言板</a>
		<a href="insert.php" class="btn navbar-btn">发布留言</a>
		<a href="javascript:;" class="btn navbar-btn">管理留言</a>
	</div>
</nav>
<div class="container">
	<div class="col-lg-4 col-md-4 col-xl-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading">最新留言</div>
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
		<?php foreach($rows as $k=>$v):?>
			<div>
				<div class="panel panel-primary">
					<div class="panel panel-heading"><i class="glyphicon glyphicon-star"></i><h3><?php echo $v['title']; ?></h3></div>
					<div class="panel panel-body">
						<p class="nr-p"><?php echo $v["content"]; ?></p>
					</div>
					<div class="panel panel-footer">
						<p><i class="glyphicon glyphicon-time"></i>&nbsp<span class="sj-span"><?php echo date($v["addtime"]); ?></span></p>
					</div>
				</div>
			</div>
		<?php endforeach;?>
		<div class="pull-right">
			<div class="pull-right">
				<a href="index.php?page=1" class="btn btn-primary">＜&nbsp首页</a>
				<a href="index.php?page=<?php echo $page<=1?$page:$page-1;?>" class="btn btn-primary">上一页</a>
				<a href="index.php?page=<?php echo $page>=$pagemax?$pagemax:$page+1;?>" class="btn btn-primary">下一页</a>
				<a href="index.php?page=<?php echo $pagemax;?>" class="btn btn-primary">末页&nbsp＞</a>
			</div>
		</div>
	</div>
</div>
</body>
<script src="./../components/jquery/dist/jquery.min.js"></script>
<script src="./../components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>



