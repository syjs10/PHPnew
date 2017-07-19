<?php
/* Smarty version 3.1.30, created on 2017-07-17 17:53:42
  from "/var/www/html/Plantform/application/views/student/studentPage.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c89262f0c36_41022829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '513f5ca438ecc9467fd0fe75530ae841d79a65ff' => 
    array (
      0 => '/var/www/html/Plantform/application/views/student/studentPage.html',
      1 => 1500285200,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596c89262f0c36_41022829 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1193047872596c89262ec950_82956835', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_934696382596c89262f0133_09771381', 'body');
}
/* {block 'head'} */
class Block_1193047872596c89262ec950_82956835 extends Smarty_Internal_Block
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
			color: #fff;
		}
		.libtn {
			margin-left: 18% !important;
			margin-top: 1% !important;
		}
		.btn {
			
			display: inline-block;
		}
		.head{
			height: 20%;
			width: 100%;
			
			/*background-color: #555;
			font-size: 50px;
			color: #fff;
			text-align: center;
			padding-top: 2%;
			text-shadow: 0 0 3px #ccc;*/
		}
		#window{
			border: 0px;
		}
		.left_bar{
			height: 100%;
			padding: 0px;
			border-right: 1px solid #ccc;
			background-color: #444449;
		}
		.logo{
			color: #fff;
			text-shadow: 0px 1px 3px #fff;
			width: 70%; 
			margin: 10% 15%; 
			text-align: center;
			/*font-family: bold;*/
			font-size: 25px;
		}
		.nav>li>a{
			border-radius: 0px;
			border: 0px;
			color: #fff;
		}
		.nav>li>a:hover{
			
			color: #000;
			text-shadow: 0px 0px 1px #000;
		}
		.nav>li>a:focus{
			
			color: #000;
			text-shadow: 0px 0px 1px #000;
		}
	</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_934696382596c89262f0133_09771381 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
	<div class="container" style="width: 100%;padding:0px;">
		
		<div class="row" style="width: 100%;margin:0px;">
			<div class="col-md-3 left_bar" style="">
				<div class="head" >
					<div class="logo" style="">
						学生系统
					</div>
				</div>
				<div class="row" style="width: 100%;height: 30%;padding: 0px;margin: 0px;">
					
					<div class="cnt">
					
						<div class="wel">
							欢迎您, <?php echo $_smarty_tpl->tpl_vars['student_name']->value;?>

						</div>
						
						<div class="btn-group" role="group" aria-label="...">
						  <button type="button" class="btn btn-default">修改密码</button>
						  <button type="button" class="btn btn-default">退出登陆</button>
						</div>
					</div>
				</div>

				<ul class="nav nav-pills nav-stacked">
					<li role="presentation" onclick="changePage('../student_action/showStudentInformation');" onfocus="javascript:this.className='active';" class="">
						<a href="#">个人信息</a>
					</li>
					<li role="presentation" onclick="changePage('../student_action/showStudentCourse');" onfocus="javascript:this.className='active';"  class="">
						<a href="#" >课程</a>
					</li>
					<li role="presentation" onclick="" class="" tabindex="-1" onfocus="javascript:this.className='active';" onblur="javascript:this.className='';">
						<a href="#" >test1</a>
					</li>
					
				</ul>
			</div>
			<div class="col-md-9 embed-responsive-item" style="height: 100%;padding: 0px;" >
				<iframe src="../student_action/showStudentInformation" id="window" style="width: 100%; height: 100%;"></iframe>
			</div>
		</div>
	</div>
	<?php echo '<script'; ?>
 type="text/javascript">
		/**
		 * 切换显示页面
		 * @param  {[type]} page [description]
		 * @return {[type]}      [description]
		 */
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
