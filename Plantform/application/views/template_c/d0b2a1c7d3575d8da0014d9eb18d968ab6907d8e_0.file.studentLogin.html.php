<?php
/* Smarty version 3.1.30, created on 2017-07-22 16:59:26
  from "/var/www/html/Plantform/application/views/login/studentLogin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_597313ee36e491_34223006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0b2a1c7d3575d8da0014d9eb18d968ab6907d8e' => 
    array (
      0 => '/var/www/html/Plantform/application/views/login/studentLogin.html',
      1 => 1500694086,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597313ee36e491_34223006 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180156342597313ee368d10_79100233', 'head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1738953251597313ee36d406_72151630', 'body');
}
/* {block 'head'} */
class Block_180156342597313ee368d10_79100233 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<title>学生登陆</title>
<style media="screen">
      body{
            background: url('<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
image/login_background.jpg') no-repeat;
            background-size:100% 100%;
            font-size: 17px;
            text-align: center;
      }
      .login{
            margin: 0 auto;
            padding-top: 10%;
      }
      .h1{
            text-align: center;
            color: #eee;
            font-weight: bold;
            text-shadow: 0px 0px 3px #ddd;

      }
      label{
            margin-left: 15px;
            margin-right: -15px;
            padding-top: 7px;
            padding-bottom: 7px;
            color: #fff;
            border-radius: 3px;
            text-align: left;
      }
      .input{
            font-weight: bold;
            background-color: rgba(255, 255, 255, 0.05);
            border-color: #666;

      }
      .input:hover{
            border-color: #ccc; 
      }
      input{
            box-shadow: 1px 1px 1px #666;
            color: #fff !important;
      }
      img{
            padding-top: 3px;
            padding-left: 0px;
      }
      .block{
            padding-top:50px;
            margin: 0 auto;
      }
      .body{
            background-color: rgba(0, 0, 0, 0.6);
            width: 100%;
            height: 100%;
            text-align: 
      }
      .btn{
            background-color: rgba(255, 255, 255, 0.2);
            box-shadow: 0px 0px 3px #eee;
            border: 0;
      }
      .btn:hover{
            background-color: rgba(255, 255, 255, 0.3);
      }
      .log{
            margin-top: -50px;
      }
</style>
<?php
}
}
/* {/block 'head'} */
/* {block 'body'} */
class Block_1738953251597313ee36d406_72151630 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="body">
      <div class="container login" style="width:100%">
            <div class="row title" style="margin-bottom:3%;">
                  <div class="col-md-3"></div>
                  <div class="col-md-6">
                        <h1 class="h1">学生入口</h1>
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
index.php/verify/verify_image"  onclick="this.src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
index.php/verify/verify_image'" />
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
