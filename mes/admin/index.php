<?php
header("content-type:text/html;charset=utf-8");
$con = mysql_connect("www.zy.com","root","123456");//连接数据库
mysql_query("use mes");//选择数据库
mysql_query("set names utf8");//设置编码
$sql = "select * from message";//准备语句
$res = mysql_query($sql);//发送 (成功返回资源,否则返回false,如果是insert,update,的特了是true和false);
$arr = array();
while($row=mysql_fetch_assoc($res)){
	$arr[] = $row;
}//获取到资源转换成数据



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>管理留言</title>
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
	    <a href="javascript:;" class="btn navbar-btn active">管理</a>
	    <a href="./../php/index.php" class="btn navbar-btn">留言板</a>
		<a href="./../php/insert.php" class="btn navbar-btn">发布留言</a>
	</div>
</nav>
<div class="container">
	<div class="col-lg-4 col-md-4 col-xl-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading">最新留言</div>
			<div class="panel panel-body">留言管理</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-xl-8">
		<div class="panel panel-primary">
			<div class="panel panel-heading">留言管理</div>
			<div class="panel panel-default">
			    <table class="table">
				    <tr>
				    	<th>序号</th>
				    	<th>标题</th>
				    	<th>留言时间</th>
				    	<th>操作</th>
				    </tr>
				    <?php foreach ($arr as $key => $value): ?>
				    <tr>
				    	<td><?php echo $value["id"];?></td>
				    	<td><?php echo $value["title"];?></td>
				    	<td><?php echo $value["addtime"]?></td>
				    	<td>
				    		<a href="settings.php?id=<?php echo $value['id'];?>">修改</a>
							<a href="delete.php?id=<?php echo $value['id'];?>" onclick="return confirm('确定要删除?');">删除</a>
				    	</td>
				    </tr>
				<?php endforeach;?>
			    </table>
			</div>
		</div>
		<div class="panel-footer clearfix">
			<div class="pull-right">
				<button class="btn btn-primary" >＜&nbsp首页</button>
				<button class="btn btn-primary">上一页</button>
				<button class="btn btn-primary">下一页</button>
				<button class="btn btn-primary">末页&nbsp＞</button>
			</div>
		</div>
	</div>
</div>
</body>
<script src="./../components/jquery/dist/jquery.min.js"></script>
<script src="./../components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>



