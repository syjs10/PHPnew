<?php
/* Smarty version 3.1.30, created on 2017-07-22 16:56:31
  from "/var/www/html/Plantform/application/views/login/login.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5973133f0f3780_09849357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0becfafe6dd350bb5463ed73a587a74ab1439501' => 
    array (
      0 => '/var/www/html/Plantform/application/views/login/login.php',
      1 => 1500713789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5973133f0f3780_09849357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18574601335973133f0f29f6_57920052', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17899187715973133f0f34a1_53367326', 'body');
}
/* {block 'head'} */
class Block_18574601335973133f0f29f6_57920052 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<title>登陆</title>
<style media="screen">
	/*div{
		border:1px solid #ccc;

	}*/
	body{
		background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
image/login_background.jpg') no-repeat;
        background-size:100% 100%;
	}
	.body{
		height: 100%;
		width: 100%;
		background-color: rgba(0, 0, 0, 0.6);
	}
	.btn-tra{
		background-color: rgba(255, 255, 255, 0.3);
		color: #ccc;
		border: 0px;
		box-shadow: 0px 0px 3px #ccc;
	}
	.btn-tra:hover{
		background-color: rgba(255, 255, 255, 0.5);
		color: #eee;
	}
	.jumbotron{
		background-color: rgba(255, 255, 255, 0.0);
		border-radius: 0px !important;
		text-align: center;
	}
	h2{
		color: #ddd;
		text-shadow: 0px 0px 2px #ccc;
	}
	p{
		color: #888;
		font-size: 15px !important;
		margin-top: 30px !important;
	} 
	.line{
		border-right: 0.01px solid #666;
		width: 0px;
		margin: 0 auto;
		height: 400px;
	}
	.row{
		margin-top: 30px;
	}
	.title{
		text-align: center;
		color: #ddd;
		text-shadow: 0px 0px 5px #aaa;
	}

</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_17899187715973133f0f34a1_53367326 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="body">
	<div class="container">
		<div class="row title">
			<h1>登 录</h1>
		</div>
		<div class="row ">
			<div class="col-md-1 "></div>
			<div class="col-md-4 ">
				<div class="jumbotron">
			  		<h2>学生登录</h2>
			  		<p>学生可以学习教师安排的课程，也可以自由学习自己喜欢的课程，用实验的方式巩固学习到的知识</p>
			  		<p><a class="btn  btn-tra" href="login/showStudentLogin" role="button">学生登录</a>
			  		</p>
				</div>
			</div>
			<div class="col-md-2">
				<div class="line"></div>	
			</div>
			<div class="col-md-4 ">
				<div class="jumbotron">
			  		<h2>教师登录</h2>
			  		<p>教师可以定制课程，编写教学文档，查看学生学习进度，回答学生问题，管理班等等</p>
			  		<p><a class="btn  btn-tra" href="login/showTeacherLogin" role="button">教师登录</a>
			  		</p>
				</div>
			</div>
			<div class="col-md-1 "></div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'body'} */
}
