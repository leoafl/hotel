<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/29 0029
 * Time: 上午 11:21
 */

namespace Admin\Controller;

use Think\Controller;

class AdminController extends Controller
{
    public function safe()
    {
        $this->display();
    }
}