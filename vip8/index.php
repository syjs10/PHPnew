<?php


session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "vip/config.php";
//版权：风沙娱乐
//作者：风沙
//网址：www.fengshayun.cn
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=100%, initial-scale=1"/>
  <title><?php echo $config['name']?></title>
  <link rel="shortcut icon" href="<?php echo $config['tubiao']?>">
  <meta name="keywords" content="<?php echo $config['keywords']?>" />
  <meta name="description" content="<?php echo $config['miaoshu']?>" />
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="css/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>
  <script type="text/javascript">var OriginTitile = document.title;
      var titleTime;
      document.addEventListener('visibilitychange',
      function() {
        if (document.hidden) {
          document.title = 'φ(>ω<*) 这有好东西哦~ ' + OriginTitile;
          clearTimeout(titleTime);
        } else {
          document.title = '( • ̀ω•́ )✧恭喜你发现了~ ' + OriginTitile;
          titleTime = setTimeout(function() {
            document.title = OriginTitile;
          },
          2000);
        }
      });</script>
	  <script type="text/javascript">
</script>
<style type="text/css">
jjgg {display: <?php echo $config['kejian']?>}
ggkj {display: <?php echo $config['ggkj']?>}
</style>

  </head>
<body style="background: url(&quot;<?php echo $config['beijing']?>&quot;);">

 <nav class="navbar <?php echo $config['dingbu']?> navbar-default">
    <div class="container">
      <div class="navbar-header">
	  <!-- 此处是左上角图片 -->
       <a class="navbar-brand" href="http://www.fengshayun.cn"><img src="./images/fsyl.png"></a>          
      </div>
	  
      <div id="navbar" class="collapse navbar-collapse">
       <ul class="nav navbar-nav navbar-right">
	   <!-- 此处是右上角文字 -->
	   <?php echo $config['tblj']?>
	      <li><a href="cili.html">磁力链使用方法</a></li>
          <li><a href="http://www.fengshayun.cn/xiazai/vip8.zip">本站源码</a></li>
		  <li><a href="rizhi.html">更新日志</a></li>
        </ul>
      </div>
   </div>
  </nav>
	  
	  

  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 center-block" style="float: none;">
<h2 class="text-muted" style="color:black" align="center"><strong><?php echo $config['biaoti']?></strong></h2>
  <center>
   <span style="color:<?php echo $config['gg1ys']?>"><marquee behavior="scroll"><strong>
   <?php echo $config['gonggao1']?>
   </strong>
   </marquee>
   </span>
  </center>
  
<form action="http://kan.sogou.com/search" target="_blank">
 <div align="center"> 
  <table bgcolor="#87CEEB"> 
   <tr>
    <td> 
     <div class="input-group" style="width: 100%;">
      <input class="form-control input-lg" type="text" placeholder="全网视频搜索"name=keyword size=30">  
	  <span class="input-group-addon input-lg" style="width: 80px;">
	  <button id="bf" type="submit" value="">搜索</button>
	  </span>
     </div>
    </td>
   </tr> 
  </table> 
 </div> 
</form>
<hr>
 <table class="table table-bordered">
  <tbody>
	<div class="col-md-14 column">
    <div class="panel panel-default">
    <div id="kj" class="panel-body">
    <iframe src="<?php echo $config['zdbf']?>" id="player" width="100%" height="450px" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
    </div>
    </div>
    </div>
    <td>
    <table bgcolor="#87CEEB">
    <div class="col-md-14 column">
    <form method="get" >
	<div class="col-md-5 column" style="margin-top: 2px;">
    <div class="input-group" style="width: 100%;">
	<span class="input-group-addon input-lg" style="width: 80px; ">接口</span>
    <select class="form-control input-lg" id="jk">
	<option value="http://api.47ks.com/webcloud/?v="  style="color:red">1号通用接口👍</option>
	<option value="http://vip.72du.com/api/?url=" style="color:red">2号通用接口👍</option>
	<option value="http://qtzr.net/s/?qt=">3号通用接口</option>
	<option value="http://000o.cc/jx/ty.php?url=">4号通用接口</option>
	<option value="http://yyygwz.com/index.php?url=">5号通用接口</option>
	<option value="http://www.wmxz.wang/video.php?url=">6号通用接口</option> 
	<option value="http://yun.zihu.tv/play.html?url=">7号通用接口</option>
	<option value="http://www.vipjiexi.com/yun.php?url=">8号通用接口</option>
	<option value="https://jxapi.nepian.com/ckparse/?url=">9号通用接口</option>
	<option value="http://2gty.com/apiurl/yun.php?url=">10号通用接口</option>
	 <?php echo $config['jiekou']?>
	<option value="https://apiv.ga/magnet/">万能磁力链接解析</option>
	<option value="http:// ">更多接口待添加...</option></select>
    </div>
	</div>
    <div class="col-md-5" style="margin-top: 2px;">
    <div class="input-group" style="width: 100%;">
    <input class="form-control input-lg" type="search" placeholder="输入需要会员的视频播放地址" id="url" autocomplete="off">
    </div></div>
    <div class="col-md-2" style="margin-top: 2px;">
    <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">播放</button>
    </div>
    </div>
    </form>
    </div>
	</table> 
   </td> 
    </tbody>
    </table>
    <table class="table table-bordered">
	<thead>
  <ggkj><div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
  <strong>
  <b title="本站的广告只放有用的">广告：</b>
	<?php echo $config['guanggao']?>
  </strong></div></ggkj></thead>
  <jjgg><div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
  <strong>
  <b title="本站的紧急公告">紧急公告</b>
  <?php echo $config['jjgg']?>
  </strong></div></jjgg>
<?php include "qk.php";?>
<div class="panel-body" style="text-align: center;">
 <div class="container-fluid">

<b>友情链接：</b>
 <?php echo $config['youlian']?>
  <button type="button" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-user"></span><a href="http://www.fengshayun.cn/">风沙娱乐</a></button> 
<br><span class="copyright">Copyright &copy; 2017 <?php echo $config['biaoti']?>- Collect from <a href="http://www.fengshayun.cn" title="风沙娱乐" target="_blank">风沙娱乐</a></span>
</div>
<?php include "kefu.php";?>
<?php echo $config['tongji']?>
</body>
</html>

