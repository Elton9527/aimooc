<?php
namespace IMooc\Database;
use IMooc\IDatabase;

/**
 * Author:wanggaobo
 * Date:2018/8/7 17:13
 **/
class PDO implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        $conn = new \PDO('mysql:host=localhost;dbname=test', $user, $passwd);
        $this->conn = $conn;
    }

    function query($sql)
    {
        return $this->conn->query($this->conn, $sql);
    }

    function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }

}