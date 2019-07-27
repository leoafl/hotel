<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/26 0026
 * Time: 下午 20:39
 */

namespace Admin\Controller;

use Think\Controller;

class DataController extends Controller
{
    public function index()
    {
        $user = M('user');
        $room = M('room');
        $order = M('order');
        $emp = M('emp');
        $ucount = $user->count();
        $rcount = $room->count();
        $ocount = $order->count();
        $ecount = $emp->count();
        $man = $emp->where("Esex='男'")->count();
        $women = $emp->where("Esex='女'")->count();
        $this->assign('ucount', $ucount);
        $this->assign('rcount', $rcount);
        $this->assign('ocount', $ocount);
        $this->assign('ecount', $ecount);
        $this->assign('man', $man);
        $this->assign('women', $women);
        $this->display();
    }

    public function echarts()
    {
        $this->display();
    }

    public function money()
    {
        $this->display();
    }

    public function user()
    {
//        $user = M('user')->select();
        $order = M('order')->select();
        $this->assign('orders', $order);
        $this->display();
    }


}