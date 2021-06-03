<?php
namespace app\movie\controller;

use think\admin\Controller;

/**
 * Class Index
 * @package app\index\controller
 */
class Index extends Controller
{
    public function index()
    {
        $this->fetch();
    }
}
