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
        $this->nav="brand"; 
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('brand',array("home"=>$home));
    }
    public function actionBuy()
    {
        $this->nav="buy"; 
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('buy',array("home"=>$home));
    }
    public function actionFangwei()
    {
        $this->nav="fangwei"; 
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('fangwei',array("home"=>$home));
    }
    public function actionJxs()
    {
        $this->nav="jxs"; 
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('jxs',array("home"=>$home));
    }
    public function actionPay()
    {
        $this->nav="pay"; 
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('pay',array("home"=>$home));
    }
    public function actionShowplus()
    {
        $this->nav="showplus"; 
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('showplus',array("home"=>$home));
    }
    public function actionSuccess()
    {
        $this->nav="success"; 
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->renderPartial('success',array("home"=>$home));
    }
}