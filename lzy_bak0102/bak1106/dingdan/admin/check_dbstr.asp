

<%
dim conn,connstr,db
db="../#%%#$%3%TY23453465436/#$84$4566#@$$$@.zyhl"
On Error Resume Next
set conn = Server.CreateObject("ADODB.Connection")
connstr="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & Server.MapPath(db)
conn.Open connstr
connstr=""


%>
<%
if request.querystring("id")<>"" and not isnumeric(request.querystring("id")) then
 response.write "<script>alert('²ÎÊý³ö´í£¡');window.location.href='index.asp';</script>"
response.end()
end if
%>