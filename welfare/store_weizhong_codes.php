<?php
/**
 * Created by PhpStorm.
 * User: guanlily
 * Date: 2018/6/8
 * Time: 上午11:10
 * 读取 微众金券码 txt文档的内容 存进数据库
 */

function createCodesString(){
    $handle = fopen("weizhong_codes.txt",'r');
    $promotion_codes = "";
    $i = 0;
    if ($handle) {
        while (!feof($handle)) {
            $out = fgets($handle, 4096);
            $i ++;
            if($i < 5000){
                $promotion_codes .= "('" . $out . "'),";
            }else{
                $promotion_codes .= "('" . $out . "')";
            }
        }
        fclose($handle);
    }
    storeCodes($promotion_codes);
    return $promotion_codes;
}

function storeCodes($cdks){
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
    $tablename = "weizhong_codes";

// 使用 sql 创建数据表
    $sql = "CREATE TABLE IF NOT EXISTS " . $tablename . " (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, cdkcode VARCHAR(10) NOT NULL)";

    if ($conn->query($sql) === TRUE) {
        $log_str = $log_str . " Table " . $tablename . " created successfully ";

        $sql = "INSERT IGNORE INTO " . $tablename . " (cdkcode) VALUES $cdks";
        if ($conn->query($sql) === TRUE) {
            $log_str = $log_str . " 新记录插入成功 ";
        } else {
            $log_str = $log_str . " Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $log_str = $log_str . "创建数据表错误: " . $conn->error;
    }

    echo "console.log('".$log_str."')";
    $conn->close();
}

createCodesString();