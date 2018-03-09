<?php
/* Smarty version 3.1.30, created on 2018-03-08 20:19:56
  from "/var/www/html/Plantform_new/application/views/admin/addTeacher.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aa12a6c3d3985_62841147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb21edee008afcda808f3dd26164e6d77b9f9109' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/admin/addTeacher.html',
      1 => 1520511469,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5aa12a6c3d3985_62841147 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15326203375aa12a6c3d2440_14940321', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_15326203375aa12a6c3d2440_14940321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel panel-default">
        <div class="panel-heading">添加教师</div>
        <div class="panel-body">
            <div class="container">
                <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label" for="course_name" >课程名称</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="course_name">
                        </div>

                    </div>

                    <div class="form-group form-group-sm">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
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
