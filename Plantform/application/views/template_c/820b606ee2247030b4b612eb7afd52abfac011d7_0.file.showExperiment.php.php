<?php
/* Smarty version 3.1.30, created on 2017-04-26 16:14:50
  from "/var/www/html/Plantform/application/views/course/showExperiment.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590056fa91b984_92023884',
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
function content_590056fa91b984_92023884 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_926574198590056fa906f56_51656007', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1269895600590056fa91ac86_18810362', 'body');
}
/* {block 'head'} */
class Block_926574198590056fa906f56_51656007 extends Smarty_Internal_Block
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
class Block_1269895600590056fa91ac86_18810362 extends Smarty_Internal_Block
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
