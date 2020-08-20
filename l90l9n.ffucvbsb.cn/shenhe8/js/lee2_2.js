

$(function(){

var arr = ['zgcd586','ssweixin0268','hgcd797','igcd569'];   //微信号
var arr1 = ['测试名'];        //名称
var arr2=['top-zhaolaoshi'];      //图片名称

var len = arr.length;
var ram = Math.floor(Math.random() * len - 1);

if (!sessionStorage.ram) {
    sessionStorage.ram = ram;
}

if (sessionStorage.ram) {
    sessionStorage.ram = Number(sessionStorage.ram) + 1
    if (sessionStorage.ram >= len) {
        sessionStorage.ram = 0;
    }

    $('.wxh').html(arr[sessionStorage.ram])
    $('.userName').html(arr1[sessionStorage.ram])
    $('.jpg').html('<img src=index_files/'+arr2[sessionStorage.ram]+'.jpg>')

} else {
    sessionStorage.ram = 0;
}
})