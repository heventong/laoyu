var typeMapper={text:"1",number:"2",phone:"3",email:"4",radio:"5",checkbox:"6"};function checkSubmitData(e,t){var a={};if(1===e.is_require)if("radio"===e.type||"checkbox"===e.type){if(!$("input[name='"+e.type+t+"']:checked").val())return a.msg=e.name+"为必选项",a}else if(void 0===$("#"+e.type+t).val()||""===$("#"+e.type+t).val().trim())return a.msg=e.name+"不允许为空",a;return isNullStr($("#"+e.type+t).val())?a:("number"===e.type&&isNotNumber($("#"+e.type+t).val())?a.msg=e.name+"格式不正确":"phone"===e.type&&isNotPhoneNumber($("#"+e.type+t).val())?a.msg=e.name+"格式不正确":"email"===e.type&&isNotEmail($("#"+e.type+t).val())&&(a.msg=e.name+"格式不正确"),a)}function getInputData(e,t,a){switch(e.type){case"text":case"number":case"phone":case"email":a.value=$("#"+e.type+t).val();break;case"radio":a.value=$("input[name='"+e.type+t+"']:checked").val(),a.options=e.items.map((function(e){return e.text}));break;case"checkbox":a.value="",$("input[name='"+e.type+t+"']:checked").each((function(e,t){a.value.length>0&&a.value.lastIndexOf(" ")!==a.value.length-1&&(a.value+=" "),a.value+=t.value})),a.options=e.items.map((function(e){return e.text}))}}window.submitForm=function(e){var t={};t.tid=getNativeUrlParam("tid")||"cykrgbbcfv",t.pageId=window.location.href.split("/")[4],"web"===t.pageId&&(t.pageId=getNativeUrlParam("pageId")),t.im=getNativeUrlParam("im"),t.lbid=getNativeUrlParam("lbid"),t.rtid=getNativeUrlParam("rtid"),t.parposId=getNativeUrlParam("parposid"),t.info=[];for(var a=0;a<form_control.length;a++){var n=form_control[a],i={column:n.name,type:typeMapper[n.type],ifNeed:1===n.is_require,desc:n.desc},r=checkSubmitData(n,a);if(r.msg)return void toast(r.msg,"failed",3e3);getInputData(n,a,i),t.info.push(i)}statisticsEvent(form_index,"Form"),t.sdkTelNum=window.quickGetPhoneNum||"";var o={encryptData:aesEncrypt(t),encryptFlag:1};return $.ajax({type:"POST",url:e.url,data:JSON.stringify(o),contentType:"application/json"})},window.componentItemClick=function(e,t,a){linkTarget(a),statisticsEvent(e,t)},window.statisticsEvent=function(e,t){var a=decodeURIComponent(getUrlParam("transparent")),n=void 0===a.split("_")[0]?"":a.split("_")[0];window.reporter&&window.reporter.triggerClick({advPkg:t,advId:n.toString(),advPos:e.toString(),advPassthrough:{traceId:getUrlParam("tid")}})},window.linkTarget=function(e){switch(e.linkType){case"url":window.location.href=e.linkUrl;break;case"form":$(window).scrollTop($("form").offset().top);break;case"top":window.scroll(0,0);break;case"phone":window.location.href="tel:"+e.phone_number;break;case"sms":window.location.href="sms:"+e.sms_number}},$((function(){$(".app-info-container").map((function(){var e=$(this);e.find(".app-info-desc").height()<=100&&e.find(".unfold-btn").hide(),e.find(".unfold-btn").click((function(){e.addClass("unfold")})),e.find(".fold-btn").click((function(){e.removeClass("unfold")}))}))}));