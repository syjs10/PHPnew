<?php
/* Smarty version 3.1.30, created on 2017-11-09 11:24:49
  from "/var/www/html/Plantform_new/application/views/student/container.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a03ca818356f0_99747016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bbb878a16a0a0ed815b4ee4f05a4450f6d33a55c' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/student/container.tpl',
      1 => 1508307013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./hflayout.tpl' => 1,
  ),
),false)) {
function content_5a03ca818356f0_99747016 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16438085105a03ca8181fe15_02643042', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19590572395a03ca81833b72_80075592', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./hflayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_16438085105a03ca8181fe15_02643042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
        function setIframeHeight(iframe) {
            if (iframe) {
                var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
                if (iframeWin.document.body) {
                    iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
                }
            }
        };

        window.onload = function () {
            setIframeHeight(document.getElementById('window'));
        };

        function changePage(page) {
            var window = document.getElementById('window');
            window.src=page;

        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head'} */
/* {block 'container'} */
class Block_15530866345a03ca81830ad5_30306291 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'container'} */
/* {block 'body'} */
class Block_19590572395a03ca81833b72_80075592 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">操作</div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="javascript:void(0);" class="list-group-item" onclick="changePage('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
course/showTeacherCourse')">我的课程</a>
                            <a href="javascript:void(0);" class="list-group-item" onclick="changePage('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
teacher/addCourse')">添加课程</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15530866345a03ca81830ad5_30306291', 'container', $this->tplIndex);
?>
</div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
