<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 17:33
 **/


namespace IMooc;


class FemalStrategy implements Strategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo '男装新款';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '男装';
    }

}