<?php 
$id=$_GET['id'];
include "./../../confng/confng.php";
$sql="SELECT * FROM message WHERE id='$id'";
$res = mysql_query($sql);
$a = mysql_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>修改留言</title>
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
	    <a href="./../php/index.php" class="btn navbar-btn">留言板</a>
		<a href="add.html" class="btn navbar-btn disabled active">发布留言</a>
	</div>
</nav>
<div class="container">
	<div class="col-lg-4 col-md-4 col-xl-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading"><i class=""></i>排行</div>
			<div class="panel panel-body">
				<ul class="zx-list">
					<li><a href="javascript:;"><?php echo $a['title'];?></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-xl-8">
		<form id="subform" action="center.php" method="post">
			<input type="hidden" name="id" value="<?php echo $a['id'];?>">
			<div class="panel panel-primary">
				<div class="panel panel-heading"><i class="glyphicon glyphicon-pencil"></i>&nbsp修改的留言主题</div>
				<div class="panel panel-body">
					<input type="text" name="bt-text" value="<?php echo $a["title"]; ?>" class="form-control">
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel panel-heading"><i class="glyphicon glyphicon-pencil"></i>&nbsp修改的留言内容</div>
				<div class="panel panel-body">
					<textarea name="nr-text" class="form-control nr-text col-lg-8 col-md-8 col-xl-8"><?php echo $a["content"]; ?></textarea>
				</div>
			</div>
			<div class="pull-right">
				<input type="submit" class="btn btn-primary" name="btn" value="修改留言">
			</div>
		</form>
	</div>
</div>
</body>
<script src="./../components/jquery/dist/jquery.min.js"></script>
<script src="./../components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>




