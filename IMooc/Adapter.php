<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 17:10
 *
 * 适配器模式, 可以将截然不同的函数接口封装成统一的API
 *
 * 例如：PHP的数据库操作有 MySQL， mysqli, pdo,
 * 可以用适配器模式统一成一致。
 **/


namespace IMooc;


class Adapter
{
    function createDb()
    {
        // 这里就是适配器模式的实例了，可以随意切换

        $db = new \IMooc\Database\Mysql();
        $db = new \IMooc\Database\Mysqli();
        $db = new \IMooc\Database\PDO();
    }

}