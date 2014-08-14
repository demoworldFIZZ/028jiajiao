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
  if (document.myform.UserName.value=="")
  {
    alert("用户名不能为空！");
	document.myform.UserName.focus();
	return false;
  }
        var filter1=/^\s*[a-zA-Z0-9]{1,20}\s*$/;
        if (!filter1.test(document.myform.UserName.value)) { 
                alert("请您填好用户名，要求为1-20个数字或字母！"); 
                document.myform.UserName.focus();
                return false; 
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
function checkemail(name, data, allowednull)
{
  var datastr = data;
  var lefttrim = datastr.search(/\S/gi);
  
  if (lefttrim == -1) {
    if (allowednull) {
      return 1;
    } else {
      alert("请输入一个正确的E-mail地址！");
      return -1;
    }
  }
  var myRegExp = /[a-z0-9](([a-z0-9]|[_\-\.][a-z0-9])*)@([a-z0-9]([a-z0-9]|[_\-][a-z0-9])*)((\.[a-z0-9]([a-z0-9]|[_\-][a-z0-9])*)*)/gi;
  var answerind = datastr.search(myRegExp);
  var answerarr = datastr.match(myRegExp);
  
  if (answerind == 0 && answerarr[0].length == datastr.length)
  {
    return 0;
  }
  
  alert("请输入一个正确的E-mail地址！");
  return -1;
}
  if (checkemail("电子邮件", document.myform.UserEmail.value, false)) {
    document.myform.UserEmail.focus();
    return false;   
  }
return true;  
}
