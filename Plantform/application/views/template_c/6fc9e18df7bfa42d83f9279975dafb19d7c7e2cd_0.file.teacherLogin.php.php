<?php
/* Smarty version 3.1.30, created on 2017-04-13 19:08:42
  from "/var/www/html/Plantform/application/views/login/teacherLogin.php" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef5c3a63fee6_32245812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc9e18df7bfa42d83f9279975dafb19d7c7e2cd' => 
    array (
      0 => '/var/www/html/Plantform/application/views/login/teacherLogin.php',
      1 => 1492081714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef5c3a63fee6_32245812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196089375958ef5c3a6388e6_12955265', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61839532858ef5c3a63df49_38605591', 'body');
}
/* {block 'head'} */
class Block_196089375958ef5c3a6388e6_12955265 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<title>教师登陆</title>
<style media="screen">
      body{
            background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
image/login_background.jpg') no-repeat;
            background-size:100% 100%;
            font-size: 17px;
      }
      /*div,div>div{
            height:200;
            /*border: 1px solid #ccc;
            text-align: center;
      }*/
      .login{
            position: absolute;
            top:15%;
      }
      .h1{
            text-align: center;
            color: #fff;
            font-weight: bold;
            text-shadow: 1px 1px 3px #ccc;
      }
      label{
            margin-left: 15px;
            margin-right: -15px;
            padding-top: 7px;
            padding-bottom: 7px;
            /*background-color: rgba(0, 0, 0, 0.5);*/
            color: #fff;
            border-radius: 3px;
            text-align: left;
      }
      .input{
            font-weight: bold;
            background-color: rgba(0, 0, 0, 0.1);
            border-color: #666;

      }
      input{
            box-shadow: 1px 1px 1px #666;
            color: #fff!important;
      }
      img{
            padding-top: 3px;
            padding-left: 0px;
      }
      .block{
            padding:50px 30px;

            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
      }
</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_61839532858ef5c3a63df49_38605591 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container login" style="width:100%">
      <div class="row" style="margin-bottom:3%;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                  <h1 class="h1">教师入口</h1>
            </div>
            <div class="col-md-3"></div>
      </div>
      <div class="row" style="padding-top:20px;">
            <div class="col-md-4 clo-sm-1"></div>
            <div class="col-md-4 clo-sm-10 block">
                  <?php echo $_smarty_tpl->tpl_vars['form']->value;?>

                        <div class="form-group" >
                              <label for="Username" class="col-md-3">用户名</label>
                              <div class="col-md-9">
                                    <input type="text" name="username" style=""class="form-control input" placeholder="UserName">
                              </div>

                        </div>
                        <div class="form-group" >
                              <label for="Password" class="col-md-3">密&nbsp;&nbsp;&nbsp;&nbsp;码</label>
                              <div class="col-md-9">
                                    <input type="password" name="password" style=""class="form-control input" placeholder="PassWord">
                              </div>
                        </div>
                        <div class="form-group" >
                              <label for="Verify" class="col-md-3">验证码</label>
                              <div class="col-md-6">
                                    <input type="text" name="verify" style="" class="form-control input" placeholder="Verify">
                              </div>
                              <div class="col-md-3">
                                    <img id = "verify_img" style="" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/verify/verify_image"  onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/verify/verify_image'" />
                              </div>

                        </div>
                        <div class="row">
                              <div class="col-md-6">
                                    <input type="submit" class="btn btn-success" style="margin-top:5px;width:100%;font-weight: bold;font-size:15px;" value="登&nbsp;&nbsp;&nbsp;&nbsp;陆">
                              </div>
                              <div class="col-md-6">
                                    <input type="submit" class="btn btn-warning" style="margin-top:5px;width:100%;font-weight: bold;font-size:15px;" value="忘记密码">
                              </div>
                        </div>


                  </form>
            </div>
            <div class="col-md-4 col-sm-1"></div>
      </div>
</div>
<?php
}
}
/* {/block 'body'} */
}
