<?php
header("content-type:text/html;charset=utf-8");
$username = $_POST["username"];
$password = $_POST["password"];
//验证
if($username == ''||$password == ''){
	echo "<script>window.localhost.href='logoin.php'</script>alert('用户名或密码不能为空!');";
	exit;
}
//验证是否正确
//链接数据库
$con = mysql_connect("www.zy.com","root","123456");
mysql_query("USE mes");
mysql_query("SET NAMES utf8");
//通过用户名获取信息
$sql = "select * from admin where user_name='{$username}' and pass_word='{$password}'";
$sel = mysql_query($sql);
$s = mysql_fetch_assoc($sel);
if(!$s){
	echo "<script>alert('用户名或密码输入有误,请重新输入!!!');
	window.location.href='showlogoin.php';</script>";
	exit;
}
echo "<script>window.location.href='./../php/index.php';</script>";

?>

