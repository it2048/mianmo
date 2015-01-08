<form onsubmit="return navTabSearch(this);" action="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/distributor'); ?>" method="post">
    <input type="hidden" name="pageNum" value="<?php echo $pages['pageNum'];?>" /><!--【必须】value=1可以写死-->
    <input type="hidden" name="numPerPage" value="50" /><!--【可选】每页显示多少条-->
</form>
<div class="pageContent">
    <div class="panelBar">
        <ul class="toolBar">
            <li><a class="add" mask="true" height="240" width="600" target="dialog" href="<?php echo Yii::app()->createAbsoluteUrl('adminhomeset/distributoradd');?>"><span>导入数据</span></a></li>
        </ul>
    </div>
    <table class="table" width="960" layoutH="76">
        <thead>
        <tr>
            <th width="20">编号</th>
            <th width="60">姓名</th>
            <th width="60">电话</th>
            <th width="30">微信号</th>
            <th width="120">收货地址</th>
            <th width="60">身份认证</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($models as $value) {?>
            <tr>
                <td><?php echo $value['id']; ?></td>
                <td><?php echo $value['name']; ?></td>
                <td><?php echo $value['tel']; ?></td>
                <td><?php echo $value['weixin']; ?></td>
                <td title="<?php echo $value['add']; ?>"><?php echo $value['add']; ?></td>
                <td><?php echo $value['desc']; ?></td>
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
            navTab.reload(res.distributor);  //刷新主页面
        }
    }
</script>