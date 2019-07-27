<?php

namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function adminLogin()
    {
//        $username=$_REQUEST['username'];
//        $password=$_REQUEST['password'];
        $adminname = I('adminName');
        $password = I('adminPassword');
        $user = M('admin')->where("Aname='{$adminname}'")->find();
//        var_dump($user);
        if (!$user) {
//            $this->error('账号不存在', U('Login/index'), 3);
            json(-1001,'账号不存在');
        }
        if ($user['apassword'] == $password) {
//            $_SESSION['username'] = $username;
            //使用thinkPHP session支持
            session('adminname', $adminname);
//            $this->success('欢迎回来', U('Room/index'), 3);
            json('1001','欢迎回来',array('adminname'=>$adminname));
        } else {
//            $this->error('密码错误');
            json(-1002,'密码错误');
        }

    }



    public function logout()
    {
//        unset($_SESSION);
//        session_destroy();
        session(null);
//        $this->success('退出成功', U('login/index'),3);
        redirect('http://localhost:8080/#/AdminLogin');

    }
}