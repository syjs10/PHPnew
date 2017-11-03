<?php
/* Smarty version 3.1.30, created on 2017-11-03 09:50:46
  from "/var/www/html/Plantform_new/application/views/course/course.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59fbcb76a381d4_38495419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d11fdf88b16643bac8d41b04591f27b12bdb73' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/course/course.html',
      1 => 1509673843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59fbcb76a381d4_38495419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97030058259fbcb76a0add1_57633234', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117577508859fbcb76a36cb5_08866671', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_97030058259fbcb76a0add1_57633234 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/lib/css/courseInfo.css">
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_117577508859fbcb76a36cb5_08866671 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            课程信息
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="image" style="margin-bottom: 10px;">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['courseInfo']->value['img_path'];?>
" alt="" width="100%" height="100%">
                    </div>
                </div>
                <div class="col-md-8 col-xs-6">
                    <div class="row"><h3><?php echo $_smarty_tpl->tpl_vars['courseInfo']->value['course_name'];?>
</h3></div>
                    <div class="row"><?php echo $_smarty_tpl->tpl_vars['courseInfo']->value['course_introduction'];?>
</div>
                </div>
            </div>
                <?php if ($_smarty_tpl->tpl_vars['courseInfo']->value['teacher_name'] == $_SESSION['teacherName']) {?>
                    <button type="" class="btn btn-success" style="margin-top: 10px;margin-buttom:10px;" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
teacher/addExperiment/<?php echo $_smarty_tpl->tpl_vars['courseInfo']->value['course_id'];?>
'">添加实验</button>
                <?php }?>

                <ul class="list-group">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expInfo']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <li class="list-group-item"  >
                            <?php echo $_smarty_tpl->tpl_vars['value']->value['exp_name'];?>

                            <button class="btn btn-primary" style="float:right; margin:auto 2px;" onclick='"<?php echo $_smarty_tpl->tpl_vars['value']->value['exp_doc_path'];?>
"' >实验文档</button>
                            <button class="btn btn-primary" style="float:right; margin:auto 2px;" onclick='location.href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Experiment/showExperiment/<?php echo $_smarty_tpl->tpl_vars['value']->value['exp_id'];?>
"'>开始实验</button>

                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </ul>
        </div>
    </div>

</div>
<?php
}
}
/* {/block 'body'} */
}
