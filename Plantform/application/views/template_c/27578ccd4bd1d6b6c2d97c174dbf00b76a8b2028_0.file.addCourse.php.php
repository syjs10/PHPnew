<?php
/* Smarty version 3.1.30, created on 2017-07-19 10:03:03
  from "/var/www/html/Plantform/application/views/course/addCourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596ebdd7c37061_19144999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27578ccd4bd1d6b6c2d97c174dbf00b76a8b2028' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/addCourse.php',
      1 => 1500429776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596ebdd7c37061_19144999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_293828704596ebdd7c35bc2_60784501', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1414794616596ebdd7c36d16_30095433', 'body');
}
/* {block 'head'} */
class Block_293828704596ebdd7c35bc2_60784501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<style type="text/css" media="screen">
		.container{
			margin: 10% auto;
		}
	</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_1414794616596ebdd7c36d16_30095433 extends Smarty_Internal_Block
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
								<!-- <span class="help-block">test</span> -->
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label" for="course_introduction" >课程简介</label>
								<div class="col-md-6">
									<textarea class="form-control" name="course_introduction" rows="4"></textarea>
								</div>
								<!-- <span class="help-block">test</span> -->
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
