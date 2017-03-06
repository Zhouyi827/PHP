<?php
header("content-type:text/html;charset=utf-8");
if($_POST["btn"])
{
	$name=$_POST["name"];
	$pass=$_POST["pass"];
	echo "你输入的名字是: $name , 密码是: $pass";
}
















