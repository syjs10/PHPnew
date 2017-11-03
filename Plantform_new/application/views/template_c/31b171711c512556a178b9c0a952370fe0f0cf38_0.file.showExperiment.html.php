<?php
/* Smarty version 3.1.30, created on 2017-11-03 09:54:20
  from "/var/www/html/Plantform_new/application/views/course/showExperiment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fbcc4c298913_10422876',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b171711c512556a178b9c0a952370fe0f0cf38' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/course/showExperiment.html',
      1 => 1509673750,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59fbcc4c298913_10422876 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183329347659fbcc4c27aba8_64456427', 'head');
?>
>

<<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72373633059fbcc4c294ea4_58580162', 'body');
?>
><?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_183329347659fbcc4c27aba8_64456427 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
>
<style type="text/css" media="screen">
	div{
		border: 1px solid #ccc;
		height: 100%;
	}
	iframe{
		width: 100%;
		height: 100%;
		border:0px;
	}
</style>
<<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_72373633059fbcc4c294ea4_58580162 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
>

<div class="container">
	<div class="row">
		<div class="col-md-9" style="padding: 0px;">
			<iframe src="<<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
>index.php/docker/show_docker"  id="noVNC"  onload="noVNC.focus()"></iframe>
		</div>
		<div class="col-md-3 right_bar">
			<iframe src="<<?php echo $_smarty_tpl->tpl_vars['exp_info']->value['exp_doc_path'];?>
>"></iframe>
		</div>
	</div>
</div>


<<?php
}
}
/* {/block 'body'} */
}
