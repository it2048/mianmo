<?php
/**
 * Created by PhpStorm.
 * User: xiongfanglei
 * Date: 15-1-9
 * Time: 下午3:20
 */

class ChkController extends Controller
{
    public function actionIndex($wx) {
        $msg = $this->msgcode();
        $wxt = AppDistributor::model()->find("weixin=:wx",array(":wx"=>$wx));
        if(!empty($wxt->id))
        {
            $msg['data'] = $wxt;
            $this->msgsucc($msg);
        }
        echo json_encode($msg);
    }
}