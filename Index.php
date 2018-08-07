<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/6
 * Time: 23:33
 */

define('BASEDIR', __DIR__);
include BASEDIR.'/IMooc/Loader.php';

spl_autoload_register('\\IMooc\\Loader::autoload');

/*IMooc\Object::test();
App\Controller\Home\Index::test();*/

# 策略模式
/*class Page
{
    public $strategy;
    function index()
    {
        if($_GET['strategy'] == 'male'){
            $this->strategy = new \IMooc\MaleStrategy();
        } else {
            $this->strategy = new \IMooc\FemalStrategy();
        }
    }
}

$page = new Page();
$page->index();*/


# 工厂模式
/*$db = \IMooc\Factory::createDatabase();
var_dump($db);*/


# 魔术方法
/*$obj = new IMooc\MagicMethod;
$obj->title = '模块';
echo $obj -> title;
echo "<br/>";
echo $obj;*/