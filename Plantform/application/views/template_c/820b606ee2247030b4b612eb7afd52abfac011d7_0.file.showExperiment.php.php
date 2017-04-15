<?php
/* Smarty version 3.1.30, created on 2017-04-14 11:01:20
  from "/var/www/html/Plantform/application/views/course/showExperiment.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f03b80b83353_89515764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '820b606ee2247030b4b612eb7afd52abfac011d7' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/showExperiment.php',
      1 => 1492138879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f03b80b83353_89515764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211052385858f03b80b7c550_62307357', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211200885858f03b80b81aa3_05734685', 'body');
}
/* {block 'head'} */
class Block_211052385858f03b80b7c550_62307357 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css" media="screen">
	div{
		border: 1px solid #ccc;
		height: 100%;  
	}
</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_211200885858f03b80b81aa3_05734685 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
	<div class="row">
		<div class="col-md-9"></div>
		<div class="col-md-3 right_bar">
			<iframe src="<?php echo $_smarty_tpl->tpl_vars['exp_info']->value['exp_doc_path'];?>
" style="width: 100%;height: 100%; border:0px;"></iframe>
		</div>
	</div>
</div>

<?php
}
}
/* {/block 'body'} */
}
