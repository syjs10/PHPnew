<?php
/* Smarty version 3.1.30, created on 2018-03-20 16:16:20
  from "/var/www/html/Plantform_new/application/views/admin/optStudent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab0c3544502a9_67227951',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8de1e0d13232c339accf9379d330119c21bba143' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/admin/optStudent.html',
      1 => 1521533038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./hflayout.tpl' => 1,
  ),
),false)) {
function content_5ab0c3544502a9_67227951 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6612324865ab0c354445173_31370980', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15783129985ab0c35444ebc2_25362660', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./hflayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_6612324865ab0c354445173_31370980 extends Smarty_Internal_Block
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
/* {block 'body'} */
class Block_15783129985ab0c35444ebc2_25362660 extends Smarty_Internal_Block
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
admin/addStudent')">添加学生</a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-12"><iframe src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/admin/addStudent" id="window" style="width: 100%; height: 100%; border:0px;"></iframe></div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
