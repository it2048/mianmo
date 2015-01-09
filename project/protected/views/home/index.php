
    <div class="banner">
        <ul id="banner_cont">
            <?php foreach($slider as $k=>$val){?>
        <li <?php if($k==0)echo 'style="display:block;"'; ?>><a href="<?php echo $val['redirect_url'];?>">
                    <img src="<?php echo Yii::app()->request->baseUrl.$val['img_url'];?>" alt="<?php echo $val['title'];?>"></a></li>
            <?php }?>
        </ul>
        <div class="query">
            <span class="cur">1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
        </div>
    </div>
    <p class="description"><b>SHOWPLUS产品</b><br>精致收纳袋  美颜产品  前导舒敏醒肤原液  面膜擦拭纸  想你所想  一应俱全</p>
    <div class="img_zone clearfix">
        <a href="http://www.showplus.cc/index.php/home/showplus"><img src="<?php echo $home;?>images/bottom1.jpg" alt=""></a>
        <a href="http://www.showplus.cc/index.php/home/showplus"><img src="<?php echo $home;?>images/bottom2.jpg" alt=""></a>
        <a href="http://www.showplus.cc/index.php/home/showplus"><img src="<?php echo $home;?>images/bottom3.jpg" alt=""></a>
        <a href="http://www.showplus.cc/index.php/home/showplus"><img src="<?php echo $home;?>images/bottom4.jpg" alt=""></a>
    </div>
    <div class="more">
        更多产品，即将到来
    </div>
