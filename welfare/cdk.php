<?php
include("smarty_inc.php");

if($_GET["cdk"]){
    //验证兑换码
    $is_right = verifyCode($_GET["cdk"]);
    $from = $_GET["qudao"]."";
    if($is_right){
        if($from == "jindong"){
            header("Location: http://m.51nafuli.com/col.jsp?id=116");
        }else if($from == "huazhu"){
            header("Location: http://m.51nafuli.com/col.jsp?id=121");
        }else if($from == "bd"){
            header("Location: http://m.51nafuli.com/col.jsp?id=132");//百度
        }else if($from == "360"){
            header("Location: http://m.51nafuli.com/col.jsp?id=130");
        }
    }else{
        $smarty->assign("qudaoName",$from);
        $smarty->assign("placeTxt", "错误的兑换码！");
        $smarty->display("registerByCDK.html");
    }
}else{
    echo '<h1>Promotion / Discount Codes</h1>';
    echo '<pre>';
    print_r(generate_promotion_code(10000, 5));
    echo '</pre>';
}

function generate_promotion_code($no_of_codes, $code_length = 4)
{
    $characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $promotion_codes = "";//用来接收生成的优惠码
    for ($j = 0; $j < $no_of_codes; $j++) {
        $code = "";
        for ($i = 0; $i < $code_length; $i++) {
            $code .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
        //如果生成的4位随机数不在我们定义的$promotion_codes函数里面
        if($promotion_codes == ""){
            $promotion_codes .= "('" . $code . "'),";//将优惠码赋值给数组
        }elseif (strpos($promotion_codes,$code) === FALSE){
            if($j == $no_of_codes - 1){
                $promotion_codes .= "('" . $code . "')";//将优惠码赋值给数组
            }else{
                $promotion_codes .= "('" . $code . "'),";//将优惠码赋值给数组
            }
        }else {
            $j--;
        }
    }
    createCodes($promotion_codes);
    return $promotion_codes;
}

function createCodes($cdks){
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
    $tablename = "tb_cdks";

// 使用 sql 创建数据表
    $sql = "CREATE TABLE IF NOT EXISTS " . $tablename . " (cdkcode VARCHAR(10) PRIMARY KEY)";

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

function verifyCode($cdk){
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
    $tablename = "tb_cdks";

// 使用 sql 创建数据表
    $sql = "CREATE TABLE IF NOT EXISTS " . $tablename . " (cdkcode VARCHAR(10) PRIMARY KEY)";
    $is_right = false;
    if ($conn->query($sql) === TRUE) {
        $log_str = $log_str . " Table " . $tablename . " created successfully ";

        $sql = "SELECT * FROM " . $tablename . " WHERE cdkcode='".$cdk."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $is_right = true;
        }
    } else {
        $log_str = $log_str . "创建数据表错误: " . $conn->error;
    }
//    echo "<script>console.log('".$log_str."');</script>";
    $conn->close();
    return $is_right;
}
?>