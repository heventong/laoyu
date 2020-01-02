
<!--#include file="inc.asp"-->
<!--#include file="md5.asp"-->
<%
call admin()
if request("action")="add" then
	gname=request("gname")
	gpass=request("gpass")
	gpass2=request("gpass2")
	call kz(gname,"管理员帐号")
	call kz(gpass,"管理员密码")
	call kz(gpass2,"确认密码")
	call xd(gpass,gpass2,"确认密码")
	call hy(gname,";","管理员帐号含有;号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"；","管理员帐号含有；号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"'","管理员帐号含有'号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname," ","管理员帐号含有空格,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"*","管理员帐号含有*号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"/","管理员帐号含有/号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"\","管理员帐号含有\号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"，","管理员帐号含有，号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"。","管理员帐号含有。号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"、","管理员帐号含有、号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,",","管理员帐号含有,号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,".","管理员帐号含有.号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"<","管理员帐号含有<号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,">","管理员帐号含有>号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"《","管理员帐号含有《号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"》","管理员帐号含有》号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"!","管理员帐号含有!号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"！","管理员帐号含有！号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"~","管理员帐号含有~号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"@","管理员帐号含有@号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"#","管理员帐号含有#号,帐号只能由中文、数字、字母、下划线组成!")
	call hy(gname,"id","用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录!")
	call hy(gname,"or","用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录!")
	call hy(gname,"and","用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录!")
	call hy(gname,"select","用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录!")
	call hy(gname,"update","用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录!")
	call hy(gname,"insert","用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录!")
	call hy(gname,"delete","用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录!")
	call hy(gname,"gname","用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录!")
	sql="select * from mymanage where gname='"&gname&"'"
	set rs=server.CreateObject("adodb.recordset")
	rs.open sql,conn,1,3
	if not (rs.eof and rs.bof) then
		call pop("此用户名已存在!")
	end if
	rs.addnew
	rs("gname")=gname
	rs("gpass")=md5(gpass)
	rs.update
end if
if request("action")="del" then
	call del("mymanage",request("id"))
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

<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
  <tr>
    <td height="25" colspan="3" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">管理员管理</td>
  </tr>
  <tr>
    <td width="40%" height="25" align="center" bgcolor="#FFFFFF">管理员帐号</td>
    <td width="40%" align="center" bgcolor="#FFFFFF">管理员密码</td>
    <td width="20%" align="center" bgcolor="#FFFFFF">操作</td>
  </tr>
  <%
  sql="select * from mymanage"
  set rs=conn.execute(sql)
  do while not rs.eof
  %>
  <tr>
    <td height="25" align="center" bgcolor="#FFFFFF"><%=rs("gname")%></td>
    <td align="center" bgcolor="#FFFFFF">密码已经加密</td>
    <td align="center" bgcolor="#FFFFFF"><a href="adminedit.asp?id=<%=rs("id")%>">修改密码</a>&nbsp;
      <%if session("letao_admin")<>rs("gname") then%>
      <a href="?action=del&id=<%=rs("id")%>" onclick="return confirm('你确定要删除[<%=rs("gname")%>]这个管理员吗?\n\n该操作将不可恢复!')">删除</a>
      <%end if%></td>
  </tr>
 
  <%
  rs.movenext
  loop
  %>
   <tr>
    <td height="25" colspan="3" align="left" bgcolor="#FFFFFF"><span class="hongzi">友情提示：增加新管理元账号后，并以新管理员账号登陆可删除原管理员账号</span></td>
  </tr>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="?action=add">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
    <tr>
      <td height="25" colspan="4" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">添加管理员</td>
    </tr>
    <tr>
      <td width="30%" height="25" bgcolor="#FFFFFF">&nbsp;&nbsp;管理员帐号：
        <input name="gname" type="text" class="ziduan" id="gname" maxlength="15" />
		<img src="images/shuoming.jpg" width="14" height="14" style="cursor:hand" onmouseover="ddrivetip('用户名请勿用含有id,or,and,select,update,insert,delete,gname等关键字 否则无法正常登录')" onmouseout="hideddrivetip()"></td>
      <td width="30%" bgcolor="#FFFFFF">&nbsp;&nbsp;管理员密码：
        <input name="gpass" type="password" class="ziduan" id="gpass" maxlength="15" /></td>
      <td width="30%" bgcolor="#FFFFFF">&nbsp;&nbsp;密码确认：
        <input name="gpass2" type="password" class="ziduan" id="gpass2" maxlength="15" /></td>
      <td width="10%" align="center" bgcolor="#FFFFFF"><input name="Submit" type="submit" class="an" value="添加" /></td>
    </tr>
  </table>
</form>
</body>
</html>