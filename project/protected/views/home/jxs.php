<div class="content">
<div class="jxs_wrap">
    <div class="jxs">
        <div class="jxs_input">
            <input type="text" placeholder="请输入经销商代码" class="jxs_search"><input type="hidden" name="csrf_token" value="<?php echo Yii::app()->request->csrfToken; ?>" />
            <a class="jxs_submit" href="javascript:;" title="查询"></a>
        </div>
    </div>
</div>
 <script type="text/javascript">
   $(".jxs_submit").click(function(){
   	    if(!$.trim($(".jxs_search").val()){
   	    	alert("请输入经销商代码！");
   	    }else{
            searchJxs('<?php echo Yii::app()->createAbsoluteUrl('chk/index'); ?>');
                  }
                    });
 </script>
 