<?php
/* Smarty version 3.1.30, created on 2017-07-15 17:54:11
  from "/var/www/html/Plantform/application/views/course/showExperiment.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5969e64376fa17_97908836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '820b606ee2247030b4b612eb7afd52abfac011d7' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/showExperiment.php',
      1 => 1493194452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5969e64376fa17_97908836 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6928070555969e64376d8e7_32889363', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13810805435969e64376f3e0_52819886', 'body');
}
/* {block 'head'} */
class Block_6928070555969e64376d8e7_32889363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

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
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_13810805435969e64376f3e0_52819886 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
	<div class="row">
		<div class="col-md-9" style="padding: 0px;">
			<iframe src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/docker/show_docker"  id="noVNC"  onload="noVNC.focus()"></iframe>
		</div>
		<div class="col-md-3 right_bar">
			<iframe src="<?php echo $_smarty_tpl->tpl_vars['exp_info']->value['exp_doc_path'];?>
"></iframe>
		</div>
	</div>
</div>


<?php
}
}
/* {/block 'body'} */
}
