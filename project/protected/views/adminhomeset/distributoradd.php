<h2 class="contentTitle">请选择需要上传的附件</h2>

<form action="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/distributorup'); ?>" method="post" enctype="multipart/form-data" class="pageForm required-validate" onsubmit="return iframeCallback(this,viData)">

<div class="pageContent">
	<div class="pageFormContent" layoutH="97">
		<dl>
			<dt>附件：</dt><dd><input type="file" name="file" class="required" size="29" /></dd>
		</dl>
	</div>
	<div class="formBar">
		<ul>
			<li><div class="buttonActive"><div class="buttonContent"><button type="submit">上传</button></div></div></li>
			<li><div class="button"><div class="buttonContent"><button class="close" type="button">关闭</button></div></div></li>
		</ul>
	</div>
</div>
</form>
<script type="text/javascript">
    /**
     * 回调函数
     */
    function viData(json) {
        if(json.code!=0)
        {
            alertMsg.error(json.msg); //返回错误
        }
        else
        {
            alertMsg.correct(json.msg); //返回错误
            navTab.reload(json.distributor);  //刷新主页面
            $.pdialog.closeCurrent();  //
        }
    }

</script>
