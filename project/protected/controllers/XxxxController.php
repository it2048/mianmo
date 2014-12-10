<?php
/**
 * Created by PhpStorm.
 * User: xiongfanglei
 * Date: 14-11-25
 * Time: 下午7:00
 */
class XxxxController extends Controller
{
    public function actionForcelogin()
    {
        $this->renderPartial('loginpage');
    }

    public function actionLogout()
    {
        if (!Yii::app()->user->isGuest)
        {
            Yii::app()->user->logout();
        }
        $this->redirect($this->createUrl('adminlogin/index'));
    }
    /**
     * 生成首页
     *
     */
    public function actionIndex()
    {
        $this->renderPartial('index');
    }
    /**
     * 生成移动端首页
     *
     */
    public function actionMobile()
    {
        $this->renderPartial('mobile');
    }
    /**
     * 用户注册
     *
     */
    public function actionRegistration()
    {
        $msg = $this->msgcode();
        $username = Yii::app()->request->getParam("account","");
        $password = Yii::app()->request->getParam("password","");
        $phone = Yii::app()->request->getParam("phone","");
        $email = Yii::app()->request->getParam("email","");
        $qq = Yii::app()->request->getParam("qq","");
        if($username==""||$password=="")
        {
            $msg["msg"] = "帐号密码不能为空";
        }
        elseif($email!=""&&!CheckInfo::email($email))
        {
            $msg["msg"] = "邮箱格式错误";
        }
        elseif($phone!=""&&!CheckInfo::phone($phone))
        {
            $msg["msg"] = "手机格式错误";
        }elseif($qq!=""&&!CheckInfo::qq($qq))
        {
            $msg["msg"] = "qq格式错误";
        }else
        {
            $account = new AccountInterface();
            $tmArr = $account->registration($username, $password);
            if($tmArr['code']==0&&!empty($tmArr['info']['openid']))
            {
                $tyup =  $account->updateAccount($tmArr['info']['openid'],$email,$phone,"",$qq,"","","","","");
                if($tyup['code']==0&&$tyup['info']['errcode']==0)
                {
                    $model = AppRsConfig::model()->findByPk("linevalue");
                    $model->value = $model->value + 1;
                    $model->save();
                    $msg["code"] = 0;
                    $msg["msg"] = "成功";
                    $msg["data"] = $model->value;
                }else{
                    $msg["msg"] = "窝巢，程序出问题了";
                }
            }else
            {
                $msg["msg"] = "该风际通行证已被注册";
            }
        }
        echo json_encode($msg);
    }
}