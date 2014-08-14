<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Language" content="zh-cn" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成都家教网-思问家教网【大学生在职老师上门家教】免中介费免费试讲</title>
<meta name="Keywords" content="成都家教,成都家教网,成都家教中心,成都大学生家教网" />
<meta name="Description" content="成都家教网-思问家教网,成都家教中心是正规家教公司,大学生在职老师上门家教,免中介费,免费试讲,是成都家教行业信赖的第一品牌,家长专线028-6600 9003。" />
<link href="/028jiajiao/Public/css/indexcss.css" rel="stylesheet" type="text/css" />
<meta property="qc:admins" content="15056317776020211211763757" />
<meta name="baidu-site-verification" content="NddB6LVQSF" />

</head>
<body>

﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<link href="/028jiajiao_tp/Public/css/head.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
	<div class="header">
    
		<ul>
       		<span class="welcome">欢迎访问<a href="/" style="color:#E90124">思问家教网</a>，思问家教拥有成都最大师资库，五万在校学生，在职教师的选择</span>
			<li><a href="javascript:window.external.AddFavorite('http://www.028jiajiao.com','全力打造成都家教品牌网站')" target="_self" class="top">收藏我们</a></li>
			<li><a href="/contact.asp" >联系我们</a></li>
			<li><a href="#" onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.028jiajiao.com')" class="top">设为首页</a></li>
			<li><span>服务热线：<font>028-66009003&nbsp;&nbsp;</font></span></li>
		</ul>
	</div>
	<div class="zhongtu">
		<img src="/028jiajiao/Public/images/logosiwen.png" />
     </div>

  <!--导航栏开始位置-->
  <div class="nav">
  	<div id="sw_nav">
	<ul>
    	<li><a class="active-jh" href="/028jiajiao/index.php/Home/Index/index.html" >首 页</a></li>
        <li><a href="/028jiajiao/index.php/Home/Regxy/regxy" >请家教</a></li>
        <li><a href="/028jiajiao/index.php/Home/Regjy/regjy" >做家教</a></li>
        <li><a href="/028jiajiao/index.php/Home/Kuxy/kuxy">学员库</a></li>
        <li><a href="/028jiajiao/index.php/Home/Kujy/kujy" >教员库</a></li>
        <li><a href="/028jiajiao/index.php/Home/Index/news.html" >教育信息</a></li>
        <li><a href="/028jiajiao/index.php/Home/Index/about.html" >思问简介</a></li>
    </ul>
</div>
<script type="text/javascript">
						   
$(document).ready(function(){
 $("#layer_sw").mouseover(function(){
   $("#layer_sw > a").addClass("hover");
   $("#layer_sw div").css({"display":"block"});
 });
 $("#layer_sw").mouseout(function(){
   $("#layer_sw > a").removeClass("hover");
   $("#layer_sw div").css({"display":"none"});
 })
})
</script>
</div>
<!--导航栏结束-->
<!--头部滚动图片-->
<div class="g-cwp s-b1">
  <div class="m-tongji">成都家教网共有<em><?php echo ($jy); ?></em>位教员任您挑选，已成功辅导过<em><?php echo ($xy); ?></em>位学员</div>
  <p class="m-reg-xueyuan"><a href="/register_xueyuan.asp">请家教</a></p>
  <p class="m-reg-xueyuan-a"><a href="register_xueyuan.asp" target="_blank" >如何请家教？</a></p>
  <p class="m-reg-jiaoyuan"><a href="/register_jiaoyuan.asp">做家教</a></p>
  <p class="m-reg-jiaoyuan-a"><a href="register_jiaoyuan.asp" target="_blank">如何做家教？</a></p>
</div>
<!--end-->

</div>
</body>
</html>
<center>
<div class="">
	<div class="navbar"><div class="box">目前所在位置: <a href="/">首页</a> &gt; <a>教员信息库</a> &gt; 教员信息</div></div>	
 	<div class="g-box-list relative">
  <div class="g-jiaoyuan-page f-fl">
    <div class="box">
      <p><span class="f-fr">教员编号：<?php echo ($data["userid"]); ?></span>教员详细信息资料</p>
      <strong style="float:left">基本信息</strong>
	<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td class="f-jiaoyuan-1">姓&nbsp;&nbsp;&nbsp;&nbsp;名</td>
		  <td class="f-jiaoyuan-2"><?php echo (msubstr($data["realname"],0,1)); ?>教员</td>
		  <td class="f-jiaoyuan-3">性&nbsp;&nbsp;&nbsp;&nbsp;别</td>
          <td class="f-jiaoyuan-4"><?php echo ($data["sex"]); ?></td>
          <td class="f-jiaoyuan-5">出生日期</td>
          <td class="f-jiaoyuan-6"><?php echo ($data["birth"]); ?>年<?php echo ($data["month1"]); ?>月</td>
          <td class="f-jiaoyuan-7"></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1">来&nbsp;&nbsp;&nbsp;&nbsp;自</td>
          <td class="f-jiaoyuan-2"><?php echo ($data["jiguan"]); ?></td>
          <td class="f-jiaoyuan-3">民&nbsp;&nbsp;&nbsp;&nbsp;族</td>
          <td class="f-jiaoyuan-4"><?php echo ($data["minzu"]); ?></td>
          <td class="f-jiaoyuan-5">教员类型</td>
          <td class="f-jiaoyuan-6"><?php echo ($data["shenfen"]); ?></td>
          <td class="f-jiaoyuan-7"></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1">目前身份</td>
          <td class="f-jiaoyuan-2"><?php echo ($data["shenfen"]); ?></td>
		   <td class="f-jiaoyuan-3">就读院校</td>
		  <td class="f-jiaoyuan-4"><?php echo ($data["school"]); ?></td>
		  <td class="f-jiaoyuan-5">最高学历</td>
          <td class="f-jiaoyuan-6"><?php echo ($data["education"]); ?></td>
          <td class="f-jiaoyuan-7"></td>
        </tr>
        </table>
        <strong style="float:left">技能信息</strong>
        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td class="f-jiaoyuan-1">所学专业</td>
          <td class="f-jiaoyuan-2"><?php echo ($data["professional"]); ?></td>
          <td class="f-jiaoyuan-3">外&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;语</td>
          <td class="f-jiaoyuan-4"><?php echo ($data["language"]); ?></td>
          <td class="f-jiaoyuan-5">普&nbsp;&nbsp;通&nbsp;&nbsp;话</td>
          <td class="f-jiaoyuan-6"><?php echo ($data["pthua"]); ?></td>
          <td class="f-jiaoyuan-7"></td>
        </tr>
      </table>
        <strong style="float:left">授课信息</strong>
        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td class="f-jiaoyuan-1">教授科目</td>
          <td class="f-jiaoyuan"><?php echo ($data["myfirstjob"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1">其他科目</td>
          <td class="f-jiaoyuan"><?php echo ($data["mysecondjob"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1">授课时间</td>
          <td class="f-jiaoyuan"><?php echo ($data["gongzuoshijian"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1">授课区域</td>
          <td class="f-jiaoyuan"><?php echo ($data["gzdd"]); ?></td>
        </tr>
      </table>
        <strong style="float:left">描述信息</strong>
        <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#ccc">
        <tr>
          <td class="f-jiaoyuan-1">自我描述</td>
          <td class="f-jiaoyuan"><?php echo ($data["ziwomiaoshu"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1">家教经历</td>
          <td class="f-jiaoyuan"><?php echo ($data["jingli"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1">薪水要求</td>
          <td class="f-jiaoyuan">每小时最低<?php echo ($data["shoufei"]); ?>元<br /><a href="#">参照思问家教网薪水标准</a></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1">家长专线</td>
          <td class="f-jiaoyuan"><span style="font-family:'微软雅黑'"><font color="#FB0429" size="+2" >028-66009003</font>(家长请拨打此服务热线，我们竭诚为您推荐满意教员)</span></td>
        </tr>
      </table>
    </div>
  </div>
  <br class="f-cb">
  <div class="zhuangtai absolute">已审核</div>
 <div id="output" class="absolute"></div>
</div>    
</div>		
﻿<style type="text/css">
.bottom_d{
	width:100%;
	padding:5px 0;
	background:url(/028jiajiao/Public/images/bottom1.png) repeat-x;
	border-top:1px solid #D1001D;
	margin-bottom:0;
	
}
.bottom_d table tr td{
	color:#D5D5D5;
	text-align:center;
	font-family:"黑体";
	font-size:13px;
}
.rexian{
	font-weight:700;
	color:#E61534;
	font-style:italic;
	font-size:14px;
	
}
.friendlian{
	width:980px;
	text-align:center;
	margin:0 auto;
	margin-top:20px;
	border-bottom:1px #D1001D solid;
	border-left:2px #D1001D solid;
	border-right:2px #D1001D solid;
	border-bottom:none;
}
.friend_table{
	width:980px;
	margin:0 auto;
	text-align:center;
}
.friend_table tr th {
	font-family:"黑体";
	font-size:14px;
	
}

</style>
<link href="/028jiajiao_tp/Public/js/style.css" rel="stylesheet" type="text/css" />


<div class="friendlian" >
	<table class="friend_table"   cellpadding="0" cellspacing="0" >
    	<tr>
        	<th align="left" height="20px;" bgcolor="#D1001D"><i class="icon-link"> 友情链接：</i></th>
        </tr>
        <tr align="left">
        	
        	<td><a>思问家教网</a>│<a>成都家教网</a>│<a>深圳家教</a>│<a>温州家教网</a>│<a>中国考研网</a>│<a>重庆家教</a>│<a>安徽人事人才网</a>│<a>出国留学</a>│<a>中考</a>│<a>在职研究生招生信息网</a>│<a>上海家教网</a>│<a>芜湖家教网</a>
            </td>
           
          </tr>  	
         <tr align="left">
         	
            <td><a>长沙家教网</a>│<a>济南家教网</a>│<a>人文百科</a>│<a>苏州家教网</a>│<a>北京家教网</a>│<a>安庆家教</a>│<a>成都小升初论坛</a>│<a>GCT考试网</a>│<a>北京大学留学预科</a>│<a>女人帮</a>│
            </td>
           
        </tr>
    </table>
</div >
<div class="bottom_d">
	<table cellpadding="0" cellspacing="0">
    	<tr>
        	
            <td>家长服务热线：<i class="icon-phone "></i><font class="rexian">028-66009003</font > 教师服务热线：<i class="icon-phone "></i><font class="rexian">028-66725630</font>&nbsp;&nbsp;</td>
            
        </tr>
        <tr>
        	<td colspan="2">总部地址：成都市一环路南一段47号（川音大厦803室） 邮编：610000</td>
        </tr>
        <tr>
        	<td colspan="2">Copyright&2003-2013 成都家教网 思问家教网 www.028jiajiao.com  All rights reserved.</td>
        </tr>
    
    </table>

</div>

<div id="kefu1">
	<div class="cs_close"><a href="javascript:;" onClick="$('#kefu1').fadeOut()"><span>关闭</span></a></div>
	<div class="cs_tel"></div>
	<div class="cs_tel_ct">
		<p style="margin-bottom: 0 ; margin-right:50px;"><font size="3" face="微软雅黑" color="#000000">家长专线</font></p>
		<p style="margin-top: 0"><span class="cs_tel_num">028-6600 9003</span></p>
		<p style="margin-bottom: 0;margin-right:50px;"><font size="3" face="微软雅黑" color="#000000">教员专线</font></p>
		<p style="margin-top: 0"><span class="cs_tel_num">028-6672 5630</span></p>
	</div>
	<div class="cs_spr"></div>
	<div class="cs_online"></div>
	<div class="cs_online_ct">
		<div class="cs_online_qq"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1928030088&site=qq&menu=yes" title="思问家教网-家长咨询">家长咨询<img border="0" src="http://wpa.qq.com/pa?p=2:1928030088:51" alt="思问家教网-家长咨询" title="思问家教网-家长咨询" align="absmiddle" /></a></div>
		<div class="cs_online_qq"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1928040088&site=qq&menu=yes" title="思问家教网-教员咨询" >教员咨询<img border="0" src="http://wpa.qq.com/pa?p=2:1928040088:51" alt="思问家教网-教员咨询" title="思问家教网-教员咨询" align="absmiddle" /></a></div>
	</div>

</div>
</center>
</body>
</html>