<?php
    error_reporting(0);

    $yuMingPhp = $_GET['yuMingPhp'];
    if ($yuMingPhp != '域名 / IP / 地址') {
        // 开始获取数据
        $Result = file_get_contents("http://ip-api.com/json/" .$yuMingPhp);
        $resultJson = json_decode($Result);

        // var_dump($resultJson);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>站长工具 - by XLJ</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        
        html,body {
            height: 100%;
        }

        body {
            font-size: 20px;
        }
    </style>

    <!-- 引入外部文件 -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body> <!-- 警告!: 源码由XLJ独立开发，并无其他人参与开发，严谨二次开发不备注原作者 源码基于开源协议MIT2.0发布 这条信息禁止删除 --> 
    <div id="Container">
        <span id="xieYi">hello</span>
        <div id="Main">
            <form action="./index.php" method="GET">
                <input type="text" value="域名 / IP / 地址" id="yuMing" name="yuMingPhp">
                <button id="souSuo" type="submit"><svg style="width: 50px; height: 50px;" t="1618623657023" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="612" width="200" height="200"><path d="M350.814815 797.392593c-5.499259 0-10.903704-2.085926-15.075556-6.257778l-113.777778-113.777778c-8.343704-8.343704-8.343704-21.807407 0-30.151111l0.18963-0.18963 113.588148-113.588148c8.343704-8.343704 21.807407-8.343704 30.151111 0s8.343704 21.807407 0 30.151111L267.188148 662.281481l98.702222 98.702223c8.343704 8.343704 8.343704 21.807407 0 30.151111-4.171852 4.171852-9.576296 6.257778-15.075555 6.257778z" p-id="613" fill="#d81e06"></path><path d="M604.728889 683.614815h-367.881482c-11.757037 0-21.333333-9.576296-21.333333-21.333334s9.576296-21.333333 21.333333-21.333333h367.881482c71.86963 0 130.37037-58.500741 130.37037-130.37037v-208.592593c0-11.757037 9.576296-21.333333 21.333334-21.333333s21.333333 9.576296 21.333333 21.333333v208.592593c0 46.08-18.014815 89.505185-50.820741 122.216296C694.139259 665.6 650.714074 683.614815 604.728889 683.614815z" p-id="614" fill="#d81e06"></path></svg></button>
                <input type="submit" value="查询" id="souSuoShouJi">
            </form>
        </div>
        <div id="shuJuMain">
            <div id="shuJuMainDiv">
                <span id="zhuangTaiShow">状态</span>
                <span id="zhuangTai"><?php if ($resultJson->status == 'success') {echo "成功";} ?></span>
                <br>
                <span id="ipShow">IP</span>
                <span id="Ip"><?php echo $resultJson->query ?></span>
                <br>
                <span id="guoJiaShow">国家</span>
                <span id="guoJia"><?php echo $resultJson->country ?></span>
                <br>
                <span id="guoJiaSuoXieShow">国家缩写</span>
                <span id="guoJiaSuoXie"><?php echo $resultJson->countryCode; ?></span>
                <br>
                <span id="shengFenShow">省份</span>
                <span id="shengFen"><?php echo $resultJson->regionName; ?></span>
                <br>
                <span id="chengShiShow">城市</span>
                <span id="chengShi"><?php echo $resultJson->city; ?></span>
            </div>
        </div>

        <footer id="Footer">
            ©版权 by <a href="https://xlj0.com">XLJ</a>
        </footer>
    </div>

    <script src="js/main.js"></script>
</body>
</html>