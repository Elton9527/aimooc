<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 16:37
 **/


namespace IMooc;

/**
 * 注册器模式
 * 将对象放到 $objects
 * 调用的时候，只需要 Register::$objects['xx'];
 */

class Register
{
    protected $objects;
    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    static function get($alias)
    {
        return self::$objects[$alias];
    }

    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

}