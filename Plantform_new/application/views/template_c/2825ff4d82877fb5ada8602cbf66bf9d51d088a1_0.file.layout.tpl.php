<?php
/* Smarty version 3.1.30, created on 2017-10-15 13:12:45
  from "/var/www/html/Plantform_new/application/views/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e2ee4d1abd79_01444123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2825ff4d82877fb5ada8602cbf66bf9d51d088a1' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/layout.tpl',
      1 => 1508044330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e2ee4d1abd79_01444123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118558288659e2ee4d18e554_24799270', 'title');
?>
</title>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61893868059e2ee4d1945d0_20518662', 'head');
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/lib/bootstrap3/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/lib/bootstrap3/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/lib/bootstrap3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130762401659e2ee4d19fd97_68489375', 'header');
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90067827459e2ee4d1a5027_02753088', 'body');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23779429759e2ee4d1a9e87_91010094', 'footer');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_118558288659e2ee4d18e554_24799270 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_61893868059e2ee4d1945d0_20518662 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_130762401659e2ee4d19fd97_68489375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'body'} */
class Block_90067827459e2ee4d1a5027_02753088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block 'footer'} */
class Block_23779429759e2ee4d1a9e87_91010094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
