<?php
/* Smarty version 3.1.30, created on 2017-04-13 10:18:04
  from "/var/www/html/Plantform/application/views/course/addExperiment.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eedfdc5289c6_86739158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf19952de2a3faa3b4e917dee5f1ddda36807874' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/addExperiment.php',
      1 => 1492049798,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eedfdc5289c6_86739158 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_78031278858eedfdc526cf0_93379636', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94719605958eedfdc528599_87212440', 'body');
}
/* {block 'head'} */
class Block_78031278858eedfdc526cf0_93379636 extends Smarty_Internal_Block
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
class Block_94719605958eedfdc528599_87212440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
		<div class="container">
		<div class="row"></div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">添加实验</div>
					<div class="panel-body">
						<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

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
							<input type="text" style="display:none;" name="course_id" value="<?php echo $_smarty_tpl->tpl_vars['course_id']->value;?>
">
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
