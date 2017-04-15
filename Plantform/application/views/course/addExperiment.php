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
					<div class="panel-heading">添加实验</div>
					<div class="panel-body">
						<{$form}>
							<div class="form-group form-group-sm">
								<label class="col-md-2 control-label" for="exp_name" >实验名称</label>
								<div class="col-md-6">
									<input type="text" class="form-control" name="exp_name">
								</div>
								<span class="help-block">test</span>
							</div>
							<div class="form-group form-group-sm">
								<label class="col-md-2 control-label" for="myfile" >实验文档</label>
								<div class="col-md-6">
									<input type="file" class=""  name="myfile">
								</div>
							</div>
							<input type="text" style="display:none;" name="course_id" value="<{$course_id}>">
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