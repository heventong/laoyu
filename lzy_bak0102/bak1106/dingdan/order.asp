<%@language="vbscript" codepage="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<!--#include file="check_dbstr.asp"-->
<%
server_v1=Cstr(Request.ServerVariables("HTTP_REFERER"))
server_v2=Cstr(Request.ServerVariables("SERVER_NAME"))
if mid(server_v1,8,len(server_v2))<>server_v2 then
response.write "���ύ��·�����󣬽�ֹ��վ���ⲿ�ύ�����벻Ҫ�Ҹò�����"
response.end
end If
if request.Cookies("submit")="yes" then
response.write"<SCRIPT language=JavaScript>alert('��60����ύ);javascript:history.go(-1)</SCRIPT>"
response.Write"</script>"


else
'�������ύ�û�д��cookie
response.cookies("submit")="yes"
'����1���ӹ���
Response.Cookies("submit").Expires = DateAdd("n", 1, Now())

end if
      referer=request.form("referer")
      url=request.form("url")

	sname=dvHTMLEncode(request.form("dgname"))	
	product =dvHTMLEncode(request.form("product"))
	aaa=split(product,"|")
	jiage1=aaa(1)-1
	telphone=dvHTMLEncode(request.form("mob"))
	address=dvHTMLEncode(request.form("province")&request.form("city")&request.form("area")&request.form("address"))
	beizhu=dvHTMLEncode(request.form("guest"))
  
	
	'//������ֹ'��ʽ���� ������ (replace(����
	num=dvHTMLEncode(request.form("num"))
	dianhua=dvHTMLEncode(request.form("tel"))
	color=dvHTMLEncode(request.form("color"))
	sex=dvHTMLEncode(request.form("sex"))
	age=dvHTMLEncode(request.form("age"))
	guige=dvHTMLEncode(request.form("selGrade"))
	code=dvHTMLEncode(request.form("postcode"))
	send=dvHTMLEncode(request.form("shsj"))
	pay=dvHTMLEncode(request.form("paytype"))

	if sname = "" or telphone = "" or address = "" then 
		response.write"<SCRIPT language=JavaScript>alert('����д������Ϣ�����ռ��ˣ��ֻ��ţ��ջ���ַ');javascript:history.go(-1)</SCRIPT>"
	response.end
	end if


	p_count=Conn.Execute("select COUNT(*) from allorder where datediff('d',[shijian],#"&date()&"#)=0 and ip='"&getIP&"'")(0)

	if p_count>=1000 then
		response.Write "<script>alert('���ã�ÿ��ֻ�����ύ5�����ݣ�����ϵ���߿ͷ�');window.location.href='/';</script>"
		response.End()
	'//��Ϊͬһ����Ʒ �Ѿ������ύ�� ���ԾͲ�����֤��
 	else
		shijian= (year(date())&"-"&month(date())&"-"&day(date()))
sql="insert into allorder (username,product,phone,address,num,color,sex,age,guige,send,code,pay,referer,url,beizhu,shijian,shijian2)  values ('"&sname&"','"&product&"','"&telphone&"','"&address&"','"&num&"','"&color&"','"&sex&"','"&age&"','"&guige&"','"&send&"','"&code&"','"&pay&"','"&referer&"','"&url&"','"&beizhu&"','"&shijian&"','"&now()&"')"
conn.execute(sql)
	end if
	
	 	set rs=server.CreateObject("adodb.recordset")
rs.Open "select mailaddress,mailusername,mailuserpwd,mailname,mailsend from contact",conn,1,1
	name2=rs("mailname")
title="��������"& name2 &"�Ķ���" '�ʼ�����
msg="������" & sname & vbcrlf & "<br>�ֻ���" & "<a href=http://www.baidu.com/s?word=" & telphone & " target=_blank>" & telphone & "</a> "& vbcrlf & "<br>��ַ��" & address &  vbcrlf & "<br>��Ʒ��" & product &  vbcrlf & "<br>���ԣ�" & beizhu  & vbcrlf &"<br>ԴIP��" & "<a href=http://www.baidu.com/s?word=" & getIP & " target=_blank>" & getIP & "</a> <a href=http://www.baidu.com/s?word=" & getIP & ">�鿴IP���ڵ�</a>"&  vbcrlf & "<br>������Դ��" & "<a href="&referer&" target=_blank>" & referer & "</a> "

   Set jmail = Server.CreateObject("JMAIL.Message")   '���������ʼ��Ķ���
     jmail.silent = true    '����������󣬷���FALSE��TRUE��ֵj
     jmail.logging = true   '�����ʼ���־
     jmail.Charset = "GB2312"     '�ʼ������ֱ���Ϊ����
     jmail.ContentType = "text/html"    '�ʼ��ĸ�ʽΪHTML��ʽ
	 jmail.fromname = name2 '���������� 
     jmail.AddRecipient rs("mailsend")     '�ʼ��ռ��˵ĵ�ַ
     jmail.From = rs("mailusername")  '�����˵�E-MAIL��ַ
     jmail.MailServerUserName = rs("mailusername")    '��¼�ʼ�������������û���
     jmail.MailServerPassword = rs("mailuserpwd")    '��¼�ʼ����������������
     jmail.Subject = title    '�ʼ��ı��� 
     jmail.Body = msg    '�ʼ�������
     jmail.Prority = 3      '�ʼ��Ľ�������1 Ϊ��죬5 Ϊ������ 3 ΪĬ��ֵ
     jmail.Send(rs("mailaddress"))     'ִ���ʼ����ͣ�ͨ���ʼ���������ַ��
     jmail.Close()   '�رն���
if pay="֧����֧��" then
 weizhi = clng(instr(product, "Ԫ"))
 product = left(product, weizhi)
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HEAD><TITLE>֧��������֧��ȷ��</TITLE>
<META content="text/html; charset=gb2312" http-equiv=Content-Type><LINK 
rel=stylesheet type=text/css href="images/css.css">


<META name=GENERATOR content="MSHTML 8.00.6001.23507"></HEAD>
<BODY>
<DIV id=ddok>
        <form name=alipayment action="https://shenghuo.alipay.com/send/payment/fill.htm" method=post target="_blank">
		  <INPUT name="optEmail" id="optEmail"type="hidden" value="php52net@163.com">
		   <INPUT name="title" id="title"type="hidden" value="<%response.Write product%>">
  <INPUT name="payAmount" id="payAmount"  value="<%=jiage1%>" type="hidden">
  <input name="memo" value="<%response.Write "����:"&sname&"  ;  "&"�绰:"&telphone&"  ;  "&"��ַ:"&address %>" type="hidden">

<DIV class=title><IMG src="images/titb.gif"></DIV>
<TABLE border=1 cellSpacing=0 borderColorLight=#cccccc borderColorDark=#ffffff cellPadding=0 width="100%">
  <TBODY>
  <TR>
    <TD class=tda width="30%">������Ʒ��</TD>
    <TD class=tdb width="70%"><input size="52" value="<%=product%>" readonly name="WIDsubject" style="border:0"/></TD></TR>
	
	<TR>
    <TD class=tda width="30%">��Ʒ��</TD>
    <TD class=tdb width="70%"><input size="30" value="<%=jiage1%>" readonly name="WIDprice" style="border:0"/></TD></TR>
  <TR>
    <TD class=tda>�ջ���������</TD>
    <TD class=tdb><input size="30"  value="<%=sname%>"name="WIDreceive_name"   /></TD></TR>
  <TR>
    <TD class=tda>�ջ����ֻ����룺</TD>
    <TD class=tdb><input size="30"  value="<%=telphone%>"name="WIDreceive_mobile"   /></TD></TR>
	
	
  <TR>
    <TD class=tda>�ջ�����ϸ��ַ��</TD>
    <TD class=tdb> <input size="52"  value="<%=address%>" name="WIDreceive_address" /></TD></TR>
	
  <TR>
    <TD class=tda>��ע���ԣ�</TD>
    <TD class=tdb><input size="52" style="height:40px" value="<%=beizhu%>" name="WIDbody" /></TD></TR></TBODY></TABLE>
<DIV class=code>����
  <INPUT class="send suba" value=ȷ���ύ type=submit name=wfsubmit>��<INPUT class="send subb" onclick=javascript:window.close() value=�����޸� type=button name=wfbutton></DIV></FORM></DIV>

<%

else

response.Redirect("chenggong.html")
end if

%>