<!DOCTYPE html>
<html>
<head>
    <?php $home = Yii::app()->request->baseUrl."/public/home/";?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo empty($models['title'])?"":$models['title']; ?></title>
    <meta name="keywords" content="<?php echo empty($models['keywords'])?"":$models['keywords']; ?>"/>
    <meta name="description" content="<?php echo empty($models['description'])?"":$models['description']; ?>"/>
    <link href="<?php echo $home; ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="head">
    <div class="wrap head_pori">
        <a href=""><img src="<?php echo $home; ?>images/logo.png" title="燃烧的英雄" alt="燃烧的英雄" class="logo"></a>
        <div class="nav clearfix">
            <a href="" class="fr">论坛</a>
            <a href="" class="fr">账号</a>
            <a href="" class="fr">资料</a>
            <a href="" class="fl cur">首页</a>
            <a href="" class="fl">新闻</a>
            <a href="" class="fl">英雄</a>
        </div>
    </div>
</div>
<div class="wrap middle clearfix">
    <div class="operation">
        <div class="ewm">
            <img src="<?php echo $home; ?>images/ewm.png" alt="">
        </div>
        <div class="btn_wrap">
            <a href="<?php echo empty($models['ios_download'])?"":$models['ios_download']; ?>" class="btn btn_bg1">iOS正版下载</a>
        </div>
        <div class="btn_wrap">
            <a href="<?php echo empty($models['iosyy_download'])?"":$models['iosyy_download']; ?>" class="btn btn_bg1">iOS越狱下载</a>
        </div>
        <div class="btn_wrap">
            <a href="<?php echo empty($models['android_download'])?"":$models['android_download']; ?>" class="btn btn_bg2">安卓版下载</a>
        </div>
        <div class="btn_wrap">
            <a href="<?php echo empty($models['wp_download'])?"":$models['wp_download']; ?>" class="btn btn_bg3">WP版下载</a>
        </div>
    </div>
    <div class="gift">
        <p class="bt">"APRG+卡牌" 进化手游</p>
        <div class="video clearfix">
            <p class="brother">
                兄弟一起来<br><span>观看精彩视频 &gt;</span>
            </p>
            <div class="video_btn" title="观看精彩视频"></div>
        </div>
        <div class="bag_bg">
            <div class="bag" style="margin:0;">
                <p><b>新手礼包</b><br><span>点击马上领取</span></b></p>
            </div>
            <div class="bag">
                <p><b>新手指南</b><br><span>看了不被虐</span></b></p>
            </div>
            <div class="bag">
                <p><b>游戏充值</b><br><span>首冲好礼现在送</span></b></p>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="wrap">
        <div class="floor clearfix">
            <div class="lunbo">
                <div class="img_wrap">
                    <ul>
                        <li><a href=""><img src="<?php echo $home; ?>images/lunbo.jpg" alt=""></a></li>
                        <li><a href=""><img src="<?php echo $home; ?>images/lunbo.jpg" alt=""></a></li>
                        <li><a href=""><img src="<?php echo $home; ?>images/lunbo.jpg" alt=""></a></li>
                        <li><a href=""><img src="<?php echo $home; ?>images/lunbo.jpg" alt=""></a></li>
                    </ul>
                </div>
                <div class="query">
                    <span class="cur">1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                </div>
            </div>
            <div class="news">
                <ul class="tab_head">
                    <li class="cur">最新</li>
                    <li>新闻</li>
                    <li>公告</li>
                    <li>活动</li>
                </ul>
                <div class="tab_cont">
                    <div class="cont_wrap" style="display:block;">
                        <p class="important"><a href="">《燃烧的英雄》12月20日盛大开服公告</a></p>
                        <div class="other">
                            <p class="common"><span class="date">11/28</span><span>[新闻]</span><a href="">《燃烧的英雄》12月20日盛大开服公告</a></p>
                            <p class="common"><span class="date">11/28</span><span>[新闻]</span><a href="">《燃烧的英雄》12月20日盛大开服公告</a></p>
                            <p class="common"><span class="date">11/28</span><span>[新闻]</span><a href="">《燃烧的英雄》12月20日盛大开服公告</a></p>
                            <p class="common"><span class="date">11/28</span><span>[新闻]</span><a href="">《燃烧的英雄》12月20日盛大开服公告</a></p>
                            <p class="common"><span class="date">11/28</span><span>[新闻]</span><a href="">《燃烧的英雄》12月20日盛大开服公告</a></p>
                        </div>
                        <a href="" class="more">More &gt;</a>
                    </div>
                </div>
            </div>
            <div class="offical">
                <h3>官方账号</h3>
                <div class="zhanghao">
                    <a href="" class="zh_bg1">官方微信</a>
                    <a href="<?php echo empty($models['weibo_url'])?"":$models['weibo_url']; ?>" class="zh_bg2">新浪微博</a>
                    <a href="<?php echo empty($models['txweibo_url'])?"":$models['txweibo_url']; ?>" class="zh_bg3">腾讯微博</a>
                </div>
            </div>
        </div>
        <div class="floor clearfix">
            <div class="description">
                <div class="des_tab">
                    <ul>
                        <li class="cur"><p class="dt_bg1">世界观介绍</p></li>
                        <li><p class="dt_bg2">职业介绍</p></li>
                        <li><p class="dt_bg3">英雄图鉴</p></li>
                        <li><p class="dt_bg4">游戏攻略</p></li>
                    </ul>
                </div>
                <div class="des_cont">
                    <div class="img_word" style="display:block;">
                        <a href=""><img src="" alt=""></a>
                    </div>
                    <div class="img_word">

                    </div>
                    <div class="img_word">

                    </div>
                    <div class="img_word">

                    </div>
                </div>
            </div>
            <div class="connect">
                <h3>联系我们</h3>
                <div class="kefu">
                    <div class="qq">客服QQ: 154665412</div>
                    <p class="qun">
                        <span>玩家Q群</span><br>安卓&越狱：5978545<br>IOS：5978545
                    </p>
                    <div class="pop">在线提交</div>
                </div>
            </div>
        </div>
        <div class="floor clearfix">
            <div class="bottom clearfix" style="margin-right:20px;">
                <div class="bottom_name">
                    <p>游戏专区</p>
                </div>
                <div class="bottom_wrap">
                    <ul>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bottom">
                <div class="bottom_name">
                    <p>合作媒体</p>
                </div>
                <div class="bottom_wrap">
                    <ul>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt="">
                            </a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                        <li>
                            <a href=""><img src="<?php echo $home; ?>images/bashi.jpg" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <img src="<?php echo $home; ?>images/footer_logo.png" alt="" class="footer_logo" />
    <p>抵制不良游戏 拒绝盗版游戏   注意自我保护 谨防受骗上当   适当游戏益脑 沉迷游戏伤身   合理安排时间 享受健康生活</p>
    <p><a href="http://www.windplay.cn/js/2014/0521/4.html">关于公司</a> | <a href="http://www.windplay.cn/zc/">实名注册</a> | <a href="http://www.windplay.cn/jzjh/" target="_blank">家长监护</a> | <a href="http://www.windplay.cn/sw/">商务合作</a> | <a href="http://www.windplay.cn/rczp/scb/">人才招聘</a></p>
    <p>成都风际网络科技有限公司 版权所有 蜀ICP备13020373号</p>
    <p><a href="http://www.gov.cn/flfg/2011-03/21/content_1828568.htm" target="_blank">《互联网文化暂行规定》  </a><a href="mailto:wlyxjb@gmail.com" target="_blank">文化部网络游戏举报与联系邮箱：wlyxjb@gmail.com  </a><a href="http://www.scjb.gov.cn/" target="_blank">四川省互联网不良与违法信息举报中心</a></p>
</div>
<script type="text/javascript" src="<?php echo $home; ?>js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo $home; ?>js/min.index.js"></script>
</body>
</html>
