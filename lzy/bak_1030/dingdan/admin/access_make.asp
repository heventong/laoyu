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
<form method="post" action="?action=BakUserbf">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789" class="a2">
    <tr>
      <td height="25" colspan="2" background="images/bg.jpg" bgcolor="#FFFFFF" class="biaoti" align="center">���ݿⱸ��</td>
    </tr>
    <tr>
      <td height="25" colspan="2" bgcolor="#FFFFFF" class="a1">&nbsp;�������ݿ� ( ��ҪFSO֧�֣�FSO��ذ����뿴΢����վ )</td>
    </tr>
    <tr class="a3">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;��ǰ���ݿ�·��(���·��)�� </td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="DBpath" type="text" class="sjk" value="../#%%#$%3%TY23453465436/#$84$4566#@$$$@.zyhl" size="60"></td>
    </tr>
    <tr class="a4">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;�������ݿ�Ŀ¼(���·��)��(��Ŀ¼�����ڣ������Զ�����)</td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="bkfolder" type="text" class="sjk" value="../databackup" size="60"></td>
    </tr>
    <tr class="a4">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;�������ݿ�����(��д����)��(�籸��Ŀ¼�и��ļ��������ǣ���û�У����Զ�����)</td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="bkDBname" type="text" class="sjk" value="#$84$4566#@$$$@.zyhl" size="60"></td>
    </tr>
  </table>
  <br>
  <center>
    <input name="exportsubmit" type="submit" class="an" value="����">
  </center>
</form>
<%
if request("action")="BakUserbf" then
		Dim Dbpath,backpath,testConn,bkfolder,bkdbname,fso
		On error resume next
		Dim FileConnStr,Fileconn
		Dbpath=request.Form("Dbpath")
		Dbpath=server.mappath(Dbpath)
		bkfolder=request.Form("bkfolder")
		bkdbname=request.Form("bkdbname")
		FileConnStr = "Provider = Microsoft.Jet.OLEDB.4.0;Data Source = " & Dbpath
		Set Fileconn = Server.CreateObject("ADODB.Connection")
		Fileconn.open FileConnStr
		If Err then
			Response.Write Err.Description
			Err.Clear
			Set Fileconn = Nothing
			response.write "<script>alert('���ݵ��ļ����ǺϷ������ݿ�!');history.go(-1)</script>"
			response.end
		Else
			Set Fileconn = Nothing
		End If
		Set Fso=server.createobject("scripting.filesystemobject")
		If Fso.fileexists(dbpath) then
			If CheckDir(bkfolder) = true then
				Fso.copyfile dbpath,bkfolder& "\"& bkdbname
			else
				MakeNewsDir bkfolder
				Fso.copyfile dbpath,bkfolder& "\"& bkdbname
			end if
			response.write "<script>alert('���ݿⱸ�ݳɹ�!');history.go(-1)</script>"
			response.end
		Else
			response.write "<script>alert('�Ҳ���������Ҫ���ݵ��ļ�!');history.go(-1)</script>"
			response.end
		End if
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
'-------------����ָ����������Ŀ¼-----------------------
Function MakeNewsDir(foldername)
	dim f,fso1
    Set fso1 = CreateObject("Scripting.FileSystemObject")
        Set f = fso1.CreateFolder(foldername)
        MakeNewsDir = true
    Set fso1 = nothing
End Function
%>
</body>
</html>