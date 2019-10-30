<!--#include file="inc.asp"-->
<%call admin()%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form method="post" action="?action=BakUserbf">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789" class="a2">
    <tr>
      <td height="25" colspan="2" background="images/bg.jpg" bgcolor="#FFFFFF" class="biaoti" align="center">数据库备份</td>
    </tr>
    <tr>
      <td height="25" colspan="2" bgcolor="#FFFFFF" class="a1">&nbsp;备份数据库 ( 需要FSO支持，FSO相关帮助请看微软网站 )</td>
    </tr>
    <tr class="a3">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;当前数据库路径(相对路径)： </td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="DBpath" type="text" class="sjk" value="../#%%#$%3%TY23453465436/#$84$4566#@$$$@.zyhl" size="60"></td>
    </tr>
    <tr class="a4">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;备份数据库目录(相对路径)：(如目录不存在，程序将自动创建)</td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="bkfolder" type="text" class="sjk" value="../databackup" size="60"></td>
    </tr>
    <tr class="a4">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;备份数据库名称(填写名称)：(如备份目录有该文件，将覆盖，如没有，将自动创建)</td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="bkDBname" type="text" class="sjk" value="#$84$4566#@$$$@.zyhl" size="60"></td>
    </tr>
  </table>
  <br>
  <center>
    <input name="exportsubmit" type="submit" class="an" value="备份">
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
			response.write "<script>alert('备份的文件并非合法的数据库!');history.go(-1)</script>"
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
			response.write "<script>alert('数据库备份成功!');history.go(-1)</script>"
			response.end
		Else
			response.write "<script>alert('找不到您所需要备份的文件!');history.go(-1)</script>"
			response.end
		End if
end if
'------------------检查某一目录是否存在-------------------
Function CheckDir(FolderPath)
	Dim fso1
	folderpath=Server.MapPath(".")&"\"&folderpath
    Set fso1 = CreateObject("Scripting.FileSystemObject")
    If fso1.FolderExists(FolderPath) then
       '存在
       CheckDir = true
    Else
       '不存在
       CheckDir = False
    End if
    Set fso1 = nothing
End Function
'-------------根据指定名称生成目录-----------------------
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