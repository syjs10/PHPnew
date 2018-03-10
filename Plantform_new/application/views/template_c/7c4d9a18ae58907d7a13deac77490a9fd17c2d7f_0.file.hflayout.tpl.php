<?php
/* Smarty version 3.1.30, created on 2018-03-10 16:55:23
  from "/var/www/html/Plantform_new/application/views/admin/hflayout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa39d7baf7292_31623525',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c4d9a18ae58907d7a13deac77490a9fd17c2d7f' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/admin/hflayout.tpl',
      1 => 1520512428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5aa39d7baf7292_31623525 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20796139795aa39d7bacb6a9_05747418', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10139152185aa39d7baeb9c4_82761396', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3100043275aa39d7baf48e9_70990050', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_20796139795aa39d7bacb6a9_05747418 extends Smarty_Internal_Block
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
class Block_10139152185aa39d7baeb9c4_82761396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="navbar navbar-default" role="navigation" style="border-radius: 0 !important;border:0px !important;">
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
admin/index"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
页面</a>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
teacher/showCourse">教师管理</a></li>
                <li><a href="">学生管理</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">管理员<span class="caret"></span></a>
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
/* {block 'footer'} */
class Block_3100043275aa39d7baf48e9_70990050 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer style="margin:0px auto;text-align: center;">&copy; By JS</footer>

<?php
}
}
/* {/block 'footer'} */
}
