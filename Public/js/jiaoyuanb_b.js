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
 if (myform.month.value=="") {
alert("请您选择出生日期的月！");
myform.month.focus();
  return (false);
 }
  if (document.myform.National.value=="")
  {
    alert("民族不能为空！");
	document.myform.National.focus();
	return false;
  }
 if (myform.jiguan.value=="") {
alert("请您选择籍贯！");
myform.jiguan.focus();
  return (false);
 }
 if (myform.School.value=="" && document.myform.School1.value=="") {
alert("请您选择就读院校或任教学校或者填写就读院校或任教学校！");
myform.School.focus();
  return (false);
 }
  if (document.myform.Professional.value=="")
  {
    alert("就读专业或主教学科不能为空！");
	document.myform.Professional.focus();
	return false;
  }
 if (myform.Identity.value=="") {
alert("请您选择现有身份！");
myform.Identity.focus();
  return (false);
 }
 if (myform.Political.value=="") {
alert("请您选择政治面貌！");
myform.Political.focus();
  return (false);
 }
 if (myform.info_from.value=="") {
alert("请您选择从何了解本站！");
myform.info_from.focus();
  return (false);
 }
return true;  
}