<?php
/* Smarty version 3.1.30, created on 2017-07-19 10:14:10
  from "/var/www/html/Plantform/application/views/student/showCourse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596ec0725f1387_22430941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74e9c610bad9a2acb43cfea257c10573fc1585af' => 
    array (
      0 => '/var/www/html/Plantform/application/views/student/showCourse.html',
      1 => 1500430126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596ec0725f1387_22430941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_832270769596ec0725ee175_41718684', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_528709510596ec0725f0631_82117955', 'body');
?>

<?php }
/* {block 'head'} */
class Block_832270769596ec0725ee175_41718684 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
	/*div{
		border: 1px solid #ccc;
	}*/
	.panel-heading{
		padding: 0px;
	}
	.navbar{
		margin: 0px;
		border: 0px;
	}
	.navbar-btn{
		margin: 0px;
	}
</style>

<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_528709510596ec0725f0631_82117955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-heading" style="border-bottom: 0px;">
					<div class="nav nav-tabs" id = "bar">
						<li role="presentation" onclick="changePage(this, '../course/showAllCourse')" class="" id="all" ><a href="#">全部课程</a></li>
						<li role="presentation" onclick="changePage(this, '../student_action/')" class="" id="all" id="choosed"><a href="#">已选课程</a></li>
						<li role="presentation" onclick="changePage(this, '../student_action/')" class="" id="all" id="over"><a href="#">已学习课程</a></li>

						<!-- <li role="presentation"><a href="#">课程成绩</a></li> -->
					</div>
				</div>
				<div class="panel-body">
					<iframe src="../course/showAllCourse" frameborder="0" id="window" style="width: 100%; height: 100%;"></iframe>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
<?php echo '<script'; ?>
>
	/**
	 * 标签切换时样式变化
	 * @param  {pointer} obj 把标签元素指针
	 * @return 
	 */
	var change_bg = function (obj) {
    	var a=document.getElementById('bar').getElementsByTagName("li");
	    for(var i=0;i<a.length;i++) {
	        a[i].className="";
	    }
	    obj.className="active";
	}
	/**
	 * 切换显示页面
	 * @param  {[type]} page [description]
	 * @return {[type]}      [description]
	 */
	function changePage(obj,page) {
		var window = document.getElementById('window');
		window.src=page;
		change_bg(obj);
	}
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
