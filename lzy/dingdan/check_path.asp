<%
dim server_v1,server_v2
server_v1=Cstr(Request.ServerVariables("HTTP_REFERER"))
server_v2=Cstr(Request.ServerVariables("SERVER_NAME"))
if mid(server_v1,8,len(server_v2))<>server_v2 then
response.write "<br><br><center><table border=1 cellpadding=20 bordercolor=black bgcolor=#EEEEEE width=450>"
response.write "<tr><td style='font:9pt Verdana'>"
response.write "你提交的路径有误，禁止从站点外部提交数据请不要乱该参数！"
response.write "</td></tr></table></center>"
response.end
end if
%>

