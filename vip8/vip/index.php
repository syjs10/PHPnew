<html><head>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<title>风沙解析站简易后台</title> 
<link rel="shortcut icon" href="images/tb.png">
<link rel="stylesheet" type="text/css" href="./css.css" data-for="result">
</head>
<body style="background: url(&quot;images/bj.jpg&quot;);">

<?php
error_reporting(0);include './pass.php';
function qxg($str){$str=stripslashes($str);$str=str_replace('\'','\\'.'\'',$str);return $str;}
$namess=end(explode('/',$_SERVER['PHP_SELF']));
if($_COOKIE['x_Cookie'] == $用户名 and $_COOKIE['y_Cookie'] == $密码){
}else{
    if(!empty($_POST['adminname'])){
        if($_POST['password'] == $密码 & $_POST['adminname'] == $用户名){
             setcookie("y_Cookie", $密码);
             setcookie("x_Cookie", $用户名);
        }
        else{
            echo"<script>alert('用户名或密码错误!!!');location.href='".$_SERVER["HTTP_REFERER"]."';</script>";
            exit;
        }
    }else{?>
 <div id="passport-login-pop" class="tang-pass-pop-login-noimg tang-pass-pop-login-merge tang-pass-pop-login-tpl-mn tang-pass-pop-login-color-blue tang-pass-pop-login" style="left: 595px; top: 40px;">
 <div class="tang-foreground" id="TANGRAM__PSP_2__foreground" style="width: 393px;">
 <div class="tang-title tang-title-dragable" id="TANGRAM__PSP_2__title">
   <span>解析站后台登陆</span>
 </div>
    <div class="tang-body" id="TANGRAM__PSP_2__body">
     <div class="tang-content" id="TANGRAM__PSP_2__content">
      <div id="passport-login-pop-dialog">
       <div class="clearfix">
        <div class="pass-login-pop-content" id="">
         <div class="pass-login-pop-form">
          <div id="passport-login-pop-api" class="tang-pass-login">
           <form action="./<?php echo $namess;?>" id="TANGRAM__PSP_8__form" class="pass-form pass-form-normal" method="POST" autocomplete="off">
            <p id="TANGRAM__PSP_8__errorWrapper" class="pass-generalErrorWrapper"><span id="TANGRAM__PSP_8__error" class="pass-generalError pass-generalError-error"></span></p>
            <p id="TANGRAM__PSP_8__userNameWrapper" class="pass-form-item pass-form-item-userName" style="display:"><input id="TANGRAM__PSP_8__userName" type="text" name="adminname" class="pass-text-input pass-text-input-userName" autocomplete="on" placeholder="默认用户名admin"></p>
            <p id="TANGRAM__PSP_8__passwordWrapper" class="pass-form-item pass-form-item-password" style="display:"><input id="TANGRAM__PSP_8__password" type="password" name="password" class="pass-text-input pass-text-input-password" placeholder="默认密码admin"></p>
            <p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"><input id="TANGRAM__PSP_8__submit" type="submit" value="登录" class="pass-button pass-button-submit">
            </p>
           </form>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
 </html>
<?php exit;}}?>

<?php if(empty($_GET['sort'])){$_GET['sort']='index';}?>
<div align="center" style="width:80%; margin:auto">
<div id="passport-login-pop" class="tang-pass-pop-login-noimg tang-pass-pop-login-merge tang-pass-pop-login-tpl-mn tang-pass-pop-login-color-blue tang-pass-pop-login" style="top: 40px; width:80%">
   <div class="tang-foreground" id="TANGRAM__PSP_2__foreground" style="width:100%">
    <div style='background-color:#f7f7f7; border:1px solid #ddd; border-width:1px 1px 0 1px;height:35px; font-size:20px; padding-top:20px; padding-left:20px; padding-right:20px; text-align:center'>
    <strong><a href="../index.php" target="_blank">网站首页</a> <a href="?">后台首页</a> <a href="?sort=admin">后台密码</a></strong>
    </div>
    <div class="tang-body" id="TANGRAM__PSP_2__body">
     <div class="tang-content" id="TANGRAM__PSP_2__content">
      <div id="passport-login-pop-dialog">
       <div class="clearfix">
        <div class="pass-login-pop-content">
         <div class="pass-login-pop-form">
          <div id="passport-login-pop-api" class="tang-pass-login">
<?php if($_GET['sort']=='index')
	{include './config.php';
$strm=
array(array('网站名称','name','你的网站的名字'),
array('标题','biaoti','主页最上面的那个'),
array('关键字','keywords','用于百度搜索，你想搜哪些关键词能在百度搜索出来'),
array('网站简介','miaoshu','简单介绍一下你的网站吧！'),
array('站长QQ','qq','你的QQ'),
array('顶部固定','dingbu','要固定的话输入navbar-fixed-top'),
array('加群链接','qqq','你的QQ群群名片里面自己找'),
array('背景图片','beijing','如果是站外的图片，记得加http://'),
array('网站图标','tubiao','如果是站外的图片，记得加http://'),
array('自动播放','zdbf','就主页那个视频，建议不播放，比较吵'),
array('顶部公告颜色','gg1ys','举例：red   或者#FF0000  颜色代码去http://www.114la.com/other/rgb.htm查询'),
array('广告是否显示','ggkj','none=不显示，inline=显示'),
array('紧急公告是否显示','kejian','none=不显示，inline=显示'),
array('更多接口','jiekou','其他的接口，但请注意格式'),
array('顶部链接','tblj','就顶部的那个'),
array('顶部公告','gonggao1','也就是顶部一直在动的那个'),
array('紧急公告','jjgg','一般情况下不用写，除非超紧急的事情'),
array('广告','guanggao','这里是广告模板，想弄什么上去就写吧'),
array('友链','youlian','看你自己怎么设置咯'),
array('站长统计','tongji','http://www.umeng.com/这里去弄，网站最底下的那个统计'));?>	
	 <?php if($_GET['mod']=='save'){$strss='<?php ';
	 for($i=0;$i<count($strm);$i++){$guodus=explode('-',$strm[$i][1]);if(count($guodus)==1){$strss.='$config[\''.$guodus[0].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';}elseif(count($guodus)==2){$strss.='$config[\''.$guodus[0].'\'][\''.$guodus[1].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';}elseif(count($guodus)==3){$strss.='$config[\''.$guodus[0].'\'][\''.$guodus[1].'\'][\''.$guodus[2].'\']=\''.qxg($_POST[$strm[$i][1]]).'\';';}}
	 $strss.=' ?>';file_put_contents('./config.php',$strss);
	 ?>	
	 <br><p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"> <p id="TANGRAM__PSP_8__submit"  class="pass-button pass-button-submit" style="padding-top:25px;">设置成功 <a href="?sort=index">点我返回</a></p></p><br><?php exit;}?>
           <form action="?sort=index&mod=save" method="POST">
            <p id="TANGRAM__PSP_8__errorWrapper" class="pass-generalErrorWrapper"><span id="TANGRAM__PSP_8__error" class="pass-generalError pass-generalError-error"></span></p>
            <?php for($i=0;$i<count($strm);$i++){?>
            <p id="TANGRAM__PSP_8__userNameWrapper" class="pass-form-item pass-form-item-userName"><table width="100%" border="0" cellspacing="2">
  <tr>
    <td width="9%"><?php echo $strm[$i][0];?></td>
    <td><?php if($i<13){?><input type="text" name="<?php echo $strm[$i][1];?>" class="pass-text-input pass-text-input-userName" autocomplete="off" placeholder="<?php echo $strm[$i][2];?>" style="width:91%" value="<?php echo $config[$strm[$i][1]];?>"><?php }else{?><textarea rows="6" cols="130%" name='<?php echo $strm[$i][1];?>'><?php $guodu1=explode('-',$strm[$i][1]);if(is_array($config[$guodu1[0]])){if(is_array($config[$guodu1[0]][$guodu1[1]])){echo $config[$guodu1[0]][$guodu1[1]][$guodu1[2]];}else{echo $config[$guodu1[0]][$guodu1[1]];}}else{echo $config[$guodu1[0]];}?></textarea><?php }?></td>
  </tr>
</table>
</p><?php }?>
<p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"><input id="TANGRAM__PSP_8__submit" type="submit" value="保存修改" class="pass-button pass-button-submit">
</p>
</form>


		   



		   <?php }elseif($_GET['sort']=='admin'){?>
		   
	<?php if($_GET['mod']=='save'){if(!empty($_POST['name']) and !empty($_POST['pass'])){$strss='<?php $用户名=\''.$_POST['name'].'\'; $密码=\''.$_POST['pass'].'\';?>';file_put_contents('./pass.php',$strss);}else{$zt='n';}?>	
	 <br>
	 <p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"> <p id="TANGRAM__PSP_8__submit"  class="pass-button pass-button-submit" style="padding-top:25px;"><?php if($zt=='n'){echo '用户名或密码不能为空！<a href="?sort=admin">点我返回</a>';}else{echo '修改成功<a href="?sort=admin">点我返回</a>';}?></p></p><br><?php exit;}?>
<form action="?sort=admin&mod=save" method="POST">
    <p id="TANGRAM__PSP_8__errorWrapper" class="pass-generalErrorWrapper">
		<span id="TANGRAM__PSP_8__error" class="pass-generalError pass-generalError-error"></span>
	</p>
    <p id="TANGRAM__PSP_8__userNameWrapper" class="pass-form-item pass-form-item-userName">
	<table width="100%" border="0" cellspacing="2">
	<tr>
	<td width="9%">修改用户名</td>
	<td><input type="text" name="name" class="pass-text-input pass-text-input-userName" autocomplete="off" placeholder="输入修改后的用户名" style="width:91%"></td>
	</tr>
</table>
</p>
<p id="TANGRAM__PSP_8__userNameWrapper" class="pass-form-item pass-form-item-userName">
<table width="100%" border="0" cellspacing="2">
  <tr>
    <td width="9%">修改密码</td>
    <td><input type="text" name="pass" class="pass-text-input pass-text-input-userName" autocomplete="off" placeholder="输入修改后的密码" style="width:91%"></td>
  </tr>
</table>
</p>           
<p id="TANGRAM__PSP_8__submitWrapper" class="pass-form-item pass-form-item-submit"><input id="TANGRAM__PSP_8__submit" type="submit" value="保存修改" class="pass-button pass-button-submit"></p>
</form>
		   

		   <?php }?>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div></div>
 </body></html>