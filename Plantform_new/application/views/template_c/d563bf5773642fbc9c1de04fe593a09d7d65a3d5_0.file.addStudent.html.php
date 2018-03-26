<?php
/* Smarty version 3.1.30, created on 2018-03-20 16:27:26
  from "/var/www/html/Plantform_new/application/views/admin/addStudent.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab0c5eedea6e9_83612340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd563bf5773642fbc9c1de04fe593a09d7d65a3d5' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/admin/addStudent.html',
      1 => 1521534391,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5ab0c5eedea6e9_83612340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19699252665ab0c5eede76e9_35447696', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_19699252665ab0c5eede76e9_35447696 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel panel-default">
        <div class="panel-heading">添加教师</div>
        <div class="panel-body">
            <div class="container">
                <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label" for="student_name" >学生姓名</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="student_name" value="<?php echo set_value('student_name');?>
">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label" for="username" >用户名</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="username" value="<?php echo set_value('username');?>
">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label" for="password" >密&nbsp;&nbsp;码</label>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" name="password" value="<?php echo set_value('password');?>
">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label" for="student_class" >班&nbsp;&nbsp;级</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="student_class" value="<?php echo set_value('student_class');?>
">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-3 control-label" for="student_num" >学&nbsp;&nbsp;号</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control" name="student_num" value="<?php echo set_value('student_num');?>
">
                        </div>
                    </div>
                    <div class="form-group form-group-sm">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-7">
                            <input type="submit" class="btn btn-default" value="提交">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
