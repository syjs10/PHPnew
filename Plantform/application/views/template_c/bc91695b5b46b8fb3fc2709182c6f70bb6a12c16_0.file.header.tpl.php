<?php
/* Smarty version 3.1.30, created on 2017-07-12 17:32:11
  from "/var/www/html/Plantform/application/views/template/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5965ec9b2482b0_12374774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc91695b5b46b8fb3fc2709182c6f70bb6a12c16' => 
    array (
      0 => '/var/www/html/Plantform/application/views/template/header.tpl',
      1 => 1486351481,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5965ec9b2482b0_12374774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7722620645965ec9b246f30_62895452', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4958251655965ec9b247fc1_46957234', 'body');
}
/* {block 'head'} */
class Block_7722620645965ec9b246f30_62895452 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  	<meta charset="utf-8">
      	<meta http-equiv="X-UA-Compatible" content="IE=edge">
      	<!-- IE适配 -->
      	<meta name="viewport" content="width=device-width, initial-scale=1">
      	<!-- 手机端适配器 -->	
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap3/css/bootstrap-theme.min.css">
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_4958251655965ec9b247fc1_46957234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
