<div class="content">
<div class="jxs_wrap">
    <div class="jxs">
        <div class="jxs_input">
            <input type="text" placeholder="请输入经销商代码" class="jxs_search"><input type="hidden" name="csrf_token" value="<?php echo Yii::app()->request->csrfToken; ?>" />
            <a class="jxs_submit" href="javascript:;" title="查询"></a>
        </div>
    </div>
    <style type="text/css">
.jxs_info_show,
.jxs_error{background: #333; background: rgba(0,0,0,0.6); padding: 20px; width:585px; display: none; color: #fff; font-size: 14px; line-height: 24px;margin: 10px auto; border-radius: 10px; }  
.jxs_weixin { color:#4ee81e; font-size:16px; padding-right: 4px; } 
.jxs_xinxi { border-top: 1px solid #ccc; padding: 15px 0; line-height: 24px; color: #fff; margin-top: 10px;}
.red_error { color: #f00;font-size:16px;padding-right: 4px; }

    </style>
    <div class="jxs_info_show">
    	<span class="jxs_weixin"></span>已授权！<br>
    	恭喜，您查询的微信号是ShowPlus面膜的授权经销商，所售产品为ShowPlus出品，请放心购买!
    	<p class="jxs_xinxi">
    		
    	</p>
    </div>
    <div class="jxs_error">
    	<span class="red_error"></span>不存在!<br>
对不起，您查询的微信号未经ShowPlus授权，其所售ShowPlus面膜不能保证为正品，请谨慎购买，或添加微信showplusmask咨询购买!
    </div>
</div>
 <script type="text/javascript">
   $(".jxs_submit").click(function(){
   	    if(!$.trim($(".jxs_search").val())){
   	    	alert("请输入经销商代码！");
   	    }else{
            searchJxs('<?php echo Yii::app()->createAbsoluteUrl('chk/index'); ?>');
                  }
                    });
 </script>
 