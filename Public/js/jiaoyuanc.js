function CheckForm()
{
 if (myform.language.value=="") {
alert("请您选择外语种类！");
myform.language.focus();
  return (false);
 }
 if (myform.lanlevel.value=="") {
alert("请您选择外语程度！");
myform.lanlevel.focus();
  return (false);
 }
 if (myform.pthua.value=="") {
alert("请您选择普通话程度！");
myform.pthua.focus();
  return (false);
 }
 if (myform.techang.value.length >255)
 {
	alert("其他主要特长不能超过255个字符！");
	document.myform.techang.focus();
	return  false;	
 }
  if (document.myform.jingyan.value=="")
  {
    alert("工作经验不能为空！");
	document.myform.jingyan.focus();
	return false;
  }
 if (myform.jingli.value.length >255)
 {
	alert("详细家教工作经历不能超过255个字符！");
	document.myform.jingli.focus();
	return  false;	
 }
return true;  
}