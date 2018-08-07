<?php
namespace IMooc\Database;
use IMooc\IDatabase;

/**
 * Author:wanggaobo
 * Date:2018/8/7 17:13
 **/
class Mysqli implements IDatabase
{

    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = mysqli_connect($host, $user, $passwd, $dbname);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return mysqli_query($this->conn, $sql);
    }

    function close()
    {
        mysqli_close($this->conn);
    }
}