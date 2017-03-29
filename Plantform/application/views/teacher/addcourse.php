<{block name=head}>
	<style type="text/css" media="screen">
		.container{
			position: absolute;
			top:10%;

		}
	</style>
<{/block}>

<{block name=body}>
	
		<div class="container">
		<div class="row"></div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">添加课程</div>
					<div class="panel-body">
						<{$form}>
							<div class="form-group form-group-sm">
								<label class="col-md-2 control-label" for="course_name" >课程名称</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="course_name">
								</div>
								<span class="help-block">test</span>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label" for="course_introduction" >课程简介</label>
								<div class="col-md-6">
									<textarea class="form-control" name="course_introduction" rows="4"></textarea>
								</div>
								<span class="help-block">test</span>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-md-2 control-label" for="myfile" >课程封面</label>
								<div class="col-md-6">
									<input type="file" class=""  name="myfile">
								</div>
							</div>
							<div class="form-group form-group-sm">
								<div class="col-md-2"></div>
								<div class="col-md-6">
									<input type="submit" class="btn btn-default" value="提交">
								</div>
							</div>
						</form>						
					</div>
				</div>	
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row"></div>
	</div>

	</form>
<{/block}>