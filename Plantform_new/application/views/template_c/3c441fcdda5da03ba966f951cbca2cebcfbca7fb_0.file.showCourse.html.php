<?php
/* Smarty version 3.1.30, created on 2018-03-08 16:35:04
  from "/var/www/html/Plantform_new/application/views/student/showCourse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa0f5b86f96b9_56153617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c441fcdda5da03ba966f951cbca2cebcfbca7fb' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/student/showCourse.html',
      1 => 1510198049,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./container.tpl' => 1,
  ),
),false)) {
function content_5aa0f5b86f96b9_56153617 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7274237205aa0f5b86f2368_87417696', 'container');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./container.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'container'} */
class Block_7274237205aa0f5b86f2368_87417696 extends Smarty_Internal_Block
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
