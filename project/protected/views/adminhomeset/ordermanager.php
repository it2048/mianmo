<form onsubmit="return navTabSearch(this);" action="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/ordermanager'); ?>" method="post">
    <input type="hidden" name="pageNum" value="<?php echo $pages['pageNum'];?>" /><!--【必须】value=1可以写死-->
    <input type="hidden" name="numPerPage" value="50" /><!--【可选】每页显示多少条-->
</form>
<div class="pageContent">
    <table class="table" width="1260" layoutH="46">
        <thead>
        <tr>
            <th width="20">编号</th>
            <th width="60">用户IP</th>
            <th width="30">数量</th>
            <th width="40">总费用</th>
            <th width="90">订单时间</th>
            <th width="160">备注</th>
            <th width="40">地区</th>
            <th width="140">详细地址</th>
            <th width="40">姓名</th>
            <th width="40">手机</th>
            <th width="40">邮编</th>
            <th width="40">座机</th>
            <th width="40">编辑</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($models as $value) {?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['ip']; ?></td>
                <td><?php echo $value['number']; ?></td>
                <td><?php echo $value['money']; ?></td>
                <td><?php echo date("Y-m-d H:i:s", $value['time']); ?></td>
                <td title="<?php echo strip_tags($value['beizhu']); ?>"><?php echo mb_substr(strip_tags($value['beizhu']),0,50,"utf-8");?></td>
                <td><?php echo $value['zone']; ?></td>
                <td title="<?php echo strip_tags($value['address']); ?>"><?php echo mb_substr(strip_tags($value['address']),0,50,"utf-8");?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['mobilephone']; ?></td>
                <td><?php echo $value['postcode']; ?></td>
                <td><?php echo $value['phone']; ?></td>
                <td>
                    <a title="确实要删除这条记录吗?" callback="deleteAuCall" target="ajaxTodo" href="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/orderdel',array('id'=>$value['id'])); ?>" class="btnDel">删除</a>
                    <a title="编辑" height="360" mask="true" width="620" target="dialog" href="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/orderedit',array('id'=>$value['id'])); ?>" class="btnEdit">编辑</a>
                </td>
            </tr>
        <?php }?>
        </tbody>
    </table>
    <div class="panelBar">
        <div class="pages">
            <span>共<?php echo $pages['countPage'];?>条</span>
        </div>
        <div class="pagination" targetType="navTab" totalCount="<?php echo $pages['countPage'];?>" numPerPage="30" pageNumShown="10" currentPage="<?php echo $pages['pageNum'];?>"></div>
    </div>
</div>
<script type="text/javascript">
    function deleteAuCall(res)
    {
        if(res.code!=0)
            alertMsg.error("删除失败");
        else
        {
            navTab.reload(res.ordermanager);  //刷新主页面
        }
    }
</script>