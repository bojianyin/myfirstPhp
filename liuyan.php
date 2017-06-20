<?php
	include("db.php");
	$sql="SELECT * FROM save ORDER BY id DESC";
	$isFnd=($link->query($sql)) or die("没有找到相关数据...");
	$newRow=array();
	while($rows=$isFnd->fetch_array(MYSQLI_ASSOC)){
		$newRow[]=$rows;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		*{padding:0;margin:0;}
		form{
			width:400px;height:200px;position:relative;margin:100px auto;
		}
		textarea{width:100%;height:100%;resize: none;outline: none;text-indent: 1em}
		form > input[type=submit]{
			position:absolute;bottom:10px;right:10px;display: block;
			width:50px;height:30px;color:#fff;font-size:14px;background:blue;border:1px solid #ccc;
		}
		form > input[type=text]{
			margin-bottom: 10px;
		}
		.clearFix:after{
			content:"";display: block;clear:both;display: table;
		}
		.info_list{
			height:auto;padding:20px;border: 1px solid #333;width:300px;
			margin:0 auto;margin-bottom: 20px;
		}
		.user{
			font-size:20px;color:#222;font-weight:bold;float: left	
		}
		.nowTimes{
			font-size:13px;color:#666;float: right;margin-top:5px;
		}
		.content{
			font-size:14px;color:lime;float: left;margin-left:20px;margin:5px;
		}
	</style>
</head>
<body>
	<form action="liuyanCheck.php" method="post">
		<input type="text" name="use" placeholder="请输入你的的姓名..." />
		<textarea name="save" id="" cols="30" rows="10">
			
		</textarea>	
		<input type="submit" value="发布">
	</form>
	<?php
	foreach($newRow as $key=>$item){
	$tim=$item['intime'];
	$tim=date('Y-m-d h:i:s',$tim);
	?>
	<div class="info_list clearFix">
		<div class="user"><?php echo $item['username']?></div>
		<div class="content"><?php echo $item['content']?></div>
		<div class="nowTimes"><?php echo $tim?></div>
	</div>
	<?php
	}
	?>
</body>
</html>