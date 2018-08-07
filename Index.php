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

# 观察者模式
/*class Event extends \IMooc\EventGenerator
{
    function trigger()
    {
        echo "Event<br/>\n";
        // update 硬编码的做法
        // echo '逻辑1';
        // echo '逻辑2';

        // 观察者模式的做法
        $this->notify();
    }
}

class Observer1 implements \IMooc\Observer
{

    function update()
    {
        // TODO: Implement update() method.
        echo '逻辑1';
    }
}

class Observer2 implements \IMooc\Observer
{

    function update()
    {
        // TODO: Implement update() method.
        echo '逻辑2';
    }
}

// 观察者模式的做法
$event = new Event();
$event->addObserver(new Observer1);
$event->addObserver(new Observer2);
$event -> trigger();*/

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