

<!--#include file="inc.asp"-->
<!--#include file="md5.asp"-->
<%
Randomize Timer
key2=Int(Rnd*8999+1000)
if request("action")="login" then
	gname=request("gname")
	gpass=request("gpass")
	key=request("key")

	key2=request("key2")


	call kz(gname,"用户名")
	call kz(gpass,"密码")
	call kz(key,"验证码")
	call xd(key,key2,"验证码")
	call hy(gname,"'","用户名或密码错误!")
	call hy(gname,"select","用户名或密码错误!")
	call hy(gname,"update","用户名或密码错误!")
	call hy(gname,"gname","用户名或密码错误!")
	call hy(gname,"insert","用户名或密码错误!")
	call hy(gname,"delete","用户名或密码错误!")
	call hy(gname,"and","用户名或密码错误!")
	call hy(gname,"id","用户名或密码错误!")
	call hy(gname,"or","用户名或密码错误!")
	sql="select * from mymanage where gname='"&gname&"' and gpass='"&md5(gpass)&"'"
	set rs=server.CreateObject("adodb.recordset")
	rs.open sql,conn,1,3
	if rs.eof or rs.bof then
		call pop("用户名或密码错误!")
	elseif not rs.eof and not rs.bof then
	session("letao_admin")=gname
	session("ip")=Request.serverVariables("REMOTE_ADDR")

	set rs=server.CreateObject("adodb.recordset")      '记录登陆时间和IP 登陆日志
	sql="select * from log "
	rs.open sql,conn,1,3
	rs.addnew
	rs("username")=gname
	rs("shijian")=now()
	rs("ip")=Request.serverVariables("REMOTE_ADDR")
	rs.update           '更新数据库'

	response.redirect "gy.asp"
	end if
end if

%><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>
<link rel="shortcut icon" href="images/favicon.ico">

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body onselectstart="return false" oncontextmenu="return false" onLoad="form1.gname.focus()">
<form name="form1" method="post" action="?action=login">
  <table width="362" height="242" border="0" cellpadding="0" cellspacing="0" id="guangyu">
    <tr>
      <td height="40" colspan="3"><img src="Images/Login_1.jpg" width="109" height="40"><img src="Images/Login_2.jpg" width="123" height="40"><img src="Images/Login_3.jpg" width="130" height="40"></td>
    </tr>
    <tr>
      <td width="5"><img src="Images/Login_4.jpg" width="5" height="155"></td>
      <td width="352" background="Images/Login_6.jpg"><table width="247" height="140" border="0" align="center" cellpadding="0" cellspacing="0" class="hg">
          <tr>
            <td width="168" valign="bottom"><font color="#0063B8">用户名称：</font><br>
              <input name="gname" type="text" class="ziduan" id="gname" maxlength="15">
              <br>
              <font color="#0063B8">用户密码：</font><br>
              <input name="gpass" type="password" class="ziduan" id="gpass" maxlength="15">
              <br>
              <font color="#0063B8">验证码：</font><br>
              <input name="key" type="text" class="ziduan2" id="key">
              <font color="#0063B8">请输入：</font><span class="key"><%=key2%></span>
              <input name="Key2" type="hidden" id="Key2" value="<%=key2%>">
		
			  </td>
            <td width="79" align="center"><input type="image" name="submit" src="Images/Login_10.jpg"></td>
          </tr>
        </table></td>
      <td width="5"><img src="Images/Login_8.jpg" width="5" height="155"></td>
    </tr>
    <tr>
      <td height="47" colspan="3"><img src="Images/Login_13.jpg" width="109" height="47"><img src="Images/Login_14.jpg" width="123" height="47"><img src="Images/Login_15.jpg" width="130" height="47"></td>
    </tr>
  </table>
</form>
</body>
</html>