
<!--#include file="inc.asp"-->
<!--#include file="md5.asp"-->
<%
call admin()
id=request("id")
if request.querystring("id")<>"" and not isnumeric(request.querystring("id")) then
 response.write "<script>alert('参数出错！');window.location.href='index.asp';</script>"
response.end()
end if
set rs=server.CreateObject("adodb.recordset")
sql="select * from mymanage where id="&id
rs.open sql,conn,1,3
if request("action")="edit" then
if session("letao_admin")="admin" then
	gpass=request("gpass")
	gpass2=request("gpass2")
	call kz(gpass,"新密码")
	call kz(gpass2,"确认密码")
	call xd(gpass,gpass2,"确认密码")
	rs("gpass")=md5(gpass)
	rs.update
	call po("admin.asp","")
else
	ypass=request("ypass")
	gpass=request("gpass")
	gpass2=request("gpass2")
	call kz(ypass,"原密码")
	call kz(gpass,"新密码")
	call kz(gpass2,"确认密码")
	ypas=md5(ypass)
	ypa=rs("gpass")
	call xd(ypas,ypa,"原密码")
	call xd(gpass,gpass2,"确认密码")
	rs("gpass")=md5(gpass)
	rs.update
	call po("admin.asp","")
end if
end if
if request("action")="del" then
	call del("gadmin",request("id"))
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form id="form1" name="form1" method="post" action="?action=edit&id=<%=id%>">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
    <tr>
      <td height="25" colspan="2" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">管理员修改</td>
    </tr>
    <tr>
      <td width="36%" height="25" align="right" bgcolor="#FFFFFF">管理员帐号：&nbsp;</td>
      <td width="64%" bgcolor="#FFFFFF">&nbsp;&nbsp;<%=rs("gname")%> </td>
    </tr>
    <%if session("letao_admin")<>"admin" then%>
    <tr>
      <td height="25" align="right" bgcolor="#FFFFFF">原密码：&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;
        <input name="ypass" type="password" class="ziduan" id="ypass" maxlength="15" /></td>
    </tr>
    <%end if%>
    <tr>
      <td height="25" align="right" bgcolor="#FFFFFF">新密码：&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;
        <input name="gpass" type="password" class="ziduan" id="gpass" maxlength="15" /></td>
    </tr>
    <tr>
      <td height="25" align="right" bgcolor="#FFFFFF">确认密码：&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;
        <input name="gpass2" type="password" class="ziduan" id="gpass2" maxlength="15" /></td>
    </tr>
    <tr>
      <td height="25" align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF">&nbsp;
        <input name="Submit" type="submit" class="an" value="修改" />
        <input name="Submit2" type="button" class="an" value="返回" onclick="javascript:history.go(-1);"></td>
    </tr>
  </table>
</form>
</body>
</html>