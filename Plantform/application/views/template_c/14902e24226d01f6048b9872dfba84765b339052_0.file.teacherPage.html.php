<?php
/* Smarty version 3.1.30, created on 2017-04-11 21:09:32
  from "/var/www/html/Plantform/application/views/login/teacherPage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ecd58c232890_87731651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14902e24226d01f6048b9872dfba84765b339052' => 
    array (
      0 => '/var/www/html/Plantform/application/views/login/teacherPage.html',
      1 => 1491916170,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ecd58c232890_87731651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120895062958ecd58c22a6c9_78113144', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_163882406258ecd58c231c56_41195262', 'body');
}
/* {block 'head'} */
class Block_120895062958ecd58c22a6c9_78113144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<style type="text/css">
		div {
			/*border: 1px solid #ccc;*/
		}
		li{
			text-align: center;
		}
		.cnt{
			text-align:center;
			width:60%;
			margin-left: 20%;
			margin-top: 10%;

		}
		.wel{
			margin-bottom: 10%;
		}
		.libtn {
			margin-left: 5.7% !important;

		}
		.btn {
			height: 20% !important;
		}
		.head{
			background-color: #555;
			font-size: 50px;
			color: #fff;
			text-align: center;
			padding-top: 2%;
			margin-top: -%;
			text-shadow: 0 0 3px #ccc;
		}
	</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_163882406258ecd58c231c56_41195262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="head" style="width: 100%;height: 20%;">
		教师管理系统
	</div>
	<div class="container" style="width: 100%;padding:0px;">
		
		<div class="row" style="width: 100%;height: 80%;margin:0px;">
			<div class="col-md-3" style="height: 100%;padding: 0px;">
				<div class="row" style="width: 100%;height: 30%;padding: 0px;margin: 0px;background-color: #CCC;">
					<div class="cnt">
						<div class="wel">
							欢迎您, <?php echo $_smarty_tpl->tpl_vars['teacher_name']->value;?>

						</div>
						<ul class="nav nav-pills">
							<li role="presentation" class="libtn"><button class="btn btn-success ">修改密码</button></li>
							<li role="presentation" class="libtn"><button class="btn btn-warning ">退出登陆</button></li>
						</ul>
					</div>
				</div>
				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" onclick="changePage('../teacher_action/addcourse');" onfocus="javascript:this.className='active';" class="">
						<a href="#">添加课程</a>
					</li>
					<li role="presentation" onclick="changePage('../course/show_all_t_course');" onfocus="javascript:this.className='active';" class="">
						<a href="#" >我的课程</a>
					</li>
					<li role="presentation" onclick="" class="" tabindex="-1" onfocus="javascript:this.className='active';" onblur="javascript:this.className='';">
						<a href="#" >test1</a>
					</li>
					
				</ul>
			</div>
			<div class="col-md-9 embed-responsive-item" style="height: 100%;padding: 0px;" >
				<iframe src="framepage/test.html" id="window" style="width: 100%; height: 100%;"></iframe>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		function changePage(page) {
			var window = document.getElementById('window');
			window.src=page;
			this.className="active";
		}
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'body'} */
}
