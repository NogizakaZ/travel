<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	    <link rel="stylesheet" href="__CSS__/index.css" media="all" type="text/css">
	<title>游迹网</title>
<script type="text/javascript" src="__JS__/jquery-easyui-1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="__JS__/jquery-easyui-1.4.2/jquery.easyui.min.js"></script>
<link rel="stylesheet" type="text/css" href="__JS__/jquery-easyui-1.4.2/themes/default/easyui.css">
  <link rel="stylesheet" type="text/css" href="__JS__/jquery-easyui-1.4.2/themes/icon.css">
  <link rel="stylesheet" type="text/css" href="__JS__/jquery-easyui-1.4.2/demo/demo.css">
  <link rel="stylesheet" href="__CSS__/css.css" media="all">

<script>
jQuery(document).ready(function($) {
  $('.theme-login').click(function(){
    $('.theme-popover-mask').fadeIn(100);
    $('.theme-popover').slideDown(200);
  })
  $('.theme-poptit .close').click(function(){
    $('.theme-popover-mask').fadeOut(100);
    $('.theme-popover').slideUp(200);
  })

})
</script>
</head>
<body >

  <STYLE TYPE="text/css">

<!--

BODY {background-image: URL(__IMG__/background.png);

background-position:center top;

background-repeat: no-repeat;

}

-->
</STYLE> 


<div class="quanbu">

	<div class="contentbg"></div>
	<div class="content">
		<!--优惠套餐条-->
    <img src="__IMG__/youhuitiao1.png" class="youhuitiao1">
    <img src="__IMG__/youhuitiao2.png" class="youhuitiao2">
		<!--以下这一段是优惠套餐滚动实现-->
    <div style="position:absolute;top:30px;left:30px;">
  <div class="rollBox">
     <div class="zuogun" onmousedown="ISL_GoUp()" onmouseup="ISL_StopUp1()" onmouseout="ISL_StopUp()" onmouseover="document.images['zuoguntu'].src='__IMG__/zuogun1.png'">
      <img id="zuoguntu" src="__IMG__/zuogun.png">
    </div>
     <div class="Cont" id="ISL_Cont">
      <div class="ScrCont">
       <div id="List1">
        <!-- 图片列表 begin -->
       
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><img src="<?php echo ($season[0]["image"]); ?>.jpg" width="145" height="145" alt="一号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=1" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[0]["name"]); ?></div><div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[0]["price"]); ?>起</div></a>

         </div>
      
 <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=2" target="_blank"><img src="<?php echo ($season[1]["image"]); ?>.jpg" width="145" height="145" alt="二号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=2" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[1]["name"]); ?></div><div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[1]["price"]); ?>起</div></a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=3" target="_blank"><img src="<?php echo ($season[2]["image"]); ?>.jpg" width="145" height="145" alt="三号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=3" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[2]["name"]); ?></div><div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[2]["price"]); ?>起</div></a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=4" target="_blank"><img src="/image/4.jpg" width="145" height="145" alt="四号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=4" target="_blank"><div style="font-size:15px;font-family: SimHei;color:#046bb3;"><?php echo ($season[3]["name"]); ?></div><div style="font-size:15px;font-family: SimHei;color:#ff8004;"><?php echo ($season[3]["price"]); ?>起</div></a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=5" target="_blank"><img src="/image/5.jpg" width="145" height="145" alt="五号图片"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=5" target="_blank">五号图片</a>

         </div>
 <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=6" target="_blank"><img src="/image/1.jpg" width="145" height="145" alt="您自定义"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=6" target="_blank">您自定义</a>

         </div>
         <div class="pic">
          <a href="<#ZC_BLOG_HOST#>?cat=7" target="_blank"><img src="/image/1.jpg" width="145" height="145" alt="您自定义"  onload="return imgzoom(this,600);" onclick="javascript:window.open(this.src);" style="cursor:pointer;"/></a>
          <a href="<#ZC_BLOG_HOST#>?cat=7" target="_blank">您自定义</a>

         </div>
        <!-- 图片列表 end -->
       </div>
       <div id="List2"></div>
      </div>
     </div>
     <div class="yougun" onmousedown="ISL_GoDown()" onmouseup="ISL_StopDown1()" onmouseout="ISL_StopDown()" onmouseover="document.images['youguntu'].src='/steptu/Web/Tpl/Index/Public/images/yougun1.png'" >
     	<img id="youguntu" src="/steptu/Web/Tpl/Index/Public/images/yougun.png"></div>
    </div>
   
</div>
<!--以上这一段是优惠套餐滚动实现-->

	<img src="__IMG__/zhutiao.png" class="zhutiao">
	<div></div>
  <!--旅游志标题条-->
	<img src="__IMG__/lvyouzhi1.png" class="lvyouzhi">
  <img src="__IMG__/lvyouzhi2.png" class="lvyouzhi2">
	<div class="lvyouzhicontent">
		
	</div>
  <div class="zhuhaohuaform">
  <form action="" name="zhuxianghaohua" method="post" >
  <div style="position:absolute;left:0px;top:0px;font-size:15px;font-family: SimHei;">目的地</div><input name="destination" type="text" style="position:absolute;width:95px;left:70px;top:-3px;border-radius:4px;"/>
  <div style="position:absolute;left:0px;top:40px;font-size:15px;font-family: SimHei;">入住时间</div><div style="position:absolute;width:90px;left:70px;top:37px;"><input name="intime" type="text"style="width:100px;" class="easyui-datebox" required="required" data-options="formatter:myformatter,parser:myparser"/></div>
  <div style="position:absolute;left:0px;top:80px;font-size:15px;font-family: SimHei;">离店时间</div><div style="position:absolute;width:120px;left:70px;top:77px;"><input id="outtime" type="text" style="width:100px;" class="easyui-datebox" required="required" data-options="formatter:myformatter,parser:myparser"/></div>
  <div style="position:absolute;left:0px;top:120px;font-size:15px;font-family: SimHei;">酒店品牌</div><select name="brand" style="position:absolute;width:100px;left:70px;top:117px;font-size:18px;">
  <option value="希尔顿">希尔顿</option>
  <option value="洲际酒店">洲际酒店</option>
</select>
  
  <div style="position:absolute;left:50px;top:180px;"><input type="image" src="__IMG__/search.png" style="border:0;" ></div>
  </form>
  </div>
  <img src="__IMG__/zhufenge.png" class="zhufenge">
  <div class="zhuhaohuatu">

<div id="demo" style="height:250px;width:280px; overflow:hidden; ">
<div id="demo1">
<a href="http://www.16sucai.com" target="_blank" ><div id="jiudiantu"><img src="__IMG__/xilaideng.png" border="0" /><div id="jiudianming"style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;">喜来登酒店<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">2300</div></div></div></a>
<a href="http://www.16sucai.com" target="_blank" ><div id="jiudiantu"><img src="__IMG__/xilaideng.png" border="0" /><div id="jiudianming"style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;">喜来登酒店<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">2300</div></div></div></a>
<a href="http://www.16sucai.com" target="_blank" ><div id="jiudiantu"><img src="__IMG__/xilaideng.png" border="0" /><div id="jiudianming"style="position:relative;left:190px;top:-80px;font-size:15px;font-family: SimHei;color:#046bb3;">喜来登酒店<div id="jiudianjiage" style="font-size:15px;font-family: SimHei;color:#ff8004;">2300</div></div></div></a>
</div>
<div id="demo2"></div>
</div>

  </div>
</div>
	    
	
   <img src="__IMG__/travelsm.png" class="travelsm">
   <img src="__IMG__/personal.png"class="personal">
   <img src="__IMG__/travel.png" class="travel" >
   <img src="__IMG__/makeplan.png" class="makeplan">
   <img src="__IMG__/index.png"class="index">
   <img src="__IMG__/yuan.png"class="yuan">
   <img src="__IMG__/travelbook.png"class="travelbook">
  <img src="__IMG__/xuanchuan.png"class="xuanchuan">
   <!-- <img src="__IMG__/logo.png"class="logo"> -->
   <img src="__IMG__/phone.png"class="phone">
	
		<img src="__IMG__/register.png"class="register">


<div ><a href="javascript:;"class=" btn-large theme-login"><img src="__IMG__/login.png"class="login"></a>
</div>


<div class="bottom"></div>
  <div class="bottomsm"><span class="bottombiao">旅游超市</span><div class="bottomxuanxiang">住<br>吃货</div></div>
  <div class="bottompersonal"><span class="bottombiao">会员中心</span><div class="bottomxuanxiang1">我的订单<br>我的奖励<br>我的积分<br>我的评价<br>我的信息<br>我的储钱罐旅行计划</span><br>找朋友</div> </div>
  <div class="bottombook"><span class="bottombiao">旅游志</span><div class="bottomxuanxiang">旅游随感<br>写给未来的信</div></div>
 <div class="weishenme"><span class="bottombiao">主题旅游</span><div class="bottomxuanxiang">城市之间<br>学子游<br>年休假<br>美食游</div></div>
  <div class="bottomaboutus"><span class="bottombiao">关于游记</span><div class="bottomxuanxiang">关于我们<br>联系我们<br>一起合作<br>用户协议<br>诚聘英才</div></div>


<img src="__IMG__/steptu.png" class="steptu">
<img src="__IMG__/banquan.png" class="banquan">
<img src="__IMG__/renzhengwang.png" class="renzhengwang">
<img src="__IMG__/kexin.png" class="kexin">
<img src="__IMG__/chengxin.png" class="chengxin">




</div>

<script src="__JS__/index.js" type="text/javascript"></script>
<div class="theme-popover">
     <div class="theme-poptit">
          <a href="javascript:;" title="关闭" class="close">×</a>
          <h3>旅行是一种生活</h3>
     </div>
     <div class="theme-popbod dform">
           <form class="theme-signin" name="loginform" action="<?php echo U('Index/loginVerify/loginVerify');?>" method="post">
                <ol>
                     <li><h4>请登录</h4></li>
                     <li><strong>用户名：</strong><input class="ipt" type="text" name="log" value="jq22" size="20" /></li>
                     <li><strong>密码：</strong><input class="ipt" type="password" name="pwd" value="***" size="20" /></li>
                     <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
                </ol>
           </form>
     </div>
</div>
<div class="theme-popover-mask"></div>
  
</body>
</html>