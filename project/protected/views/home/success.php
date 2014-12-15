<!DOCTYPE html>
<html> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>showplus面膜</title>
    <meta name="keywords" content="面膜,showplus"/>
    <meta name="description" content="面膜,showplus"/>
    <link href="<?php echo $home;?>css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrap">
	<div class="buy_head">
		享受美中之美
	</div>
	<div class="nav">
		<a href="<?php echo Yii::app()->createAbsoluteUrl('home/index'); ?>" style="float:right;">返回首页</a>
		<p class="lan">提交成功</p>
	</div>
	<div class="content">
		<div class="confirm_wrap clearfix">
			<div class="dingdan_wrap <?php echo empty($type)?"":$type;?>">
                            <p>金额：￥<span><?php echo empty($arr['money'])?"0":$arr['money'];?></span></p>
				<p>姓名：<span><?php echo empty($arr['name'])?"0":$arr['name'];?></span></p>
				<p>配送：<span><?php echo empty($arr['zone'])||empty($arr['address'])?"":$arr['zone']." ".$arr['address'];?></span></p>
				<p>手机：<span><?php echo empty($arr['mobilephone'])?"":$arr['mobilephone'];?></span></p>
			</div>
		</div>
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
  <p>© ShowPlus.cc  鲁ICP备13045142号-1</p>
</div>
<script type="text/javascript" src="<?php echo $home;?>js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo $home;?>js/min.index.js"></script>
</body>
</html>
 