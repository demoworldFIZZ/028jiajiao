<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="gb2312" />
<link rel="shortcut icon" href="/028jiajiao/Public/favicon.ico" />
<link href="/028jiajiao/Public/css/indexcss.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style3 {color: #999999}
.style6 {color: #FFFFFF; font-weight: bold; }
.style8 {color: #FFFFFF; font-weight: bold; font-size: 14px; }
.text {
	line-height: 20px;
}
.style7 {color: #cc0000}
.xueyuan td{
line-height:30px;
text-align:center;
text-align: center;
}
td .textleft{
text-align: left;
padding-top: 6px;
padding-bottom: 6px;
padding-left: 20px;
padding-right: 20px;
}
.td .txtleft p{
}
-->
</style>
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
        <li><a href="./news.asp" >教育信息</a></li>
        <li><a href="./about.asp" >思问简介</a></li>
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
 <!--学员信息开始-->
 <div class="navbar"><div class="box">目前所有位置: <a href="/">首页</a> &gt;<a href="/xueyuan.asp">学员信息库</a>&gt;学员详细信息</div></div>
<div class="g-box-list relative">
  <div class="g-jiaoyuan-page f-fl">
    <div class="box">
      <p><span class="f-fr">学员编号：<?php echo ($data2["xyid"]); ?></span>学员详细信息资料</p>
      <strong style="float:left">基本信息</strong>
	<table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#dddddd">
        <tr>
          <td class="f-jiaoyuan-1" width="181">编&nbsp;&nbsp;&nbsp;&nbsp;号</td>
          <td class="f-jiaoyuan-2"><?php echo ($data2["xyid"]); ?></td>
          <td class="f-jiaoyuan-3" width="178">家长姓名</td>
          <td class="f-jiaoyuan-4" width="819"><?php echo (msubstr($data2["jzname"],0,1)); echo ($data2["jzsex"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1" width="181">学员性别</td>
          <td class="f-jiaoyuan-2"><?php echo ($data2["xysex"]); ?></td>
          <td class="f-jiaoyuan-3" width="178">学员年级</td>
          <td class="f-jiaoyuan-4" width="819"><?php echo ($data2["xygrade"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1" width="181">家教科目</td>
          <td class="f-jiaoyuan-2"><?php echo ($data2["fdkemu"]); ?></td>
          <td class="f-jiaoyuan-3" width="178">家教价格</td>
          <td class="f-jiaoyuan-4" width="819"><?php echo ($data2["xinchou"]); ?></td>
        </tr>
       <tr>
          <td class="f-jiaoyuan-1" width="181">家教区域</td>
          <td class="f-jiaoyuan-2"><?php echo ($data2["jzdiqu"]); ?></td>
          <td class="f-jiaoyuan-3" width="178">家教地址</td>
          <td class="f-jiaoyuan-4" width="819"><?php echo ($data2["jzdizhi"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1" width="181">家教时间</td>
          <td class="f-jiaoyuan-2" ><?php echo ($data2["skshijian"]); ?></td>
          <td class="f-jiaoyuan-1" width="181">特殊要求</td>
          <td class="f-jiaoyuan-2" ><?php echo ($data2["jzbeizhu"]); ?></td>
        </tr>
         <tr>
          <td class="f-jiaoyuan-1" width="181">教员性别要求</td>
          <td class="f-jiaoyuan-2"><?php echo ($data2["jysex"]); ?></td>
          <td class="f-jiaoyuan-3" width="178">教员学历要求</td>
          <td class="f-jiaoyuan-4" width="819"><?php echo ($data2["jyshenfen"]); ?></td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1" width="181">马上预约</td>
          <td colspan="3"  >

			<div align="left" style="lajiie">
				<font color="#0982BA" size="+1"  face="微软雅黑">教员专线：</font><b><font color="red" size="+2">028-66725630</font></b>（早9-晚11点）</div>
			<div align="left" style="lajiie">
				<font color="#999999">在预约前请先注册，然后查看学员的辅导时间和辅导地点<span lang="zh-cn">与</span>自己是否相符，<span lang="zh-cn">如果没问题可以做</span>请和我们联系。</font></div>
			</td>
        </tr>
        <tr>
          <td class="f-jiaoyuan-1" width="181">服务热线</td>
          <td class="f-jiaoyuan-2 qq" colspan="3"><img src="/028jiajiao/Public/images/yyy.png"></td>
        </tr>
        </table>
      
    </div>
  </div>
  <br class="f-cb">
  <div class="zhaopin absolute">已审核</div>
  <div id="output" class="absolute"></div>
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