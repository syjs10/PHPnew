<?php
/* Smarty version 3.1.30, created on 2017-11-05 15:09:54
  from "/var/www/html/Plantform_new/application/views/course/showExperiment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59feb942f1ff97_93420564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b171711c512556a178b9c0a952370fe0f0cf38' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/course/showExperiment.html',
      1 => 1509865788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59feb942f1ff97_93420564 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119704566159feb942ef75e1_23342928', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55209237359feb942f1cb37_60108457', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_119704566159feb942ef75e1_23342928 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css" media="screen">
	div{
		/*border: 1px solid #ccc;*/
		height: 100%;
	}
	iframe{
		width: 100%;
		height: 100%;
		border:0px;
	}
</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_55209237359feb942f1cb37_60108457 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



	<div class="row">
		<div class="col-md-9" style="padding: 0px;">
			<iframe src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
docker/show_docker" id="noVNC"  onload="noVNC.focus()" scrolling="no"></iframe>
		</div>
		<div class="col-md-3 right_bar">
			<button class="btn btn-success" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
docker/dockerDel'">关闭虚拟机</button>
			<iframe src="<?php echo $_smarty_tpl->tpl_vars['expInfo']->value['exp_doc_path'];?>
" >
			</iframe>
		</div>
	</div>




<?php
}
}
/* {/block 'body'} */
}
