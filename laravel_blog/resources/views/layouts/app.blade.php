<!DOCTYPE html>
<html>
<head>
	<title>Myweb</title>

	<style type="text/css">
		body{margin: 0;padding: 0;background-color: #DEDEDE;}
		a{text-decoration:none;}
		.header{padding:10px 50px 10px 50px;border-bottom: 1px solid #eeeeee;}
		.header>.logo{display:inline-block;}
		.header>.menu{display:inline-block;margin-left:20px;}
		.content{}
		.left{background-color: white;margin: 25px 300px 25px 25px;padding: 25px;box-shadow: 1px 1px 2px 1px #848484;}
		.right{background-color: white;width: 200px;margin: 25px;padding: 25px;box-shadow: 1px 1px 2px 1px #848484;position: absolute;top: 92px;right: 0;}
		.footer{padding:10px 50px 10px 50px;background-color:gray;}
	</style>
</head>

<body>
	<!-- header -->   
	<div class="header">
		<div class="logo">
			<a href="#"><h2>Myweb</h2></a>
		</div>

		<div class="menu">
			<a href="{{ route('articles.index') }}">Articles</a>
		</div>
	</div> 

	<div class="content">
		<div class="left">
			@yield('content')
		</div>

		<div class="right">

		</div>    
	</div>


	<!-- footer -->
	<div class="footer">
		<p>contact me : 1234567</p>
	</div> 
</body>
</html>