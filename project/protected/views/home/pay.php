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
                <td><?php echo empty($arr[5]) ? "0" : $arr[5]; ?></td>
                <td>￥<span><?php echo empty($arr[0]) ? "298.00" : $arr[0]; ?></span></td>
                <td>土豪金</td>
            </tr>
            </tbody>
        </table>
        <h3 class="tj_bt"></h3>
        <div class="last_price">
            <p class="je" >商品金额：<span class="green">￥ <span id="product"><?php echo empty($arr[0]) ? "0" : $arr[0]; ?></span></span></p>
            <p class="je" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;运费：<span class="green">￥ <span id="send">0.00</span></span></p>
            <p class="je" >优惠金额：<span class="green">￥ <span id="youhui">0.00</span></span></p>
            <p class="je">&nbsp;&nbsp;&nbsp;&nbsp;总金额：<b><span class="green big_font">￥ <span id="youhui"><?php echo empty($arr[0]) ? "0" : $arr[0]; ?></span></span></b></p>
        </div>
        <div class="clear"></div>
        <h3 class="tj_bt">收货信息</h3>
        <div class="address_again">
            <p>收货地区：<span><?php echo empty($arr[2]) ? "0" : $arr[2]; ?></span>收货地址：<span><?php echo empty($arr[3]) ? "0" : $arr[3]; ?></span></p>
            <p>邮编：<span><?php echo empty($arr[7]) ? "0" : $arr[7]; ?></span>收货人姓名：<span><?php echo empty($arr[1]) ? "0" : $arr[1]; ?></span>手机：<span><?php echo empty($arr[4]) ? "0" : $arr[4]; ?></span>电话：<span><?php echo empty($arr[6]) ? "0" : $arr[6]; ?></span></p>
        </div>
        <h3 class="tj_bt"></h3>					   
        <div class="confirm_form" onclick="submit('<?php echo Yii::app()->createAbsoluteUrl('home/buy'); ?>')">
            修改订单
        </div>
        <div class="clear"></div>
        <h3 class="tj_bt">支付方式</h3>
        <div class="pay_some">
            <p class="pay_title">支付平台<br><span>推荐使用支付宝快捷支付</span></p>
            <div class="select">
                <input type="hidden" name="csrf_token" value="<?php echo Yii::app()->request->csrfToken; ?>" />
                <input type="radio" name="pay_way" checked="checked" value="1">
                <div class="zfb">
                    <img src="<?php echo $home; ?>images/zhifubao.png" alt="">
                </div>
                <input type="radio" name="pay_way" value="2">
                <div class="zfb">
                    货到付款
                </div>
            </div>
        </div>
        <div class="confirm_form" onclick="subtop()">
            开始支付
        </div>
    </div>
<script type="text/javascript">
    function submit(jump) {
        window.location.href = jump + "/url/<?php echo $url; ?>";
    }
    /**
     * submitTop
     */
    function subtop() {
        $.ajax({
            type: 'POST',
            url: '<?php echo Yii::app()->createAbsoluteUrl('home/tsave'); ?>',
            data: {
                pay_way: $("input[name=pay_way]:checked").val(),
                csrf_token:$("input[name=csrf_token]").val(),
                url:"<?php echo $url; ?>"
            },
            success: function(data) {
                var obj = jQuery.parseJSON(data);
                if (obj.code == 0) {
                    window.location.href=obj.data;
                } else {

                }

            }
        });
    }
</script>

