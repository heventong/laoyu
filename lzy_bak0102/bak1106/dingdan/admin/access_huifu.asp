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
<form method="post" action="?action=rebakuserdata">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789" class="a2">
    <tr>
      <td height="25" colspan="2" background="images/bg.jpg" bgcolor="#FFFFFF" class="biaoti" align="center">数据库恢复</td>
    </tr>
    <tr>
      <td height="25" colspan="2" bgcolor="#FFFFFF" class="a1">&nbsp;恢复数据库 ( 需要FSO支持，FSO相关帮助请看微软网站 )</td>
    </tr>
    <tr class="a3">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;备份数据库路径(相对)： </td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="DBpath" type=text class="sjk" id="DBpath" value="../databackup/#$84$4566#@$$$@.zyhl" size="60"></td>
    </tr>
    <tr class="a4">
      <td width="43%" height="30" bgcolor="#FFFFFF">&nbsp;目标数据库路径(相对)：</td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="backpath" type=text class="sjk" value="../#%%#$%3%TY23453465436/#$84$4566#@$$$@.zyhl" size="60"></td>
    </tr>
  </table>
  <br />
  <center>
    <input name="exportsubmit2" type="submit" class="an" value="恢复">
  </center>
</form>
<%
if request("action")="rebakuserdata" then
	Dbpath=request.form("Dbpath")
	backpath=request.form("backpath")
	if dbpath="" then
		response.write "<script>alert('请输入您要恢复成的数据库全名!');history.go(-1)</script>"
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
		response.write "<script>alert('备份的文件并非合法的数据库!');history.go(-1)</script>"
		Response.End 
	Else
		Set testConn = Nothing
	End If
	Set Fso=server.createobject("scripting.filesystemobject")
	if fso.fileexists(dbpath) then  					
		fso.copyfile Dbpath,Backpath
		response.write "<script>alert('数据库恢复成功!');history.go(-1)</script>"
		response.end
	else
		response.write "<script>alert('备份目录下并无您的备份文件!');history.go(-1)</script>"
		response.end
		SuccessMsg("")
	end if
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
%>
</body>
</html>