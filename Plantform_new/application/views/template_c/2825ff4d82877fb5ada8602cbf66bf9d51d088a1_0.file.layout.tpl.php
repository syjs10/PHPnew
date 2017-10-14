<?php
/* Smarty version 3.1.30, created on 2017-10-14 17:05:36
  from "/var/www/html/Plantform_new/application/views/layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e1d36041d8e8_30746212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2825ff4d82877fb5ada8602cbf66bf9d51d088a1' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/layout.tpl',
      1 => 1507971902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e1d36041d8e8_30746212 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5232051459e1d3603ee126_83353366', 'title');
?>
</title>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18789355859e1d3603fec65_47661756', 'head');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_204988937159e1d360418e25_27361758', 'body');
?>

</body>
</html><?php }
/* {block 'title'} */
class Block_5232051459e1d3603ee126_83353366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_18789355859e1d3603fec65_47661756 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_204988937159e1d360418e25_27361758 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
