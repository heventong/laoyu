
<!--#include file="inc.asp"-->
<%call admin()
if request("action")="bihe" then
menu="none"
else
menu="yes"
end if%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>控制面板</title>

<link href="images/css.css" rel="stylesheet" type="text/css" />
<script language=javascript>
function showsubmenu(sid)
{
whichel = eval("submenu" + sid);
	if (whichel.style.display == "none")
	{
	eval("submenu" + sid + ".style.display='';");
	}
	else
	{
	eval("submenu" + sid + ".style.display='none';");
	}
}
</script>
<base target="right">
<style type="text/css">
<!--
body {
	background-color: #396FDD;
}
-->
</style>
</head>
<body>
<table width="158" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="25"><img src="images/title.gif"  border="0">
    </td>
  </tr>
  <tr>
    <td height="30" align="center"><a href="?action=out" target="_top" onClick="return confirm('你确定要退出后台管理系统吗')"><font color="#FFFFFF"><strong>安全退出</strong></font></a></td>
  </tr>
</table>
<table width="158" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#D6DFF7">
  <tr>
    <td height="25" class="menu_title" background="images/admin_left_2.gif" onClick="showsubmenu(1)" style="cursor:hand;font-weight: bold;color:#215DC6;">&nbsp;&nbsp;常 规 设 置</td>
  </tr>
  <tr>
    <td style="display:<%=menu%>" id='submenu1'><div class="sec_menu" style="width:158">
        <table cellpadding="2" cellspacing="0" align="center" width="140">

          <tr>
            <td>&nbsp; ※ |&nbsp; <a href="right.asp">管理首页</a></td>
          </tr>

        </table>
      </div></td>
  </tr>
</table>
<table width="158" align="center" cellpadding="0" cellspacing="0" bgcolor="#D6DFF7">
  <tr>
    <td height="25" class="menu_title" 
	background="images/admin_left_8.gif" id="menutitle1" onclick="showsubmenu(6)" style="cursor:hand;font-weight: bold;color:#215DC6;">&nbsp;&nbsp;订 单 管 理</td>
  </tr>
  <tr>
    <td style="display:<%=menu%>" id='submenu6'><div class="sec_menu" style="width:158">
      <table cellpadding="2" cellspacing="0" align="center" width="140">
        <tr>
          <td height="10"></td>
        </tr>
        <tr>
          <td>&nbsp; ※ |&nbsp; <a href="allorder.asp">订单管理</a></td>
        </tr>

        <tr>
          <td height="10"></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>

</body>
</html>