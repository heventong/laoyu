
<!--#include file="inc.asp"-->
<%
call admin()
mailaddress=request("mailaddress")
if mailaddress="" then
mailaddress="�ʼ���������ַ ��smtp.163.com"
end if
mailsend=request("mailsend")
if mailsend="" then
mailsend="������ַ �� abc@123.com"
end if
mailaddress=request("mailaddress")
if mailsend="" then
mailsend="������ַ ��abc@123.com"
end if
mailusername=request("mailusername")
if mailusername="" then
mailusername="��½�����û��� ��abc@123.com"
end if
mailuserpwd=request("mailuserpwd")
if mailuserpwd="" then
mailuserpwd="�������� �� 1234567"
end if
mailname=request("mailname")
if mailname="" then
mailname="������ǩ�� �� �ҵ���վ����"
end if
set rs=server.CreateObject("adodb.recordset")
sql="select * from contact"
rs.open sql,conn,1,3
if request("action")="edit" then
	rs("mailaddress")=mailaddress
	rs("mailsend")=mailsend
	rs("mailusername")=mailusername
	rs("mailuserpwd")=mailuserpwd
	rs("mailname")=mailname
	rs.update
	call pop_no("�ʼ����������óɹ�!")
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body>


<form id="form1" name="form1" method="post" action="?action=edit">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
    <tr>
      <td height="25" colspan="3" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">��վ������Ϣ����</td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">�ʼ���������ַ��&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
         <input name="mailaddress"class="zd" type="text" id="mailaddress" size="36" value="<%=trim(rs("mailaddress"))%>" /></td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">�������䣺&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
        <input name="mailsend" class="zd" type="text" id="mailsend" size="36" value="<%=trim(rs("mailsend"))%>" />
        <span class="hongzi">        ������Ϊ�ƶ�139������189����ͨwo���䣩 </span></td>
    </tr>
	<tr>
      <td height="30" align="right" bgcolor="#FFFFFF">�������ƣ�&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
        <input name="mailusername" class="zd" type="text" id="mailusername" size="36" value="<%=trim(rs("mailusername"))%>" />
        *��������ʺ�</td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">�������룺&nbsp;</td>
      <td width="29%" bgcolor="#FFFFFF">&nbsp;
        <input name="mailuserpwd"class="zd"  type="password" id="mailuserpwd" size="36" value="***" />
        *163�������� </td>
      <td width="43%" bgcolor="#FFFFFF"></td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">��Ʒ���ƣ�&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
      <input name="mailname"class="zd"  type="text" id="mailname" size="36" value="<%=trim(rs("mailname"))%>" />        </td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
        <input name="Submit" type="submit" class="an" value="�ύ" />
        <input name="Submit2" type="reset" class="an" value="����" /></td>
    </tr>
    <tr>
      <td height="30" colspan="3" bgcolor="#FFFFFF"><p><span class="hongzi">��Ҫ˵��</span>:</p>
        <p>(1)�ж��Ƿ�֧�ַ����ʼ����ܣ�
          <%
On Error Resume Next 
    Err = 0
Dim JMails 
Set JMails=Server.CreateObject("JMail.Message")
If JMails Is Nothing Then    
    Response.Write "�������Ƿ�֧�֣�<font color=red><b>��</b></font> <font color=#555555>��֧��</font>" 
Else    
If 0 = Err Then getvers=JMails.version
    Response.Write "�������Ƿ�֧�֣�<font color=green><b>��</b></font> <font color=#555555>( JMail �ʼ����� )</font> �汾 "&getvers 
End If 
Set JMails = Nothing
    Err = 0
%>
          ;
          <%Function IsObjInstalled(strClassString)
 On Error Resume Next
 IsObjInstalled = False
 Err = 0
 Dim xTestObj
 Set xTestObj = Server.CreateObject(strClassString)
 If 0 = Err Then IsObjInstalled = True
 Set xTestObj = Nothing
 Err = 0
End Function
if IsObjInstalled("Scripting.FileSystemObject") = False Then %>
          ��֧��FSO�������
          <% Else %>
          ֧��FSO�������
          <% End If %>
      --�����ʾ��֧��Jmail�齨���ܣ��޷������ʼ��ͽ��ն��Ŷ�������</p>
      <p>(2)�ʼ���������ַ����¼����ΪQQ���� ����д��smtp.qq.com; 163��������д smtp.163.com; 126������д��smtp.126.com�������Ӧ��<span class="hongzi">����ʹ��163���� </span></p>
      <p>(3)�������䣺����Ϊ�ƶ�139���� �� ����189���� �� ��ͨ wo���䣻���û����ע�᣻</p></td>
    </tr>
  </table>
</form><br />
</body>
</html>