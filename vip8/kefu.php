<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/lanren.css" type="text/css" rel="stylesheet" />
</head>
<body>
<!-- 代码部分begin -->
<div id="rightArrow"><a href="javascript:;" title="联系方式"></a></div>
<div id="floatDivBoxs">
  <div class="floatDtt">联系方式</div>
  <div class="floatShadow">
    <ul class="floatDqq">
      <li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $config['qq']?>&site=qq&menu=yes"><img src="images/qq.png" align="absmiddle">本站站长</a></li>
      <li><a target="_blank" href="<?php echo $config['qqq']?>"><img src="images/qq.png" align="absmiddle">本站基佬群</a></li>
    </ul>
    <div class="floatDtxt">为网站发展，望您捐款</div>
    <div class="floatImg"><img src="images/weixin.png" width="60%"></div>
    <div class="floatImg"><img src="images/zfb.png" width="60%"></div>
	<div class="floatImg">您的每一块钱都是我的动力</div>
  </div>
  <div class="floatDbg"></div>
</div>
<script src="js/jquery-1.9.1.min.js"></script>
<script>
$(function(){
	var flag=0;
	$('#rightArrow').on("click",function(){
		if(flag==1){
			$("#floatDivBoxs").animate({right: '-185px'},300);
			$(this).animate({right: '0px'},300);
			$(this).css('background-position','-50px 0');
			flag=0;
		}else{
			$("#floatDivBoxs").animate({right: '0'},300);
			$(this).animate({right: '180px'},300);
			$(this).css('background-position','5px 0');
			flag=1;
		}
	});
});
</script>
<!-- 代码部分end -->

</body>

