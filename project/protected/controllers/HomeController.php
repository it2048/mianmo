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
        $slider = array();
        $slide = AppRsSlide::model()->findAll("status=0 order by id desc");
        foreach($slide as $value)
        {
            if(count($slider)<5)
                array_push($slider,array("title"=>$value->title,"img_url"=>$value->img_url,"redirect_url"=>$value->redirect_url));
        }
        $home = Yii::app()->request->baseUrl."/public/home/";
        $this->render('index',array("home"=>$home,
            "slider"=>$slider  //可以替换的幻灯片
        ));
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
        $money = Yii::app()->getRequest()->getParam("url", ""); //总价
        $arr = json_decode(base64_decode($money));
        $app = array();
        if(is_array($arr))
        {
            $aid = AppRsOrder::model()->findByPk($arr[0]);
            if($aid->mobilephone == $arr[1])
            {
                $app = $aid;
            }
        }
        $this->render('buy',array("home"=>$home,"arr"=>$app));
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
        $money = Yii::app()->getRequest()->getParam("url", ""); //总价
        $arr = json_decode(base64_decode($money));
        $app = array();
        if(is_array($arr))
        {
            $aid = AppRsOrder::model()->findByPk($arr[0]);
            if($aid->mobilephone == $arr[1])
            {
                $app = $aid;
            }
        }
        $this->render('pay',array("home"=>$home,"arr"=>$app,"url"=>$money));
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
        $money = Yii::app()->getRequest()->getParam("url", ""); //总价
        $type = Yii::app()->getRequest()->getParam("type", 1); //总价
        
        $tsl = $type==1?"":"dingdan_bg2";
        $arr = json_decode(base64_decode($money));
        $app = array();
        if(is_array($arr))
        {
            $aid = AppRsOrder::model()->findByPk($arr[0]);
            if($aid->mobilephone == $arr[1])
            {
                $app = $aid;
            }
        }
        $this->renderPartial('success',array("home"=>$home,"arr"=>$app,"type"=>$tsl));
    }
    
    public function actionSave()
    {
        $msg = $this->msgcode();
        $money = Yii::app()->getRequest()->getParam("money", ""); //总价
        $number = Yii::app()->getRequest()->getParam("number", ""); //数量
        $beizhu = Yii::app()->getRequest()->getParam("beizhu", ""); //备注
        $zone = Yii::app()->getRequest()->getParam("zone", ""); //地区
        $address = Yii::app()->getRequest()->getParam("address", ""); //详细地址
        $name = Yii::app()->getRequest()->getParam("name", ""); //收货人姓名
        $mobilephone = Yii::app()->getRequest()->getParam("mobilephone", ""); //手机
        $postcode = Yii::app()->getRequest()->getParam("postcode", ""); //邮编
        $phone = Yii::app()->getRequest()->getParam("phone", ""); //固定电话
        
        $order = new AppRsOrder();
        $order->time = time();
        $order->money = $money;
        $order->ip = Yii::app()->request->userHostAddress;
        $order->number = $number;
        $order->beizhu = $beizhu;
        $order->zone = $zone;
        $order->address = $address;
        $order->name = $name;
        $order->mobilephone = $mobilephone;
        $order->postcode = $postcode;
        $order->phone = $phone;
        $order->pay_type = 0;
        $order->pay_status = 0;
        if($order->save())
        {
            $id = $order->attributes['id'];
            //$url = array($money,$name,$zone,$address,$mobilephone,$number,$phone,$postcode,$beizhu);
            $url = array($id,$mobilephone);
            $this->msgsucc($msg);
            $msg['data'] = base64_encode(json_encode($url));
            $msg['msg'] = "成功";
        }
        echo json_encode($msg);
    }
    
    public function actionTsave()
    {
        $msg = $this->msgcode();
        $money = Yii::app()->getRequest()->getParam("url", ""); //总价
        $pay_way = Yii::app()->getRequest()->getParam("pay_way", ""); //总价
        $arr = json_decode(base64_decode($money));
        if(is_array($arr))
        {
            $aid = AppRsOrder::model()->findByPk($arr[0]);
            if($aid->mobilephone == $arr[1])
            {
                $aid->pay_type = $pay_way==1?1:2;
                $aid->save();
            }
            $this->msgsucc($msg);
            $msg['data'] = Yii::app()->createAbsoluteUrl('home/success')."/type/".$pay_way."/url/".$money; 
        }
        echo json_encode($msg);
    }
}