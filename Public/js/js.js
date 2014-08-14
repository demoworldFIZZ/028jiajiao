function CheckForm()
{
  if (document.formlogin.UserName.value=="")
  {
    alert("用户名不能为空！");
	document.formlogin.UserName.focus();
	return false;
  }
  if (document.formlogin.UserPass.value=="")
  {
    alert("密码不能为空！");
	document.formlogin.UserPass.focus();
	return false;
  }
if (formlogin.usertype[0].checked==false && formlogin.usertype[1].checked==false)  {
alert("请您选择用户类型！");
	document.formlogin.usertype[0].focus();
 return (false);
 }
return true;  
}
//更改字体大小
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