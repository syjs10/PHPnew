<?php
/* Smarty version 3.1.30, created on 2017-03-28 19:42:36
  from "/var/www/html/Plantform/application/views/course/showCourse.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58da4c2c21b6f4_46680659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86235d96264cacb829e7a8e83503f025c35b614a' => 
    array (
      0 => '/var/www/html/Plantform/application/views/course/showCourse.php',
      1 => 1490701353,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58da4c2c21b6f4_46680659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23203213458da4c2c2179d7_06102741', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2706289258da4c2c21b2f7_61572460', 'body');
}
/* {block 'head'} */
class Block_23203213458da4c2c2179d7_06102741 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style type="text/css" media="screen">
	*{
		margin: 0;
		padding: 0;
	}
	div{
		/*border: 1px solid #ccc;*/
	}
	.block{
		
		height: 250px;
		padding: 2%;
		text-align:center;
	}
	.inner{
		width:100%;
		height:100%; 
		border: 1px solid #ddd;
		box-shadow: 0px 0px 5px #ccc;
		
	}
	.inner:hover{
		box-shadow: 0px 0px 10px #ccc;
	}
	.image{
		position: relative;
		box-shadow: 0px 0px 10px #ccc;
		height: 55%;
		width: 100%;
		margin:0 auto;
	}
	img{
		height: 100%;
		width: 100%;
	}
	.name{
		margin:0 auto;
		text-align:center;
		position: relative;
		top:10px;	
		text-shadow: 0px 0px 2px #ccc;
		font-weight: bold;
		font-size: 20px;
	}
	.introduction{
		margin:0 auto;
		text-align:center;
		position: relative;
		top:12px;	
		overflow-y:auto; 
		/*display: none;*/
		height:15%;
		width: 90%;
	}

	.teacher{
		margin:0 auto;
		text-align:center;
		position: absolute;
		bottom:15px;
		right:20px;
	}
</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_2706289258da4c2c21b2f7_61572460 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['course_info']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
							<div class="col-md-4 block">
								<div class="inner">
									<div class="image">
										<img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img_path'];?>
" alt="" width="100%" height="100%">
									</div>
									<div class="name">
										<?php echo $_smarty_tpl->tpl_vars['value']->value['course_name'];?>

									</div>
									<div class="introduction" style=" ">
										<?php echo $_smarty_tpl->tpl_vars['value']->value['course_introduction'];?>

									</div>
									<div class="teacher">
										教师：<?php echo $_smarty_tpl->tpl_vars['value']->value['teacher_name'];?>

									</div>
									
								</div>	
							</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
	
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
	
<?php
}
}
/* {/block 'body'} */
}
