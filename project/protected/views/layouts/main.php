<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo Yii::app()->name;?></title>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/dwzthemes/default/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/dwzthemes/css/core.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/dwzthemes/css/print.css" rel="stylesheet" type="text/css" media="print"/>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/dwzthemes/css/login.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/jquery.validate.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/dwz.min.js" type="text/javascript"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/xheditor/xheditor-zh-cn.min.js" type="text/javascript"></script>

    <!--[if IE]>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/admincss/dwzthemes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
    <![endif]-->

    <!--[if lte IE 9]>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/adminjs/speedup.js" type="text/javascript"></script>
    <![endif]-->

    <script type="text/javascript">
        $(function() {
            DWZ.init("<?php echo Yii::app()->request->baseUrl; ?>/dwz.frag.xml", {
                loginUrl:"login_dialog.html", loginTitle:"登录",	// 弹出登录对话框
                statusCode: {ok: 200, error: 300, timeout: 301}, //【可选】
                debug: false, // 调试模式 【true|false】
                callback: function() {
                    initEnv();
                    $("#themeList").theme({themeBase: "themes"}); // themeBase 相对于index页面的主题base路径
                }
            });
        });

    </script>
</head>

<body scroll="no">
<div id="layout">
    <div id="header">
        <div class="headerNav">
            <a class="logo" href="#"><?php echo Yii::app()->name;?></a>
            <ul class="nav">
                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admincontent/usernewpass'); ?>" target="dialog" width="600">设置</a></li>
                <li><a href="#" target="_blank">首页</a></li>
                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admincontent/logout'); ?>">退出</a></li>
            </ul>
        </div>
    </div>
    <div id="leftside">
        <div id="sidebar_s">
            <div class="collapse">
                <div class="toggleCollapse"><div></div></div>
            </div>
        </div>
        <div id="sidebar">
            <div class="toggleCollapse"><h2>主菜单</h2><div>收缩</div></div>

            <div class="accordion" fillSpace="sidebar">
                <div class="accordionContent">
                    <ul class="tree treeFolder">
                        <li><a href="#">后台管理</a>
                            <ul>
                                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('admincontent/usermanager'); ?>" target="navTab" rel="usermaneger">用户管理</a></li>
                                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/slidemanager'); ?>" target="navTab" rel="slidemanager">幻灯片设置</a></li>
                                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/ordermanager'); ?>" target="navTab" rel="ordermanager">订单查看</a></li>
                                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/distributor'); ?>" target="navTab" rel="distributor">经销商查看</a></li>
                                <li><a href="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/news'); ?>" target="navTab" rel="news">文档管理</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="container">
        <div id="navTab" class="tabsPage">
            <div class="tabsPageHeader">
                <div class="tabsPageHeaderContent"><!-- 显示左右控制时添加 class="tabsPageHeaderMargin" -->
                    <ul class="navTab-tab">
                        <li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
                    </ul>
                </div>
                <div class="tabsLeft">left</div><!-- 禁用只需要添加一个样式 class="tabsLeft tabsLeftDisabled" -->
                <div class="tabsRight">right</div><!-- 禁用只需要添加一个样式 class="tabsRight tabsRightDisabled" -->
                <div class="tabsMore">more</div>
            </div>
            <ul class="tabsMoreList">
                <li><a href="javascript:;">我的主页</a></li>
            </ul>
            <div class="navTab-panel tabsPageContent layoutBox">
                <div class="page unitBox">
                    <div class="pageFormContent" layoutH="80" style="margin-right:230px">
                        <div class="divider"></div>
                        <h2>燃烧的英雄后台系统一期说明文档:</h2><br/><br/>
                        添加了用户管理功能，对管理员能对用户做增删改操作，用户自己能修改密码<br/>
                        <br/>
                        <br/>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<div id="footer">Copyright &copy; 2014 面膜后台</div>

</body>
</html>