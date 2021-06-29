// 版权声明，开发者 : XLJ(喜樂君)
// 基于开源协议可以进行非商业，二次开发，发布等... 禁止删除这个版权信息，如果需要商用请联系 xlj@xlj0.com
// 如果你想去除版权信息，请联系 xlj@xlj0.com

var yuMing = document.getElementById('yuMing');
var souSuo = document.getElementById('souSuo');
var xieYi = document.getElementById('xieYi');
// ---------- 

// 自定义函数
var consoleLog = function (infoOne, infoTwo) {
    console.log(infoOne, infoTwo);
}

// 版权
consoleLog('版权信息 开发者 : %c XLJ(喜樂君)', 'color: #ff0000;');
consoleLog('基于开源协议可以进行非商业，二次开发，发布等... 禁止删除这个版权信息，如果需要商用请联系 %c xlj@xlj0.com', 'color: #ff0000;');
consoleLog('禁止使用程序违法!否则法律责任自行承担，后果自负，违法包括但不限于(钓鱼，恶意跳转...等等)');
// 点击搜索框清空提示内容
yuMing.onfocus = function () {
    if (yuMing.value == '域名 / IP / 地址') {
        yuMing.value = null;
        consoleLog('Info : ', '聚焦成功，已经清空编辑框')
    } else {
        // 
    }
}
yuMing.onblur = function () {
    if (yuMing.value == '') {
        yuMing.value = '域名 / IP / 地址';
        consoleLog('Info : ', '聚焦取消，已经恢复内容')
    } else {
        // 
    }
}

// 点击查询按钮如果没有输入内容
souSuo.onclick = function () {

    if (yuMing.value == '域名 / IP / 地址') {
        alert('请输入要查询的内容');
    } else {

    }
}

// 点击复制功能
// document.getElementById('zhuangTaiShow').style.display = 'none';
document.getElementById('zhuangTai').onclick = function () {
    var zhuangTaiInfo = document.getElementById('zhuangTai').innerHTML;
    zhuangTaiInfo.select();
    document.execCommand('Copy');
    consoleLog('复制成功');
}
    
// document.getElementById('ipShow').style.display = 'none';
document.getElementById('Ip').onclick = function () {
    document.execCommand(document.getElementById('Ip').value);
}
    
// document.getElementById('guoJiaSuoXieShow').style.display = 'none';
document.getElementById('guoJiaSuoXie').onclick = function () {
    document.execCommand();
}
    
// document.getElementById('shengFenShow').style.display = 'none';
document.getElementById('shengFen').onclick = function () {
    document.execCommand();
}
    
// document.getElementById('chengShiShow').style.display = 'none';
document.getElementById('chengShi').onclick = function () {
    document.execCommand();
}

// 切换协议按钮 点击事件
// xieYi.onclick = function () {

//     var yuMingString = yuMing.value.toString();

//     if (yuMingString.substr(0, 7) == 'http://') {
//         // yuMing.value = 'https://'
//         xieYi.innerHTML = 'http';
//         consoleLog('协议更改为 https');
//     } else if (yuMingString.substr(0, 8) == 'https://') {
//         // yuMing.value = 'http://'
//         xieYi.innerHTML = 'https';
//         consoleLog('协议更改为 http');
//     }
// }
