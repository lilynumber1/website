<?php
/**
  * wechat php test
  */

//define your token
define("TOKEN", "fightinglily666");
define("APPID", "wxb0f057a2614b993d");
define("AESKEY", "BBQUdicxMiYK1lR8GUjoAHJ4YnDndJjuwG26C2CNCxs");
define("APPSECRET", "27af168e07bb3524bec98c9eeb0e4da0");

$token_prefix = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wxb0f057a2614b993d&secret=27af168e07bb3524bec98c9eeb0e4da0";

$wechatObj = new wechatCallbackapiTest();
//$wechatObj->valid();
//getTocken();
$wechatObj->responseMsg();
function getTocken()
{
    $ch = curl_init();

    $str =$token_prefix;
    curl_setopt($ch, CURLOPT_URL, $str);
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
    $output = curl_exec($ch);
    var_dump( $output );
}

class wechatCallbackapiTest
{
	public function valid()
    {
        $echoStr = $_GET["echostr"];

        //valid signature , option
        if($this->checkSignature()){
        	echo $echoStr;
        	exit;
        }
    }

    public function responseMsg()
    {
		//get post data, May be due to the different environments
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

      	//extract post data
		if (!empty($postStr)){
                /* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
                   the best way is to check the validity of xml by yourself */
                libxml_disable_entity_loader(true);
              	$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
                $fromUsername = $postObj->FromUserName;
                $toUsername = $postObj->ToUserName;
                $keyword = trim($postObj->Content);
                $time = time();
                $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";             
				if(!empty( $keyword ))
                {
              		$msgType = "text";
                	$contentStr = "欢迎来到游戏前端开发的世界！我的博客主页是http://lilynumber1.com";
                	$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                	echo $resultStr;
                }else{
                	echo "Input something...";
                }

        }else {
        	echo "";
        	exit;
        }
    }
		
	private function checkSignature()
	{
        // you must define TOKEN by yourself
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }
        
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];
        		
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
		
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}

?>