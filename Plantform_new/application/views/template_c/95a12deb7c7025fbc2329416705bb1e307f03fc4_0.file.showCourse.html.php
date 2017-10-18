<?php
/* Smarty version 3.1.30, created on 2017-10-17 21:57:31
  from "/var/www/html/Plantform_new/application/views/teacher/showCourse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e60c4b5a0b33_78624774',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a12deb7c7025fbc2329416705bb1e307f03fc4' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/teacher/showCourse.html',
      1 => 1508248649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./container.tpl' => 1,
  ),
),false)) {
function content_59e60c4b5a0b33_78624774 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83600863259e60c4b59f2b6_66184287', 'container');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'} */
class Block_83600863259e60c4b59f2b6_66184287 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <iframe src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/course/showAllCourse" id="window" style="width: 100%; height: 100%; border:0px;"></iframe>

<?php
}
}
/* {/block 'container'} */
}
