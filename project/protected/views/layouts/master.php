<!DOCTYPE html>
<html>
<head>
    <?php $home = Yii::app()->request->baseUrl."/public/home/";?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>showplus面膜</title>
    <meta name="keywords" content="面膜,showplus"/>
    <meta name="description" content="面膜,showplus"/>
    <link href="<?php echo $home;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo $home;?>js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $home;?>js/min.index.js"></script>
</head>
<body>
<div class="wrap">
    <div class="head">
        <a href="">享受美中之美</a>
    </div>
    <div class="nav">
        <a href="<?php echo Yii::app()->createAbsoluteUrl('home/index'); ?>" <?php echo $this->nav=="index"?'class="cur"':'';?>>首页</a>
        <a href="<?php echo Yii::app()->createAbsoluteUrl('home/showplus'); ?>" <?php echo $this->nav=="showplus"?'class="cur"':'';?>>ShowPlus面膜</a>
        <a href="<?php echo Yii::app()->createAbsoluteUrl('home/brand'); ?>" <?php echo $this->nav=="brand"?'class="cur"':'';?>>品牌故事</a>
        <a href="<?php echo Yii::app()->createAbsoluteUrl('home/buy'); ?>" <?php echo $this->nav=="buy"?'class="cur"':'';?>>快速购买</a>
        <a href="<?php echo Yii::app()->createAbsoluteUrl('home/jxs'); ?>" <?php echo $this->nav=="jxs"?'class="cur"':'';?>>经销商查询</a>
        <a href="<?php echo Yii::app()->createAbsoluteUrl('home/fangwei'); ?>" <?php echo $this->nav=="fangwei"?'class="cur"':'';?>>防伪查询</a>
    </div>
<?php echo $content; ?>
<div class="bottom">
    <ul>
        <li><p>免费热线<br><span>400-004-3515</span></p></li>
        <li><p class="pad1">官方微信<br><span>showplusmask</span></p></li>
        <li><p class="pad2">电子邮件<br><span>tanchao@showplus.cc</span></p></li>
        <li><p class="pad3"><a href="tencent://message/?uin=654805289
&Site=http://www.showplus.cc/&Menu=yes">在线客服<br><span>9:00-22:00</span></a></p></li>
    </ul>
</div>
</div>
</div>
<div class="footer">
    <p>© ShowPlus.cc  鲁ICP备14034907号</p>
</div>
</body>
</html>