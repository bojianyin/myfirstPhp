<?php
	//unset($str);
	if (empty($str)) {
		echo "yes";
	} else {
		echo "no";
	}
	
	// isset() 变量是否存在
	// unset() 删除变量
	// empty() 变量是否为空
	// var_dump() 查看数据类型及值

	/*
		*四种标量类型
		 	* int 整型
		 	* float 浮点型
		 	* boolean 布尔型
		 	* string  字符串
		*俩种复合类型
			* array	数组
			* object 对象
		*俩种特殊类型 
 		 	* 资源 
			* null
	*/
	/*
		三种伪类型
			mixed/number/callback

			mixed:任何类型
			number:整型和浮点型
			callback:function(){} //回调
	*/