<!DOCTYPE html>
<html>
<head>
    <meta content="IE=11.0000" http-equiv="X-UA-Compatible">
    <meta charset="utf-8">
    <title>2014带给女人震撼的微信账号</title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1,initial-scale=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link href="<?php echo Yii::app()->request->baseUrl."/public/home/css/";?>wap.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="GENERATOR" content="MSHTML 11.00.9600.17344"></head>
<body>
<div class="wrapper">
    <div class="header" >
        2014，带给女人震撼的微信账号
        <!-- 这句话后台可编辑 -->
    </div>
</div>
<div class="wrapper" id="wrapper">
    <div class="tj_box">
        <?php foreach($model as $k=>$val){ ?>
        <a href="<?php echo $val->link;?>">
            <!-- 链接地址可编辑 -->
            <dl class="clearfix">
                <dd>
                    <div class="special">
                        <h3 class="font14"><?php echo $val->title;?></h3>
                        <!-- 标题可编辑 -->
                        <p><?php echo $val->content;?></p>
                        <!-- 描述可编辑 -->
                        <span>+关注</span></div></dd>
                <dt class="tj_base">
                    <img src="<?php echo Yii::app()->request->baseUrl."/public/home/";?>images/21.jpg">
                    <!-- 图片可编辑 -->
                </dt></dl>
        </a>
        <?php }?>
    </div>
</div>
</body>
</html>
