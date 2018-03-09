<?php
/* Smarty version 3.1.30, created on 2018-03-08 20:11:41
  from "/var/www/html/Plantform_new/application/views/admin/hflayout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa1287d8473b3_00007518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c4d9a18ae58907d7a13deac77490a9fd17c2d7f' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/admin/hflayout.tpl',
      1 => 1520511097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5aa1287d8473b3_00007518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10476301885aa1287d835e96_58416529', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17602817705aa1287d840c22_33470253', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21085563445aa1287d845fe8_95268144', 'footer');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_10476301885aa1287d835e96_58416529 extends Smarty_Internal_Block
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
class Block_17602817705aa1287d840c22_33470253 extends Smarty_Internal_Block
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
teacher/showCourse">课程管理</a></li>
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
class Block_21085563445aa1287d845fe8_95268144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <footer style="margin:0px auto;text-align: center;">&copy; By JS</footer>

<?php
}
}
/* {/block 'footer'} */
}
