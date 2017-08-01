<?php 
	function p($var) {
		if (is_bool($var)) {
			var_dump($var);
		} elseif (is_null($var)) {
			var_dump(NULL);
		} else {
			echo "<pre>".print_r($var, true)."</pre>";
		}
		
	}