function CheckForm()
{
  if (document.formlogin.UserName.value=="")
  {
    alert("�û�������Ϊ�գ�");
	document.formlogin.UserName.focus();
	return false;
  }
  if (document.formlogin.UserPass.value=="")
  {
    alert("���벻��Ϊ�գ�");
	document.formlogin.UserPass.focus();
	return false;
  }
if (formlogin.usertype[0].checked==false && formlogin.usertype[1].checked==false)  {
alert("����ѡ���û����ͣ�");
	document.formlogin.usertype[0].focus();
 return (false);
 }
return true;  
}
//���������С
var status0='';
var curfontsize=10;
var curlineheight=18;
function fontZoomA(){
  if(curfontsize>8){
    document.getElementById('fontzoom').style.fontSize=(--curfontsize)+'pt';
	document.getElementById('fontzoom').style.lineHeight=(--curlineheight)+'pt';
  }
}
function fontZoomB(){
  if(curfontsize<64){
    document.getElementById('fontzoom').style.fontSize=(++curfontsize)+'pt';
	document.getElementById('fontzoom').style.lineHeight=(++curlineheight)+'pt';
  }
}