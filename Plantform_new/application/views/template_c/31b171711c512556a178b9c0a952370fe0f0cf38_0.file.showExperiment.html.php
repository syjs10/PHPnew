<?php
/* Smarty version 3.1.30, created on 2018-03-08 19:43:33
  from "/var/www/html/Plantform_new/application/views/course/showExperiment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa121e52ae648_13659955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b171711c512556a178b9c0a952370fe0f0cf38' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/course/showExperiment.html',
      1 => 1520509405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5aa121e52ae648_13659955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11723222465aa121e528fb78_65527959', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10219344755aa121e52ac176_41761950', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_11723222465aa121e528fb78_65527959 extends Smarty_Internal_Block
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
	.btn{
		position: fixed;
	}
	#doc{
		margin-right: -10px;
	}
</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_10219344755aa121e52ac176_41761950 extends Smarty_Internal_Block
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
			<iframe id = "doc" src="<?php echo $_smarty_tpl->tpl_vars['expInfo']->value['exp_doc_path'];?>
" >
			</iframe>
		</div>
	</div>




<?php
}
}
/* {/block 'body'} */
}
