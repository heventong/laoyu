<!--#include file="inc.asp"-->
<!--#include file="md5.asp"-->
<%call admin()
Set rs2=Server.CreateObject("ADODB.RecordSet") 
sql2="select * from safe where safecode='"&session("safecode")&"'" 

rs2.Open sql2,conn,1,1
if rs2.eof then
 response.write "<script>alert('安全码验证错误！');window.location.href='right.asp';</script>"

response.End()
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

<%

Set rs=Server.CreateObject("ADODB.RecordSet") 
sql="select * from allorder"
rs.Open sql,conn,1,1%>

<meta content="text/html; charset=gb2312" http-equiv="Content-Type">  
<TITLE>生成EXCEL文件</TITLE>  


<%
   dim salesno
   filename=filepath&"backup"
   'salesno="05-Gi-9874"
  ' salesno=request("salesno")
  ' response.Write(salesno)
  ' dim conn,connstr  
 '  connstr="dbq="+server.mappath("/storage.mdb")+";defaultdir=; driver={microsoft access driver (*.mdb)};"
  ' set   conn=server.CreateObject("adodb.connection")  
  ' conn.Open connstr
   dim   rs,sql,filename,fs,myfile,x
   Set fs = server.CreateObject("scripting.filesystemobject")  
   '--假设你想让生成的EXCEL文件做如下的存放  
   filename = Server.MapPath(""&filename&".xls")  
   '--如果原来的EXCEL文件存在的话删除它  
   if fs.FileExists(filename) then
fs.DeleteFile(filename)  
   end if
   '--创建EXCEL文件
   set myfile = fs.CreateTextFile(filename,true)
   Set rs = Server.CreateObject("ADODB.Recordset")
   '--从数据库中把你想放到EXCEL中的数据查出来  
   sql="select * from allorder"
   rs.Open sql,conn,1,3

   if rs.EOF and rs.BOF then
   else
dim strLine,responsestr  
strLine=""

strLine = "ID"&chr(9)&"用户名"&chr(9)&"订购产品"&chr(9)&"电话号码"&chr(9)&"收货地址"&chr(9)&"下单日期"&chr(9)&"备注"&chr(9)&"发货状态"&chr(9)&"运单号"&chr(9)&"发货时间"&chr(9)&"下单IP地址"&chr(9)&"付款方式"&chr(9)&"描述信息"&chr(9)&"年龄"&chr(9)&"性别"&chr(9)&"数量"&chr(9)&"颜色"&chr(9)&"电话"&chr(9)&"规格型号"&chr(9)&"邮编"&chr(9)&"下单时间"&chr(9)&"下单页面"&chr(9)&"下单网址"

'--将表的列名先写入EXCEL  
myfile.writeline strLine
Do while Not rs.EOF  
strLine=""
for each x in   rs.Fields  
   strline= strline & "="""&x.value &""""& chr(9)
  
next
'--将表的数据写入EXCEL  
myfile.writeline strLine
rs.MoveNext
loop

   rs.Close  
   set   rs   =   nothing
End If

%>



<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
  <tr>
    <td height="25" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">全部订单下载管理</td>
  </tr>
  <tr>
    <td height="56" align="center" bgcolor="#FFFFFF">订单导出成功！请  <a href=backup.xls  style="color:#FF0000" >点击这里下载</a></td>
  </tr>
  <tr>
    <td height="45" align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

</body>
</html>