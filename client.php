<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script>
		function test(){
			var ws = new WebSocket("ws://localhost:5000");
			ws.onopen = function(){
			    console.log("握手成功");
			};
			ws.onerror = function(){
			    console.log("error");
			};
		}
	</script>
</head>
<body>
	<button onclick="test();">test</button>
</body>
</html>
