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

/**
 * web\controller Index.
 */
class Index
{
    public function show(){
        echo "默认展示页";
    }

    public function user(){
        echo "用户列表";
    }
}