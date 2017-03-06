<?php
header("content-type:text/html;charset=utf-8");
//处理添加请求
//1,接收用户提交的学生信息
/*echo '<pre>';
print_r($_POST);*/


$stu_id=$_POST["stu_id"];
$stu_name=$_POST["stu_name"];
$stu_math=$_POST["stu_math"];
$stu_en=$_POST["stu_en"];
$stu_chinese=$_POST["stu_chinese"];

//2,连接数据库
//mysql_connect('localhost','root','123456');
//这个函数用于连接数据库
//localhost 本地连接
//root : 用户名
//123456 : 密码
$con=@mysql_connect('www.zy.com','root','123456');
/*echo '<pre>';
var_dump($con);*/
if(!$con){
	echo '连接失败了~';
	exit;
}

//3,选择数据库 SQL语句
mysql_select_db('st');
$sql="INSERT INTO student VALUES($stu_id,'$stu_name','$stu_math','$stu_en','$stu_chinese')";

//4,拿到结果
$query=mysql_query($sql);
if($query == true){
	require 'show.php';
}else{
	echo '失败';
}



