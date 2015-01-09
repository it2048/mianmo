<div class="pageContent">
    <form method="post" action="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/newsout'); ?>" class="pageForm required-validate" onsubmit="return iframeCallback(this, viData);" enctype="multipart/form-data">
        <div class="pageFormContent" layoutH="56">
            <p class="nowrap">
                <label>文章编号(逗号分隔)：</label>
                <input  name="news_rel" type="text" class="tagsck" size="50" value="">
            </p>
            <p class="nowrap">
                <label>链接：</label>
                <input  name="news_link" type="text" class="textInput" size="50" value="">
            </p>
        </div>
        <div class="formBar">
            <ul>
                <!--<li><a class="buttonActive" href="javascript:;"><span>保存</span></a></li>-->
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
            var tmp = "<?php echo Yii::app()->createAbsoluteUrl('home/m'); ?>";
            $("input[name=news_link]").val(tmp+"/c/"+json.data);
            window.open(tmp+"/c/"+json.data);
        }
    }
</script>