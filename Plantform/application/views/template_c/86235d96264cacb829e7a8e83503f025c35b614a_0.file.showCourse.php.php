<?php
/* Smarty version 3.1.30, created on 2017-04-12 13:54:35
  from "/var/www/html/Plantform/application/views/course/showCourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58edc11b59f399_74439863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86235d96264cacb829e7a8e83503f025c35b614a' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/showCourse.php',
      1 => 1491919788,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58edc11b59f399_74439863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205296681558edc11b591e49_64891528', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57807514158edc11b59e850_88354691', 'body');
}
/* {block 'head'} */
class Block_205296681558edc11b591e49_64891528 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_57807514158edc11b59e850_88354691 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
	<button type="" class="btn btn-success" onclick="location.href='show_experiment/<?php echo $_smarty_tpl->tpl_vars['course_id']->value;?>
'">添加课程</button>
<?php
}
}
/* {/block 'body'} */
}
