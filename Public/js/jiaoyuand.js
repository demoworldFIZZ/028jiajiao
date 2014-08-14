	var flag;
	function addloc(locs,mylocs){
		if (mylocs.length>15){
			alert("您选择的超过15个了！");
		}else{
			for(var x=0;x<locs.length;x++){
				var opt = locs.options[x];
				if (opt.selected){
					flag = true;
					for (var y=0;y<mylocs.length;y++){
						var myopt = mylocs.options[y];
						if (myopt.value == opt.value){
							flag = false;
						}
					}
					if(flag){
						mylocs.options[mylocs.options.length] = new Option(opt.text, opt.value, 0, 0);
					}
				}
			}
		}
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
  if (document.myform.gongzuoshijian.value=="")
  {
    alert("本月计划工作时间不能为空！");
	document.myform.gongzuoshijian.focus();
	return false;
  }
 if (myform.gongzuoshijian.value.length >40)
 {
	alert("其他主要特长不能超过20个字！");
	document.myform.gongzuoshijian.focus();
	return  false;	
 }
  if (document.myform.tel.value=="")
  {
    alert("联系电话不能为空！");
	document.myform.tel.focus();
	return false;
  }
  if (document.myform.UserEmail.value=="")
  {
    alert("E-mail不能为空！");
	document.myform.UserEmail.focus();
	return false;
  }

  if (document.myform.address1.value=="")
  {
    alert("居住地址不能为空！");
	document.myform.address1.focus();
	return false;
  }

document.myform.submit();	
}