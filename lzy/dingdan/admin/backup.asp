<!--#include file="inc.asp"-->
<!--#include file="md5.asp"-->
<%call admin()
Set rs2=Server.CreateObject("ADODB.RecordSet") 
sql2="select * from safe where safecode='"&session("safecode")&"'" 

rs2.Open sql2,conn,1,1
if rs2.eof then
 response.write "<script>alert('��ȫ����֤����');window.location.href='right.asp';</script>"

response.End()
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body>

<%

Set rs=Server.CreateObject("ADODB.RecordSet") 
sql="select * from allorder"
rs.Open sql,conn,1,1%>

<meta content="text/html; charset=gb2312" http-equiv="Content-Type">  
<TITLE>����EXCEL�ļ�</TITLE>  


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
   '--�������������ɵ�EXCEL�ļ������µĴ��  
   filename = Server.MapPath(""&filename&".xls")  
   '--���ԭ����EXCEL�ļ����ڵĻ�ɾ����  
   if fs.FileExists(filename) then
fs.DeleteFile(filename)  
   end if
   '--����EXCEL�ļ�
   set myfile = fs.CreateTextFile(filename,true)
   Set rs = Server.CreateObject("ADODB.Recordset")
   '--�����ݿ��а�����ŵ�EXCEL�е����ݲ����  
   sql="select * from allorder"
   rs.Open sql,conn,1,3

   if rs.EOF and rs.BOF then
   else
dim strLine,responsestr  
strLine=""

strLine = "ID"&chr(9)&"�û���"&chr(9)&"������Ʒ"&chr(9)&"�绰����"&chr(9)&"�ջ���ַ"&chr(9)&"�µ�����"&chr(9)&"��ע"&chr(9)&"����״̬"&chr(9)&"�˵���"&chr(9)&"����ʱ��"&chr(9)&"�µ�IP��ַ"&chr(9)&"���ʽ"&chr(9)&"������Ϣ"&chr(9)&"����"&chr(9)&"�Ա�"&chr(9)&"����"&chr(9)&"��ɫ"&chr(9)&"�绰"&chr(9)&"����ͺ�"&chr(9)&"�ʱ�"&chr(9)&"�µ�ʱ��"&chr(9)&"�µ�ҳ��"&chr(9)&"�µ���ַ"

'--�����������д��EXCEL  
myfile.writeline strLine
Do while Not rs.EOF  
strLine=""
for each x in   rs.Fields  
   strline= strline & "="""&x.value &""""& chr(9)
  
next
'--���������д��EXCEL  
myfile.writeline strLine
rs.MoveNext
loop

   rs.Close  
   set   rs   =   nothing
End If

%>



<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
  <tr>
    <td height="25" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">ȫ���������ع���</td>
  </tr>
  <tr>
    <td height="56" align="center" bgcolor="#FFFFFF">���������ɹ�����  <a href=backup.xls  style="color:#FF0000" >�����������</a></td>
  </tr>
  <tr>
    <td height="45" align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
</table>

</body>
</html>