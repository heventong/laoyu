<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="images/css.css" rel="stylesheet" type="text/css" />

<title>��������</title>

</head>
<!--#include file="inc.asp"-->
<!--#include file="date.asp"-->
<%
call admin()
    gname=request("username")
    dingdanhaojf=request("dingdanhaojf")
    gyundan=request("gyundan")
	
	id=request("id")
if request.querystring("id")<>"" and not isnumeric(request.querystring("id")) then
 response.write "<script>alert('��������');window.location.href='index.asp';</script>"
response.end()
end if

	dqy=request("dqy")
	kdate=request("kdate")
	jdate=request("jdate")
	zhuangtai=request("zhuangtai")
	action=request("action")
	set rss=server.CreateObject("adodb.recordset")
	sqls="select * from allorder where id="&id
	rss.open sqls,conn,1,3
if request("action")="edit" then
	rss("zhuangtai")=request("zhuangtai1")
	rss("fshijian")=request("fshijian")
	rss("yundan")=request("yundan")
	
	rss.update
	
	call po("allorder.asp","״̬�޸ĳɹ�!")
end if
%>

<body >


  <table width="98%" border="0"    bgcolor="#183789" cellpadding="0"  cellspacing="1" >
<form name="form1" style="background-color:#ccc; " method="post" action="?action=edit&id=<%=id%>">



<tr>
<td height="25" colspan="7" align="left" valign="top" background="Images/bg.jpg"  class="biaoti STYLE1">�û���Ϣ��</td>
</tr>
      <tr>
        <td width="16%" height="30"  bgcolor="#FFFFFF" class="atd">�� ������ <%=rss("username")%> ����  �� </td>
        <td width="13%"  bgcolor="#FFFFFF">�ֻ���<%=rss("phone")%></td>
        <td width="6%"  bgcolor="#FFFFFF">�Ա�<%=rss("sex")%></td>
        <td width="6%"  bgcolor="#FFFFFF">���䣺<%=rss("age")%> </td>
        <td width="10%"  bgcolor="#FFFFFF"> ��ߣ�<%=rss("height")%></td>
        <td height="25" colspan="2"  bgcolor="#FFFFFF">�绰��<%=rss("dianhua")%></td>
      ��      </tr>
      <tr>
        <td height="30" colspan="3"  bgcolor="#FFFFFF" class="atd">�ջ���ַ��<%=rss("address")%></td>
        <td height="25" colspan="4"  bgcolor="#FFFFFF">�ʱࣺ<%=rss("code")%></td>
    </tr>
	<tr>
<td height="25" colspan="7" align="left" background="Images/bg.jpg"  class="biaoti STYLE1">������Ϣ��</td>
</tr>

   <tr>
        <td height="30" colspan="3" valign="top"  bgcolor="#FFFFFF" class="atd">������Ʒ��<%=rss("product")%></td>                                                                                                                                                     
 <td height="25" align="left"  bgcolor="#FFFFFF">������<%=rss("num")%></td>
 <td height="25" colspan="3"  bgcolor="#FFFFFF"> ��ɫ��<%=rss("color")%> �� </td>
 </tr>
	 <tr>
       <td height="30" colspan="3"  bgcolor="#FFFFFF">��Ʒ���<%=rss("guige")%> �� </td>
 ��                                                                                                                                                     
 <td height="25" colspan="4"  bgcolor="#FFFFFF">���ʽ��<%=rss("pay")%></td>
 </tr>
	  	 <tr>
        <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">�ͻ�ʱ��:<%=rss("send")%> �� </td> ��        </tr>
	  	  	 <tr>
        <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">��ע˵��:<%=rss("beizhu")%> �� </td> ��        </tr>
	  <tr>
<td height="25" colspan="7" align="left" background="Images/bg.jpg"  class="biaoti STYLE1">״̬��Ϣ��</td>
</tr>
      <tr>
      <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">����˵��ţ�&nbsp;&nbsp;
     
        <input name="yundan" type="text" id="yundan"  value="<%=rss("yundan")%>"/></td>
    </tr>

	<tr>
      <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">�µ�ʱ�䣺&nbsp;&nbsp;
        <%=rss("shijian2")%></td>
    </tr>
    <tr>
      <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">����ʱ�䣺&nbsp;&nbsp;
        <input name="fshijian" type="text" class="ziduan" id="fshijian" value="<%=now%>" onFocus="c.showMoreDay = false;c.show(this);">
      <img src="images/shuoming.jpg" width="14" height="14" style="cursor:hand" onMouseOver="ddrivetip('��Ҫ�޸���ע���ʽ')" onMouseOut="hideddrivetip()" /></td>
    </tr>
	<tr>
      <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">����״̬��&nbsp;&nbsp;
        <select name="zhuangtai1" class="liebiao" id="zhuangtai1">
          <option value="�ѷ���"<%if rss("zhuangtai")="�ѷ���" then%> selected<%end if%>>�ѷ���</option>
          <option value="���׳ɹ�"<%if rss("zhuangtai")="���׳ɹ�" then%> selected<%end if%>>���׳ɹ�</option>
          <option value="���׹ر�"<%if rss("zhuangtai")="���׹ر�" then%> selected<%end if%>>���׹ر�</option>
        </select>
      <img src="images/shuoming.jpg" width="14" height="14" style="cursor:hand" onMouseOver="ddrivetip('�����ɹ������޸Ķ�Ӧ״̬')" onMouseOut="hideddrivetip()" /></td>
    </tr>
    <tr>
      <td height="25" colspan="7" align="center"  bgcolor="#FFFFFF">&nbsp;
        <input name="Submit" type="submit" class="an" value="�ύ" />
        <input name="Submit2" type="reset" class="an" value="����" />
      <input name="Submit3" type="button" class="an" value="����" onClick="javascript:history.go(-1)" /></td>
    </tr></form>
</table>

</body>
</html>