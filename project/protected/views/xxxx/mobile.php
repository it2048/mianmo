<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="appstore" />
    <meta name="keywords" content="appstore" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <title>《燃烧的英雄》官网</title>
    <meta name="description" content="《燃烧的英雄》是一款风际游戏打造，以DOTA为题材的ARPG+卡牌手游。在传统的ARPG中真正意义上的加入了卡牌手游的元素,让APRG+卡牌手游不再只是拥有卡牌的养成体验,而是在游戏中体验自由战斗带来的超凡体验。还可运用各种卡牌在战斗中招募英雄提升能力，玩家可以在游戏中体验有趣的原创主线。也能与其他玩家在游戏中来场dota般的激烈厮杀，大量的dota英雄与你并肩作战，别于其他dota手游的打击快感，让玩家真正体验到自己手中的dota世界！" />
    <meta name="keywords" content="燃烧的英雄官网，燃烧的英雄、燃烧的英雄封测、燃烧封测、燃烧的战场、远征、燃烧吧英雄 、燃烧的英雄下载、ARPG+卡牌手游、手机游戏、三剑豪团队研发、风际游戏、三剑豪研发公司、燃烧的远征、燃烧的战场、ranshaodeyingxiong、燃烧、Gank Men、燃烧的英雄移动版、燃烧的英雄APP、Gank Men APP" /> 
    <?php $home = Yii::app()->request->baseUrl."/public/xxxx/mobile/";?>
    <link rel="stylesheet" rev="stylesheet" type="text/css" media="all" href="<?php echo $home; ?>css/base.css"  />
    <link rel="shortcut icon" href="<?php echo $home; ?>images/favicon.ico"  type="image/x-icon">
</head>

<body>
<panel>
    <fieldset class="main_bg">
        <img src="<?php echo $home; ?>images/main1.jpg" />
    </fieldset>
    <fieldset class="main_bg">
        <img src="<?php echo $home; ?>images/main2.jpg" />
    </fieldset>
    <fieldset class="main_bg">
        <img src="<?php echo $home; ?>images/main3.jpg" />
    </fieldset>

    <a class="pa yuyue" href="javascript:;" onclick="toOrder()">女神的恩赐</a>
    <!-- <div class="pa fenxiang">
        <a class="weixin" href="javascript:;">一键关注</a>
        <a class="pengyou" href="javascript:;">分享好友/朋友圈</a>
    </div> -->
    <div id="mvFlow" class="pop_flow cover" style="z-index:1000; top:50px; left:50%; position:absolute; margin-left:-160px; display:none;">
        <a href="javascript:;" class="flow_close" title="关闭" onclick="closeCover()">关闭</a>
        <div class="reg_box" style="display:">
            <h2 class="step_tit">风际通行证注册</h2>
            <div class="reg_con">
                <ul>
                    <input type="hidden" name="csrf_token" value="<?php echo Yii::app()->request->csrfToken; ?>" />
                    <li><label>用户账号：</label><input type="text" maxlength="16" id="account" name="username" class="ipt_tx" placeholder="6-16个字母数字组合" autocomplete="off"><em>*</em><p class="default_info"></p></li>
                    <li><label>设置密码：</label><input type="password" maxlength="16" id="password" name="password" class="ipt_tx" placeholder="6-16个任意字符组合" autocomplete="off"><em>*</em><p class="default_info"></p></li>
                    <li><label>确认密码：</label><input type="password" maxlength="16" id="pass" name="confirmPassword" class="ipt_tx" placeholder="请确认密码" autocomplete="off"><em>*</em><p class="default_info"></p></li>
                    <li><label>联系电话：</label><input type="text" maxlength="11" id="phone" name="telnum" class="ipt_tx" placeholder="请输入联系电话" autocomplete="off"><em>*</em><p class="default_info"></p></li>
                </ul>
                <div class="btn_box"><a href="javascript:;" onclick="submitData('<?php echo Yii::app()->createAbsoluteUrl('xxxx/registration'); ?>'
)">注册</a><a href="javascript:;" onclick="closeCover()">取消</a></div>
                <p class="tips"></p>
            </div>
        </div>
         <div class="order_box" style="display:none">
            <h2 class="step_tit">申请游戏体验预约</h2>
            <div class="order_num">已预约人数：<em>2014</em></div>
           <!--  <div class="order_count"><input type="text" maxlength="11" id="r_telnum" name="telnum" class="ipt_tx" placeholder="输入申请预约账号" autocomplete="off"></div> -->
            <div class="btn_box"><a href="javascript:;" onclick="success()">预约</a><a href="javascript:;" onclick="closeCover()">取消</a></div>
        </div>
        <div class="success_fault" style="display:none">
            <div class="success_fault_tips fault_tips">预约失败！</div>
            <div class="success_fault_tips success_tips">预约成功！</div>
            <div class="fault_cause_tips">请重新注册</div>
            <div class="link_tips">《燃烧的英雄》开测时，注册账号可直接登录游戏。</div>
            <a class="more" href="http://bbs.windplay.cn/forum-57-1.html
" target="_blank">了解更多请点这里</a>
        </div>
    </div>
</panel>
<script type="text/javascript" src="<?php echo $home; ?>js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="<?php echo $home; ?>js/hero.js"></script>
 <script type="text/javascript" src="<?php echo $home; ?>js/sha1.js"></script>
</body>
</html>
