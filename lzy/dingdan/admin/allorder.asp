<%@language="vbscript" codepage="936"%>

<!--#include file="inc.asp"-->
<!--#include file="date.asp"-->
<%
call admin()
if request("action")="" then
sql="select * from allorder order by id desc"
elseif request("action")="select2" then
	kdate=request("kdate")
	jdate=request("jdate")
	zhuangtai=request("zhuangtai")
	if kdate="" or jdate="" then
		sql1=""
	else
		sql1=" and shijian between #"&kdate&"# and #"&jdate&"#"
	end if
	if zhuangtai="" then
		sql2=""
	else
		sql2=" and zhuangtai='"&zhuangtai&"'"
	end if
	sql="select * from allorder where 1=1 "&sql1&sql2&" order by id desc"
end if
set rs=server.CreateObject("adodb.recordset")
rs.open sql,conn,1,3
if request("ac")="del" then
	kdate=request("kdate")
	jdate=request("jdate")
	zhuangtai=request("zhuangtai")
	action=request("action")
	call kz(request("s"),"要删除的选项")
	a=split(request("s"),",")
	for i=0 to ubound(a)
		sql="delete from allorder where id="&cint(a(i))
		conn.execute(sql)
	next
	response.Redirect "allorder.asp?dqy="&dqy&"&kdate="&kdate&"&jdate="&jdate&"&zhuangtai="&zhuangtai&"&action="&action&""
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
<script>
function CheckAll(form)               									
{
	for (var i=0;i<form.elements.length;i++)  							
   	{
 		var e = form.elements[i];											
       	if (e.name != 'qx')       e.checked = form.qx.checked; 		
	}
}
</script>
<style type="text/css">
<!--
.STYLE1 {color: #FFFFFF}
-->
</style>
</head>
<body>

<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
  <tr>
    <td height="25" colspan="9" align="center" background="images/bg.jpg" class="biaoti"><a href="check.asp" style="color:#FFFFFF" class="STYLE1 ">下载订单</a></td>
  </tr>
  <form id="form2" name="form2" method="post" action="?action=select2">
    <tr>
      <td height="30" colspan="9" align="right" bgcolor="#FFFFFF">日期查询：<input name="kdate" type="text" class="ziduan"  value="<%response.Write year(date())&"-"&month(date())&"-"&day(date())%>"  id="kdate" onFocus="c.showMoreDay = false;c.show(this);" /> 
        -- <input name="jdate" type="text" class="ziduan" id="jdate" value="<%response.Write year(date())&"-"&month(date())&"-"&day(date())%>" onFocus="c.showMoreDay = false;c.show(this);" /> 
        <select name="zhuangtai" class="liebiao" id="zhuangtai">
          <option value="">订单状态</option>
          <option value="待发货">待发货</option>
          <option value="已发货">已发货</option>
		  <option value="交易成功">交易成功</option>
		  <option value="交易关闭">交易关闭</option>
        </select>
        <input name="Submit" type="submit" class="an" value="搜索" />
      &nbsp;&nbsp;</td>
    </tr>
  </form>
  <tr bgcolor="#FFFFFF">
    <td width="4%" height="30" align="center">选中</td>
    <td width="22%" align="center">产品</td>
    <td width="8%" align="center">姓 名</td>
    <td align="center"width="13%">手机</td>
    
    <td align="center"width="19%">收货人地址</td>
     
    <td width="9%" align="center">订单状态</td>
    <td width="19%" align="center">下单时间</td>
    <td width="6%" align="center">编辑</td>
  </tr>
  <%if rs.eof then%>
  <tr>
    <td height="25" colspan="9" align="center" bgcolor="#FFFFFF">暂无您要搜索的订单!</td>
  </tr>
  <%else
if request("dqy")="" then
	dqy=1
else
	dqy=cint(request("dqy"))
end if
rs.pagesize=1000
rs.absolutepage=dqy
i=rs.pagesize
do while not rs.eof and i>0
i=i-1%>
  <form id="form" name="form" method="post" action="?ac=del&dqy=<%=dqy%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">
    <tr bgcolor="#FFFFFF" onMouseOver="this.style.background='#EFEFEF'" onMouseOut="this.style.background='#FFFFFF'">
      <td height="25" align="center"><input name="s" type="checkbox" id="s" value="<%=rs("id")%>" />      </td>
      <td align="center"><%=rs("product")%></td>
      <td align="center"><%=rs("username")%></td>
      <td align="center"><%=rs("phone")%></td>
     
      <td align="center"><%=rs("address")%></td>
      <td align="center"><%=rs("zhuangtai")%></td>
      <td align="center"><%=rs("shijian2")%></td>
      <td align="center"><a href="allorderedit.asp?id=<%=rs("id")%>" >详情</a></td>
    </tr>
    <%rs.movenext
	loop%>
    <tr>
      <td height="30" colspan="9" align="center" bgcolor="#FFFFFF">全选
        <input name="qx" type="checkbox" id="qx" value="checkbox" onClick="CheckAll(this.form)">
        <input name="Submit2" type="submit" class="an" value="删除" onClick="return confirm('你确定删除吗?\n\n该操作将不可恢复!')">
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