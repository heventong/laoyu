/**
 *******************************************************************
 ************* ─────────────────── **************
 ************* ──  WFPHP在线订单系统官方正式版 ── **************
 ************* ─────────────────── **************
 ************* 官方网站：http://www.wf1805.cn/        **************
 ************* 官方店铺：http://889889.taobao.com/    **************
 ************* 程序开发：WENFEI                       **************
 ************* 客户服务：[淘宝旺旺] yygynui613        **************
 ************* 技术支持：[腾讯QQ] 183712356           **************
 *******************************************************************
 *************   官方正版 *** 版权所有 *** 盗版必究   **************
 *******************************************************************
 */

//***************************  postcheck  ***************************
window.onerror = function(){return true;} 
function postcheck(){
	if (document.wfform.dgname.value==""){
	    alert('请填写姓名！');
		document.wfform.dgname.focus();
		return false;
	}
	var reg1 = /^[\u4e00-\u9fa5]{2,4}$/;
	if (!reg1.test(document.wfform.dgname.value)){
	    alert('请填写正确的姓名！');
		document.wfform.dgname.focus();
		return false;
	}
	if (document.wfform.mob.value==""){
		alert('请填写手机号码！');
		document.wfform.mob.focus();
		return false;
	}	
	var reg2 = /^1[3,4,5,8]\d{9}$/;
	if (!reg2.test(document.wfform.mob.value)){
	    alert('请填写正确的手机号码！');
		document.wfform.mob.focus();
		return false;
	}
	if (document.wfform.address.value==""){
		alert('请填写地址！');
		document.wfform.address.focus();
		return false;
	}
}

//***************************  oprize1  ***************************
function oprize1(){
	var product = document.wfform.product.value;
	for(var i=0;i<document.wfform.product.length;i++){
		if(document.wfform.product[i].checked==true){
			product = document.wfform.product[i].value;
			break;
		}
	}
	var spri=product.split('|');
	var pri=spri[1];
	if(document.wfform.cpmun.value=="" || document.wfform.cpmun.value==0){	
		var tmun=1;
	}
	else{
		var tmun=document.wfform.cpmun.value;
	}	
	var prit=pri*tmun;
	document.wfform.price.value=prit;
	document.getElementById("showprit").innerHTML=prit;
}

//***************************  paytype  ***************************
function changeItem(i){
    var k = 3;
	for(var j = 0;j < k;j++){
	    if(j == i){
		    document.getElementById("paydiv" + j).style.display = "block";
		}
		else{		
		    document.getElementById("paydiv" + j).style.display = "none";
		}
	}
}

//***************************  wfllref  ***************************
var wfllref = '';
if (document.referrer.length > 0){
	wfllref = document.referrer;
}
try{
	if (wfllref.length == 0 && opener.location.href.length > 0){
    wfllref = opener.location.href;
	}
}
catch (e){}
document.cookie="WFLLURL=" + wfllref + ";path=/";
oprize1();

// WFPHPORDER onesub_01.js end