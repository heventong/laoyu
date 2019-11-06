<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title> 乐淘订单系统控制面板</title>
<link rel="shortcut icon" href="images/favicon.ico">

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body onselectstart="return false" oncontextmenu="return false" onLoad="form1.gname.focus()">
<%


Public Function ServerPath 
Dim Path
Dim Pos
Path="http://" & Request.ServerVariables("server_name") & Request.ServerVariables("script_name")
Pos=InStrRev(Path,"/")
ServerPath=Left(Path,Pos)
End Function

session("ServerPath")=ServerPath




Randomize Timer
key2=Int(Rnd*8999+1000)

	Function getIP()  
Dim strIPAddr  
If Request.ServerVariables("HTTP_X_FORWARDED_FOR") = "" OR InStr(Request.ServerVariables("HTTP_X_FORWARDED_FOR"), "unknown") > 0 Then  
 strIPAddr = Request.ServerVariables("REMOTE_ADDR")  
ElseIf InStr(Request.ServerVariables("HTTP_X_FORWARDED_FOR"), ",") > 0 Then  
 strIPAddr = Mid(Request.ServerVariables("HTTP_X_FORWARDED_FOR"), 1, InStr(Request.ServerVariables("HTTP_X_FORWARDED_FOR"), ",")-1)  
ElseIf InStr(Request.ServerVariables("HTTP_X_FORWARDED_FOR"), ";") > 0 Then  
 strIPAddr = Mid(Request.ServerVariables("HTTP_X_FORWARDED_FOR"), 1, InStr(Request.ServerVariables("HTTP_X_FORWARDED_FOR"), ";")-1)  
Else  
 strIPAddr = Request.ServerVariables("HTTP_X_FORWARDED_FOR")  
End If  
getIP = Trim(Mid(strIPAddr, 1, 30))  

End Function 
session("client_ip")=getIP 

%>
<form name="form1" method="post" action="checklogin.asp?action=login">


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