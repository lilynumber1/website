<?php
defined('IN_IA') or exit('Access Denied');
/* include_once MODULE_ROOT.'/model/alipay.php';
$alipay = new alipay(); */


//$sql = 'alter table ims_core_paylog add ready int default 0';
//pdo_run($sql);

global $_W,$_GPC;
$op = $_GPC['op'];
if(!$op || $op=='display') {
    $uid = $_GPC['uid'];
    $openid = mc_uid2openid($uid);
    $where = array(
        'uniacid' => $_W['uniacid']
    );
    $res = getPageLIst ('hai_daka_refunt',$where,'status asc,id desc');
    $list = $res['list'];
    $pager = $res['pager'];
    if($list){
        foreach($list as $k=>$v) {
            $list[$k]['fansinfo'] = mc_fansinfo($v['uid']);
            /*  $list[$k]['create_time'] = date('Y-m-d H:i:s',strtotime(substr($v['uniontid'],0,14)));
            $list[$k]['paytype'] = $v['type']=='wechat'?'微信':($v['type']=='alipay'?'支付宝':'余额'); */
            /* if(stripos($list[$k]['tid'], 'z') === 0){
                $list[$k]['type'] = '追加';
            }else{
                $list[$k]['type'] = '参与';
            } */
        }
    }
    include $this->template('web/paylog');
}elseif($op=='tuikuan'){
    $where = array(
        'id' => $_GET['id']
    );
    $order = pdo_get('hai_daka_refunt',$where);
    if($order && $order['status']==0) {
        $json = json_decode($order['pay_result'],true);
        $log = pdo_get('core_paylog',array(
            'tid' => $json['tid']
        ));
        if($log['type']=='credit') {
            $moneylog = array(
                1 => '退款',
                2 => 'hai105_daka',
                5 => 1
            );
            load()->model('mc');
            $res = mc_credit_update($log['openid'], 'credit2', $log['fee'], $moneylog);
            if($_W['account']['level'] >= ACCOUNT_SUBSCRIPTION_VERIFY) { 
                $url = murl('mc',array(
                    'a' => 'bond',
                    'do' => 'credits',
                    'credittype' => 'credit2',
                    'type' => 'record',
                    'period' => 1
                ),'',true);
                $text = "你的退款已入账,{$content}\n<a href='{$url}'>查看记录</a>";
                $message = array(
                    'touser' => mc_uid2openid($log['openid']),
                    'msgtype' => 'text',
                    'text' => array('content' => urlencode($text))
                );
                $account_api = WeAccount::create();
                $account_api->sendCustomNotice($message);
            }
        }elseif($log['type']=='alipay'){
            returnJson(1,'支付宝请人工联系退款');
            /* $out_trade_no = $log['uniontid'];
            $res = $alipay->tradeQuery($out_trade_no);
            $trade_no = $res['alipay_trade_query_response']['trade_no'];
            $res = $alipay->tradeRefund($out_trade_no, $trade_no, $log['fee']); */
        }elseif($log['type']=='wechat'){
            $pay = uni_setting_load('payment', $_W['uniacid']);
            $payment = $pay['payment'];
            $paycert = $payment['wechat_refund']['cert'];
            $paykey = $payment['wechat_refund']['key'];
            $paycert = authcode($paycert, 'DECODE');
            $paykey = authcode($paykey, 'DECODE');
            $certurl = ATTACHMENT_ROOT . $_W['uniacid'] . '_wechat_refund_all.pem';
            file_put_contents($certurl, $paykey.$paycert);
            $res = refundOrder($log,$payment,$certurl);
        }else{
            $pay = uni_setting_load('payment', $_W['uniacid']);
            $payment = $pay['payment'];
            $paycert = $payment['wechat_refund']['cert'];
            $paykey = $payment['wechat_refund']['key'];
            $paycert = authcode($paycert, 'DECODE');
            $paykey = authcode($paykey, 'DECODE');
            $certurl = ATTACHMENT_ROOT . $_W['uniacid'] . '_wechat_refund_all.pem';
            file_put_contents($certurl, $paykey.$paycert);
            $res = refundOrder($log,$payment,$certurl);
        }
        
        if($res) {
            pdo_update('hai_daka_refunt',array('status'=>1),$where);
            returnJson(0,'退款成功');
        }else{
            returnJson(1,'退款失败');
        }
    }else{
        returnJson(1,'该订单已退款');
    }
    returnJson(0,'ok');
}
