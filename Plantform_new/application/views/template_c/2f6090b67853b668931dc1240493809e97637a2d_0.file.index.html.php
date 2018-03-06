<?php
/* Smarty version 3.1.30, created on 2018-03-06 18:49:09
  from "/var/www/html/Plantform_new/application/views/student/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9e7225d04e82_97627892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f6090b67853b668931dc1240493809e97637a2d' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/student/index.html',
      1 => 1510196336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./hflayout.tpl' => 1,
  ),
),false)) {
function content_5a9e7225d04e82_97627892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17912442625a9e7225d04428_81571140', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:./hflayout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'body'} */
class Block_17912442625a9e7225d04428_81571140 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="row">
            <iframe src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
course/showAllCourse" style="width: 100%; height: 100%; border:0px;" scrolling="no"></iframe>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
