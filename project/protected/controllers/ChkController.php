<?php
/**
 * Created by PhpStorm.
 * User: xiongfanglei
 * Date: 15-1-9
 * Time: 下午3:20
 */

class ChkController extends Controller
{
    public function actionIndex() {
        $wx = Yii::app()->getRequest()->getParam("wx", "");
        $msg = $this->msgcode();
        $wxt = AppDistributor::model()->find("weixin=:wx",array(":wx"=>$wx));
        if(!empty($wxt->id))
        {
            $this->msgsucc($msg);
            $msg['data'] = array("name"=>$wxt->name,"weixin"=>$wxt->weixin,"tel"=>$wxt->tel,"add"=>$wxt->add,"desc"=>$wxt->desc);
        }
        echo json_encode($msg);
    }
}