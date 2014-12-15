<div class="content">
		<p class="title_dan"><span class="tpad1">商品</span><span class="tpad2">单价</span><span class="tpad3">数量</span><span class="tpad4">小计</span></p>
		<div class="order_wrap clearfix">
			<div class="order_first clearfix">
				<div class="product">
					<img src="<?php echo $home;?>images/mianmo.jpg" alt="">
					<p>火龙精粹生物纤维面膜<br><span>颜色：土豪金</span></p>
				</div>
				<div class="price">
					￥ <span>298.00</span>
				</div>
				<div class="num">
					<span class="minus">-</span>
					<input class="pro_number" value="<?php echo empty($arr['number'])?"1":$arr['number'];?>" type="text">
					<span class="add">+</span>
				</div>
				<div class="calculate">
					￥ <span id="money"><?php echo empty($arr['money'])?"298.00":$arr['money'];?></span>
				</div>
			</div>
			<div class="account clearfix">
				<div class="discount">
					<div class="slidedown">-</div>
					<p class="youhui">订单优惠</p>
					<div class="clear"></div>
					<div class="dis_cont">
						<span>[包邮]</span>一盒起享受包邮
					</div>
					<div class="beizhu clearfix">
						<span>订单备注：</span>
						<textarea name="" id="beizhu" cols="30" rows="10"><?php echo empty($arr['beizhu'])?"请在此填写您对订单或商品的特殊要求或说明，最多300字":$arr['beizhu'];?></textarea>
					</div>
				</div>
				<div class="last_price">
					<p class="je" >商品金额：<span class="green">￥ <span id="product"><?php echo empty($arr['money'])?"298.00":$arr['money'];?></span></span></p>
					<p class="je" >优惠金额：<span class="green">￥ <span id="youhui">0.00</span></span></p>
					<p class="je">&nbsp;&nbsp;&nbsp;总金额：<b><span class="green big_font">￥ <span id="end_money"><?php echo empty($arr['money'])?"298.00":$arr['money'];?></span></span></b></p>
				</div>
			</div>
			<div class="user">
			  <h3 class="gbt">收货信息</h3>
			  <div class="address_wrap">
			  	<form action="">
			  		<div class="line clearfix">
				  		<p class="diqu"><span>*</span>收货地区：</p>
				  		<select name="" id="zone">
				  			<option value="">请选择</option>
				  			<option value="北京">北京</option>
				  			<option value="天津">天津</option>
				  			<option value="河北">河北</option>
				  			<option value="山西">山西</option>
				  			<option value="内蒙古自治区">内蒙古自治区</option>
				  			<option value="辽宁">辽宁</option>
				  			<option value="吉林">吉林</option>
				  			<option value="黑龙江">黑龙江</option>
				  			<option value="上海">上海</option>
				  			<option value="江苏">江苏</option>
				  			<option value="浙江">浙江</option>
				  			<option value="安徽">安徽</option>
				  			<option value="福建">福建</option>
				  			<option value="江西">江西</option>
				  			<option value="山东">山东</option>
				  			<option value="河南">河南</option>
				  			<option value="湖北">湖北</option>
				  			<option value="湖南">湖南</option>
				  			<option value="广东">广东</option>
				  			<option value="广西壮族自治区">广西壮族自治区</option>
				  			<option value="海南">海南</option>
				  			<option value="重庆">重庆</option>
				  			<option value="四川">四川</option>
				  			<option value="贵州">贵州</option>
				  			<option value="云南">云南</option>
				  			<option value="西藏自治区">西藏自治区</option>
				  			<option value="陕西">陕西</option>
				  			<option value="甘肃">甘肃</option>
				  			<option value="青海">青海</option>
				  			<option value="宁夏回族自治区">宁夏回族自治区</option>
				  			<option value="新疆维吾尔自治区"> 新疆维吾尔自治区</option>
				  			<option value="香港">香港</option>
				  			<option value="澳门">澳门</option>
				  			<option value="台湾">台湾</option>
				  		</select>
			  		</div>
			  		<div class="line clearfix">
			  			<label for=""><span>*</span>收货地址：</label>
                                                <input type="text" class="fillin" id="address" value="<?php echo empty($arr['address'])?"":$arr['address'];?>">
                        <input type="hidden" name="csrf_token" value="<?php echo Yii::app()->request->csrfToken; ?>" />
			  		</div>
			  		<div class="line clearfix">
			  			<label for="">邮编：</label>
                                                <input type="text" class="fillin" id="postcode" value="<?php echo empty($arr['postcode'])?"":$arr['postcode'];?>">
			  		</div>
			  		<div class="line clearfix">
			  			<label for=""><span>*</span>收货人姓名：</label>
                                                <input type="text" class="fillin" id="name" value="<?php echo empty($arr['name'])?"":$arr['name'];?>">
			  		</div>
			  		<div class="line clearfix">
			  			<label for=""><span>*</span>手机：</label>
                                                <input type="text" class="fillin" id="mobilephone" value="<?php echo empty($arr['mobilephone'])?"":$arr['mobilephone'];?>">
			  		</div>
			  		<div class="line clearfix">
			  			<label for="">固定电话：</label>
                                                <input type="text" class="fillin" id="phone" value="<?php echo empty($arr['phone'])?"":$arr['phone'];?>">
			  		</div>
			  	</form>
			  </div>
		    </div>
		    <div class="confirm_form" id="submit_info">
		    	提交订单
		    </div>
		    <script type="text/javascript">
                        $(function(){
                            $("#zone").val("<?php echo empty($arr['zone'])?"":$arr['zone'];?>");
                        }); 
                    $(".confirm_form").click(function(){
                      submitinfo('<?php echo Yii::app()->createAbsoluteUrl('home/save'); ?>','<?php echo Yii::app()->createAbsoluteUrl('home/pay'); ?>');
                    });
		    </script>
		</div>