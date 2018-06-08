<?php
/**
 * Created by PhpStorm.
 * User: guanlily
 * Date: 2018/6/8
 * Time: 下午2:19
 */

include("smarty_inc.php");

if($_GET["qudao"]){
    $from = $_GET["qudao"]."";

    if($from == "weizhong"){
        //1 获取用户ip 查询该ip是否获取过
        //2 没有获取 随机给一个码 并记录到数据库
        //3 已经获取 读取该用户的验证码
        $code = update_data(getRealIp());
        $smarty->assign("canAlert","1");
        if($code == ""){
            $smarty->assign("qudaoName",$from);
            $smarty->assign("placeTxt", "系统错误，没有获取到兑换码！");
            $smarty->display("getCode.html");
        }else{
            $smarty->assign("qudaoName",$from);
            $smarty->assign("placeTxt", $code);
            $smarty->display("getCode.html");
        }
    }
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

function update_data($ip){
    $servername = "qdm11426228.my3w.com";
    $username = "qdm11426228";
    $password = "lily20150610";
    $dbname = "qdm11426228_db";
    $cdk = "";
// 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }

    $log_str = "";
    $tablename = "weizhong_geted_code";
    $tablename2 = "weizhong_codes";

// 使用 sql 创建数据表
    $sql = "CREATE TABLE IF NOT EXISTS " . $tablename . " (cltip VARCHAR(30) NOT NULL PRIMARY KEY, cdk VARCHAR(10) NOT NULL )";

    if ($conn->query($sql) === TRUE) {
        $log_str = $log_str . " Table " . $tablename . " created successfully ";

        $sql1 = "SELECT * FROM " . $tablename . " WHERE cltip='".$ip."'";
        $result = $conn->query($sql1);

        if ($result->num_rows > 0) {
            // 输出数据
            while($row = $result->fetch_assoc()) {
                $log_str = $log_str . " 查询ip数据：cdk: " . $row["cdk"];
                $cdk = $row["cdk"];
            }
        }
        if($cdk == ""){
            //没有该ip记录
            $random_index = rand(1,5000);
            $sql2 = "SELECT * FROM " . $tablename2 . " WHERE id='".$random_index."'";
            $result = $conn->query($sql2);
            if ($result->num_rows > 0) {
                // 输出数据
                while($row = $result->fetch_assoc()) {
                    $log_str = $log_str . " 查询原始数据：cdkcode: " . $row["cdkcode"];
                    $cdk = $row["cdkcode"];
                }
            }

            $sql3 = "INSERT INTO " . $tablename . " (cltip,cdk) VALUES ('$ip' , '$cdk' )";
            if ($conn->query($sql3) === TRUE) {
                $log_str = $log_str . " 新记录插入成功 ";
            } else {
                $log_str = $log_str . " Error: " . $sql3 . "<br>" . $conn->error;
            }
        }
//        else{
//            已经有领取过兑换码了
//        }

    } else {
        $log_str = $log_str . "创建数据表错误: " . $conn->error;
    }

    $conn->close();
    return $cdk;
}