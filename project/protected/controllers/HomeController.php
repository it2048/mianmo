<?php
/**
 * Created by PhpStorm.
 * User: xiongfanglei
 * Date: 14-11-25
 * Time: 下午7:00
 */
class HomeController extends Controller
{

    public $layout = '//layouts/master';
    public $nav = 'index';
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
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('index',array("models"=>$allList,"home"=>$home));
    }

    public function actionBrand()
    {
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('brand',array("home"=>$home));
    }
    public function actionBuy()
    {
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('buy',array("home"=>$home));
    }
    public function actionFangwei()
    {
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('fangwei',array("home"=>$home));
    }
    public function actionJxs()
    {
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('jxs',array("home"=>$home));
    }
    public function actionPay()
    {
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('pay',array("home"=>$home));
    }
    public function actionShowplus()
    {
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('showplus',array("home"=>$home));
    }
    public function actionSuccess()
    {
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->renderPartial('success',array("home"=>$home));
    }
}