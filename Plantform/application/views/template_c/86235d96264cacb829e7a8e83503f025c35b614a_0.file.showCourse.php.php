<?php
/* Smarty version 3.1.30, created on 2017-07-15 17:54:09
  from "/var/www/html/Plantform/application/views/course/showCourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5969e641ac5767_07225242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86235d96264cacb829e7a8e83503f025c35b614a' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/showCourse.php',
      1 => 1492137757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5969e641ac5767_07225242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8418642345969e641abff77_97641350', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18809961595969e641ac5268_19616541', 'body');
}
/* {block 'head'} */
class Block_8418642345969e641abff77_97641350 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_18809961595969e641ac5268_19616541 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
	<button type="" class="btn btn-success" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/teacher_action/addExperiment/<?php echo $_smarty_tpl->tpl_vars['course_id']->value;?>
'">添加实验</button>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exp_info']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
		<p><?php echo $_smarty_tpl->tpl_vars['value']->value['exp_name'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/course/showExperiment/<?php echo $_smarty_tpl->tpl_vars['value']->value['exp_id'];?>
">开始实验</a> <a href="<?php echo $_smarty_tpl->tpl_vars['value']->value['exp_doc_path'];?>
" >doc</a></p>

	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
/* {/block 'body'} */
}
