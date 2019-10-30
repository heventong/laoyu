<!--#include file="check_dbstr.asp"-->
<%



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

<%



sub admin()


Set rs2=Server.CreateObject("ADODB.RecordSet") 
sql2="select * from mymanage where gname='"&session("letao_admin")&"'" 
rs2.Open sql2,conn,1,1
if rs2.eof then
 response.write "<script>alert('请勿非法登录！');window.location.href='index.asp';</script>"

response.End()
end if
end sub



sub pop(msg)
response.Write("<script>alert('"&msg&"');history.go(-1)</script>")
response.end
end sub

sub pop_no(msg)
response.Write("<script>alert('"&msg&"')</script>")
end sub

sub kz(str,msg)
if str="" then
call pop(msg&"为空!")
end if
end sub

sub kzlylx(str,msg)
if str="" then
call pop(msg)
end if
end sub

sub kmz(str,msg)
if str="" then
call pop(msg&"请选择一个密码提示问题，用于找回密码!")
end if
end sub

sub xd(q,h,msg)
if strcomp(q,h)<>0 then
call pop(msg&"有误!")
end if
end sub

sub hy(q,h,msg)
if instr(q,h)>0 then
call pop(msg)
end if
end sub

sub po(url,tanchu)
if tanchu="" then
response.Write("<script>alert('修改成功!');location.href('"&url&"')</script>")
response.end
else
response.Write("<script>alert('"&tanchu&"');location.href('"&url&"')</script>")
response.end
end if
end sub

sub cd(aa,min,max,msg)
if len(aa)<min or len(a)>max then
call pop(msg)
end if
end sub

sub aa(a1,a2,msg)
if len(a1)>a2 then
call pop(msg)
end if
end sub

sub del(table,id)
sql="delete from "&table&" where id="&id
conn.execute(sql)
end sub

sub sz(str,msg)
if not isnumeric(str) then
call pop(msg)
end if
end sub



if request("action")="out" then
	session("letao_admin")=""
	response.redirect "index.asp"
end if
%>