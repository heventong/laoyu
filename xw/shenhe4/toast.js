function toast(h,c){var e=arguments.length>2&&arguments[2]!==undefined?arguments[2]:3000;if(isNullStr(h)){return}if(!e||e<500){e=3000}var b=$("<div class='pop-toast'></div>");var f=null;switch(c){case"success":f="/lp/common/res/icon/toast_success.png";break;case"failed":f="/lp/common/res/icon/toast_failed.png";break;case"warning":f="/lp/common/res/icon/toast_warning.png"}var a=$("<div class='pop-toast-container'></div>");var d=$("<div class='pop-toast-icon-container'><img src='"+f+"' style='width: 15px;height: 15px'/></div>");var g=$("<p class='pop-toast-message-tag'>"+h+"</p>");a.append(d);a.append(g);b.append(a);$("body").append(b);setTimeout(function(){b.remove()},e)};