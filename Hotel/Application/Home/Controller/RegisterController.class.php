<?php

namespace Home\Controller;

use Think\Controller;
use Think\Verify;

class RegisterController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function userRegister()
    {
        $username = I('username');
        $password = I('password');
        $email = I('email');
        $pattern = "/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";
        $user = M('user')->where("Uname='{$username}'")->find();
        if (!$username) {
//            $this->error('用户名不能为空');
            json(-1001, '用户名不能为空');
        } else {
            if ($user) {
//            $this->error('用户已存在');
                json(-1002, '用户已存在');
            } else {
                if (!$password) {
//            $this->error('密码不能为空');
                    json(-1003, '密码不能为空');
                } else {
                    if (!($email == '1834408905@qq.com')) {
                        json(-1004, '邮箱格式不正确');
                    } else {
                        $user = M('user');
                        $arr=array('Uname'=>$username,'Upassword'=>$password,'Uemail'=>$email,'Unikename'=>'','Usex'=>'','Uphone'=>'','img'=>'');
                        $user->add($arr);
                        json(1001, '注册成功');
                    }
                }
            }
        }
    }




    //    验证码
    public function getVerify()
    {
        $config = array(
            'fontSize' => 30,    // 验证码字体大小
            'length' => 4,     // 验证码位数
            'useNoise' => false, // 关闭验证码杂点

        );
        $verify = new Verify($config);
        $verify->entry();
    }
}