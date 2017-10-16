<?php
/* Smarty version 3.1.30, created on 2017-10-15 18:41:37
  from "/var/www/html/Plantform_new/application/views/teacher/showCourse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e33b614e9ba2_32799190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a12deb7c7025fbc2329416705bb1e307f03fc4' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/teacher/showCourse.html',
      1 => 1508064084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./container.tpl' => 1,
    'file:../course/index.html' => 1,
  ),
),false)) {
function content_59e33b614e9ba2_32799190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72437130359e33b614e5989_74159215', 'container');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'} */
class Block_72437130359e33b614e5989_74159215 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:../course/index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'container'} */
}
