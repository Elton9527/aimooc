<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 18:56
 **/


namespace IMooc;


abstract class EventGenerator
{
    private $observers = [];

    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update();
        }
    }
}