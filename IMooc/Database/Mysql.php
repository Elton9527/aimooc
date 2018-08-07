<?php

namespace IMooc\Database;
use IMooc\IDatabase;

/**
 * Author:wanggaobo
 * Date:2018/8/7 17:12
 **/
class Mysql implements IDatabase
{

    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysql_connect($host, $user, $passwd, $dbname);
        return $conn;
    }
    function query($sql)
    {
        mysql_query($sql);
    }
    function close()
    {

    }
}