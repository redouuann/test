<?php
	$count = $_COOKIE['count'] ?? 0;
	
	if(isset($count)){
    		$count++;
	}else{
    		$count=0;
	}

	setcookie('count',$count);
	echo $count;
?>
