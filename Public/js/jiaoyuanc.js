function CheckForm()
{
 if (myform.language.value=="") {
alert("����ѡ���������࣡");
myform.language.focus();
  return (false);
 }
 if (myform.lanlevel.value=="") {
alert("����ѡ������̶ȣ�");
myform.lanlevel.focus();
  return (false);
 }
 if (myform.pthua.value=="") {
alert("����ѡ����ͨ���̶ȣ�");
myform.pthua.focus();
  return (false);
 }
 if (myform.techang.value.length >255)
 {
	alert("������Ҫ�س����ܳ���255���ַ���");
	document.myform.techang.focus();
	return  false;	
 }
  if (document.myform.jingyan.value=="")
  {
    alert("�������鲻��Ϊ�գ�");
	document.myform.jingyan.focus();
	return false;
  }
 if (myform.jingli.value.length >255)
 {
	alert("��ϸ�ҽ̹����������ܳ���255���ַ���");
	document.myform.jingli.focus();
	return  false;	
 }
return true;  
}