<?php
/**
 * Created by PhpStorm.
 *
 * @author Tian.Yuxing
 * @email tianyuxing@sciall.org.cn
 * Date: 2022/9/22
 * Time: 07:21
 */

namespace core;

/**
 * core View.
 */
class View
{
    //定义模板文件
    protected $file;
    //定义模板变量
    protected $vars = [];

    //绑定模板
    public function make(string $tpl): View
    {
        $this->file = "view/{$tpl}.html";
        return $this;
    }

    //赋值变量
    public function with(string $key, string $val){
        $this->vars[$key] = $val;
        return $this;
    }

    //输出模板
    public function __toString()
    {
        extract($this->vars);
        include $this->file;
        return '';
    }

}