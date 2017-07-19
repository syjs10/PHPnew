<?php
/* Smarty version 3.1.30, created on 2017-07-17 10:30:36
  from "/var/www/html/Plantform/application/views/student/showInformation.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596c214c943239_11016917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca018e2b9dd000494771180d34fb13ad4808fdfc' => 
    array (
      0 => '/var/www/html/Plantform/application/views/student/showInformation.html',
      1 => 1500258633,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596c214c943239_11016917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1525760994596c214c940603_94472468', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_680758866596c214c942af8_93970578', 'body');
?>

<?php }
/* {block 'head'} */
class Block_1525760994596c214c940603_94472468 extends Smarty_Internal_Block
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
class Block_680758866596c214c942af8_93970578 extends Smarty_Internal_Block
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
						<td><?php echo $_smarty_tpl->tpl_vars['data']->value['student_name'];?>
</td>
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
