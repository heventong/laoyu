<!--#include file="sqlsafe.asp"-->
<%

dim conn,connstr,db
db="#%%#$%3%TY23453465436/#$84$4566#@$$$@.zyhl"
On Error Resume Next
set conn = Server.CreateObject("ADODB.Connection")
connstr="Provider=Microsoft.Jet.OLEDB.4.0;Data Source=" & Server.MapPath(db)
conn.Open connstr
connstr=""

%>
