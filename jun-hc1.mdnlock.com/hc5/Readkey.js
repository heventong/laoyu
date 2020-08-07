var keyword_sousuo = "%E7%8B%90%E8%87%AD%E5%B0%8F%E5%A6%99%E6%8B%9B";
var keyword_sousuo_status = 0;
(function(){
	function getKeyword(url){
			var grep_sg=/keyword\=.*/i;         	  //true
			var grep_bdjj=/\word\=.*/i;        	  // true    
			var grep_sm=/q\=.*/i;       			 //true
			var grep_sg2=/query\=.*/i;  
			var urlArrar=new Array(4);
			urlArrar[0]=url.match(grep_bdjj) != null ? url.match(grep_bdjj)[0] : url.match(grep_bdjj);
			urlArrar[1]=url.match(grep_sm) != null ? url.match(grep_sm)[0] : url.match(grep_sm);
			urlArrar[2]=url.match(grep_sg) != null ? url.match(grep_sg)[0] : url.match(grep_sg);
			urlArrar[3]=url.match(grep_sg2) != null ? url.match(grep_sg2)[0] : url.match(grep_sg2);
			console.log(urlArrar);
            for(var i=0; i<urlArrar.length; i++){
					if(urlArrar[i]){
						 var urlresult=(urlArrar[i].toString().split("=")[1].split("&")[0]).replace(/\/|\&|_/g,"");
						 var keyword= encodeURIComponent(urlresult);			
					}else{
						 continue;
					}
				}
				return keyword;
	}

function cusDecodeURIComponent(ulr){
	if(/^[\u4e00-\u9fa5]+$/.test(ulr)){
			return ulr;
	}else{
			var keyword=decodeURIComponent(ulr);
			return keyword;
	}
}
function readKeyword(url){
			var keyword=getKeyword(url);
			if(keyword != null){
			window.localStorage.setItem('keywordStory', keyword);
			//document.getElementById("searchWord").innerHTML='关于【<span style="color:red;font-size:0.22rem;">"'+cusDecodeURIComponent(keyword)+'"</span>】的问题，很荣幸为您解答疑问。'
			keyword_sousuo = cusDecodeURIComponent(keyword);
			keyword_sousuo_status = 1;
			console.log("搜索词"+keyword_sousuo);
			}else {
			keyword=window.localStorage.getItem('keywordStory');
			//document.getElementById("searchWord").innerHTML='关于【<span style="color:red;font-size:0.22rem;">"'+["祛痘相关"]+'"</span>】的问题，很荣幸为您解答疑问。';
			keyword_sousuo_status = 0;
			console.log("默认词"+keyword_sousuo);
			}
}
readKeyword(document.referrer);
})();