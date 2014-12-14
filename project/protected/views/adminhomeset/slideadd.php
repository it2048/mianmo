<div class="pageContent">
    <form method="post" action="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/slidesave'); ?>" class="pageForm required-validate" onsubmit="return iframeCallback(this, viData);" enctype="multipart/form-data">
        <div class="pageFormContent" layoutH="56">
            <p class="nowrap">
                <label>幻灯标题：</label>
                <input  name="slide_title" type="text" class="textInput required" size="50" value="">
            </p>
            <p class="nowrap">
                <label>图片地址：</label>
                <input name="slide_img" type="text" class="textInput" size="50" value="">
            </p>
            <p class="nowrap">
                <label>图片上传：</label>
                <input name="slide_up" type="file">
            </p>
            <p class="nowrap">
                <label>跳转地址：</label>
                <input  name="slide_redirect" type="text" class="textInput" size="50" value="">
            </p>
        </div>
        <div class="formBar">
            <ul>
                <li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
                <li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
            </ul>
        </div>
    </form>
</div>
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
            alertMsg.correct("保存成功"); //返回错误
            navTab.reload(json.slidemanager);  //刷新主页面
            $.pdialog.closeCurrent();  //
        }
    }

</script>