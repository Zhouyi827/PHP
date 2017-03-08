<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理员登陆</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./../components/bootstrap/dist/css/bootstrap.min.css">
<style>
body{
	background: #ddd;
}
.view-style{
	margin-top: 10px;
}
</style>
</head>
<body>
<div class="container view-style">
	<div class="panel panel-primary">
		<div class="panel-heading">管理员面板</div>
		<div class="panel-body">
			<form action="./logoin.php" method="post" accept-charset="utf-8">
				<p class="input-group">
					<span class="input-group-addon" >账号: </span>
					<input type="text" class="form-control" name="username" placeholder="username">
				</p>
				<p class="input-group">
					<span class="input-group-addon">密码: </span>
					<input type="password" class="form-control" name="password" placeholder="password">
				</p>
				<p class="pull-right"><input type="submit" name="btn" value="登陆" class="btn btn-primary"></p>
			</form>
		</div>
	</div>
</div>
</body>
<script src="./../components/jquery/dist/jquery.min.js"></script>
<script src="./../components/bootstrap/dist/js/bootstrap.min.js"></script>
</html>