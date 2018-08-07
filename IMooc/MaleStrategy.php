<?php
/**
 * Author:wanggaobo
 * Date:2018/8/7 17:34
 **/


namespace IMooc;


class MaleStrategy implements Strategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.

        echo '女装新款';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '女装';
    }

}