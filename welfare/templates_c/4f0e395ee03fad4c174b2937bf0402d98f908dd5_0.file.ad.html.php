<?php
/* Smarty version 3.1.30, created on 2018-04-08 02:01:55
  from "/data/home/qxu1649380380/htdocs/welfare/templates/ad.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac97813dd59f9_29788167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f0e395ee03fad4c174b2937bf0402d98f908dd5' => 
    array (
      0 => '/data/home/qxu1649380380/htdocs/welfare/templates/ad.html',
      1 => 1523152846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac97813dd59f9_29788167 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en" class="fl-android">
<head>
    <title>超级福利</title>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no,viewport-fit=cover'>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <meta name="format-detection" content="email=no">
    <link rel="stylesheet" href="./style/1.css" type="text/css">
    <?php echo '<script'; ?>
 id="J_script_attrsniffer" data-remwidth="750" data-remswitch="1" src="./js/attrsniffer.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./js/tongji.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./js/goudan-h5-zero-js.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="./js/page-action.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="J_zero_container" class="zero-container">
        <div id="J_swiper_container" class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide J_swiper_slide">
                    <img src="./img/banner.jpg" style="display:block;" class="w100 J_lazyimg">
                </div>
            </div>
            <!--<div class="swiper-pagination"></div>-->
        </div>
        <ul>
            <li class="menuli"><a href="javascript:void(setContent(1))" class="menu" id="a1">热门</a></li>
            <li class="menuli"><a href="javascript:void(setContent(2))" class="menu" id="a2">信用卡</a></li>
        </ul>
        <div class="zero-box" id="menu1">
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l1')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img1']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title1']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title11']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l1">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id1']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '1'])">马上领取</a></p>
                    <p>
                        <b>活动说明：</b><br>
                        <hr />
                        <li><b><?php echo $_smarty_tpl->tpl_vars['desc11']->value;?>
</b></li>
                        <li><?php echo $_smarty_tpl->tpl_vars['desc12']->value;?>
</li>
                        <li><?php echo $_smarty_tpl->tpl_vars['desc13']->value;?>
</li>
                    </p>
                </div>
            </div>
            <!--<div class="group">-->
                <!--<div class="fui-grid zero-wrapper" onclick="show('l2')">-->
                    <!--<div class="item-img fui-span0">-->
                        <!--<img src=<?php echo $_smarty_tpl->tpl_vars['img2']->value;?>
 class="w100 J_lazyimg" style="display: block;">-->
                    <!--</div>-->
                    <!--<div class="fui-span1">-->
                        <!--<h3 class="item-title fui-uti-nowrap-line">-->
                            <!--&lt;!&ndash;&ndash;&gt;-->
                            <!--<?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
-->
                        <!--</h3>-->
                        <!--<p class="item-sold">-->
                            <!--<i></i>-->
                            <!--<?php echo $_smarty_tpl->tpl_vars['title21']->value;?>
-->
                        <!--</p>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div style="display: none" class="desc-wrapper" id="l2">-->
                    <!--<p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id2']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '2'])">马上领取</a></p>-->
                    <!--<p>-->
                        <!--<b>活动说明：</b><br>-->
                    <!--<hr />-->
                    <!--<li><b><?php echo $_smarty_tpl->tpl_vars['desc21']->value;?>
</b></li>-->
                    <!--<li><?php echo $_smarty_tpl->tpl_vars['desc22']->value;?>
</li>-->
                    <!--<li><?php echo $_smarty_tpl->tpl_vars['desc23']->value;?>
</li>-->
                    <!--</p>-->
                <!--</div>-->
            <!--</div>-->
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l3')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img3']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title3']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title31']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l3">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id3']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '3'])">马上领取</a></p>
                    <p>
                        <b>活动说明：</b><br>
                    <hr />
                    <li><b><?php echo $_smarty_tpl->tpl_vars['desc31']->value;?>
</b></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['desc32']->value;?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['desc33']->value;?>
</li>
                    </p>
                </div>
            </div>
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l4')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img4']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title4']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title41']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l4">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link4']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id4']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '4'])">马上领取</a></p>
                    <p>
                        <b>活动说明：</b><br>
                    <hr />
                    <li><b><?php echo $_smarty_tpl->tpl_vars['desc41']->value;?>
</b></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['desc42']->value;?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['desc43']->value;?>
</li>
                    </p>
                </div>
            </div>
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l5')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img5']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title5']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title51']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l5">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id5']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '5'])">马上领取</a></p>
                    <p>
                        <b>活动说明：</b><br>
                    <hr />
                    <li><b><?php echo $_smarty_tpl->tpl_vars['desc51']->value;?>
</b></li>
                    <li><?php echo $_smarty_tpl->tpl_vars['desc52']->value;?>
</li>
                    <li><?php echo $_smarty_tpl->tpl_vars['desc53']->value;?>
</li>
                    </p>
                </div>
            </div>
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l6')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img6']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title6']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title61']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l6">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link6']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id6']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '6'])">马上领取</a></p>
                </div>
            </div>
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l7')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img7']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title7']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title71']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l7">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link7']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id7']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '7'])">马上领取</a></p>
                </div>
            </div>
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l8')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img8']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title8']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title81']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l8">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link8']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id8']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '8'])">马上领取</a></p>
                </div>
            </div>
        </div>

        <div class="zero-box" id="menu2" style="display: none">
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l9')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img9']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title9']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title91']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l9">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link9']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id9']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '9'])">马上领取</a></p>
                </div>
            </div>
            <div class="group">
                <div class="fui-grid zero-wrapper" onclick="show('l10')">
                    <div class="item-img fui-span0">
                        <img src=<?php echo $_smarty_tpl->tpl_vars['img10']->value;?>
 class="w100 J_lazyimg" style="display: block;">
                    </div>
                    <div class="fui-span1">
                        <h3 class="item-title fui-uti-nowrap-line">
                            <!---->
                            <?php echo $_smarty_tpl->tpl_vars['title10']->value;?>

                        </h3>
                        <p class="item-sold">
                            <i></i>
                            <?php echo $_smarty_tpl->tpl_vars['title101']->value;?>

                        </p>
                    </div>
                </div>
                <div style="display: none" class="desc-wrapper" id="l10">
                    <p class="tiy"><a href=<?php echo $_smarty_tpl->tpl_vars['link10']->value;?>
 target="newwebview" class="fui-span0 btn-go zero" id=<?php echo $_smarty_tpl->tpl_vars['id10']->value;?>
 onclick="_hmt.push(['_trackEvent', 'welfare', 'click', '10'])">马上领取</a></p>
                </div>
            </div>
        </div>
    </div>



</body>
</html><?php }
}
