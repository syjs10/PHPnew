<?php
/* Smarty version 3.1.30, created on 2017-07-22 17:53:41
  from "/var/www/html/Plantform/application/views/course/showCourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597320a5d57c77_89823509',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86235d96264cacb829e7a8e83503f025c35b614a' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/showCourse.php',
      1 => 1500714204,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597320a5d57c77_89823509 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_680389946597320a5d3f271_46579668', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2014391399597320a5d56e69_44217976', 'body');
}
/* {block 'head'} */
class Block_680389946597320a5d3f271_46579668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_2014391399597320a5d56e69_44217976 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<nav class="navbar navbar-default">
		<?php if (isset($_SESSION['username'])) {?>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><!-- <?php echo $_SESSION['username'];?>
 --> <span class="caret"></span></a>
		            <ul class="dropdown-menu">
		            	<li><a href="#">Action</a></li>
		            	<li><a href="#">Another action</a></li>
		            	<li><a href="#">Something else here</a></li>
		            	<li role="separator" class="divider"></li>
		            	<li><a href="#">Separated link</a></li>
		            </ul>
		        </li>
			</ul>
		<?php } else { ?>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="../login">登录</a></li>
			</ul>
		<?php }?>
	</nav>
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
