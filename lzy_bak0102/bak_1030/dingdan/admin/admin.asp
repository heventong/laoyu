
<!--#include file="inc.asp"-->
<!--#include file="md5.asp"-->
<%
call admin()
if request("action")="add" then
	gname=request("gname")
	gpass=request("gpass")
	gpass2=request("gpass2")
	call kz(gname,"����Ա�ʺ�")
	call kz(gpass,"����Ա����")
	call kz(gpass2,"ȷ������")
	call xd(gpass,gpass2,"ȷ������")
	call hy(gname,";","����Ա�ʺź���;��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"��","����Ա�ʺź��У���,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"'","����Ա�ʺź���'��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname," ","����Ա�ʺź��пո�,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"*","����Ա�ʺź���*��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"/","����Ա�ʺź���/��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"\","����Ա�ʺź���\��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"��","����Ա�ʺź��У���,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"��","����Ա�ʺź��С���,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"��","����Ա�ʺź��С���,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,",","����Ա�ʺź���,��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,".","����Ա�ʺź���.��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"<","����Ա�ʺź���<��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,">","����Ա�ʺź���>��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"��","����Ա�ʺź��С���,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"��","����Ա�ʺź��С���,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"!","����Ա�ʺź���!��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"��","����Ա�ʺź��У���,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"~","����Ա�ʺź���~��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"@","����Ա�ʺź���@��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"#","����Ա�ʺź���#��,�ʺ�ֻ�������ġ����֡���ĸ���»������!")
	call hy(gname,"id","�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼!")
	call hy(gname,"or","�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼!")
	call hy(gname,"and","�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼!")
	call hy(gname,"select","�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼!")
	call hy(gname,"update","�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼!")
	call hy(gname,"insert","�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼!")
	call hy(gname,"delete","�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼!")
	call hy(gname,"gname","�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼!")
	sql="select * from mymanage where gname='"&gname&"'"
	set rs=server.CreateObject("adodb.recordset")
	rs.open sql,conn,1,3
	if not (rs.eof and rs.bof) then
		call pop("���û����Ѵ���!")
	end if
	rs.addnew
	rs("gname")=gname
	rs("gpass")=md5(gpass)
	rs.update
end if
if request("action")="del" then
	call del("mymanage",request("id"))
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

<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
  <tr>
    <td height="25" colspan="3" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">����Ա����</td>
  </tr>
  <tr>
    <td width="40%" height="25" align="center" bgcolor="#FFFFFF">����Ա�ʺ�</td>
    <td width="40%" align="center" bgcolor="#FFFFFF">����Ա����</td>
    <td width="20%" align="center" bgcolor="#FFFFFF">����</td>
  </tr>
  <%
  sql="select * from mymanage"
  set rs=conn.execute(sql)
  do while not rs.eof
  %>
  <tr>
    <td height="25" align="center" bgcolor="#FFFFFF"><%=rs("gname")%></td>
    <td align="center" bgcolor="#FFFFFF">�����Ѿ�����</td>
    <td align="center" bgcolor="#FFFFFF"><a href="adminedit.asp?id=<%=rs("id")%>">�޸�����</a>&nbsp;
      <%if session("letao_admin")<>rs("gname") then%>
      <a href="?action=del&id=<%=rs("id")%>" onclick="return confirm('��ȷ��Ҫɾ��[<%=rs("gname")%>]�������Ա��?\n\n�ò��������ɻָ�!')">ɾ��</a>
      <%end if%></td>
  </tr>
 
  <%
  rs.movenext
  loop
  %>
   <tr>
    <td height="25" colspan="3" align="left" bgcolor="#FFFFFF"><span class="hongzi">������ʾ�������¹���Ԫ�˺ź󣬲����¹���Ա�˺ŵ�½��ɾ��ԭ����Ա�˺�</span></td>
  </tr>
</table>
<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="?action=add">
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#183789">
    <tr>
      <td height="25" colspan="4" align="center" background="Images/bg.jpg" bgcolor="#FFFFFF" class="biaoti">��ӹ���Ա</td>
    </tr>
    <tr>
      <td width="30%" height="25" bgcolor="#FFFFFF">&nbsp;&nbsp;����Ա�ʺţ�
        <input name="gname" type="text" class="ziduan" id="gname" maxlength="15" />
		<img src="images/shuoming.jpg" width="14" height="14" style="cursor:hand" onmouseover="ddrivetip('�û��������ú���id,or,and,select,update,insert,delete,gname�ȹؼ��� �����޷�������¼')" onmouseout="hideddrivetip()"></td>
      <td width="30%" bgcolor="#FFFFFF">&nbsp;&nbsp;����Ա���룺
        <input name="gpass" type="password" class="ziduan" id="gpass" maxlength="15" /></td>
      <td width="30%" bgcolor="#FFFFFF">&nbsp;&nbsp;����ȷ�ϣ�
        <input name="gpass2" type="password" class="ziduan" id="gpass2" maxlength="15" /></td>
      <td width="10%" align="center" bgcolor="#FFFFFF"><input name="Submit" type="submit" class="an" value="���" /></td>
    </tr>
  </table>
</form>
</body>
</html>