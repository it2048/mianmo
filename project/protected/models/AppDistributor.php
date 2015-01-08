<?php
/**
 * Created by PhpStorm.
 * User: xiongfanglei
 * Date: 14-11-27
 * Time: 下午6:26
 */

class AppDistributor extends Distributor {

    /**
     * 实例化模型
     * @param string $classname
     * @return Authitem|void
     */
    public static function model($classname=__CLASS__)
    {
        return parent::model($classname);
    }
        /**
     * 将csv文件保存到数据库中
     * 
     * @param string $loadPath csv文件的路径
     * @param string $dsptId  评价活动编号
     * @return int 成功条数
     */
    public function storeLoad($loadPath)
    {
        AppDistributor::model()->deleteAll();
        $file_handle = fopen($loadPath, "r");
        fgets($file_handle);
        $str = "";
        while (!feof($file_handle)) {
           $line = fgets($file_handle);
           if(trim($line)!="")
           {
                $arr = explode(",",$line);
                if(!empty($arr[0]))
                {
                    $tmp = new AppDistributor();
                    $tmp->name = iconv("GB2312","UTF-8//IGNORE",$arr[0]);
                    $tmp->tel = $arr[1];
                    $tmp->weixin = $arr[2];
                    $tmp->add = iconv("GB2312","UTF-8//IGNORE",$arr[3]);
                    $tmp->desc = iconv("GB2312","UTF-8//IGNORE",$arr[4]);
                    if(!$tmp->save())
                    {
                        $str .= $arr[0].",";
                    }
                }   
           }
        }
        fclose($file_handle);
        @unlink($loadPath);
        return  empty($str)?"全部更新成功":$str."更新失败";
    }
}