<?php
	include("db.php");
	$del=$_GET['id'];
	$delSql="DELETE FROM save WHERE `id`={$del}";
	$deling=$link->query($delSql);
	if($deling){
		header("Location:liuyan.php");
	}else{
		echo "删除失败";
	}
	
