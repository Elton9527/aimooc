<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 16:32
 *
 * 单例模式
 **/


namespace IMooc;


class Singleton
{
    protected $obj;
    private function __construct()
    {
    }

    static function getInstance()
    {
        if(self::$obj){
            return self::$obj;
        } else {
            $obj = new self();
            return $obj;
        }
    }

}