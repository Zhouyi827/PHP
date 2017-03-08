<?php 
include "../../confng/confng.php";
// $id=$_GET['id'];
$id=$_POST['id'];
$btvalue=$_POST['bt-text'];
$nrvalue=$_POST['nr-text'];
$addtime=date("Y-m-d H:i:s");
$str = "update message set title='{$btvalue}',content='{$nrvalue}',addtime='{$addtime}' where id='{$id}'";
$sql = mysql_query($str);
//var_dump($sql);
//exit;
if(!$sql){
echo "<script>alert('修改失败');window.location.href='settings.php?id='+$id;</script>";
exit;
}
echo "<script>alert('修改成功');window.location.href='index.php';</script>";
?>
update message set title='adsf',content='asdf',addtime='2017-03-08 12:20:30' where id='14';