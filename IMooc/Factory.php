<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 16:25
 * 工厂模式
 **/


namespace IMooc;


class Factory
{
    static function createDatabase()
    {
        $db = new \IMooc\Database();
        return $db;
    }
}