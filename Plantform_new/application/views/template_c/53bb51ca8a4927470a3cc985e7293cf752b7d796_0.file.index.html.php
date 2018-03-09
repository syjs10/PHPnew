<?php
/* Smarty version 3.1.30, created on 2018-03-08 20:25:57
  from "/var/www/html/Plantform_new/application/views/admin/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa12bd5479c83_05484833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53bb51ca8a4927470a3cc985e7293cf752b7d796' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/admin/index.html',
      1 => 1520511844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./container.tpl' => 1,
  ),
),false)) {
function content_5aa12bd5479c83_05484833 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14922410265aa12bd54781a9_48929697', 'container');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'} */
class Block_14922410265aa12bd54781a9_48929697 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <iframe src="" id="window" style="width: 100%; height: 100%; border:0px;"></iframe>
<?php
}
}
/* {/block 'container'} */
}
