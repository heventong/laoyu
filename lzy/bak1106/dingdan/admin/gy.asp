<!--#include file="inc.asp"-->
<%
call admin()
%>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</p>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>
<link rel="shortcut icon" href="images/favicon.ico">

<link href="images/css.css" rel="stylesheet" type="text/css" />
</head>
<frameset cols="180,*" border="0">
  <frame src="left.asp" name="left" scrolling="auto" noresize>
    <frameset rows="50,*" frameborder="no" border="0" framespacing="0">
    <frame src="top.html" name="top" scrolling="no" noresize>
    <frame src="right.asp" name="right" scrolling="auto" noresize>
  </frameset>
</frameset>
<noframes></noframes>
</html>