<?php
/* Smarty version 3.1.30, created on 2018-03-25 09:44:50
  from "/var/www/html/Plantform_new/application/views/teacher/addCourse.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ab6ff12b1f3d0_67797753',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8529116dcd2a1f14531882e68a1685de86d4be69' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/teacher/addCourse.html',
      1 => 1520512031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_5ab6ff12b1f3d0_67797753 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15241119545ab6ff12b1a577_49486099', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_15241119545ab6ff12b1a577_49486099 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="panel panel-default">
        <div class="panel-heading">添加课程</div>
        <div class="panel-body">
            <div class="container">
                <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label" for="course_name" >课程名称</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="course_name">
                        </div>
                        <!-- <span class="help-block">test</span> -->
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="course_introduction" >课程简介</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="course_introduction" rows="4"></textarea>
                        </div>
                        <!-- <span class="help-block">test</span> -->
                    </div>
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label" for="myfile" >课程封面</label>
                        <div class="col-sm-10">
                            <input type="file" class=""  name="myfile">
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
