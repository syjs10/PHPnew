<?php
/* Smarty version 3.1.30, created on 2018-03-08 15:26:12
  from "/var/www/html/Plantform_new/application/views/teacher/showCourse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa0e594655276_24583570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95a12deb7c7025fbc2329416705bb1e307f03fc4' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/teacher/showCourse.html',
      1 => 1508309815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./container.tpl' => 1,
  ),
),false)) {
function content_5aa0e594655276_24583570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11197972795aa0e594653338_46438273', 'container');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'} */
class Block_11197972795aa0e594653338_46438273 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <iframe src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/course/showTeacherCourse" id="window" style="width: 100%; height: 100%; border:0px;"></iframe>

<?php
}
}
/* {/block 'container'} */
}
