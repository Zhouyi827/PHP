<?php
//header("content-type:text/html;charset=utf-8");

//显示学生的信息
//$con=mysql_connect('www.zy.com','root','123456');

/*if(!$con){
	echo '失败了';
	exit;
}*/
mysql_select_db('st');
$stu_list="SELECT * FROM student";
$sql=mysql_query($stu_list);
//mysql_fetch_assoc($sql)  把从数据库查询到的数据一条条取出来,赋给$row
//$row表示一条条的数据
echo "<table border='1px' width='400px'>";
echo "<tr><th>学生编号</th><th>学生名字</th><th>数学成绩</th><th>英语成绩</th><th>语文成绩</th></tr>";
while($row=mysql_fetch_assoc($sql)){
echo "<tr><td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['math']}</td><td>{$row['english']}</td><td>{$row['chinese']}</td></tr>";
}








