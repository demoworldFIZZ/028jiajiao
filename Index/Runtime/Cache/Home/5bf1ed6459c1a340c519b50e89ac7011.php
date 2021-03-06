<?php if (!defined('THINK_PATH')) exit();?>﻿
<style type="text/css">
/* common css ============================================== */
body {
	margin: 0 auto;
	text-align: center;
	font: 12px/1.5 arial;
	color: #242424;
	background: #fff;
}
div {
	text-align: left;
}
:focus {
	outline: none;
}
h4, h3, h2, h1 {
	font-size: 14px;
	margin: 0;
}
form, ul, ol, dl, dd, p {
	margin: 0;
	padding: 0;
}
li {
	list-style-type: none;
}
img {
	border: none;
	vertical-align: middle;
}
button, input, select, textarea {
	font-size: 1em;
	margin: 0;
	font-family: tahoma, arial, simsun, sans-serif;
	color: #484848;
}
a {
	color: #f27f02;
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
sup {
	vertical-align: text-top;
}
sub {
	vertical-align: text-bottom;
}
del {
	color: #686868;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
tr, td {
	border: 1px solid #ddd;
}
tbody, table {
	border: 1px solid #ddd
}
/* for font & text & tag =================================== */
.red {
	color: red!important;
}
.gray {
	color: #686868!important;
}
.hasDefaultText {
	color: #999;
}
.orange {
	color: #f60!important;
}
.green {
	color: #79a605!important;
}
.blue {
	color: #0057b0!important;
}
b {
	font-weight: normal;
	display: inline-block;
	margin: 0 8px;
	color: #f27f02;
}
/* for margin & padding | width & height =================== */
.mb10 {
	margin-bottom: 10px;
}
.mb18 {
	margin-bottom: 18px;
}
.mb22 {
	margin-bottom: 22px;
}
.mt10 {
	margin-top: 10px;
}
.mr20 {
	margin-right: 20px;
}
.p10 {
	padding: 10px;
}
.tl {
	text-align: left
}
.tr {
	text-align: right
}
.tc {
	text-align: center
}
.ml10 {
	margin-left: 10px;
}
.mr10 {
	margin-right: 10px;
}
/* class css ============================ class css ======== */
.fl {
	float: left;
	display: inline;
}
.fr {
	float: right;
	display: inline;
}
.clear {
	clear: both;
	height: 0;
	overflow: hidden;
}
.lireset li {
	background: url("images/arrow1.gif") no-repeat left 8px;
	margin-bottom: 4px;
	padding-left: 15px;
}
.lireset2 li {
	background: url("images/arrow2.gif") no-repeat left 8px;
	margin-bottom: 4px;
	padding-left: 15px;
}
.download {
	padding: 6px 0 6px 70px;
	line-height: 26px;
	height: 64px;
	font-size: 16px;
	font-family: "microsoft yahei";
	background: url(images/download.png) no-repeat;
	white-space: nowrap;
}
.donate {
	padding: 15px 5px 6px 72px;
	height: 55px;
	width: 213px;
	display: block;
	color: #8b6300;
	border: 5px solid #F27F02;
	background: url(images/donate.png) 3px center no-repeat #fae4ae;
}
.donate:hover {
	text-decoration: none;
	background-color: #fff79f;
}
/*--find height for float elements --------------------------*/
.cls:after {
	content: "";
	font-size: 0;
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
* html .cls {
	zoom: 1;
} /* IE6 */
*:first-child+html .cls {
	zoom: 1;
} /* IE7 */
.wraper {
	width: 980px;
	margin-left: auto;
	margin-right: auto;
}
.header {
	background: url(images/header-bg.gif) repeat-x left bottom;
}
.header h1 {
	font-size: 34px;
	line-height: 52px;
	font-weight: normal;
	padding: 6px 0 8px 0;
}
.header h1 a {
	color: #fff;
}
.header .wraper {
	height: 72px;
	position: relative;
}
.header .nav {
	position: absolute;
	right: -1px;
	top: 0;
	font-family: "microsoft yahei";
}
.header .nav li {
	float: left;
}
.header .nav li a {
	font-size: 20px;
	color: #fff;
	height: 67px;
	line-height: 67px;
	text-decoration: none;
	padding-left: 15px;
	padding-right: 15px;
	text-align: center;
	float: left;
	margin-right: 1px;
	background: url(images/navbg.gif) repeat-x;
}
.header .nav li a.current, .header .nav li a:hover {
	border-bottom: 5px solid #f27f02;
}
.gallery {
	height: 496px;
	overflow: hidden;
	background: url(images/gallerry-bg.gif) 0 0 repeat-x #ccc;
	border-bottom: 5px solid #EAEAEA;
}
.gallery li {
	background-color: #fff;
	overflow: hidden;
}
.roundabout-holder {
	width: 646px;
	height: 496px;
	margin: 0 auto;
}
.roundabout-moveable-item {
	width: 646px;
	height: 416px;
	cursor: pointer;
	border: 3px solid #ccc;
	border: 3px solid rgba(255,255,255,0.5);
	border-radius: 4px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
}
.roundabout-moveable-item img {
	width: 100%;
}
.roundabout-in-focus {
	cursor: default;
	border: 3px solid rgba(255,255,255,0.8);
}
.main {
	background-color: #fff;
	color: #424242;
	padding: 20px 0 30px;
	line-height: 22px;
}
.aside {
	width: 300px;
}
.main h3, .main h2 {
	color: #212222;
	font-size: 26px;
	font-weight: normal;
	line-height: 1.2em;
	margin-bottom: 22px;
	font-family: "microsoft yahei";
}
.main h3 span, .main h2 span {
	color: #888;
}
.content {
	width: 650px;
}
.main p {
	margin-bottom: 18px;
}
.latestcomment li {
	max-height: 36px;
	line-height: 18px;
	overflow: hidden;
	margin-bottom: 16px;
	color: #000;
}
.latestcomment a {
	color: #8a8a8a;
	text-decoration: underline;
}
.latestcomment a:hover {
	text-decoration: none;
}
.footer {
	color: #fff;
	height: 20px;
	padding: 20px 0 22px 0;
	border-top: 5px solid #eee;
}
.commentlist cite, .commentlist em {
	font-style: normal;
}
.comment .tit {
	border-bottom: 1px dashed #CCCCCC;
	font-weight: bold;
	margin-bottom: 10px;
	padding-bottom: 6px;
}
.comment .tit span.gray {
	font-weight: normal;
}
.comment .comment-meta a {
	color: #999;
	cursor: default;
}
.comment .comment-meta a:hover {
	text-decoration: none;
}
.commentlist p {
	color: #333333;
	line-height: 23px;
	margin: 8px 0;
}
.commentlist li {
	color: #666666;
	float: none;
	height: auto;
	margin: 0;
	min-height: 50px;
	padding: 10px 10px 10px 72px;
	position: relative;
	width: 898px;
}
.commentlist li.graybg {
	background-color: #eee;
}
.commentlist li img {
	border: 1px solid #DDDDDD;
	height: 32px;
	left: 10px;
	padding: 4px;
	position: absolute;
	top: 13px;
	width: 32px;
}
.commentlist li .said {
	margin: 10px 0;
}
.sendcomment li {
	padding: 5px 0;
}
.sendcomment .inputxt {
	border: 1px solid #CCCCCC;
	padding: 5px;
	width: 230px;
}
.sendcomment textarea {
	border: 1px solid #CCCCCC;
	height: 160px;
	overflow: auto;
	padding: 5px;
	width: 566px;
}
.sendcomment .btn_sub {
	cursor: pointer;
	padding: 8px 20px;
}
.pagenav {
	padding: 10px 0;
}
.pagenav a {
	display: inline-block;
	border: 1px solid #ddd;
	padding: 0 4px 1px;
}
.pagenav b {
	color: red;
}
.pagenav * {
	margin-right: 6px;
}
.wp_syntax {
	margin-bottom: 22px!important;
}
.post p {
	margin-bottom: 8px;
}
.questionlist dt {
	padding: 5px 15px;
	color: #333;
	font-size: 14px;
	background-color: #eee;
}
.questionlist dd {
	padding: 6px 15px 15px;
	margin-bottom: 10px;
	color: #666;
}
.questionlist p {
	margin: 8px 0;
}
/*==========以下部分是Validform必须的===========*/
.Validform_checktip {
	margin-left: 8px;
	line-height: 20px;
	height: 20px;
	overflow: hidden;
	color: #039;
	font-size: 12px;
}
.Validform_right {
	color: #71b83d;
	padding-left: 20px;
	background: url(images/right.png) no-repeat left center;
}
.Validform_wrong {
	color: red;
	padding-left: 20px;
	white-space: nowrap;
	background: url(images/error.png) no-repeat left center;
}
.Validform_loading {
	padding-left: 20px;
	background: url(images/onLoad.gif) no-repeat left center;
}
.Validform_error {
	background-color: #ffe7e7;
}
#Validform_msg {
	color: #7d8289;
	font: 12px/1.5 tahoma, arial, \5b8b\4f53, sans-serif;
	width: 280px;
	-webkit-box-shadow: 2px 2px 3px #aaa;
	-moz-box-shadow: 2px 2px 3px #aaa;
	background: #fff;
	position: absolute;
	top: 0px;
	right: 50px;
	z-index: 99999;
	display: none;
filter: progid:DXImageTransform.Microsoft.Shadow(Strength=3, Direction=135, Color='#999999');
	box-shadow: 2px 2px 0 rgba(0, 0, 0, 0.1);
}
#Validform_msg .iframe {
	position: absolute;
	left: 0px;
	top: -1px;
	z-index: -1;
}
#Validform_msg .Validform_title {
	line-height: 25px;
	height: 25px;
	text-align: left;
	font-weight: bold;
	padding: 0 8px;
	color: #fff;
	position: relative;
	background-color: #999;
	background: -moz-linear-gradient(top, #999, #666 100%);
	background: -webkit-gradient(linear, 0 0, 0 100%, from(#999), to(#666));
filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#999999', endColorstr='#666666');
}
#Validform_msg a.Validform_close:link, #Validform_msg a.Validform_close:visited {
	line-height: 22px;
	position: absolute;
	right: 8px;
	top: 0px;
	color: #fff;
	text-decoration: none;
}
#Validform_msg a.Validform_close:hover {
	color: #ccc;
}
#Validform_msg .Validform_info {
	padding: 8px;
	border: 1px solid #bbb;
	border-top: none;
	text-align: left;
}
.g-wrap {
	width: 680px;
	margin: 0 auto;
}
.g-wrap h1 {
	
	line-height: 40px;
	font-size: 18px;
}
.need {
	color: #f00;
	font-size: 18px;
}
.zjs {
	width: 440px;
	height: 120px;
}
.jupimg{width: 260px;}
h1{font-size:24px;}
em{color:#f00;padding:0 5px;}
p{font-size:14px;}
.fdz{width:300px;}
.km option{backgrund:#f00}
.rt2{margin-right:2px;}
.dq label{margin-right:15px;}
</style>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/Validform_v5.3.2.js"></script>
<link rel="stylesheet" href="../js/themes/default/default.css" />
<script type="text/javascript" src="scripts/swfobject.js"></script>
<script type="text/javascript" src="scripts/fullAvatarEditor.js"></script>
<script src="../js/kindeditor-all.js"></script>
<script>
KindEditor.ready(function(K) {
	var editor = K.editor({
		allowFileManager : true
		});
	K('#image3').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				showRemote : false,
				imageUrl : K('#url3').val(),
				clickFn : function(url, title, width, height, border, align) {
					K('#url3').val(url);
					editor.hideDialog();
			}
			});
		});
	});
});
</script>
</head>
<body>
<div class="g-wrap">
<h1>教员注册</h1>

<p>注：标注<em>*</em>的都必需正确填写，否者通不过审核。教师请致电028-66725630</p>
<form name="registerform" class="registerform" method="post" action="/028jiajiao_tp/Regjy/Create">
<input type="hidden" name="jip" value="<%=ip%>">
  <table width="100%" border="1" align="center" cellpadding="5" cellspacing="1" style="table-layout:fixed;border-top:3px solid #b9121b;background:#fff">
    <tbody>
      <tr>
        <td class="need" style="width:10px;">*</td>
        <td style="width:90px;">请选择类型：</td>
        <td style="width:350px;"><input type="radio" name="property" value="jys" id="jys" class="pr1" datatype="*" nullmsg="请选择教员性质！" />
          <label for="jys">在校大学生研究生</label>
          <input type="radio" name="property" value="jyt" id="jyt" class="pr1" />
          <label for="jyt">在职退休教师</label></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
    </tbody>
    <!--公共选项-->
    <tbody width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="need">*</td>
        <td>真实姓名：</td>
        <td><input type="text" value="" name="jRealName" class="inputxt" datatype="zh1" nullmsg="请输入中文名！" errormsg="输入真实姓名！" /></td>
        <td><div class="Validform_checktip">网站只公布某老师。</div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>密码：</td>
        <td><input type="password" value="" name="userpassword" class="inputxt" datatype="*6-16" nullmsg="请设置密码！" errormsg="密码范围在6~16位之间！" /></td>
        <td><div class="Validform_checktip">密码范围在6~16位之间！</div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>确认密码：</td>
        <td><input type="password" value="" name="userpassword2" class="inputxt" datatype="*" recheck="userpassword" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" /></td>
        <td><div class="Validform_checktip">再次输入刚才的密码！</div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>性别：</td>
        <td><input type="radio" value="男" name="jsex" id="male" class="pr1" datatype="*" nullmsg="请填写你的性别！" />
          <label for="male">男</label>
          <input type="radio" value="女" name="jsex" id="female" class="pr1" />
          <label for="female">女</label></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>生日</td>
        <td>
	        <script language="javascript" type="text/javascript" src="/js/My97DatePicker/WdatePicker.js"></script>
          <input class="Wdate" name="shengri" type="text" onClick="WdatePicker()" value="">
		  </td>
        <td><div class="Validform_checktip">正确填写有些家长对年龄有要求</div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>民族：</td>
        <td><input type="text" value="" name="jminzu" class="inputxt" datatype="zh2" nullmsg="请输入你的民族！" errormsg="输入你的真实民族！" /></td>
        <td><div class="Validform_checktip">汉族填写：汉</div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>籍贯：</td>
        <td><select name="jjiguan" id="jiguan" datatype="*" nullmsg="来自星星的你?" style="width:80px">
            <option value="" selected >请选择</option>
            <option value="北京">北京</option>
            <option value="上海">上海</option>
            <option value="天津">天津</option>
            <option value="重庆">重庆</option>
            <option value="河北">河北</option>
            <option value="山西">山西</option>
            <option value="内蒙古">内蒙古</option>
            <option value="辽宁">辽宁</option>
            <option value="吉林">吉林</option>
            <option value="黑龙江">黑龙江</option>
            <option value="江苏">江苏</option>
            <option value="浙江">浙江</option>
            <option value="安徽">安徽</option>
            <option value="福建">福建</option>
            <option value="江西">江西</option>
            <option value="山东">山东</option>
            <option value="河南">河南</option>
            <option value="湖北">湖北</option>
            <option value="湖南">湖南</option>
            <option value="广东">广东</option>
            <option value="广西">广西</option>
            <option value="海南">海南</option>
            <option value="四川">四川</option>
            <option value="贵州">贵州</option>
            <option value="云南">云南</option>
            <option value="西藏">西藏</option>
            <option value="陕西">陕西</option>
            <option value="甘肃">甘肃</option>
            <option value="宁夏">宁夏</option>
            <option value="青海">青海</option>
            <option value="新疆">新疆</option>
            <option value="香港">香港</option>
            <option value="澳门">澳门</option>
            <option value="台湾">台湾</option>
          </select></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
    </tbody>
    <!--在校大学生-->
    <tbody class="jys" style="display:none;">
      <tr>
        <td class="need">*</td>
        <td>就读学校：</td>
        <td><select onChange="form.jySchool.value=this.value" style="width:120px">
            <option value="" selected >请在以下列表中选择</option>
            <option value="四川大学(望江校区)">四川大学(望江校区)</option>
            <option value="四川大学(华西校区)">四川大学(华西校区)</option>
            <option value="四川大学(江安校区)">四川大学(江安校区)</option>
            <option value="四川师范大学(本部)">四川师范大学(本部)</option>
            <option value="四川音乐学院(本部)">四川音乐学院(本部)</option>
            <option value="电子科技大学(沙河校区)">电子科技大学(沙河校区)</option>
            <option value="西南交通大学(校本部)">西南交通大学(校本部)</option>
            <option value="西南交通大学(新校区)">西南交通大学(新校区)</option>
            <option value="西南财经大学(校本部)">西南财经大学(校本部)</option>
            <option value="西南财经大学(新校区)">西南财经大学(新校区)</option>
            <option value="成都理工大学">成都理工大学</option>
            <option value="川外成都学院">川外成都学院</option>
            <option value="成都大学">成都大学</option>
            <option value="成都体育学院">成都体育学院</option>
            <option value="成都中医药大学">成都中医药大学</option>
            <option value="成都信息工程学院">成都信息工程学院</option>
            <option value="西南民族大学">西南民族大学</option>
            <option value="西南石油大学">西南石油大学</option>
            <option value="教育学院">教育学院</option>
            <option value="在职高中老师">在职高中老师</option>
            <option value="在职初中老师">在职初中老师</option>
            <option value="在职小学老师">在职小学老师</option>
            <option value="退休高中老师">退休高中老师</option>
            <option value="退休初中老师">退休初中老师</option>
            <option value="退休小学老师">退休小学老师</option>
            <option value="四川师范大学(成龙校区)">四川师范大学(成龙校区)</option>
            <option value="四川师范大学(东校区)">四川师范大学(东校区)</option>
            <option value="电子科技大学(清水河校区)">电子科技大学(清水河校区)</option>
            <option value="四川音乐学院(新校区)">四川音乐学院(新校区)</option>
          </select>&nbsp;&nbsp;其它&nbsp;&nbsp;<input type="text" value="" class="inputxt" name="jySchool" datatype="*" errormsg="至少填写一项！" nullmsg="还没毕业就把学校忘记了?" /></td>
        <td><div class="Validform_checktip">选项里没有该校请自行填写</div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>目前身份：</td>
        <td><select name="jsshenfen" id="shenfen" datatype="*" style="width:150px">
            <option value="" selected >请在以下列表中选择</option>
            <option value="在校大一学生">在校大一学生</option>
            <option value="在校大二学生">在校大二学生</option>
            <option value="在校大三学生">在校大三学生</option>
            <option value="在校大四学生">在校大四学生</option>
            <option value="在校研一学生">在校研一学生</option>
            <option value="在校研二学生">在校研二学生</option>
            <option value="在校研三学生">在校研三学生</option>
            <option value="在校博士学生">在校博士学生</option>
            <option value="留学生">留学生</option>
            <option value="其它">其它</option>
          </select></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>就读专业：</td>
        <td><input type="text" value="" class="inputxt" name="jsProfessional" datatype="zh3" errormsg="连你学的专业都忘记了?" nullmsg="你就读的专业是什么?" /></td>
        <td><div class="Validform_checktip">目前所学的专业！</div></td>
      </tr>
      <tr>
        <td class="need"></td>
        <td>其它特长：</td>
        <td><input type="text" value="" name="jtechang" class="inputxt" datatype="zh3" ignore="ignore" nullmsg="请输入中文！" errormsg="输入信息有错误！" /></td>
        <td><div class="Validform_checktip">如：唱歌跳舞等，必需是中文！</div></td>
      </tr>
    </tbody>
    
    <!--在职教师-->
    <tbody class="jyt" style="display:none;">
      <tr>
        <td class="need">*</td>
        <td>任教学校：</td>
        <td><input type="text" value="" name="jytSchool" class="inputxt" datatype="s3-14" errormsg="请正确输入任教学校！"  /></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>任教科目：</td>
        <td><input type="text" value="" name="jtProfessional" class="inputxt" datatype="s2-14" errormsg="请正确输入任教科目！"  /></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>专业职称:</td>
        <td><select name="jzhicheng" size="1" id="zhicheng" datatype="*" style="width:150px">
            <option value="" selected >请选择</option>
            <option>三级教师</option>
            <option>二级教师</option>
            <option>一级教师</option>
            <option>高级教师</option>
            <option>正高级教师</option>
            <option>其它</option>
          </select></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>现在身份:</td>
        <td><select name="jtshenfen" size="1" id="shenfen" datatype="*" style="width:150px">
        <option value="" selected >请在以下列表中选择</option>
            <option value="在职幼儿教师" >在职幼儿教师</option>
            <option value="在职小学教师" >在职小学教师</option>
            <option value="在职初中教师" >在职初中教师</option>
            <option value="在职高中教师" >在职高中教师</option>
            <option value="在职大学教师" >在职大学教师</option>
            <option value="进修小学教师">进修小学教师</option>
            <option value="进修初中教师">进修初中教师</option>
            <option value="进修高中教师">进修高中教师</option>
            <option value="退休幼儿教师" >退休小学教师</option>
            <option value="退休小学教师" >退休幼儿教师</option>
            <option value="退休初中教师" >退休初中教师</option>
            <option value="退休高中教师" >退休高中教师</option>
            <option value="退休大学教师" >退休大学教师</option>
            <option value="专职家教教师" >专职家教教师</option>
            <option value="外籍教师" >外籍教师 </option>
          </select></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
    </tbody>
    <tbody width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="need">*</td>
        <td>工作经验：</td>
        <td><select size="1" name="jjingyan" datatype="*" errormsg="赶紧加入我们就有工作经验。" nullmsg="没工作过,那就赶紧当次家教！" style="width:160px">
            <option value="" selected>工作年限</option>
            <option value="0年">我没工作过</option>
            <option value="1年">1年以下工作经验</option>
            <option value="1~3年">1~3年工作经验</option>
            <option value="3~5年">3~5年工作经验</option>
            <option value="5~8年">5~8年工作经验</option>
            <option value="8~10年">8~10年工作经验</option>
            <option value="10年以">10年以上工作经验</option>
          </select></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>外语程度：</td>
        <td><select datatype="*" name="jlanguage" nullmsg="好歹你也学过一门外语吧。" style="width:80px">
            <option value="" selected>语种</option>
            <option value="英语">英语</option>
            <option value="日语">日语</option>
            <option value="法语">法语</option>
            <option value="德语">德语</option>
            <option value="俄语">俄语</option>
            <option value="朝鲜语">朝鲜语</option>
            <option value="西班牙语">西班牙语</option>
            <option value="阿拉伯语">阿拉伯语</option>
            <option value="其它">其它</option>
          </select>
          <select datatype="*" name="jlanlevel" errormsg="输入信息有错误！" nullmsg="你的外语水平是多少级?" style="width:80px">
            <option value="" selected>级别</option>
            <option value="四级">四级</option>
            <option value="八级">八级</option>
            <option value="六级">六级</option>
            <option value="熟练">熟练</option>
            <option value="精通">精通</option>
            <option value="良好">良好</option>
            <option value="一般">一般</option>
          </select></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
      <tr>
        <td class="need">*</td>
        <td>普通话程度：</td>
        <td><select datatype="*" name="jpthua" style="width:80px">
		    <option value="" selected >请选择</option>
            <option value="标准">标准</option>
            <option value="一般">一般</option>
            <option value="较差">较差</option>
          </select></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
        <tr>
      
      <td class="need">*</td>
      <td>可辅导科目：</td>
        <td class="km">
      <p style="height:20px; border-bottom:1px solid #ddd;margin-bottom:5px; color:gray">双击添加或删除 / 最多可选十项</p>

      <select ondblclick="removeItem();" id="sltSrc" multiple="true" style="height:120px;width:140px">
        <option value="学龄前课程">学龄前课程</option>
        <option value="小学全科">小学全科</option>
        <option value="小学数学">小学数学</option>
        <option value="小学英语">小学英语</option>
        <option value="小学语文">小学语文</option>
        <option value="小学奥数">小学奥数</option>
        <option value="初中全科">初中全科</option>
        <option value="初中数理化">初中数理化</option>
        <option value="初中数学">初中数学</option>
        <option value="初中物理">初中物理</option>
        <option value="初中化学">初中化学</option>
        <option value="初中英语">初中英语</option>
        <option value="初中语文">初中语文</option>
        <option value="初中奥数">初中奥数</option>
        <option value="高中文综">高中文综</option>
        <option value="高中理综">高中理综</option>
        <option value="高中全科">高中全科</option>
        <option value="高中数理化">高中数理化</option>
        <option value="高中数学">高中数学</option>
        <option value="高中物理">高中物理</option>
        <option value="高中化学">高中化学</option>
        <option value="高中英语">高中英语</option>
        <option value="高中语文">高中语文</option>
        <option value="高中生物">高中生物</option>
        <option value="高中地理">高中地理</option>
        <option value="高中历史">高中历史</option>
        <option value="大学全科">大学全科</option>
        <option value="大学高等数学">大学高等数学</option>
        <option value="大学英语四级">大学英语四级</option>
        <option value="大学英语六级">大学英语六级</option>
        <option value="大学英语八级">大学英语八级</option>
        <option value="大学专业课">大学专业课</option>
        <option value="新概念英语">新概念英语</option>
        <option value="剑桥英语">剑桥英语</option>
        <option value="GMAT">GMAT</option>
        <option value="GRE">GRE</option>
        <option value="LSAT">LSAT</option>
        <option value="TOEFL">TOEFL</option>
        <option value="微软证书">微软证书</option>
        <option value="中国CPA">中国CPA</option>
        <option value="美国CPA">美国CPA</option>
        <option value="雅思">雅思</option>
        <option value="音乐启蒙">音乐启蒙</option>
        <option value="表演舞蹈">表演舞蹈</option>
        <option value="雕塑">雕塑</option>
        <option value="摄影">摄影</option>
        <option value="书法">书法</option>
        <option value="美术">美术</option>
        <option value="吉他">吉他</option>
        <option value="手风琴">手风琴</option>
        <option value="电子琴">电子琴</option>
        <option value="小提琴大提琴级">小提琴大提琴级</option>
        <option value="古筝">古筝</option>
        <option value="钢琴">钢琴</option>
        <option value="其他西洋乐器">其他西洋乐器</option>
        <option value="卡拉OK/歌咏">卡拉OK/歌咏</option>
        <option value="作曲与音乐理论">作曲与音乐理论</option>
        <option value="地方与民族乐器">地方与民族乐器</option>
        <option value="象棋">象棋</option>
        <option value="围棋">围棋</option>
        <option value="交谊舞">交谊舞</option>
        <option value="保龄球">保龄球</option>
        <option value="健身减肥养生">健身减肥养生</option>
        <option value="高尔夫">高尔夫</option>
        <option value="体操">体操</option>
        <option value="中国武术">中国武术</option>
        <option value="拳击柔道跆拳道">拳击柔道跆拳道</option>
        <option value="滑雪滑冰旱冰">滑雪滑冰旱冰</option>
        <option value="游泳潜水跳水">游泳潜水跳水</option>
        <option value="乒乓球">乒乓球</option>
        <option value="羽毛球">羽毛球</option>
        <option value="网球">网球</option>
        <option value="排球">排球</option>
        <option value="足球">足球</option>
        <option value="篮球">篮球</option>
        <option value="体育健身类其他">体育健身类其他</option>
        <option value="中国地方方言">中国地方方言</option>
        <option value="普通话">普通话</option>
        <option value="英语读写听">英语读写听</option>
        <option value="交际英语">交际英语</option>
        <option value="商贸英语">商贸英语</option>
        <option value="英语写作">英语写作</option>
        <option value="英语口语">英语口语</option>
        <option value="法语">法语</option>
        <option value="德语">德语</option>
        <option value="日语">日语</option>
        <option value="韩语">韩语</option>
        <option value="俄语">俄语</option>
        <option value="西班牙语">西班牙语</option>
        <option value="计算机基础与操作">计算机基础与操作</option>
        <option value="计算机绘图">计算机绘图</option>
        <option value="数据库">数据库</option>
        <option value="桌面出版技术">桌面出版技术</option>
        <option value="信息系统">信息系统</option>
        <option value="因特网">因特网</option>
        <option value="Pascal & C++">Pascal & C++</option>
        <option value="VBasic & JavaScript">VBasic & JavaScript</option>
        <option value="Linux & Unix">Linux & Unix</option>
        <option value="网络工程">网络工程</option>
        <option value="微软办公软件">微软办公软件</option>
        <option value="Macintosh/OS">Macintosh/OS</option>
        <option value="Perl编程">Perl编程</option>
        <option value="SAS">SAS</option>
        <option value="技术写作">技术写作</option>
        <option value="网页设计与制作">网页设计与制作</option>
        <option value="网站开发">网站开发</option>
        <option value="PHOTOSHOP">PHOTOSHOP</option>
        <option value="微软视窗操作系统">微软视窗操作系统</option>
        <option value="XML">XML</option>
        <option value="Java">Java</option>
        <option value="其他">其他</option>
      </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <select ondblclick="addItem();" id="sltTarget" name="jMyFirstJob" datatype="selectItem" errormsg="你会不会教的太多？" nullmsg="确定你什么都能教吗?" multiple="true" style="height:120px;width:140px"></select>
          </td>  
          <td>
          <div class="Validform_checktip"></div>
          </td>
          </tr>


          <tr>
          <td class="need">*</td>
          <td>可辅导区域：</td>
          <td class="dq">
<input class="rt2" id="dq1" type="checkbox"  value="成都市内" datatype="need2" name="jgzdd" nullmsg="请选择区域!" /><label for="dq1">成都市内</label>
<input name="jgzdd" class="rt2" id="dq2" type="checkbox"  value="武侯区"/><label for="dq2">武侯区</label>
<input name="jgzdd" class="rt2" id="dq3" type="checkbox"  value="锦江区" /><label for="dq3">锦江区</label>
<input name="jgzdd" class="rt2" id="dq4" type="checkbox"  value="青羊区" /><label for="dq4">青羊区</label><br />
<input name="jgzdd" class="rt2" id="dq5" type="checkbox"  value="金牛区" /><label for="dq5">金牛区</label>
<input name="jgzdd" class="rt2" id="dq6" type="checkbox"  value="高新区" /><label for="dq6">高新区</label>
<input name="jgzdd" class="rt2" id="dq7" type="checkbox"  value="成华区" /><label for="dq7">成华区</label>
<input name="jgzdd" class="rt2" id="dq8" type="checkbox"  value="新都" /><label for="dq8">新都</label><br />
<input name="jgzdd" class="rt2" id="dq9" type="checkbox"  value="双流" /><label for="dq9">双流</label>
<input name="jgzdd" class="rt2" id="dq10" type="checkbox"  value="郫县" /><label for="dq10">郫县</label>
<input name="jgzdd" class="rt2" id="dq11" type="checkbox"  value="温江" /><label for="dq11">温江</label>
<input name="jgzdd" class="rt2" id="dq12" type="checkbox"  value="龙泉" /><label for="dq12">龙泉</label>
<input name="jgzdd" class="rt2" id="dq13" type="checkbox"  value="其他" /><label for="dq13">其他</label>
      </td>
      <td><div class="Validform_checktip"></div></td>
    </tr>

    <tr>
      <td class="need">*</td>
      <td>从何了解本站：</td>
      <td><select name="jinfo_from" id="info_from" datatype="*" style="width:180px">
          <option value="" selected>请选择</option>
          <option value="引擎搜索">引擎搜索</option>
          <option value="网上/bbs广告">网上/bbs广告</option>
          <option value="EMAIL广告">EMAIL广告</option>
          <option value="朋友介绍">朋友介绍 </option>
          <option value="校园活动合作">校园活动合作</option>
          <option value="传单发送">传单发送 </option>
          <option value="驻校代表">驻校代表 </option>
          <option value="海报宣传">海报宣传 </option>
          <option value="报纸广告">报纸广告 </option>
          <option value="电台广播">电台广播 </option>
          <option value="其它方式">其它方式 </option>
        </select></td>
      <td><div class="Validform_checktip"></div></td>
    </tr>
    <tr>
      <td class="need">*</td>
      <td>可辅导方式：</td>
      <td><input name="jfudaofangshi" class="rt2" id="fbr" type="checkbox"  value="本人上门" datatype="sc" nullmsg="请选择辅导方式！" />
        <label for="fbr">本人上门</label>
        <input name="jfudaofangshi" class="rt2" id="fdf" type="checkbox"  value="对方上门" />
        <label for="fdf">对方上门</label></td>
      <td><div class="Validform_checktip">单选或全选！</div></td>
    </tr>
    <tr>
      <td class="need">*</td>
      <td>教学收费：</td>
      <td><select name="jshoufei" id="shoufei" datatype="*" style="width:140px">
	      <option value="" selected>请选择</option>
          <option value="面议">面议</option>
          <option value="20">20元 / 小时</option>
          <option value="30">30元 / 小时</option>
          <option value="40">40元 / 小时</option>
          <option value="50">50元 / 小时</option>
          <option value="60">60元 / 小时</option>
          <option value="70">70元 / 小时</option>
          <option value="80">80元 / 小时</option>
          <option value="90">90元 / 小时</option>
          <option value="100">100元 / 小时</option>
		  <option value="110">110元 / 小时</option>
		  <option value="120">120元 / 小时</option>
		  <option value="130">130元 / 小时</option>
		  <option value="140">140元 / 小时</option>
		  <option value="150">150元 / 小时</option>
		  <option value="160">160元 / 小时</option>
		  <option value="170">170元 / 小时</option>
		  <option value="180">180元 / 小时</option>
		  <option value="190">190元 / 小时</option>
		  <option value="200">200元 / 小时</option>
        </select></td>
      <td><div class="Validform_checktip">请选择最低收费！</div></td>
    </tr>
    <tr>
      <td class="need">*</td>
      <td>移动电话：</td>
      <td><input type="text" value="" class="inputxt mobile" name="jmob" ignore="ignore" datatype="m" errormsg="手机号码格式不对！" /></td>
      <td><div class="Validform_checktip">手机与固话至少填写一项</div></td>
    </tr>
    <tr>
      <td class="need">*</td>
      <td>座机电话：</td>
      <td><input type="text" value="" class="inputxt tel" name="jtel" datatype="phone" errormsg="电话为7到12位数字！" nullmsg="在上面填你的手机号吧！" /></td>
      <td><div class="Validform_checktip"></div></td>
    </tr>
    <tr>
      <td class="need">*</td>
      <td>电子邮箱：</td>
      <td><input type="text" value="" class="inputxt" name="jUserEmail" datatype="e" errormsg="输入的邮箱格式不对！" /></td>
      <td><div class="Validform_checktip"></div></td>
    </tr>
    <tr>
      <td class="need">*</td>
      <td>QQ：</td>
      <td><input type="text" value="" class="inputxt" name="jqq" datatype="n5-11" errormsg="老马家企鹅数量有误在数数！" /></td>
      <td><div class="Validform_checktip"></div></td>
    </tr>
    <tr>
      <td class="need">*</td>
      <td>居住地址：</td>
      <td><input type="text" value="" class="inputxt fdz" name="jaddress" datatype="*4-30" errormsg="请填写你居住的地址！" /></td>
      <td><div class="Validform_checktip"></div></td>
    </tr>
      <td class="need"></td>
      <td colspan="3">上传头像：</td>
    </tr>
    <tr>
      <td class="need"></td><td colspan="3"><input type="hidden" name="jupimg" id="url3" value="" />
		<div id="aaa"></div>
		<script type="text/javascript">
            function showUp() {
				document.getElementById("aaa").innerHTML = "<p id=\"swfContainer\">本组件需要安装Flash Player后才可使用，请从<a href=\"http://www.adobe.com/go/getflashplayer\">这里</a>下载安装。</p>";
                var swf = new fullAvatarEditor("swfContainer", {
					    id: 'swf',
						upload_url: 'Upload/Upload.asp',
						src_upload:1,
						avatar_sizes: '140*180',
						avatar_sizes_desc: '140*180像素',
					}, function (msg) {
						switch(msg.code)
						{
							//case 1 : alert("页面成功加载了组件！");break;
							//case 2 : alert("已成功加载默认指定的图片到编辑面板。");break;
							case 3 :
								if(msg.type == 0)
								{
									alert("摄像头已准备就绪且用户已允许使用。");
								}
								else if(msg.type == 1)
								{
									alert("摄像头已准备就绪但用户未允许使用！");
								}
								else
								{
									alert("摄像头被占用！");
								}
							break;
							case 5 : 
								if(msg.type == 0)
								{
									if(msg.content.sourceUrl)
									{
										//alert("原图已成功保存至服务器，url为：\n" +　msg.content.sourceUrl);
									}
									//alert("头像已成功保存至服务器，url为：\n" + msg.content.avatarUrls.join("\n"));
									document.getElementById("url3").value = msg.content.avatarUrls;
									document.getElementById("aaa").innerHTML = "<img src=\"" + msg.content.avatarUrls + "\" /><br /><a onclick=\"showUp();\" href=\"javascript:void(0);\">点此重新上传</a>";
									hideUp();
								}
							break;
						}
					}
				);
				document.getElementById("/upload/image/").onclick=function(){
				};
            }
			showUp();
        </script>
	  </td>
    </tr>
   </tbody>
    <tbody width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="need" style="width:10px;">*</td>
        <td colspan="2"><textarea style="border:1px solid #fff" tip="请在这里输入自我简介和家教经历字数50~500之间,不要留下你的名字及电话。" errormsg="请填写有效内容！"  datatype="*50-550" altercss="gray" class="gray zjs" name="jjingli" value="" nullmsg="写填写自我简介和家教经历！">请在这里输入自我简介和家教经历字数50~500之间,不要留下你的名字及电话。</textarea></td>
        <td><div class="Validform_checktip"></div></td>
      </tr>
    </tbody>
    <tbody>
      <tr>
        <td class="need"></td>
        <td colspan="3" style="padding:10px 0 18px 0;"><button name="Submit2" type="submit">提 交</button>
          <button type="reset">重 置</button></td>
      </tr>
    </tbody>
  </table>
</form>
</div>

<script type="text/javascript">
$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
	
	$(":radio[name='property']").click(function(){
		var curtab=$(":radio[name='property']").filter(":checked").val();
		$(".jys,.jyt").hide().filter("."+curtab).show();	
	});
	//--------------------------------------------------------------
	$(".registerform:eq(0)").Validform({
		tiptype:2,
		showAllError:true,
		ignoreHidden:true
	});

//---------------------------------------------------------------------
	$(".registerform").Validform({
		datatype:{//传入自定义datatype类型【方式二】;select
			"need2":function(gets,obj,curform,regxp){
				var need=1,
					numselected=curform.find("input[name='"+obj.attr("name")+"']:checked").length;
				return  numselected >= need ? true : "请至少选择"+need+"项！";
			},
			"sc":function(gets,obj,curform,regxp){
				var sc=1,
					numselected=curform.find("input[name='"+obj.attr("name")+"']:checked").length;
				return  numselected >= sc ? true : "请至少选择"+sc+"项！";
			},
			"max2":function(gets,obj,curform,regxp){
				var atmax=10,
					numselected=curform.find("input[name='"+obj.attr("name")+"']:checked").length;
					
				if(numselected==0){
					return false;
				}else if(numselected>atmax){
					return "最多只能选择"+atmax+"项！";
				}
				return  true;
			}
		},
	ajaxPost:true
	});
//-----------------------------------------------------------------------------------
$(function(){
	$(".registerform").Validform({
		datatype:{
			"phone":function(gets,obj,curform,regxp){
				/*参数gets是获取到的表单元素值，
				  obj为当前表单元素，
				  curform为当前验证的表单，
				  regxp为内置的一些正则表达式的引用。*/

				var reg1=regxp["m"],
					reg2=/[\d]{7}/,
					mobile=curform.find(".mobile");
				
				if(reg1.test(mobile.val())){return true;}
				if(reg2.test(gets)){return true;}
				
				return false;
			}	
		},
		ajaxPost:true
	});
})
//---------------------------------------------------------------------
$(function(){
	
	$(".registerform").Validform({
		
		datatype:{//传入自定义datatype类型【方式二】;
			"zh1" : /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,4}$/
		}
	});
})
$(function(){
	
	$(".registerform").Validform({
		
		datatype:{//传入自定义datatype类型【方式二】;
			"zh2" : /^[\u4E00-\u9FA5\uf900-\ufa2d]{1,5}$/
		}
	});
})
$(function(){
	
	$(".registerform").Validform({
		
		datatype:{//传入自定义datatype类型【方式二】;
			"zh3" : /^[\u4E00-\u9FA5\uf900-\ufa2d]{2,16}$/
		}
	});
})
$(function(){
	
	$(".registerform").Validform({
		
		datatype:{//传入自定义datatype类型【方式二】;
			"zh4" : /[\w\W]+/
		}
	});
})
$(function(){
	
	$(".registerform").Validform({
		
		datatype:{//传入自定义datatype类型【方式二】;
			"zh4" : /^[\u4E00-\u9FA5\uf900-\ufa2d]{1,12}$/
		}
	});
})

//------------------------------------------------------------------------------------


//-----------------------------SSSSSSSSS--------------------------------------

$("registerform").Validform({
	tiptype:1, 
	ignoreHidden:false,
	dragonfly:false,
	tipSweep:true,
	label:".label",
	showAllError:false,
	postonce:true,
	datatype:{
		"selectItem":function(gets,obj,curform,regxp){
			var items = $('#sltTarget option').length;
			if(items<1 || items>10){
				return false;
			}
			return true;
		}
	}
});
})
function removeItem(){
    var sltSrc=document.getElementById('sltSrc');
    var sltTarget=document.getElementById('sltTarget');
    for(var i=0;i<sltSrc.options.length;i++)

    {
		var tempOption=sltSrc.options[i];
		if(tempOption.selected){
			sltSrc.removeChild(tempOption);
			sltTarget.appendChild(tempOption);
		}    
    }
}
function addItem(){
    var sltSrc=document.getElementById('sltSrc');
    var sltTarget=document.getElementById('sltTarget');
    for(var i=0;i<sltTarget.options.length;i++)
    {
		var tempOption=sltTarget.options[i];
		if(tempOption.selected){
			sltTarget.removeChild(tempOption);
			sltSrc.appendChild(tempOption);
		}    
    }
}
</script>
</body>
</html>