<div class="pageContent">
    <form method="post" action="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/orderupdate'); ?>" class="pageForm required-validate" onsubmit="return iframeCallback(this, viData);" enctype="multipart/form-data">
        <div class="pageFormContent" layoutH="56">
            <p class="nowrap">
                <label>数量：</label>
                <input  name="number" type="text" class="textInput required" size="50" value="<?php echo $models->number;?>">
                <input  name="id" type="hidden" value="<?php echo $models->id;?>">
            </p>
            <p class="nowrap">
                <label>费用：</label>
                <input  name="money" type="text" class="textInput required" size="50" value="<?php echo $models->money;?>">
            </p>
            <p class="nowrap">
                <label>地区：</label>
                <input  name="zone" type="text" class="textInput required" size="50" value="<?php echo $models->zone;?>">
            </p>
            <p class="nowrap">
                <label>地址：</label>
                <input  name="address" type="text" class="textInput required" size="50" value="<?php echo $models->address;?>">
            </p>
            <p class="nowrap">
                <label>姓名：</label>
                <input  name="name" type="text" class="textInput required" size="50" value="<?php echo $models->name;?>">
            </p>
            <p class="nowrap">
                <label>手机：</label>
                <input  name="mobilephone" type="text" class="textInput required" size="50" value="<?php echo $models->mobilephone;?>">
            </p>
            <p class="nowrap">
                <label>邮编：</label>
                <input  name="postcode" type="text" class="textInput" size="50" value="<?php echo $models->postcode;?>">
            </p>
            <p class="nowrap">
                <label>座机：</label>
                <input  name="phone" type="text" class="textInput" size="50" value="<?php echo $models->phone;?>">
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
            alertMsg.correct("保存成功"); //返回错误
            navTab.reload(json.usermaneger);  //刷新主页面
            $.pdialog.closeCurrent();  //
        }
    }

</script>