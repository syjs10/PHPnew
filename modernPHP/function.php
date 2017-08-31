<?php 
	$test = function() {
		$a = 1;
		return function() use (&$a){
			return $a += 1;
		}; 
	};
	$res = $test();
	echo $res();	
	echo $res();	
	echo $res();	
	echo $res();	