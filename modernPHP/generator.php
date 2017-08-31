<?php 

	// function myGen() {
	// 	yield 'value1';
	// 	yield 'value2';
	// 	yield 'value3';
	// }
	// foreach (myGen() as $yieldedValue) {
	// 	echo $yieldedValue, PHP_EOL;
	// }
	// 生成范围内数值(错误)
	// 
	// function makeRange($length) {
	// 	$dataset = [];
	// 	for($i = 0; $i < $length; $i++) {
	// 		$dataset[] = $i;
	// 	}
	// 	return $dataset;
	// }
	// $customRange = makeRange(10);
	// foreach ($customRange as $i) {
	// 	echo $i, PHP_EOL;
	// }
	function makeRange($length) {
		for($i = 0; $i < $length; $i++) {
			yield $i;
		}
	}
	foreach (makeRange(1000) as $i) {
		echo $i, PHP_EOL;
	}