/**
  **************************************************************************************************
  **********  BDPHP在线订单系统2014官方正式版  *****  官方正版 *** 版权所有 *** 盗版必究  **********
  **********------------------------------------------------------------------------------**********
  ****** 官方网站：http://jxlcl.taobao.com/  *****  官方店铺旺旺:chunlei2615 请认准再了购买 ********
  **************************************************************************************************
*/
window.onerror = function(){return true;}
function $(id){return document.getElementById(id);}  
function getHeight(){$("bdfahuo").style.height=$("bdforml").offsetHeight-85+"px";}  
window.onload = function(){getHeight();}  
/*///////////////////////////////////////// BDORDERJSFGX /////////////////////////////////////////*/
function changeItem(i){
    var k = 2;
	for(var j = 0;j < k;j++){
	    if(j == i){
		    document.getElementById("paydiv" + j).style.display = "block";
		}
		else{		
		    document.getElementById("paydiv" + j).style.display = "none";
		}
	}
}
function opay(){
	document.getElementById("bdform").target="_parent";
}
function opay2(){
    document.getElementById("bdform").target="_blank";
}
function postcheck(){
    if (document.bdform.bdname.value==""){
        alert('请填写姓名！');
        document.bdform.bdname.focus();
        return false;
    }
    var reg1 = /^[\u4e00-\u9fa5]{2,4}$/;
    if (!reg1.test(document.bdform.bdname.value)){
        alert('姓名格式不正确，请填写真实姓名！');
        document.bdform.bdname.focus();
        return false;
    }
    if (document.bdform.bdmob.value==""){
        alert('请填写手机号码！');
        document.bdform.bdmob.focus();
        return false;
    }
    var reg2 = /^1[3,4,5,8]\d{9}$/;
    if (!reg2.test(document.bdform.bdmob.value)){
        alert('手机号码格式不正确，请填写正确的手机号码！');
        document.bdform.bdmob.focus();
        return false;
    }
    if (document.bdform.bdaddress.value==""){
        alert('请填写详细地址！');
        document.bdform.bdaddress.focus();
        return false;
    }
   
}
new PCAS("province","city","area");	
/*///////////////////////////////////////// BDORDERJSFGX /////////////////////////////////////////*/
function pricea(){
	var bdproduct = document.bdform.bdproduct.alt;
	for(var i=0;i<document.bdform.bdproduct.length;i++){
		if(document.bdform.bdproduct[i].checked==true){
			var bdproduct = document.bdform.bdproduct[i].alt;
			break;
		}
	}
    if(document.bdform.bdnum.value=="" || document.bdform.bdnum.value==0){	
		var num=1;
	}
	else{
		var num=document.bdform.bdnum.value;
	}	
	var bdprice=bdproduct*num;
	document.bdform.bdprice.value=bdprice;
	document.getElementById("showprice").innerHTML=bdprice;
}
function priceb(){
    var bdcpxljg = document.getElementById("bdproduct");
    var bdproduct = bdcpxljg.options[document.getElementById("bdproduct").options.selectedIndex].title; 
    if(document.bdform.bdnum.value=="" || document.bdform.bdnum.value==0){	
		var num=1;
	}
	else{
		var num=document.bdform.bdnum.value;
	}	
	var bdprice=bdproduct*num;
	document.bdform.bdprice.value=bdprice;
	document.getElementById("showprice").innerHTML=bdprice;
}
/*///////////////////////////////////////// BDORDERJSFGX /////////////////////////////////////////*/
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
function opay(){
	document.getElementById("bdform").target="_parent";
}
function opay2(){
    document.getElementById("bdform").target="_blank";
}
/*///////////////////////////////////////// BDORDERJSFGX /////////////////////////////////////////*/
document.getElementById("referer").value = opener?opener.location.href:(top.document.referrer?top.document.referrer:top.location.href);
document.getElementById("url").value = top.location.href;
document.getElementById("purl").value = document.location;
/*///////////////////////////////////////// BDORDERJSEND /////////////////////////////////////////*/