/**
  **************************************************************************************************
  **********  BDPHP���߶���ϵͳ2014�ٷ���ʽ��  *****  �ٷ����� *** ��Ȩ���� *** ����ؾ�  **********
  **********------------------------------------------------------------------------------**********
  ****** �ٷ���վ��http://jxlcl.taobao.com/  *****  �ٷ���������:chunlei2615 ����׼���˹��� ********
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
        alert('����д������');
        document.bdform.bdname.focus();
        return false;
    }
    var reg1 = /^[\u4e00-\u9fa5]{2,4}$/;
    if (!reg1.test(document.bdform.bdname.value)){
        alert('������ʽ����ȷ������д��ʵ������');
        document.bdform.bdname.focus();
        return false;
    }
    if (document.bdform.bdmob.value==""){
        alert('����д�ֻ����룡');
        document.bdform.bdmob.focus();
        return false;
    }
    var reg2 = /^1[3,4,5,8]\d{9}$/;
    if (!reg2.test(document.bdform.bdmob.value)){
        alert('�ֻ������ʽ����ȷ������д��ȷ���ֻ����룡');
        document.bdform.bdmob.focus();
        return false;
    }
    if (document.bdform.bdaddress.value==""){
        alert('����д��ϸ��ַ��');
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