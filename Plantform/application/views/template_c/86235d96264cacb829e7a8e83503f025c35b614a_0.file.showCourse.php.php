<?php
/* Smarty version 3.1.30, created on 2017-04-14 10:42:42
  from "/var/www/html/Plantform/application/views/course/showCourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f03722a5f860_60614793',
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
function content_58f03722a5f860_60614793 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131952064858f03722a51eb2_15225642', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182264145558f03722a5ec81_75389962', 'body');
}
/* {block 'head'} */
class Block_131952064858f03722a51eb2_15225642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_182264145558f03722a5ec81_75389962 extends Smarty_Internal_Block
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
