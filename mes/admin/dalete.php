<?php 

$id = $_GET['id'];

include "../../confng/confng.php";

//删除语句
$sql = "delete from message where id='{$id}'";
$res = mysql_query($sql);//发送语句命令
if(!$res){
	echo "<script>alert('删除失败了');
	window.location.href='index.php';</script>";
	exit;
}
echo "<script>window.location.href='index.php';</script>";
?>