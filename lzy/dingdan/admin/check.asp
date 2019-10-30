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
	if (document.check.safe.value==""){
	    alert('请填写安全验证码！');
		document.check.safe.focus();
		return false;
	}


	return true;	
}
</script>
<%
action=request.QueryString("action")
if action="check" then
code=trim(request.Form("safe"))
Set rs2=Server.CreateObject("ADODB.RecordSet") 
sql2="select safecode from safe" 
rs2.Open sql2,conn,1,1

if trim(rs2("safecode"))<>md5(code) then
 response.write "<script>alert('安全码错误请确认！');window.location.href='check.asp';</script>"
 response.End()
else
session("safecode")=md5(code)
response.Redirect("backup.asp")
 end if
end if
%>
<form method="post" action="?action=check"  name="check" onsubmit="return pcheck()">
  <table width="50%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789" class="a2">
    <tr>
      <td height="25" colspan="2" background="images/bg.jpg" bgcolor="#FFFFFF" class="biaoti" align="center">订单下载安全验证</td>
    </tr>

    <tr class="a3">
      <td width="43%" height="46" bgcolor="#FFFFFF">&nbsp;输入安全码： </td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="safe" type=password class="sjk" id="DBpath" value="" size="60"></td>
    </tr>
  </table>
  <br />
  <center>
    <input name="exportsubmit2" type="submit" class="an"  style="width:180px"value="点击下载订单">
  </center>
</form>

</body>
</html>