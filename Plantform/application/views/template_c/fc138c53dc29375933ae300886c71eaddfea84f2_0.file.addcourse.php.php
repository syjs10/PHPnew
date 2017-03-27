<?php
/* Smarty version 3.1.30, created on 2017-02-15 12:57:22
  from "/var/www/html/Plantform/application/views/teacher/addcourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58a3dfb2a10bd4_05322985',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc138c53dc29375933ae300886c71eaddfea84f2' => 
    array (
      0 => '/var/www/html/Plantform/application/views/teacher/addcourse.php',
      1 => 1486723473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a3dfb2a10bd4_05322985 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186190118458a3dfb29e4301_72920283', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6806196458a3dfb2a0fb20_56783003', 'body');
}
/* {block 'head'} */
class Block_186190118458a3dfb29e4301_72920283 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_6806196458a3dfb2a0fb20_56783003 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

		<label for="course_name">课程名称</label>
		<input type="text" name="course_name">
		<label for="course_name">上传封面</label>
		<input type="file" name="file" id="file" /> 
		<label for="course_name">课程名称</label>
		<input type="text" name="course_name">
	</form>
<?php
}
}
/* {/block 'body'} */
}
