<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 17:29
 * 策略模式,将一组特定的行为和算法封装成类，以适应某些特定的上下文环境
 **/


namespace IMooc;


interface Strategy
{
    function showAd();
    function showCategory();
}