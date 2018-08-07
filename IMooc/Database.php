<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 16:26
 **/


namespace IMooc;

interface IDatabase
{
    function connect($host, $user, $passwd, $dbname);
    function query($sql);
    function close();
}

class Database
{
    public function __construct()
    {
        echo '创建数据库';
    }
}