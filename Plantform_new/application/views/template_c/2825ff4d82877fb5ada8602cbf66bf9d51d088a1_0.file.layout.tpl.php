<?php
/* Smarty version 3.1.30, created on 2017-10-22 13:22:09
  from "/var/www/html/Plantform_new/application/views/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ec2b01ee8d75_10112591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2825ff4d82877fb5ada8602cbf66bf9d51d088a1' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/layout.tpl',
      1 => 1508649728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ec2b01ee8d75_10112591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27806518459ec2b01ecbd34_41238644', 'title');
?>
</title>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134135991659ec2b01ed15d9_17774925', 'head');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10341418559ec2b01eddbe1_48661099', 'header');
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95321509359ec2b01ee2563_55399888', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77065468859ec2b01ee6c98_01054078', 'footer');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_27806518459ec2b01ecbd34_41238644 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_134135991659ec2b01ed15d9_17774925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_10341418559ec2b01eddbe1_48661099 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_95321509359ec2b01ee2563_55399888 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_77065468859ec2b01ee6c98_01054078 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
