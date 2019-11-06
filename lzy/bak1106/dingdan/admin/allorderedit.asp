<%@LANGUAGE="VBSCRIPT" CODEPAGE="936"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="images/css.css" rel="stylesheet" type="text/css" />

<title>订单详情</title>

</head>
<!--#include file="inc.asp"-->
<!--#include file="date.asp"-->
<%
call admin()
    gname=request("username")
    dingdanhaojf=request("dingdanhaojf")
    gyundan=request("gyundan")
	
	id=request("id")
if request.querystring("id")<>"" and not isnumeric(request.querystring("id")) then
 response.write "<script>alert('参数出错！');window.location.href='index.asp';</script>"
response.end()
end if

	dqy=request("dqy")
	kdate=request("kdate")
	jdate=request("jdate")
	zhuangtai=request("zhuangtai")
	action=request("action")
	set rss=server.CreateObject("adodb.recordset")
	sqls="select * from allorder where id="&id
	rss.open sqls,conn,1,3
if request("action")="edit" then
	rss("zhuangtai")=request("zhuangtai1")
	rss("fshijian")=request("fshijian")
	rss("yundan")=request("yundan")
	
	rss.update
	
	call po("allorder.asp","状态修改成功!")
end if
%>

<body >


  <table width="98%" border="0"    bgcolor="#183789" cellpadding="0"  cellspacing="1" >
<form name="form1" style="background-color:#ccc; " method="post" action="?action=edit&id=<%=id%>">



<tr>
<td height="25" colspan="7" align="left" valign="top" background="Images/bg.jpg"  class="biaoti STYLE1">用户信息：</td>
</tr>
      <tr>
        <td width="16%" height="30"  bgcolor="#FFFFFF" class="atd">姓 　名： <%=rss("username")%> 　　  　 </td>
        <td width="13%"  bgcolor="#FFFFFF">手机：<%=rss("phone")%></td>
        <td width="6%"  bgcolor="#FFFFFF">性别：<%=rss("sex")%></td>
        <td width="6%"  bgcolor="#FFFFFF">年龄：<%=rss("age")%> </td>
        <td width="10%"  bgcolor="#FFFFFF"> 身高：<%=rss("height")%></td>
        <td height="25" colspan="2"  bgcolor="#FFFFFF">电话：<%=rss("dianhua")%></td>
      　      </tr>
      <tr>
        <td height="30" colspan="3"  bgcolor="#FFFFFF" class="atd">收货地址：<%=rss("address")%></td>
        <td height="25" colspan="4"  bgcolor="#FFFFFF">邮编：<%=rss("code")%></td>
    </tr>
	<tr>
<td height="25" colspan="7" align="left" background="Images/bg.jpg"  class="biaoti STYLE1">订单信息：</td>
</tr>

   <tr>
        <td height="30" colspan="3" valign="top"  bgcolor="#FFFFFF" class="atd">订购商品：<%=rss("product")%></td>                                                                                                                                                     
 <td height="25" align="left"  bgcolor="#FFFFFF">数量：<%=rss("num")%></td>
 <td height="25" colspan="3"  bgcolor="#FFFFFF"> 颜色：<%=rss("color")%> 　 </td>
 </tr>
	 <tr>
       <td height="30" colspan="3"  bgcolor="#FFFFFF">商品规格：<%=rss("guige")%> 　 </td>
 　                                                                                                                                                     
 <td height="25" colspan="4"  bgcolor="#FFFFFF">付款方式：<%=rss("pay")%></td>
 </tr>
	  	 <tr>
        <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">送货时间:<%=rss("send")%> 　 </td> 　        </tr>
	  	  	 <tr>
        <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">备注说明:<%=rss("beizhu")%> 　 </td> 　        </tr>
	  <tr>
<td height="25" colspan="7" align="left" background="Images/bg.jpg"  class="biaoti STYLE1">状态信息：</td>
</tr>
      <tr>
      <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">快递运单号：&nbsp;&nbsp;
     
        <input name="yundan" type="text" id="yundan"  value="<%=rss("yundan")%>"/></td>
    </tr>

	<tr>
      <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">下单时间：&nbsp;&nbsp;
        <%=rss("shijian2")%></td>
    </tr>
    <tr>
      <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">发货时间：&nbsp;&nbsp;
        <input name="fshijian" type="text" class="ziduan" id="fshijian" value="<%=now%>" onFocus="c.showMoreDay = false;c.show(this);">
      <img src="images/shuoming.jpg" width="14" height="14" style="cursor:hand" onMouseOver="ddrivetip('如要修改请注意格式')" onMouseOut="hideddrivetip()" /></td>
    </tr>
	<tr>
      <td height="30" colspan="7"  bgcolor="#FFFFFF" class="atd">订单状态：&nbsp;&nbsp;
        <select name="zhuangtai1" class="liebiao" id="zhuangtai1">
          <option value="已发货"<%if rss("zhuangtai")="已发货" then%> selected<%end if%>>已发货</option>
          <option value="交易成功"<%if rss("zhuangtai")="交易成功" then%> selected<%end if%>>交易成功</option>
          <option value="交易关闭"<%if rss("zhuangtai")="交易关闭" then%> selected<%end if%>>交易关闭</option>
        </select>
      <img src="images/shuoming.jpg" width="14" height="14" style="cursor:hand" onMouseOver="ddrivetip('发货成功后在修改对应状态')" onMouseOut="hideddrivetip()" /></td>
    </tr>
    <tr>
      <td height="25" colspan="7" align="center"  bgcolor="#FFFFFF">&nbsp;
        <input name="Submit" type="submit" class="an" value="提交" />
        <input name="Submit2" type="reset" class="an" value="重置" />
      <input name="Submit3" type="button" class="an" value="返回" onClick="javascript:history.go(-1)" /></td>
    </tr></form>
</table>

</body>
</html>