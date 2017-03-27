<?php
/* Smarty version 3.1.30, created on 2017-02-10 18:23:09
  from "/var/www/html/Plantform/application/views/teacher/addcourse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_589d948d87ccc7_98359450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ee0c5bad87383b1f5d5ba870727ab814dd29fb' => 
    array (
      0 => '/var/www/html/Plantform/application/views/teacher/addcourse.html',
      1 => 1486722186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589d948d87ccc7_98359450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1130012574589d948d879215_04710559', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1582539984589d948d87c0d8_18404000', 'body');
}
/* {block 'head'} */
class Block_1130012574589d948d879215_04710559 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_1582539984589d948d87c0d8_18404000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<{ echo form_open('test');}>
		<label for="course_name">课程名称</label>
		<input type="text" name="course_name">
	</form>
<?php
}
}
/* {/block 'body'} */
}
