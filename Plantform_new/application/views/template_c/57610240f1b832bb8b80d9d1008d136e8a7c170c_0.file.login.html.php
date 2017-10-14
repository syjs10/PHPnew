<?php
/* Smarty version 3.1.30, created on 2017-10-14 17:30:03
  from "/var/www/html/Plantform_new/application/views/login/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e1d91bcaa568_01513634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57610240f1b832bb8b80d9d1008d136e8a7c170c' => 
    array (
      0 => '/var/www/html/Plantform_new/application/views/login/login.html',
      1 => 1507973397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout.tpl' => 1,
  ),
),false)) {
function content_59e1d91bcaa568_01513634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153999354259e1d91bc75021_65210564', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50269364859e1d91bc8c836_30254782', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158869327259e1d91bca7318_11679467', 'body');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:../layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'} */
class Block_153999354259e1d91bc75021_65210564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['user']->value;?>
登录<?php
}
}
/* {/block 'title'} */
/* {block 'head'} */
class Block_50269364859e1d91bc8c836_30254782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
lib/css/login.css">
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_158869327259e1d91bca7318_11679467 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="body">
      <div class="container login" style="width:100%">
            <div class="row title" style="margin-bottom:3%;">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                        <h1 class="h1"><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
登录</h1>
                  </div>
                  <div class="col-md-3"></div>
            </div>
            <div class="row log" style="padding-top:20px;">
                  <div class="col-md-4 clo-sm-2"></div>
                  <div class="col-md-4 clo-sm-8 block">
                        <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

                              <div class="form-group" >
                                    <label for="Username" class="col-md-3 col-sm-3 col-xs-3">用户名</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                          <input type="text" name="username" style=""class="form-control input" placeholder="UserName">
                                    </div>

                              </div>
                              <div class="form-group" >
                                    <label for="Password" class="col-md-3 col-ms-3 col-xs-3">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                          <input type="password" name="password" style=""class="form-control input" placeholder="PassWord">
                                    </div>
                              </div>
                              <div class="form-group" >
                                    <label for="Verify" class="col-md-3 col-xs-3">验证码</label>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                          <input type="text" name="verify" style="" class="form-control input" placeholder="Verify">
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3" style="margin-left:0;padding-left:0;">
                                          <img id = "verify_img" style=" width:100%; height:30px;" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
verify"  onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
verify'" />
                                    </div>

                              </div>
                              <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                          <input type="submit" class="btn" style="margin-top:5px;width:100%;font-weight: bold;font-size:15px;" value="登&nbsp;&nbsp;&nbsp;&nbsp;陆">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                          <input type="submit" class="btn" style="margin-top:5px;width:100%;font-weight: bold;font-size:15px;" value="忘记密码">
                                    </div>
                              </div>


                        </form>
                  </div>
                  <div class="col-md-4 col-sm-2"></div>
            </div>
      </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
