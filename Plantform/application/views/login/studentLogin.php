<{block name=head}>
<title>学生登陆</title>
<style media="screen">
      body{
            background: url('<{$base_url}>image/login_background.jpg') no-repeat;
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
            padding:50px 30px;
            border-radius: 5px;
      }
      .body{
            background-color: rgba(0, 0, 0, 0.5);
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
<{/block}>

<{block name=body}>
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
                  <div class="col-md-4 clo-sm-1"></div>
                  <div class="col-md-4 clo-sm-10 block">
                        <{$form}>
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
                                    <div class="col-md-3" style="margin-left:0;padding-left:0;">
                                          <img id = "verify_img" style=" width:100%; height:30px;" src="<{$base_url}>index.php/verify/verify_image"  onclick="this.src='<{$base_url}>index.php/verify/verify_image'" />
                                    </div>

                              </div>
                              <div class="row">
                                    <div class="col-md-6">
                                          <input type="submit" class="btn" style="margin-top:5px;width:100%;font-weight: bold;font-size:15px;" value="登&nbsp;&nbsp;&nbsp;&nbsp;陆">
                                    </div>
                                    <div class="col-md-6">
                                          <input type="submit" class="btn" style="margin-top:5px;width:100%;font-weight: bold;font-size:15px;" value="忘记密码">
                                    </div>
                              </div>


                        </form>
                  </div>
                  <div class="col-md-4 col-sm-1"></div>
            </div>
      </div>
</div>
<{/block}>