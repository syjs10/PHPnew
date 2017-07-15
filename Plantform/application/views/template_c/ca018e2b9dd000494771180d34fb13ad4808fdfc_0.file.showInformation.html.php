<?php
/* Smarty version 3.1.30, created on 2017-07-13 22:45:51
  from "/var/www/html/Plantform/application/views/student/showInformation.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5967879ff3e348_40748779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca018e2b9dd000494771180d34fb13ad4808fdfc' => 
    array (
      0 => '/var/www/html/Plantform/application/views/student/showInformation.html',
      1 => 1499957150,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5967879ff3e348_40748779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13255220565967879ff3b1e6_79820545', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18526693875967879ff3d5d1_99328218', 'body');
?>

<?php }
/* {block 'head'} */
class Block_13255220565967879ff3b1e6_79820545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<title>学生信息</title>
	<style>
		div{
			border: 0.1px solid #ccc;
		}
		.inf{
			width: 97%;
			margin: 0 auto;
			/*height: 100%;*/
		}
		table{
			margin-top: 50px;
			border: 1px solid red;
			width: 100%;
			text-align: center;
			font-weight: bold;
			font-size: 20px;
		}
		tr,td{
			height:35px;
		}
	</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_18526693875967879ff3d5d1_99328218 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-3">
			<div class="inf">
				<table>
					<tr>
						<td>姓名</td>
						<td>JS</td>
					</tr>
					<tr>
						<td>班级</td>
						<td>dsaf</td>
					</tr>
					<tr>
						<td>学号</td>
						<td>150403420</td>
					</tr>
				</table>
			</div>			
		</div>
		<div class="col-md-7"></div>
		<div class="col-md-1"></div>
	</div>
</div>

<?php
}
}
/* {/block 'body'} */
}
