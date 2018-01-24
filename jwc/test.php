<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
<img src="<?php $output = shell_exec("python3 ./test.py");
echo $output;?>" alt="">

</body>
</html>
