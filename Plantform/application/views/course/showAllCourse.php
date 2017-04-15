<{block name=head}>
<style type="text/css" media="screen">
	*{
		margin: 0;
		padding: 0;
	}
	div{
		/*border: 1px solid #ccc;*/
	}
	.block{
		
		height: 250px;
		padding: 2%;
		text-align:center;
		background-color: #fff;
		z-index: 100;
	}
	.inner{
		width:100%;
		height:100%; 
		border: 1px solid #ddd;
		
		
	}
	.inner:hover{
		box-shadow: 0px 0px 10px #ccc;
	}
	.image{
		position: relative;
		border-bottom: 1px solid #ddd; 
		height: 55%;
		width: 100%;
		margin:0 auto;
	}
	img{
		height: 100%;
		width: 100%;
	}

	.name{
		margin:0 auto;
		text-align:center;
		position: relative;
		top:10px;	
		text-shadow: 0px 0px 2px #ccc;
		font-weight: bold;
		font-size: 20px;
	}
	.introduction{
		margin:0 auto;
		text-align:center;
		position: relative;
		top:12px;	
		overflow-y:hidden; 
		/*display: none;*/
		height:45%;
		width: 90%;
	}
	.text{
		/*background-color: #fff;*/
		height: 60%;
		z-index: 0;
	}
	
	.teacher{
		margin:0 auto;
		text-align:center;
		position: absolute;
		bottom:15px;
		right:20px;
		
		display: none;
	}
	/*.cover{
		position: absolute;
		bottom: 6%;
		width: 95.8%;
		height:24%;
		background-color: #fff;
		z-index: 1000;
		/*display: none;*/
	}*/
</style>
<{/block}>
<{block name=body}>
	<div class="container">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-body">
						<{foreach from=$course_info item=value}>
							<div class="col-md-4 block" onclick="location.href='<{$base_url}>index.php/course/<{$value['course_id']}>'">
								<div class="inner">
									<div class="image">
										<img src="<{$value['img_path']}>" alt="" width="100%" height="100%">
									</div>
									<div class="text">
										<div class="name">
											<{$value['course_name']}>
										</div>
										<div class="introduction">
											<{$value['course_introduction']}>
										</div>
									</div>
									<div class="teacher">
										教师：<{$value['teacher_name']}>
									</div>
									<div class="cover">
									</div>
								</div>	
							</div>
						<{/foreach}>	
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	
<{/block}>