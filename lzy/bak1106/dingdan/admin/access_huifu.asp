<!--#include file="inc.asp"-->
<%call admin()%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form method="post" action="?action=rebakuserdata">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789" class="a2">
    <tr>
      <td height="25" colspan="2" background="images/bg.jpg" bgcolor="#FFFFFF" class="biaoti" align="center">���ݿ�ָ�</td>
    </tr>
    <tr>
      <td height="25" colspan="2" bgcolor="#FFFFFF" class="a1">&nbsp;�ָ����ݿ� ( ��ҪFSO֧�֣�FSO��ذ����뿴΢����վ )</td>
    </tr>
    <tr class="a3">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;�������ݿ�·��(���)�� </td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="DBpath" type=text class="sjk" id="DBpath" value="../databackup/#$84$4566#@$$$@.zyhl" size="60"></td>
    </tr>
    <tr class="a4">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;Ŀ�����ݿ�·��(���)��</td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="backpath" type=text class="sjk" value="../#%%#$%3%TY23453465436/#$84$4566#@$$$@.zyhl" size="60"></td>
    </tr>
  </table>
  <br />
  <center>
    <input name="exportsubmit2" type="submit" class="an" value="�ָ�">
  </center>
</form>
<%
if request("action")="rebakuserdata" then
	Dbpath=request.form("Dbpath")
	backpath=request.form("backpath")
	if dbpath="" then
		response.write "<script>alert('��������Ҫ�ָ��ɵ����ݿ�ȫ��!');history.go(-1)</script>"
		response.end
	else
		Dbpath=server.mappath(Dbpath)
	end if
	backpath=server.mappath(backpath)
	Set testConn = Server.CreateObject("ADODB.Connection")
	On Error Resume Next
	testConn.open "Provider = Microsoft.Jet.OLEDB.4.0;Data Source = " & Dbpath
	If Err then
		Response.Write Err.Description
		Err.Clear
		Set testConn = Nothing
		response.write "<script>alert('���ݵ��ļ����ǺϷ������ݿ�!');history.go(-1)</script>"
		Response.End 
	Else
		Set testConn = Nothing
	End If
	Set Fso=server.createobject("scripting.filesystemobject")
	if fso.fileexists(dbpath) then  					
		fso.copyfile Dbpath,Backpath
		response.write "<script>alert('���ݿ�ָ��ɹ�!');history.go(-1)</script>"
		response.end
	else
		response.write "<script>alert('����Ŀ¼�²������ı����ļ�!');history.go(-1)</script>"
		response.end
		SuccessMsg("")
	end if
end if
'------------------���ĳһĿ¼�Ƿ����-------------------
Function CheckDir(FolderPath)
	Dim fso1
	folderpath=Server.MapPath(".")&"\"&folderpath
    Set fso1 = CreateObject("Scripting.FileSystemObject")
    If fso1.FolderExists(FolderPath) then
       '����
       CheckDir = true
    Else
       '������
       CheckDir = False
    End if
    Set fso1 = nothing
End Function
%>
</body>
</html>