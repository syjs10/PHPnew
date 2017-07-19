<?php
/* Smarty version 3.1.30, created on 2017-07-15 17:53:43
  from "/var/www/html/Plantform/application/views/course/addCourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5969e627b60cf0_72661020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27578ccd4bd1d6b6c2d97c174dbf00b76a8b2028' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/addCourse.php',
      1 => 1492007125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5969e627b60cf0_72661020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5292615405969e627b5cea3_27292321', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12969170805969e627b602c2_69786647', 'body');
}
/* {block 'head'} */
class Block_5292615405969e627b5cea3_27292321 extends Smarty_Internal_Block
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
class Block_12969170805969e627b602c2_69786647 extends Smarty_Internal_Block
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
