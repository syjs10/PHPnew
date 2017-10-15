<?php
/* Smarty version 3.1.30, created on 2017-10-15 13:12:45
  from "/var/www/html/Plantform_new/application/views/teacher/hflayout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e2ee4d185ea0_96168784',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a45e5b62ac4b438c1f188975f24d79501c1a7a9' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/teacher/hflayout.tpl',
      1 => 1508044277,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59e2ee4d185ea0_96168784 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83617974259e2ee4d183869_85216637', 'header');
?>

<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'header'} */
class Block_83617974259e2ee4d183869_85216637 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    header
<?php
}
}
/* {/block 'header'} */
}
