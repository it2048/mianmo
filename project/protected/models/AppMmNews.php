<?php
/**
 * Created by PhpStorm.
 * User: xiongfanglei
 * Date: 15-1-9
 * Time: 下午6:56
 */

class AppMmNews extends MmNews{

    /**
     * 实例化模型
     * @param string $classname
     * @return Authitem|void
     */
    public static function model($classname=__CLASS__)
    {
        return parent::model($classname);
    }

}