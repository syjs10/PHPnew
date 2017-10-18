<?php
/* Smarty version 3.1.30, created on 2017-10-17 22:06:16
  from "/var/www/html/Plantform_new/application/views/course/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e60e58e9a5b1_82112909',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7ab01132055fba20dc5e797f732040ac2e1b13c' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/course/index.html',
      1 => 1508248880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59e60e58e9a5b1_82112909 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122144208159e60e58e72334_77556196', 'head');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3574386759e60e58e98b22_41403072', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_122144208159e60e58e72334_77556196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/lib/css/course.css">
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_3574386759e60e58e98b22_41403072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['courseInfo']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                    <div class="col-xs-4 col-sm-4 col-md-3 block" onclick="window.open('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/course/<?php echo $_smarty_tpl->tpl_vars['value']->value['course_id'];?>
'); ">
                        <div class="inner">
                            <div class="image">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['img_path'];?>
" alt="" width="100%" height="100%">
                            </div>
                            <div class="text">
                                <div class="name">
                                    <?php echo $_smarty_tpl->tpl_vars['value']->value['course_name'];?>

                                </div>
                                <div class="introduction">
                                    <?php echo $_smarty_tpl->tpl_vars['value']->value['course_introduction'];?>

                                </div>
                            </div>
                            <div class="teacher">
                                教师：<?php echo $_smarty_tpl->tpl_vars['value']->value['teacher_name'];?>

                            </div>
                            <div class="cover">
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>
    </div>
    <div class="col-md-1"></div>
<?php
}
}
/* {/block 'body'} */
}
