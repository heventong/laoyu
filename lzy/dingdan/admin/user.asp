
<!--#include file="inc.asp"-->
<!--#include file="date.asp"-->
<%
call admin()
if request("action")="" then
sql="select * from username order by id desc"
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
	sql="select * from username where 1=1 "&sql1&sql2&" order by id desc"
end if
set rs=server.CreateObject("adodb.recordset")
rs.open sql,conn,1,3
if request("ac")="del" then
	kdate=request("kdate")
	jdate=request("jdate")
	zhuangtai=request("zhuangtai")
	action=request("action")
	call kz(request("s"),"Ҫɾ����ѡ��")
	a=split(request("s"),",")
	for i=0 to ubound(a)
		sql="delete from username where id="&cint(a(i))
		conn.execute(sql)
	next
	response.Redirect "user.asp?dqy="&dqy&"&kdate="&kdate&"&jdate="&jdate&"&zhuangtai="&zhuangtai&"&action="&action&""
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������</title>

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
</head>
<body>
<div id="dhtmltooltip"></div>
<script src="jg.js" language="javascript" type="text/javascript"></script>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
  <tr>
    <td height="25" colspan="8" align="center" background="images/bg.jpg" class="biaoti">�û�����</td>
  </tr>
  <form id="form2" name="form2" method="post" action="?action=select2">
    <tr>
      <td height="30" colspan="8" align="right" bgcolor="#FFFFFF">&nbsp;&nbsp;</td>
    </tr>
  </form>
  <tr bgcolor="#FFFFFF">
    <td width="4%" height="30" align="center">ѡ��</td>
    <td width="8%" align="center">����</td>
    <td width="9%" align="center">qq</td>
    <td align="center"width="8%">�ֻ�</td>
    
    <td align="center"width="28%">��ַ</td>
     
    <td width="18%" align="center">����</td>
    <td width="25%" align="center">ʱ��&amp;IP��ַ</td>
  </tr>
  <%if rs.eof then%>
  <tr>
    <td height="25" colspan="8" align="center" bgcolor="#FFFFFF">������Ҫ�������û�!</td>
  </tr>
  <%else
if request("dqy")="" then
	dqy=1
else
	dqy=cint(request("dqy"))
end if
rs.pagesize=30
rs.absolutepage=dqy
i=rs.pagesize
do while not rs.eof and i>0
i=i-1%>
  <form id="form" name="form" method="post" action="?ac=del&dqy=<%=dqy%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">
    <tr bgcolor="#FFFFFF" onMouseOver="this.style.background='#EFEFEF'" onMouseOut="this.style.background='#FFFFFF'">
      <td height="25" align="center"><input name="s" type="checkbox" id="s" value="<%=rs("id")%>" />      </td>
      <td align="center"><%=rs("username")%></td>
      <td align="center"><%=rs("qq")%></td>
      <td align="center">&nbsp;&nbsp;<a href="#javascript;"  title="�����鿴������"onClick="window.open('show.asp?mobile=<%=rs("phone")%>','','height=200, width=400, top=50%,left=50%, toolbar=no, menubar=no, scrollbars=no, resizable=no,location=no, status=no ');"><%=rs("phone")%></a></td>
     
      <td align="center"><%=rs("address")%></td>
      <td align="center"><%=rs("��ע")%></td>
      <td align="center"><%=rs("shijian")%><br /><a href="http://ip138.com/ips.asp?ip=<%=rs("ip")%>&action=2 ">IP������</a> <a href="dingdanedit.asp?id=<%=rs("id")%>"></a></td>
    </tr>
    <%rs.movenext
	loop%>
    <tr>
      <td height="30" colspan="8" align="center" bgcolor="#FFFFFF">ȫѡ
        <input name="qx" type="checkbox" id="qx" value="checkbox" onClick="CheckAll(this.form)">
        <input name="Submit2" type="submit" class="an" value="ɾ��" onClick="return confirm('��ȷ��ɾ����?\n\n�ò��������ɻָ�!')">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        ��<%=rs.recordcount%>����¼&nbsp;&nbsp;��ǰ�ڵ�<%=dqy%>ҳ/��<%=rs.pagecount%>ҳ&nbsp;&nbsp;
        <%if dqy=1 then%>
        ��ҳ&nbsp;&nbsp;��һҳ
        <%else%>
        <a href="?jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">��ҳ</a>&nbsp;&nbsp;<a href="?dqy=<%=dqy-1%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">��һҳ</a>
        <%end if
		if dqy=rs.pagecount then%>
        ��һҳ&nbsp;&nbsp;βҳ
        <%else%>
        <a href="?dqy=<%=dqy+1%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">��һҳ</a>&nbsp;&nbsp;<a href="?dqy=<%=rs.pagecount%>&jdate=<%=jdate%>&kdate=<%=kdate%>&zhuangtai=<%=zhuangtai%>&action=<%=request("action")%>">βҳ</a>
        <%end if%>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        ֱ��������
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
        ҳ</td>
    </tr>
    <%end if%>
  </form>
</table>
<br />
</body>
</html>