<div class="pageContent">
    <form method="post" action="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/heroupdate'); ?>" class="pageForm required-validate" onsubmit="return iframeCallback(this, viData);" enctype="multipart/form-data">
        <div class="pageFormContent" layoutH="56">
            <p>
                <label>英雄类型：</label>
                <select class="combox" name="hero_type">
                    <option value="1" <?php echo $models->type==1?"selected":"";?>>剑士</option>
                    <option value="2" <?php echo $models->type==2?"selected":"";?>>法师</option>
                    <option value="3" <?php echo $models->type==3?"selected":"";?>>弓手</option>
                    <option value="4" <?php echo $models->type==4?"selected":"";?>>骑士</option>
                </select>
            </p>
            <p>
                <label>英雄职业：</label>
                <select class="combox" name="hero_occupation">
                    <option value="1" <?php echo $models->occupation==1?"selected":"";?>>力量</option>
                    <option value="2" <?php echo $models->occupation==2?"selected":"";?>>敏捷</option>
                    <option value="3" <?php echo $models->occupation==3?"selected":"";?>>智力</option>
                </select>
            </p>
            <p class="nowrap">
                <label>英雄名称：</label>
                <input  name="hero_name" type="text" class="textInput required" size="50" value="<?php echo $models->name;?>">
                <input  name="id" type="hidden" value="<?php echo $models->id;?>">
            </p>
            <p class="nowrap">
                <label>图片地址：</label>
                <input  name="hero_img" type="text" class="textInput required" size="50" value="<?php echo $models->img_url;?>">
            </p>
            <p class="nowrap">
                <label>图片上传：</label>
                <input name="hero_up" type="file">
            </p>
            <p>
                <textarea class="editor" upImgUrl="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/imgupload'); ?>" upImgExt="jpg,jpeg,gif,png" name="hero_content" rows="21" cols="79" tools="simple"><?php echo $models->content;?></textarea>
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
            navTab.reload(json.heromaneger);  //刷新主页面
            $.pdialog.closeCurrent();  //
        }
    }

</script>