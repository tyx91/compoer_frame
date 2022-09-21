<?php
/**
 * Created by PhpStorm.
 *
 * @author Tian.Yuxing
 * @email tianyuxing@sciall.org.cn
 * Date: 2022/9/22
 * Time: 06:33
 */

namespace core;

/**
 * core Bootstrap.
 */
class Bootstrap
{
    public static function run(){
       self::parseUrl();
    }


    //分析url生成控制器
    public static function parseUrl(){
        $class = "\web\controller\Index";
        $action = "show";
       if(isset($_GET['s'])){
           list($className,$action) = explode('/',$_GET['s']);
           $class = "\web\controller\\".ucfirst($className);
       }
        (new $class)->$action();

    }
}