function LTrim(str)

{

    var whitespace = new String(" \t\n\r");

    var s = new String(str);

    

    if (whitespace.indexOf(s.charAt(0)) != -1)

    {

        var j=0, i = s.length;

        while (j < i && whitespace.indexOf(s.charAt(j)) != -1)

        {

            j++;

        }

        s = s.substring(j, i);

    }

    return s;

}
function RTrim(str)

{

    var whitespace = new String(" \t\n\r");

    var s = new String(str);

 

    if (whitespace.indexOf(s.charAt(s.length-1)) != -1)

    {

        var i = s.length - 1;

        while (i >= 0 && whitespace.indexOf(s.charAt(i)) != -1)

        {

            i--;

        }

        s = s.substring(0, i+1);

    }

    return s;

}
function Trim(str)

{

    return RTrim(LTrim(str));

}

function gopreview()
{
	var strUserName=Trim(document.all.UserName.value);
	var filter1=/^\s*[a-zA-Z0-9]{1,20}\s*$/;
    if (strUserName=="")
	{
		alert("请输入用户名！");
		document.all.UserName.focus();
		return false;
	}
       else if (!filter1.test(document.all.UserName.value)) { 
                alert("请您填好用户名，要求为1-20个数字或字母！"); 
                document.all.UserName.focus();
                return false; 
                } 
    else
    {
		window.showModalDialog('Register.asp?action=jiaoyuan&UserName='+strUserName,'','dialogHeight:160px;dialogWidth:500px;status:0;scroll:0');
	}
}
function CheckForm()
{
	

return true;  
}


function CheckForm()
{
	if (document.myform.RealName.value=="")
  {
    alert("真实姓名不能为空！");
	document.myform.RealName.focus();
	return false;
  }
 if (myform.RealName.value.length <2)
 {
	alert("真实姓不能是一个字！");
	document.myform.RealName.focus();
	return  false;	
 }
  if (document.myform.UserPass.value=="")
  {
    alert("密码不能为空！");
	document.myform.UserPass.focus();
	return false;
  }
        var filter1=/^\s*[a-zA-Z0-9]{6,10}\s*$/;
        if (!filter1.test(document.myform.UserPass.value)) { 
                alert("请您填好密码，要求为6-10个数字或字母！"); 
                document.myform.UserPass.focus();
                return false; 
                } 
  if (document.myform.UserPass1.value=="")
  {
    alert("确认密码不能为空！");
	document.myform.UserPass1.focus();
	return false;
  }
    if( myform.UserPass1.value != myform.UserPass.value ) {
  alert("两次密码输入不一致！")
  document.myform.UserPass.focus()
  return false;
  }
	

	if (myform.sex[0].checked==false && myform.sex[1].checked==false)  {
alert("请您选择性别！");
	document.myform.sex[0].focus();
 return (false);
 }
 if (myform.year.value=="") {
alert("请您选择出生日期的年！");
myform.year.focus();
  return (false);
 }

 if (myform.School.value=="" && document.myform.School1.value=="") {
alert("请您选择任教学校！");
myform.School.focus();
  return (false);
 }
  if (document.myform.Professional.value=="")
  {
    alert("任教科目不能为空！");
	document.myform.Professional.focus();
	return false;
  }
 if (myform.Identity.value=="") {
alert("请您选择现有身份！");
myform.Identity.focus();
  return (false);
 }


 if (myform.pthua.value=="") {
alert("请您选择普通话程度！");
myform.pthua.focus();
  return (false);
 }

  if (document.myform.jingyan.value=="")
  {
    alert("工作经验不能为空！");
	document.myform.jingyan.focus();
	return false;
  }
 if (myform.jingli.value.length >1000)
 {
	alert("详细家教工作经历不能超过1000个字符！");
	document.myform.jingli.focus();
	return  false;	
 }
return true;  
}

	function delloc(locs,mylocs){
		for(var x=mylocs.length-1;x>=0;x--){
			var opt = mylocs.options[x];
			if (opt.selected){
				mylocs.options[x] = null;
			}
		}
	}
	function dosubmit(){
		document.myform.t_b_goodsubject.value="";
		document.myform.t_b_teachplace.value="";
		for(i=0;i<document.myform.MyFirstJob.length;i++){
			document.myform.t_b_goodsubject.value=document.myform.t_b_goodsubject.value+document.myform.MyFirstJob.options[i].value+",";
		}
		for(i=0;i<document.myform.SecondTeachPlace.length;i++){
			document.myform.t_b_teachplace.value=document.myform.t_b_teachplace.value+document.myform.SecondTeachPlace.options[i].value+",";
		}
 if (myform.t_b_goodsubject.value=="") {
alert("请您选择教授科目！");
myform.MyFirstJob.focus();
  return (false);
 }
 if (myform.t_b_goodsubject.value==",") {
alert("请您选择小类教授科目，就是黑色字体的科目！");
myform.MyFirstJob.focus();
  return (false);
 }
 if (myform.t_b_teachplace.value=="") {
alert("请您选择教授区域！");
myform.SecondTeachPlace.focus();
  return (false);
 }
function chkRadio(o){
for (i=0;i<o.length;i++){
if (o[i].checked) return true;
}
return false;
}
if (!chkRadio(document.myform.fudaofangshi))
{ 
alert("请至少选择一种可辅导方式");
document.myform.fudaofangshi[0].focus(); 
return false;
}
 
 
  if (document.myform.mob.value=="")
  {
    alert("联系手机不能为空！");
	document.myform.mob.focus();
	return false;
  }
  
  if (document.myform.address.value=="")
  {
    alert("居住地址不能为空！");
	document.myform.address.focus();
	return false;
  }

document.myform.submit();	
}