
<!--#include file="inc.asp"-->
<%
call admin()
mailaddress=request("mailaddress")
if mailaddress="" then
mailaddress="邮件服务器地址 如smtp.163.com"
end if
mailsend=request("mailsend")
if mailsend="" then
mailsend="发件地址 如 abc@123.com"
end if
mailaddress=request("mailaddress")
if mailsend="" then
mailsend="发件地址 如abc@123.com"
end if
mailusername=request("mailusername")
if mailusername="" then
mailusername="登陆邮箱用户名 如abc@123.com"
end if
mailuserpwd=request("mailuserpwd")
if mailuserpwd="" then
mailuserpwd="邮箱密码 如 1234567"
end if
mailname=request("mailname")
if mailname="" then
mailname="发送人签名 如 我的网站订单"
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
	call pop_no("邮件服务器设置成功!")
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


<form id="form1" name="form1" method="post" action="?action=edit">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
    <tr>
      <td height="25" colspan="3" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">网站基本信息设置</td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">邮件服务器地址：&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
         <input name="mailaddress"class="zd" type="text" id="mailaddress" size="36" value="<%=trim(rs("mailaddress"))%>" /></td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">接收邮箱：&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
        <input name="mailsend" class="zd" type="text" id="mailsend" size="36" value="<%=trim(rs("mailsend"))%>" />
        <span class="hongzi">        （必须为移动139，电信189，联通wo邮箱） </span></td>
    </tr>
	<tr>
      <td height="30" align="right" bgcolor="#FFFFFF">邮箱名称：&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
        <input name="mailusername" class="zd" type="text" id="mailusername" size="36" value="<%=trim(rs("mailusername"))%>" />
        *你的邮箱帐号</td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">邮箱密码：&nbsp;</td>
      <td width="29%" bgcolor="#FFFFFF">&nbsp;
        <input name="mailuserpwd"class="zd"  type="password" id="mailuserpwd" size="36" value="***" />
        *163邮箱密码 </td>
      <td width="43%" bgcolor="#FFFFFF"></td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">产品名称：&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
      <input name="mailname"class="zd"  type="text" id="mailname" size="36" value="<%=trim(rs("mailname"))%>" />        </td>
    </tr>
    <tr>
      <td height="30" align="right" bgcolor="#FFFFFF">&nbsp;</td>
      <td colspan="2" bgcolor="#FFFFFF">&nbsp;
        <input name="Submit" type="submit" class="an" value="提交" />
        <input name="Submit2" type="reset" class="an" value="重置" /></td>
    </tr>
    <tr>
      <td height="30" colspan="3" bgcolor="#FFFFFF"><p><span class="hongzi">重要说明</span>:</p>
        <p>(1)判断是否支持发送邮件功能：
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
          不支持FSO组件功能
          <% Else %>
          支持FSO组件功能
          <% End If %>
      --如果提示不支持Jmail组建功能，无法发送邮件和接收短信订单提醒</p>
      <p>(2)邮件服务器地址：登录邮箱为QQ邮箱 则填写：smtp.qq.com; 163邮箱则填写 smtp.163.com; 126邮箱填写：smtp.126.com，必须对应；<span class="hongzi">建议使用163邮箱 </span></p>
      <p>(3)接收邮箱：必须为移动139邮箱 或 电信189邮箱 或 联通 wo邮箱；如果没有请注册；</p></td>
    </tr>
  </table>
</form><br />
</body>
</html>