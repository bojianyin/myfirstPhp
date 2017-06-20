<?php
	$link=new mysqli("localhost","root","","liuyansave");
	if($link->connect_errno>0){
		echo "链接失败".$link->connect_errno."<br />".$link->connect_error;
		exit;
	}else{
		echo "链接成功";
	}
	
	

