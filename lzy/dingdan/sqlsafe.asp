<%
Sql_in="<%|%\>|<object|<script|'"
'������asp���<%|%\> , �ű�<js��vbs��վ>����Ƕ����(object)<flash��վ>�����ݿ��޸ı�alter��ɾ������� drop

  '��ֹGET����--------------------------------------------------------
  '���ֳ�ע���ַ�
  Sql=Split(Sql_in,"|") 
  '���GET���������ݲ�Ϊ��
  If Request.QueryString<>"" Then
      '��һȡ���ύ�����Ĳ���
     For Each Sql_Get In Request.QueryString
     For Sql_Data=0 To Ubound(Sql)
      '�ж��Ƿ�����Ƿ��ַ�
      IF Instr(Lcase(Request.QueryString(Sql_Get)),Sql(Sql_Data))<>0 Then

       '����зǷ��ַ��������Ի�����ʾ�����Զ�������һҳ


       Response.Write("<script>alert('�����벻Ҫ����Ƿ��ַ�����ע�룬���IP�Ѽ�¼!');history.go(-1);</script>")
    Response.End()
   End IF
   Next
   Next
   End If
  '��ֹPOST����---------------------------------------------------
  IF Request.Form<>"" Then
     For Each Sql_Post In Request.Form
    For Sql_Data=0 To Ubound(Sql)
     IF Instr(Lcase(Request.Form(Sql_Post)),Sql(Sql_Data))<>0 Then

        Response.Write("<script>alert('�����벻Ҫ����Ƿ��ַ�����ע�룬���IP�Ѽ�¼!');history.go(-1);</script>")
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