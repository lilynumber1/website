<?php
include("smarty_inc.php");

$smarty->assign("link1", "http://passport.fanli.com/mark?c=jeek8ymvji");
$smarty->assign("img1", "./img/1.jpg");
$smarty->assign("title1", "创意抱枕0元购");
$smarty->assign("title11", "多重图案可自由选择");
$smarty->assign("desc11", "1、该活动仅限返利网新用户参加。");
$smarty->assign("desc12", "2、每个返利网新用户只能参加一次0元购活动。");
$smarty->assign("desc13", "3、活动需要先下单付款，确认收货后返现金，现金可以提现到支付宝。");
$smarty->assign("id1","chuangyibaozhen");

$smarty->assign("link2", "http://passport.fanli.com/mark?c=mltm2a2bpa");
$smarty->assign("img2", "./img/2.jpg");
$smarty->assign("title2", "青春版保温杯0元购");
$smarty->assign("title21", "可保温保冷，人手必备");
$smarty->assign("desc21", "1、该活动仅限返利网新用户参加。");
$smarty->assign("desc22", "2、每个返利网新用户只能参加一次0元购活动。");
$smarty->assign("desc23", "3、活动需要先下单付款，确认收货后返现金，现金可以提现到支付宝。");
$smarty->assign("id2","qingchunbaowenbei");

$smarty->assign("link3", "http://passport.fanli.com/mark?c=hc1f1p0sgk");
$smarty->assign("img3", "./img/3.jpg");
$smarty->assign("title3", "星空保温杯0元购");
$smarty->assign("title31", "极具吸引力的颜值，无法抗拒");
$smarty->assign("desc31", "1、该活动仅限返利网新用户参加。");
$smarty->assign("desc32", "2、每个返利网新用户只能参加一次0元购活动。");
$smarty->assign("desc33", "3、活动需要先下单付款，确认收货后返现金，现金可以提现到支付宝。");
$smarty->assign("id3","xingkongbaowenbei");

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