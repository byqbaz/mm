<?php

namespace app\admin\controller;

use think\admin\Controller;
use think\admin\service\AdminService;
use think\admin\service\MenuService;

/**
 * Movie电影和Music音乐管理控制器
 * Class Index
 * @package app\admin\controller
 */
class Mm extends Controller
{
    public function index(){

    }

    public function movie(){
        $this->title = '电影数据管理';
    }

}
