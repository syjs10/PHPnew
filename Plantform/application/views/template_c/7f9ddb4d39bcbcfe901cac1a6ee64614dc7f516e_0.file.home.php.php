<?php
/* Smarty version 3.1.30, created on 2017-09-21 10:56:27
  from "/var/www/html/Plantform/application/views/home.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c32a5b96bbe1_88624491',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f9ddb4d39bcbcfe901cac1a6ee64614dc7f516e' => 
    array (
      0 => '/var/www/html/Plantform/application/views/home.php',
      1 => 1493808318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c32a5b96bbe1_88624491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25535878759c32a5b95e928_17905332', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13985908159c32a5b96a845_41409377', 'body');
}
/* {block 'head'} */
class Block_25535878759c32a5b95e928_17905332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_13985908159c32a5b96a845_41409377 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/student/showAllCourse">Student</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/tlog">Teacher</a>
<?php
}
}
/* {/block 'body'} */
}
