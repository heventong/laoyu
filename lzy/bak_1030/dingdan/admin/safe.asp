<!--#include file="inc.asp"-->
<!--#include file="md5.asp"-->

<%call admin()%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�������</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<body>

<script>
function pcheck(){
	if (document.check.old.value==""){
	    alert('����дԭʼ��ȫ��֤�룡');
		document.check.old.focus();
		return false;
	}

	if (document.check.code1.value==""){
	    alert('����д�°�ȫ��֤�룡');
		document.check.code1.focus();
		return false;
	}
if (document.check.code2.value==""){
	    alert('��ȷ�ϰ�ȫ��֤�룡');
		document.check.code2.focus();
		return false;
	}
	return true;	
}
</script>
<%
call admin()
if request("action")="edit" then
    old=md5(trim(request("old")))

	code1=request("code1")
	code2=request("code2")
	call kz(old,"����ԭʼ��ȫ��")
	call kz(code1,"�����°�ȫ��")
	call kz(code2,"ȷ���°�ȫ��")
	call xd(code1,code2,"ȷ������")
set rs=server.CreateObject("adodb.recordset")
sql="select top 1 * from safe where safecode='"&old&"'"

rs.open sql,conn,1,3
if rs.eof  then 
		response.write"<SCRIPT language=JavaScript>alert('ԭʼ��ȫ�������������д');javascript:history.go(-1)</SCRIPT>"
else
	rs("safecode")=md5(code1)
	rs.update
	call po("right.asp","")

 end if
end if

%>
<form method="post" action="?action=edit">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789" class="a2">
    <tr>
      <td height="25" colspan="2" background="images/bg.jpg" bgcolor="#FFFFFF" class="biaoti" align="center">�޸İ�ȫ��</td>
    </tr>
    <tr>
      <td height="25" colspan="2" bgcolor="#FFFFFF" class="a1 hongzi"><p>��ȫ�룺Ϊ�˱�֤���ݵİ�ȫ���õĶ�����֤����,�������ض�������¼�밲ȫ��ſ��Բ�������</p>      </td>
    </tr>
    <tr class="a3">
      <td height="30" bgcolor="#FFFFFF">ԭʼ��ȫ�룺</td>
      <td bgcolor="#FFFFFF">&nbsp;&nbsp;<input name="old" type="password" class="sjk" id="code1" size="60" /></td>
    </tr>
    <tr class="a3">
      <td width="43%" height="30" bgcolor="#FFFFFF">���밲ȫ�룺 </td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="code1" type=password class="sjk" id="DBpath" size="60"></td>
    </tr>
    <tr class="a4">
      <td width="43%" height="30" bgcolor="#FFFFFF">ȷ�ϰ�ȫ�룺</td>
      <td width="57%" bgcolor="#FFFFFF">&nbsp;
        <input name="code2" type=password class="sjk" size="60"></td>
    </tr>
  </table>
  <br />
  <center>
    <input name="exportsubmit2" type="submit" class="an" style="width:120px" value="ȷ���޸�">
  </center>
</form>

</body>
</html>