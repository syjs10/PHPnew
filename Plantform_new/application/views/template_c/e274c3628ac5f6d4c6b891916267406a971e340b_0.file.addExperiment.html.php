<?php
/* Smarty version 3.1.30, created on 2018-03-06 19:03:47
  from "/var/www/html/Plantform_new/application/views/course/addExperiment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e7593afa0a9_34304023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e274c3628ac5f6d4c6b891916267406a971e340b' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/course/addExperiment.html',
      1 => 1509671417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a9e7593afa0a9_34304023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13968889235a9e7593af81c0_84817618', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_13968889235a9e7593af81c0_84817618 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


		<div class="container">
		<div class="row"></div>
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-8 col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading" >添加实验</div>
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
			<div class="col-md-1"></div>
		</div>
		<div class="row"></div>
	</div>

	</form>
<?php
}
}
/* {/block 'body'} */
}
