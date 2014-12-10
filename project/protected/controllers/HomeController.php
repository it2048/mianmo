<?php
/**
 * Created by PhpStorm.
 * User: xiongfanglei
 * Date: 14-11-25
 * Time: 下午7:00
 */
class HomeController extends Controller
{
    /**
     * 生成首页
     *
     */
    public function actionIndex()
    {
        $allList = array();
        $model = AppRsConfig::model()->findAll();
        foreach ($model as $value) {
            $allList[$value['name']] = $value['value'];
        }
        $this->renderPartial('index',array("models"=>$allList));
    }
}