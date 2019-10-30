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
response.write "你提交的路径有误，禁止从站点外部提交数据请不要乱该参数！"
response.end
end If
if request.Cookies("submit")="yes" then
response.write"<SCRIPT language=JavaScript>alert('请60秒后提交);javascript:history.go(-1)</SCRIPT>"
response.Write"</script>"


else
'存完后给提交用户写入cookie
response.cookies("submit")="yes"
'设置1分钟过期
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
  
	
	'//新增防止'方式入侵 正则表达 (replace(参数
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
		response.write"<SCRIPT language=JavaScript>alert('请填写完整信息包括收件人，手机号，收货地址');javascript:history.go(-1)</SCRIPT>"
	response.end
	end if


	p_count=Conn.Execute("select COUNT(*) from allorder where datediff('d',[shijian],#"&date()&"#)=0 and ip='"&getIP&"'")(0)

	if p_count>=1000 then
		response.Write "<script>alert('您好，每天只可以提交5次数据，请联系在线客服');window.location.href='/';</script>"
		response.End()
	'//因为同一个产品 已经不能提交了 所以就不用验证了
 	else
		shijian= (year(date())&"-"&month(date())&"-"&day(date()))
sql="insert into allorder (username,product,phone,address,num,color,sex,age,guige,send,code,pay,referer,url,beizhu,shijian,shijian2)  values ('"&sname&"','"&product&"','"&telphone&"','"&address&"','"&num&"','"&color&"','"&sex&"','"&age&"','"&guige&"','"&send&"','"&code&"','"&pay&"','"&referer&"','"&url&"','"&beizhu&"','"&shijian&"','"&now()&"')"
conn.execute(sql)
	end if
	
	 	set rs=server.CreateObject("adodb.recordset")
rs.Open "select mailaddress,mailusername,mailuserpwd,mailname,mailsend from contact",conn,1,1
	name2=rs("mailname")
title="您有来自"& name2 &"的订单" '邮件主题
msg="姓名：" & sname & vbcrlf & "<br>手机：" & "<a href=http://www.baidu.com/s?word=" & telphone & " target=_blank>" & telphone & "</a> "& vbcrlf & "<br>地址：" & address &  vbcrlf & "<br>商品：" & product &  vbcrlf & "<br>留言：" & beizhu  & vbcrlf &"<br>源IP：" & "<a href=http://www.baidu.com/s?word=" & getIP & " target=_blank>" & getIP & "</a> <a href=http://www.baidu.com/s?word=" & getIP & ">查看IP所在地</a>"&  vbcrlf & "<br>订单来源：" & "<a href="&referer&" target=_blank>" & referer & "</a> "

   Set jmail = Server.CreateObject("JMAIL.Message")   '建立发送邮件的对象
     jmail.silent = true    '屏蔽例外错误，返回FALSE跟TRUE两值j
     jmail.logging = true   '启用邮件日志
     jmail.Charset = "GB2312"     '邮件的文字编码为国标
     jmail.ContentType = "text/html"    '邮件的格式为HTML格式
	 jmail.fromname = name2 '发件人姓名 
     jmail.AddRecipient rs("mailsend")     '邮件收件人的地址
     jmail.From = rs("mailusername")  '发件人的E-MAIL地址
     jmail.MailServerUserName = rs("mailusername")    '登录邮件服务器所需的用户名
     jmail.MailServerPassword = rs("mailuserpwd")    '登录邮件服务器所需的密码
     jmail.Subject = title    '邮件的标题 
     jmail.Body = msg    '邮件的内容
     jmail.Prority = 3      '邮件的紧急程序，1 为最快，5 为最慢， 3 为默认值
     jmail.Send(rs("mailaddress"))     '执行邮件发送（通过邮件服务器地址）
     jmail.Close()   '关闭对象
if pay="支付宝支付" then
 weizhi = clng(instr(product, "元"))
 product = left(product, weizhi)
%>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HEAD><TITLE>支付宝在线支付确认</TITLE>
<META content="text/html; charset=gb2312" http-equiv=Content-Type><LINK 
rel=stylesheet type=text/css href="images/css.css">


<META name=GENERATOR content="MSHTML 8.00.6001.23507"></HEAD>
<BODY>
<DIV id=ddok>
        <form name=alipayment action="https://shenghuo.alipay.com/send/payment/fill.htm" method=post target="_blank">
		  <INPUT name="optEmail" id="optEmail"type="hidden" value="php52net@163.com">
		   <INPUT name="title" id="title"type="hidden" value="<%response.Write product%>">
  <INPUT name="payAmount" id="payAmount"  value="<%=jiage1%>" type="hidden">
  <input name="memo" value="<%response.Write "姓名:"&sname&"  ;  "&"电话:"&telphone&"  ;  "&"地址:"&address %>" type="hidden">

<DIV class=title><IMG src="images/titb.gif"></DIV>
<TABLE border=1 cellSpacing=0 borderColorLight=#cccccc borderColorDark=#ffffff cellPadding=0 width="100%">
  <TBODY>
  <TR>
    <TD class=tda width="30%">订购产品：</TD>
    <TD class=tdb width="70%"><input size="52" value="<%=product%>" readonly name="WIDsubject" style="border:0"/></TD></TR>
	
	<TR>
    <TD class=tda width="30%">产品金额：</TD>
    <TD class=tdb width="70%"><input size="30" value="<%=jiage1%>" readonly name="WIDprice" style="border:0"/></TD></TR>
  <TR>
    <TD class=tda>收货人姓名：</TD>
    <TD class=tdb><input size="30"  value="<%=sname%>"name="WIDreceive_name"   /></TD></TR>
  <TR>
    <TD class=tda>收货人手机号码：</TD>
    <TD class=tdb><input size="30"  value="<%=telphone%>"name="WIDreceive_mobile"   /></TD></TR>
	
	
  <TR>
    <TD class=tda>收货人详细地址：</TD>
    <TD class=tdb> <input size="52"  value="<%=address%>" name="WIDreceive_address" /></TD></TR>
	
  <TR>
    <TD class=tda>备注留言：</TD>
    <TD class=tdb><input size="52" style="height:40px" value="<%=beizhu%>" name="WIDbody" /></TD></TR></TBODY></TABLE>
<DIV class=code>　　
  <INPUT class="send suba" value=确认提交 type=submit name=wfsubmit>　<INPUT class="send subb" onclick=javascript:window.close() value=返回修改 type=button name=wfbutton></DIV></FORM></DIV>

<%

else

response.Redirect("chenggong.html")
end if

%>