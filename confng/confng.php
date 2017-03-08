<?php
header("content-type:text/html;charset=utf-8");//头部
ini_set("date.timezone","PRC");
mysql_connect("www.zy.com","root","123456");
mysql_select_db("mes");//选择数据库
mysql_query("set names utf8");//设置编码

?>