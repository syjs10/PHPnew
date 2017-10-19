<?php
/* Smarty version 3.1.30, created on 2017-10-18 15:28:01
  from "/var/www/html/Plantform_new/application/views/teacher/hflayout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e70281ea7058_02506591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a45e5b62ac4b438c1f188975f24d79501c1a7a9' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/teacher/hflayout.tpl',
      1 => 1508249597,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59e70281ea7058_02506591 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29349312559e70281e9a776_83597338', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_47563952559e70281ea5356_82843432', 'header');
?>


<?php $_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_29349312559e70281e9a776_83597338 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <style>
        a{
            text-align: center;
        }
    </style>
<?php
}
}
/* {/block 'head'} */
/* {block 'header'} */
class Block_47563952559e70281ea5356_82843432 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="navbar navbar-default" role="navigation" style="border-radius: 0 !important;">
        <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
teacher/index"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
页面</a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
teacher/showCourse">课程管理</a></li>
                <li><a href="">学生管理</a></li>
                

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['teacherName']->value;?>
 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">修改密码</a></li>
                        <li><a href="">退出登录</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>
<?php
}
}
/* {/block 'header'} */
}
