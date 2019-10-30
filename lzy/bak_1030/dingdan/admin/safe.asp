<!--#include file="inc.asp"-->
<!--#include file="md5.asp"-->

<%call admin()%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body>

<script>
function pcheck(){
	if (document.check.old.value==""){
	    alert('请填写原始安全验证码！');
		document.check.old.focus();
		return false;
	}

	if (document.check.code1.value==""){
	    alert('请填写新安全验证码！');
		document.check.code1.focus();
		return false;
	}
if (document.check.code2.value==""){
	    alert('请确认安全验证码！');
		document.check.code2.focus();
		return false;
	}
	return true;	
}
</script>
<%
call admin()
if request("action")="edit" then
    old=md5(trim(request("old")))

	code1=request("code1")
	code2=request("code2")
	call kz(old,"输入原始安全码")
	call kz(code1,"输入新安全码")
	call kz(code2,"确认新安全码")
	call xd(code1,code2,"确认密码")
set rs=server.CreateObject("adodb.recordset")
sql="select top 1 * from safe where safecode='"&old&"'"

rs.open sql,conn,1,3
if rs.eof  then 
		response.write"<SCRIPT language=JavaScript>alert('原始安全码错误请重新填写');javascript:history.go(-1)</SCRIPT>"
else
	rs("safecode")=md5(code1)
	rs.update
	call po("right.asp","")

 end if
end if

%>
<form method="post" action="?action=edit">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789" class="a2">
    <tr>
      <td height="25" colspan="2" background="images/bg.jpg" bgcolor="#FFFFFF" class="biaoti" align="center">修改安全码</td>
    </tr>
    <tr>
      <td height="25" colspan="2" bgcolor="#FFFFFF" class="a1 hongzi"><p>安全码：为了保证数据的安全设置的二次验证密码,备份下载订单必须录入安全码才可以操作订单</p>      </td>
    </tr>
    <tr class="a3">
      <td height="30" bgcolor="#FFFFFF">原始安全码：</td>
      <td bgcolor="#FFFFFF">&nbsp;&nbsp;<input name="old" type="password" class="sjk" id="code1" size="60" /></td>
    </tr>
    <tr class="a3">
      <td width="43%" height="30" bgcolor="#FFFFFF">输入安全码： </td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="code1" type=password class="sjk" id="DBpath" size="60"></td>
    </tr>
    <tr class="a4">
      <td width="43%" height="30" bgcolor="#FFFFFF">确认安全码：</td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="code2" type=password class="sjk" size="60"></td>
    </tr>
  </table>
  <br />
  <center>
    <input name="exportsubmit2" type="submit" class="an" style="width:120px" value="确认修改">
  </center>
</form>

</body>
</html>