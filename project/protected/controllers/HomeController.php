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
    
    public function actionAlinotify()
    {
        //计算得出通知验证结果
        $alipayNotify = new AlipayNotify(Yii::app()->params->alipay_config);
        $verify_result = $alipayNotify->verifyNotify();

        if($verify_result) {
            //商户订单号
            $out_trade_no = $_POST['out_trade_no'];

            //支付宝交易号
            $trade_no = $_POST['trade_no'];

            //交易状态
            $trade_status = $_POST['trade_status'];


            if($trade_status == 'TRADE_FINISHED') {

            }
            else if ($trade_status == 'TRADE_SUCCESS') {
                $aid = AppRsOrder::model()->findByPk($out_trade_no);
                if(!empty($aid->mobilephone))
                {
                    $aid->pay_status = 2;
                    $aid->save();
                }
            }
            echo "success";		//请不要修改或删除
        }
        else {
            //验证失败
            echo "fail";
        }
    }
    public function actionAlireturn()
    {
        $this->nav="success";
        $home = Yii::app()->request->baseUrl."/public/home/";
        $app = null;
        //计算得出通知验证结果
        $alipayNotify = new AlipayNotify(Yii::app()->params->alipay_config);
        $verify_result = $alipayNotify->verifyReturn();
        if($verify_result) {//验证成功

            $out_trade_no = $_GET['out_trade_no'];

            //支付宝交易号

            $trade_no = $_GET['trade_no'];

            //交易状态
            $trade_status = $_GET['trade_status'];

            if($trade_status == 'TRADE_SUCCESS') {
                $aid = AppRsOrder::model()->findByPk($out_trade_no);
                if(!empty($aid->mobilephone))
                {
                    $aid->pay_status = 2;
                    $aid->save();
                    $app = $aid;
                }
            }
        }
        $this->renderPartial('success',array("home"=>$home,"arr"=>$app,"type"=>""));
    }
    public function actionAlipay()
    {
        $money = Yii::app()->getRequest()->getParam("url", ""); //总价
        $arr = json_decode(base64_decode($money));
        if(is_array($arr))
        {
            $aid = AppRsOrder::model()->findByPk($arr[0]);
            if($aid->mobilephone == $arr[1])
            {
                //支付类型
                $payment_type = "1";
                //必填，不能修改
                //服务器异步通知页面路径
                $notify_url = Yii::app()->createAbsoluteUrl('home/Alinotify');
                //需http://格式的完整路径，不能加?id=123这类自定义参数        //页面跳转同步通知页面路径
                $return_url = Yii::app()->createAbsoluteUrl('home/alireturn');
                //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/
                //卖家支付宝帐户
                $seller_email = '654805289@qq.com';
                //必填
                //商户订单编号
                $out_trade_no = $aid->id;
                //商户网站订单系统中唯一订单号，必填        //订单名称
                $subject = "showplus面膜";
                //必填        //付款金额
                $total_fee = $aid->money;
                //必填        //订单描述
                $body = $aid->beizhu;
                //商品展示地址
                $show_url = "http://www.showplus.cc";
                //需以http://开头的完整路径，例如：http://www.商户网址.com/myorder.html
                //防钓鱼时间戳
                $anti_phishing_key = "";
                //若要使用请调用类文件submit中的query_timestamp函数        //客户端的IP地址
                $exter_invoke_ip = $aid->ip;
                //非局域网的外网IP地址，如：221.0.0.1

                /************************************************************/

                //构造要请求的参数数组，无需改动
                $parameter = array(
                    "service" => "create_direct_pay_by_user",
                    "partner" => trim(Yii::app()->params->alipay_config['partner']),
                    "payment_type"	=> $payment_type,
                    "notify_url"	=> $notify_url,
                    "return_url"	=> $return_url,
                    "seller_email"	=> $seller_email,
                    "out_trade_no"	=> $out_trade_no,
                    "subject"	=> $subject,
                    "total_fee"	=> $total_fee,
                    "body"	=> $body,
                    "show_url"	=> $show_url,
                    "anti_phishing_key"	=> $anti_phishing_key,
                    "exter_invoke_ip"	=> $exter_invoke_ip,
                    "_input_charset"	=> trim(strtolower(Yii::app()->params->alipay_config['input_charset']))
                );
                //建立请求
                $alipaySubmit = new AlipaySubmit(Yii::app()->params->alipay_config);
                $html_text = $alipaySubmit->buildRequestForm($parameter,"get", "跳转中…………");
                echo $html_text;
                die();
            }
        }
        echo "非法访问";
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
            if($pay_way==2)
                $msg['data'] = Yii::app()->createAbsoluteUrl('home/success')."/type/".$pay_way."/url/".$money;
            else
                $msg['data'] = Yii::app()->createAbsoluteUrl('home/alipay')."/type/".$pay_way."/url/".$money;
        }
        echo json_encode($msg);
    }
}