<?php 
	function p($var) {
		if (is_bool($var)) {
			var_dump($var);
		} elseif (is_null($var)) {
			var_dump(NULL);
		} else {
			echo "<pre style='position: relative;z-index: 1000;padding: 10px;border-radius: 5px;background: #f5f5f5;border:1px solid #aaa;font-size: 14px;line-height: 18px;opacity: 0.9;'>".print_r($var, true)."</pre>";
		}
		
	}