<?php
	include("db.php");
	class getVal{
		function PDO_GET($key){
			$val=$_GET[$key];
			return $val;
		}
		function PDO_POST($key){
			$val=$_POST[$key];
			return $val;
		}
	}
	$inp=new getVal();
	$usen=$inp->PDO_POST('use');
	$cont=$inp->PDO_POST('save');
	$time=time();
	if(preg_replace('# #','',$usen)==""){
		echo "用户姓名不能为空";
		exit;
	}
	if(preg_replace('# #','',$cont)==""){
		echo "留言内容不能为空";
		exit;
	}
	$sql="INSERT INTO save(`username`,`content`,`intime`) VALUES('{$usen}','{$cont}','{$time}')";
	$is=$link->query($sql);
	if($is){
		echo "插入成功";
		echo "<script>location.href='liuyan.php'</script>";
	}else{
		echo "插入失败";
	}
