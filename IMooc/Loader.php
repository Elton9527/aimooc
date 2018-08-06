<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/6
 * Time: 23:38
 */

namespace IMooc;


class Loader
{
    static function autoload($class)
    {

        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';

    }
}