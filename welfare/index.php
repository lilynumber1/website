<?php
include("smarty_inc.php");

if($_GET["action"]){
    if($_GET["action"] == "buySucc"){
        $qudao = $_GET["param"] . "";
        $url = $_GET["param2"] . "";
        update_data($qudao, $url);
    }else if($_GET["action"] == "generate"){
        $smarty->display("generateCDK.html");
    }else if($_GET["action"] == "verify"){
        if($_GET["param"]){
            $qudao2 = $_GET["param"] . "";
        }else{
            $qudao2 = "jindong";
        }

        $smarty->assign("qudaoName",$qudao2);
        $smarty->assign("placeTxt", "兑换码");
        $smarty->display("registerByCDK.html");
    }else if($_GET["action"] == "getcode"){
        if($_GET["param"]){
            $qudao3 = $_GET["param"] . "";
        }
        $smarty->assign("canAlert","0");
        $smarty->assign("qudaoName",$qudao3);
        $smarty->assign("placeTxt", "请点击'立即领取'");
        $smarty->display("getCode.html");
    }
}else{
    $smarty->assign("link4", "http://ah.189.cn/iphone/ext/lmwkfanliwap/index.html?DevCode=AH00F90005/Y34000099437/001");
    $smarty->assign("img4", "./img/4.jpg");
    $smarty->assign("title4", "前2个月免费使用");
    $smarty->assign("title41", "全国可申请，开卡次月返10元");
    $smarty->assign("desc41", "1、该卡可以全国申请，不限安徽。");
    $smarty->assign("desc42", "2、月租19元，可畅享6G全国流量。");
    $smarty->assign("desc43", "3、前2个月免费使用。");
    $smarty->assign("id4","liuliang19");

    $smarty->assign("link5", "http://ah.189.cn/wap/combo/CATEGORY_combo4G_49gnbxl.htm?DevCode=AH00F90005/Y34000099437/001");
    $smarty->assign("img5", "./img/5.jpg");
    $smarty->assign("title5", "全国流量不限量仅需49元/月");
    $smarty->assign("title51", "全国可申请，开卡次月返30元");
    $smarty->assign("desc51", "1、该卡可以全国申请，不限安徽。");
    $smarty->assign("desc52", "2、月租49元，国内流量不限量使用。");
    $smarty->assign("desc53", "3、开卡次月返30元，以话费形式冲到开卡号码账户中。");
    $smarty->assign("id5","liuliang49");

    $smarty->assign("link6", "http://game.fire2333.com/home/ac?action=/home/game/a/1809/g/200002/pt/8397");
    $smarty->assign("img6", "./img/6.jpg");
    $smarty->assign("title6", "抢夺王城霸主");
    $smarty->assign("title61", "热血开战！");
    $smarty->assign("id6","youxi");

    $smarty->assign("link7", "http://m.ycsbar.com/link/52037691");
    $smarty->assign("img7", "./img/7.jpg");
    $smarty->assign("title7", "闪婚闪离的95后女孩");
    $smarty->assign("title71", "我结婚是为了合法约P!");
    $smarty->assign("id7","taohuaxiaocunyi");

    $smarty->assign("link8", "http://m.ycsbar.com/link/71423608");
    $smarty->assign("img8", "./img/8.jpg");
    $smarty->assign("title8", "一夜成欢 ");
    $smarty->assign("title81", "一气之下我跟小白脸滚了床单··· ");
    $smarty->assign("id8","yiyechenghuan");

    $smarty->assign("link9", "https://c.pingan.com/apply/mobile/apply/index.html?scc=950000773&ccp=1a2a3a4a5a8a9a10a11a12a13&showt=0");
    $smarty->assign("img9", "./img/9.jpg");
    $smarty->assign("title9", "超高额度快速发卡");
    $smarty->assign("title91", "发卡成功奖励30元话费");
    $smarty->assign("id9","pinganxinyongka");

    $smarty->assign("link10", "http://dwz.cn/7DQDl3");
    $smarty->assign("img10", "./img/10.jpg");
    $smarty->assign("title10", "超高额度快速发卡");
    $smarty->assign("title101", "发卡成功奖励20元话费");
    $smarty->assign("id10","minshengxinyongka");

    $smarty->display("ad.html");
}

function update_data($fromname, $url){
    $servername = "qdm11426228.my3w.com";
    $username = "qdm11426228";
    $password = "lily20150610";
    $dbname = "qdm11426228_db";

// 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }

    $log_str = "";
    $tablename = "detail_tb_" . date("Y_m_d");

// 使用 sql 创建数据表
    $sql = "CREATE TABLE IF NOT EXISTS " . $tablename . " (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, qudaoname VARCHAR(30) NOT NULL,timeSecond INT(32) UNSIGNED,timeStr VARCHAR(30) NOT NULL, cltip VARCHAR(30) NOT NULL, cburl VARCHAR(50) NOT NULL )";

    if ($conn->query($sql) === TRUE) {
        $log_str = $log_str . " Table " . $tablename . " created successfully ";

        $sql1 = "SELECT * FROM " . $tablename . " WHERE cburl='".$url."'";
        $result = $conn->query($sql1);
        $count = -1;
        if ($result->num_rows > 0) {
            // 输出数据
//            while($row = $result->fetch_assoc()) {
//                $log_str = $log_str . " 查询数据：cburl: " . $row["cburl"];
//                if($url == $row["cburl"]){
                    $count = 1;
//                }
//            }
        }
        if($count == -1){
            $t=time();
            $d=date("Y-m-d H:i:s",$t);
            $clientip = getRealIp();
            $sql2 = "INSERT INTO " . $tablename . " (qudaoname, timeSecond, timeStr,cltip,cburl) VALUES ('$fromname' , '$t' , '$d','$clientip','$url')";
            if ($conn->query($sql2) === TRUE) {
                $log_str = $log_str . " 新记录插入成功 ";
            } else {
                $log_str = $log_str . " Error: " . $sql2 . "<br>" . $conn->error;
            }
        }
//        else{
//            $sql2 = "UPDATE " . $tablename . " SET cnt=" . ($count+1) . " WHERE qudaoname='$fromname'";
//            if ($conn->query($sql2) === TRUE) {
//                $log_str = $log_str . " 数据更新成功 ";
//            } else {
//                $log_str = $log_str . " Error: " . $sql2 . "<br>" . $conn->error;
//            }
//        }

    } else {
        $log_str = $log_str . "创建数据表错误: " . $conn->error;
    }

    echo "callbackFunction('".$log_str."')";
    $conn->close();
}

function getRealIp()
{
    $ip=false;
    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode (", ", $_SERVER['HTTP_X_FORWARDED_FOR']);
        if ($ip) { array_unshift($ips, $ip); $ip = FALSE; }
        for ($i = 0; $i < count($ips); $i++) {
            if (!eregi ("^(10│172.16│192.168).", $ips[$i])) {
                $ip = $ips[$i];
                break;
            }
        }
    }
    return ($ip ? $ip : $_SERVER['REMOTE_ADDR']);
}
