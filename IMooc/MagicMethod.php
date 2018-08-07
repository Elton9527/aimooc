<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 16:01
 **/


namespace IMooc;


class MagicMethod
{

    public $arr;
    public function __set($name, $value)
    {
        // TODO: Implement __set() method.
        $this ->arr[$name] = $value;
    }

    public function __get($name)
    {
        // TODO: Implement __get() method.
        return $this->arr[$name];
    }

    // 调用不存在的方法时
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return __METHOD__;
    }

    //当尝试以调用函数的方式调用一个对象时，__invoke() 方法会被自动调用
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
    }

    public function __sleep()
    {
        // TODO: Implement __sleep() method.
    }

    public function __debugInfo()
    {
        // TODO: Implement __debugInfo() method.
    }

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}