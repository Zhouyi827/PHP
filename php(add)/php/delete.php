<?php
header("content-type:text/html;charset=utf-8");

//显示学生的信息
$con=mysql_connect('www.zy.com','root','123456');

if(!$con){
	echo '失败了';
	exit;
}
mysql_select_db('st');
$name='1234567';
$stu_del="DELETE FROM student WHERE id='{$name}'";
$sql=mysql_query($stu_del);
//mysql_fetch_assoc($sql)  把从数据库查询到的数据一条条取出来,赋给$row
//$row表示一条条的数据
if($sql==true){
	echo '删除成功';
}else{
	echo '删除失败';
}








