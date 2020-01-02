<!--#include file="inc.asp"-->
<%call admin()%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />

</head>
<body>
<p>&nbsp;</p>

<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
  <tr>
    <td height="25" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">欢迎光临后台管理</td>
  </tr>
  <tr>
    <td height="25" align="center" bgcolor="#FFFFFF">为了您的网站更加安全，退出时请点击左侧 [<a href="?action=out" target="_top" onClick="return confirm('你确定要退出后台管理系统吗')">安全退出</a>]</td>
  </tr>

  <tr>
    <td height="25" align="center" bgcolor="#FFFFFF">
<%
On Error Resume Next 
    Err = 0
Dim JMails 
Set JMails=Server.CreateObject("JMail.Message")
If JMails Is Nothing Then    
    Response.Write "检测组件是否支持：<font color=red><b>×</b></font> <font color=#555555>不支持</font>" 
Else    
If 0 = Err Then getvers=JMails.version
    Response.Write "检测组件是否支持：<font color=green><b>√</b></font> <font color=#555555>( JMail 邮件发送 )</font> 版本 "&getvers 
End If 
Set JMails = Nothing
    Err = 0
%>;<%Function IsObjInstalled(strClassString)
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

不支持FSO组件功能

<% Else %>

支持FSO组件功能

<% End If %>
</td>
  </tr>
</table>



</body>
</html>
