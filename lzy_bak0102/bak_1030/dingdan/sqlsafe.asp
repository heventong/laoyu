<%
Sql_in="<%|%\>|<object|<script|'"
'增加了asp标记<%|%\> , 脚本<js和vbs跨站>和内嵌对象(object)<flash跨站>和数据库修改表alter和删除表操作 drop

  '防止GET方法--------------------------------------------------------
  '区分出注入字符
  Sql=Split(Sql_in,"|") 
  '如果GET过来的数据不为空
  If Request.QueryString<>"" Then
      '逐一取出提交过来的参数
     For Each Sql_Get In Request.QueryString
     For Sql_Data=0 To Ubound(Sql)
      '判断是否包含非法字符
      IF Instr(Lcase(Request.QueryString(Sql_Get)),Sql(Sql_Data))<>0 Then

       '如果有非法字符，弹出对话框提示，并自动返回上一页


       Response.Write("<script>alert('错误：请不要输入非法字符尝试注入，你的IP已记录!');history.go(-1);</script>")
    Response.End()
   End IF
   Next
   Next
   End If
  '防止POST方法---------------------------------------------------
  IF Request.Form<>"" Then
     For Each Sql_Post In Request.Form
    For Sql_Data=0 To Ubound(Sql)
     IF Instr(Lcase(Request.Form(Sql_Post)),Sql(Sql_Data))<>0 Then

        Response.Write("<script>alert('错误：请不要输入非法字符尝试注入，你的IP已记录!');history.go(-1);</script>")
     Response.End()
     End IF
  Next
  Next
  End if
  


function dvHTMLEncode(fString)
if not isnull(fString) then
    fString = replace(fString, ">", "&gt;")
    fString = replace(fString, "<", "&lt;")
 	fString = replace(fString,"'","""")
    fString = Replace(fString, CHR(32), "&nbsp;")
    fString = Replace(fString, CHR(9), "&nbsp;")
    fString = Replace(fString, CHR(34), "&quot;")
    fString = Replace(fString, CHR(39), "&#39;")
    fString = Replace(fString, CHR(13), "")
    fString = Replace(fString, CHR(10) & CHR(10), "</P><P> ")
    fString = Replace(fString, CHR(10), "<BR> ")
    dvHTMLEncode = fString
end if
end function

  
  
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



%>