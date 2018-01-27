<?php
$output = shell_exec("python3 test.py 150402305 21103X 2");
// var_dump($output);
// var_dump();
echo implode("|", json_decode($output, true));
