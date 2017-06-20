<?php
	session_start();
	include("db.php");
	include("inp.class.php");
	$inp=new getVal();
	$doing=$inp->PDO_GET('do');
	unset($_SESSION['usename']);
	if($doing!==false){
		$use=$inp->PDO_POST('use');
		$pwd=$inp->PDO_POST('pwd');
		//var_dump($use,$pwd);
		if($use and $pwd){
			$sql="SELECT * from log WHERE `use`='{$use}' and `pwd`='{$pwd}'";
			$ary=$link->query($sql);
			if($row=$ary->fetch_array()){
				$_SESSION['usename']=$row['use'];
				header("Location:liuyan.php");
			}else{
				echo "no";
			}
			
		}else{
			echo "不能为空";
		}
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="login.php?do=login" method="post">
		<input type="text" name="use">
		<input type="text" name="pwd">
		<input type="submit" >
	</form>
</body>
</html>