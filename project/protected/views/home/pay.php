<div class="content">
		<div class="confirm_wrap clearfix">
			<h3 class="tj_bt">商品清单</h3>		
			<table>
				<tbody>
					<thead>
						<th width="20%">商品名称</th>
						<th>商品价格</th>
						<th>购买数量</th>
						<th>小计</th>
						<th>规格</th>
					</thead>
					<tr>
						<td  width="20%">火龙精粹生物纤维面膜</td>
						<td>￥<span>298.00</span></td>
						<td>2</td>
						<td>￥<span>596.00</span></td>
						<td>土豪金</td>
					</tr>
				</tbody>
			</table>
			<h3 class="tj_bt"></h3>
			<div class="last_price">
					<p class="je" >商品金额：<span class="green">￥ <span id="product">298.00</span></span></p>
					<p class="je" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;运费：<span class="green">￥ <span id="send">0.00</span></span></p>
					<p class="je" >优惠金额：<span class="green">￥ <span id="youhui">0.00</span></span></p>
					<p class="je">&nbsp;&nbsp;&nbsp;&nbsp;总金额：<b><span class="green big_font">￥ <span id="youhui">298.00</span></span></b></p>
			</div>
			<div class="clear"></div>
			<h3 class="tj_bt">收货信息</h3>
            <div class="address_again">
            	<p>收货地区：<span>北京市</span>收货地址：<span>北京市 西城区</span></p>
            	<p>邮编：<span>10000</span>收货人姓名：<span>包大人</span>手机：<span>13245678901</span>电话：<span>0818-85336578</span></p>
            </div>
			<h3 class="tj_bt"></h3>					   
		    <div class="confirm_form">
		    	修改订单
		    </div>
		    <div class="clear"></div>
		    <h3 class="tj_bt">支付方式</h3>
		    <div class="pay_some">
		    	<p class="pay_title">支付平台<br><span>推荐使用支付宝快捷支付</span></p>
		    	<div class="select">
		    		<input type="radio" name="pay_way" checked="checked">
		    		<div class="zfb">
		    			<img src="<?php echo $home;?>images/zhifubao.png" alt="">
		    		</div>
		    		<input type="radio" name="pay_way">
		    		<div class="zfb">
		    			货到付款
		    		</div>
		    	</div>
		    </div>
		     <div class="confirm_form">
		    	开始支付
		    </div>
		</div>
<script type="text/javascript">
	$.ajax({
            type: 'POST',
            url: url,
            success: function(data) {
                var obj = jQuery.parseJSON(data);
                if (obj.code == 0) {
                  
                } else {
                   
                }
                
            }
        });
</script>

 