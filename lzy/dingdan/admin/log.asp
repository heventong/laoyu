<%@language="vbscript" codepage="936"%>

<!--#include file="inc.asp"-->
<!--#include file="date.asp"-->
<%
call admin()
set rs=server.CreateObject("adodb.recordset")
sql="select top 60 * from log order by id desc "
rs.open sql,conn,1,1
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="dhtmltooltip"></div>

<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
  <tr>
    <td height="25" colspan="5" align="center" background="images/bg.jpg" class="biaoti">日志管理</td>
  </tr>
  <form id="form2" name="form2" method="post" action="?action=select2">
    <tr>
      <td height="30" colspan="5" align="right" bgcolor="#FFFFFF"><span class="hongzi">为了保证查询速度只显示您最近60次登录记录</span></td>
    </tr>
  </form>
  <tr bgcolor="#FFFFFF">
    <td width="4%" height="30" align="center">序号</td>
    <td width="22%" align="center">用户名</td>
    <td align="center">登录时间</td>
    <td align="center">下单IP地址</td>
  </tr>
  <%if rs.eof then%>
  <tr>
    <td height="25" colspan="5" align="center" bgcolor="#FFFFFF">暂无登录记录!</td>
  </tr>
  <%else
if request("dqy")="" then
	dqy=1
else
	dqy=cint(request("dqy"))
end if
rs.pagesize=15
rs.absolutepage=dqy
i=rs.pagesize
do while not rs.eof and i>0
i=i-1
t=t+1%>
  <form id="form" name="form" method="post" action="?ac=del&dqy=<%=dqy%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">
    <tr bgcolor="#FFFFFF" onMouseOver="this.style.background='#EFEFEF'" onMouseOut="this.style.background='#FFFFFF'">
      <td height="25" align="center"><% response.Write t%></td>
      <td align="center"><%=rs("username")%></td>
      <td align="center"><%=rs("shijian")%></td>
      <td align="center"><br />   <%=rs("ip")%>--     <a href="http://ip138.com/ips.asp?ip=<%=rs("ip")%>&action=2 ">IP归属地</a> <a href="dingdanedit.asp?id=<%=rs("id")%>"></a></td>
    </tr>
    <%rs.movenext
	loop%>
    <tr>
      <td height="30" colspan="5" align="center" bgcolor="#FFFFFF">
        
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        共<%=rs.recordcount%>条记录&nbsp;&nbsp;当前在第<%=dqy%>页/共<%=rs.pagecount%>页&nbsp;&nbsp;
        <%if dqy=1 then%>
        首页&nbsp;&nbsp;上一页
        <%else%>
        <a href="?jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">首页</a>&nbsp;&nbsp;<a href="?dqy=<%=dqy-1%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">上一页</a>
        <%end if
		if dqy=rs.pagecount then%>
        下一页&nbsp;&nbsp;尾页
        <%else%>
        <a href="?dqy=<%=dqy+1%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">下一页</a>&nbsp;&nbsp;<a href="?dqy=<%=rs.pagecount%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">尾页</a>
        <%end if%>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        直接跳到第
        <select name="select" onChange='location=this.options[this.selectedIndex].value;'>
          <%
    for i = 1 to rs.pageCount
       if i = dqy then 
          response.write"<option selected>"&i&"</option>"
       else
          response.write"<option value='?dqy="&i&"&kdate="&kdate&"&jdate="&jdate&"&zhuangtai="&zhuangtai&"&action="&request("action")&"'>"&i&"</option>"
       end if
    next
	%>
        </select>
        页</td>
    </tr>
    <%end if%>
  </form>
</table>
<br />
</body>
</html>