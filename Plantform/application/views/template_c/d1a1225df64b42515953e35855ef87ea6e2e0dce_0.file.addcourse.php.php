<?php
/* Smarty version 3.1.30, created on 2017-04-12 16:49:23
  from "/var/www/html/Plantform/application/views/course/addcourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58edea13f08033_69512226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1a1225df64b42515953e35855ef87ea6e2e0dce' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/addcourse.php',
      1 => 1490627465,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58edea13f08033_69512226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1099629158edea13f02739_37565218', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157366277158edea13f070d7_15114200', 'body');
}
/* {block 'head'} */
class Block_1099629158edea13f02739_37565218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<style type="text/css" media="screen">
		.container{
			position: absolute;
			top:10%;

		}
	</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_157366277158edea13f070d7_15114200 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
		<div class="container">
		<div class="row"></div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">添加课程</div>
					<div class="panel-body">
						<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

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
<?php
}
}
/* {/block 'body'} */
}
