<%
'--------���岿��------------------
dim sql_injdata
SQL_injdata = "'|and|script|exec|insert|select|delete|update|count|*|%|mid|master|truncate|char|declare|1=1|1=2|;"
SQL_inj = split(SQL_Injdata,"|")
'--------POST����------------------
If Request.QueryString<>"" Then
	For Each SQL_Get In Request.QueryString
		For SQL_Data=0 To Ubound(SQL_inj)
		if instr(Request.QueryString(SQL_Get),Sql_Inj(Sql_DATA))>0 Then
			Response.Write "<Script Language=JavaScript>alert('ϵͳ��ʾ��!\n\n�벻Ҫ�ڲ����а����Ƿ��ַ�����ע��!\n\n');window.location="&"'"&"right.asp"&"'"&";</Script>"
			Response.end
		end if
		next
	Next
End If
'--------GET����-------------------
If Request.Form<>"" Then
	For Each Sql_Post In Request.Form
	For SQL_Data=0 To Ubound(SQL_inj)
		if instr(Request.Form(Sql_Post),Sql_Inj(Sql_DATA))>0 Then
			Response.Write "<Script Language=JavaScript>alert('ϵͳ��ʾ��!\n\n�벻Ҫ�ڲ����а����Ƿ��ַ�����ע��!\n\n');window.location="&"'"&"right.asp"&"'"&";</Script>" 
			Response.end
		end if
		next
		next
end if

if instr(request("formpath","."))>0 then response.write "©���Ѳ�" :response.end

%>