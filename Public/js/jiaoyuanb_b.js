function CheckForm()
{
  if (document.myform.RealName.value=="")
  {
    alert("��ʵ��������Ϊ�գ�");
	document.myform.RealName.focus();
	return false;
  }
 if (myform.RealName.value.length <2)
 {
	alert("��ʵ�ղ�����һ���֣�");
	document.myform.RealName.focus();
	return  false;	
 }
if (myform.sex[0].checked==false && myform.sex[1].checked==false)  {
alert("����ѡ���Ա�");
	document.myform.sex[0].focus();
 return (false);
 }
 if (myform.year.value=="") {
alert("����ѡ��������ڵ��꣡");
myform.year.focus();
  return (false);
 }
 if (myform.month.value=="") {
alert("����ѡ��������ڵ��£�");
myform.month.focus();
  return (false);
 }
  if (document.myform.National.value=="")
  {
    alert("���岻��Ϊ�գ�");
	document.myform.National.focus();
	return false;
  }
 if (myform.jiguan.value=="") {
alert("����ѡ�񼮹ᣡ");
myform.jiguan.focus();
  return (false);
 }
 if (myform.School.value=="" && document.myform.School1.value=="") {
alert("����ѡ��Ͷ�ԺУ���ν�ѧУ������д�Ͷ�ԺУ���ν�ѧУ��");
myform.School.focus();
  return (false);
 }
  if (document.myform.Professional.value=="")
  {
    alert("�Ͷ�רҵ������ѧ�Ʋ���Ϊ�գ�");
	document.myform.Professional.focus();
	return false;
  }
 if (myform.Identity.value=="") {
alert("����ѡ��������ݣ�");
myform.Identity.focus();
  return (false);
 }
 if (myform.Political.value=="") {
alert("����ѡ��������ò��");
myform.Political.focus();
  return (false);
 }
 if (myform.info_from.value=="") {
alert("����ѡ��Ӻ��˽Ȿվ��");
myform.info_from.focus();
  return (false);
 }
return true;  
}