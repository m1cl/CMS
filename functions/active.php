<?php 
include('config/setup.php');

	$active = function() use ($pageid){
		switch ($pageid){
			case 1: $classname = 'active';break;
			case 2: $classname = 'active';break;
			case 3: $classname = 'active';break;
			case 4: $classname = 'active';break;
			return  $classname;
		}
	}
?>
