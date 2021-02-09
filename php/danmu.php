<?php 
	$value = $_POST['val'];
	$uid = $_POST['uid'];
	// 判断是否获取到数据

	// 储存
	file_put_contents("../chatlib/".$uid."",$value,FILE_APPEND,null);
?>
	