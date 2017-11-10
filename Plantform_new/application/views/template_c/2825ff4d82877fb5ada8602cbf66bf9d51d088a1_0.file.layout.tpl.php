<?php
/* Smarty version 3.1.30, created on 2017-11-09 11:00:16
  from "/var/www/html/Plantform_new/application/views/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03c4c02100b4_86761460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2825ff4d82877fb5ada8602cbf66bf9d51d088a1' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/layout.tpl',
      1 => 1509974004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a03c4c02100b4_86761460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5146045855a03c4c01ef806_83467082', 'title');
?>
</title>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6877167165a03c4c01f51c2_18515122', 'head');
?>

    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lib/bootstrap3/css/bootstrap.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lib/bootstrap3/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lib/bootstrap3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10591375745a03c4c02037b6_07657489', 'header');
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10778533025a03c4c0208831_30700303', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18153780465a03c4c020d8d5_28105677', 'footer');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_5146045855a03c4c01ef806_83467082 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_6877167165a03c4c01f51c2_18515122 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_10591375745a03c4c02037b6_07657489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_10778533025a03c4c0208831_30700303 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_18153780465a03c4c020d8d5_28105677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
