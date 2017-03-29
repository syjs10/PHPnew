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
	}
	.inner{
		width:100%;
		height:100%; 
		border: 1px solid #ddd;
		box-shadow: 0px 0px 5px #ccc;
		
	}
	.inner:hover{
		box-shadow: 0px 0px 10px #ccc;
	}
	.image{
		position: relative;
		box-shadow: 0px 0px 10px #ccc;
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
		overflow-y:auto; 
		/*display: none;*/
		height:15%;
		width: 90%;
	}

	.teacher{
		margin:0 auto;
		text-align:center;
		position: absolute;
		bottom:15px;
		right:20px;
	}
</style>
<{/block}>
<{block name=body}>
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<{foreach from=$course_info item=value}>
							<div class="col-md-4 block">
								<div class="inner">
									<div class="image">
										<img src="<{$value['img_path']}>" alt="" width="100%" height="100%">
									</div>
									<div class="name">
										<{$value['course_name']}>
									</div>
									<div class="introduction" style=" ">
										<{$value['course_introduction']}>
									</div>
									<div class="teacher">
										教师：<{$value['teacher_name']}>
									</div>
									
								</div>	
							</div>
						<{/foreach}>	
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
<{/block}>