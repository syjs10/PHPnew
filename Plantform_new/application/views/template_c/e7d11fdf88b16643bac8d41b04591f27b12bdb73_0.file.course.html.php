<?php
/* Smarty version 3.1.30, created on 2018-03-07 21:49:27
  from "/var/www/html/Plantform_new/application/views/course/course.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9fede7d2ab68_01613431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7d11fdf88b16643bac8d41b04591f27b12bdb73' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/course/course.html',
      1 => 1520430564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5a9fede7d2ab68_01613431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4281112905a9fede7bb3207_70476322', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5918890885a9fede7d28e65_29530229', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'head'} */
class Block_4281112905a9fede7bb3207_70476322 extends Smarty_Internal_Block
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
class Block_5918890885a9fede7d28e65_29530229 extends Smarty_Internal_Block
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



                <?php if (isset($_COOKIE['studentName'])) {?>
                    <?php if ($_smarty_tpl->tpl_vars['courseInfo']->value['complete_exp_num'] <= 0 || $_smarty_tpl->tpl_vars['courseInfo']->value['exp_num'] == 0) {?>
                        <button type="" class="btn btn-success" style="margin-top: 10px;" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
student/chooseCourse/<?php echo $_smarty_tpl->tpl_vars['courseInfo']->value['course_id'];?>
'">开始学习</button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['courseInfo']->value['complete_exp_num'] > 0 && $_smarty_tpl->tpl_vars['courseInfo']->value['exp_num'] != 0) {?>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php echo round(($_smarty_tpl->tpl_vars['courseInfo']->value['complete_exp_num']/$_smarty_tpl->tpl_vars['courseInfo']->value['exp_num']*100));?>
%;">
                            <?php echo round(($_smarty_tpl->tpl_vars['courseInfo']->value['complete_exp_num']/$_smarty_tpl->tpl_vars['courseInfo']->value['exp_num']*100));?>
%
                        </div>
                    </div>
                    <?php }?>
                <?php }?>
                <?php if (isset($_COOKIE['teacherName']) && $_smarty_tpl->tpl_vars['courseInfo']->value['teacher_name'] == $_SESSION['teacherName']) {?>
                    <button type="" class="btn btn-success" style="margin-top: 10px;" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
teacher/addExperiment/<?php echo $_smarty_tpl->tpl_vars['courseInfo']->value['course_id'];?>
'">添加实验</button>
                <?php }?>

                <div class="embed-responsive embed-responsive-16by9">


                            <ul class="list-group" style="margin-top: 10px;">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['expInfo']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                                    <li class="list-group-item"  >
                                        <?php echo $_smarty_tpl->tpl_vars['value']->value['exp_name'];?>

                                        <button class="btn btn-primary" style="float:right; margin:auto 2px;" onclick='"<?php echo $_smarty_tpl->tpl_vars['value']->value['exp_doc_path'];?>
"' >实验文档</button>

                                        <?php $_smarty_tpl->_assignInScope('temp', '');
?>
                                        <?php if ($_smarty_tpl->tpl_vars['courseInfo']->value['complete_exp_num'] < $_smarty_tpl->tpl_vars['value']->value['exp_num']) {?>
                                            <?php $_smarty_tpl->_assignInScope('temp', "disabled");
?>
                                        <?php }?>

                                        <button class="btn btn-primary <?php echo $_smarty_tpl->tpl_vars['temp']->value;?>
" style="float:right; margin:auto 2px;"  onclick='location.href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Experiment/showExperiment/<?php echo $_smarty_tpl->tpl_vars['value']->value['exp_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['courseInfo']->value['course_id'];?>
/<?php echo $_SESSION['studentId'];?>
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

</div>
<?php
}
}
/* {/block 'body'} */
}
