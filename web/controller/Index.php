<?php
/**
 * Created by PhpStorm.
 *
 * @author Tian.Yuxing
 * @email tianyuxing@sciall.org.cn
 * Date: 2022/9/22
 * Time: 07:04
 */

namespace web\controller;

use core\View;

/**
 * web\controller Index.
 */
class Index
{
    public $viewer;
    public function __construct()
    {
        $this->viewer = new View();
    }

    public function show(){
        return   $this->viewer->make('index')->with("username","tom");
    }

    public function user(){
        echo "用户列表";
    }
}