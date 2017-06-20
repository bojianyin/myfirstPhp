<?php
	class getVal{
		function PDO_GET($key){
			if(!isset($_GET[$key])){
				return false;
			}
			$val=$_GET[$key];
			return $val;
		}
		function PDO_POST($key){
			if(!isset($_POST[$key])){
				return false;
			}
			$val=$_POST[$key];
			return $val;
		}
	}

