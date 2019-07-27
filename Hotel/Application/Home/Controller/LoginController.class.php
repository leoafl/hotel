<?php

namespace Home\Controller;

use Think\Controller;
use Home\Common\Smtp;
header('Content-Type:text/html; charset=utf-8');
header('charset=utf-8');

class LoginController extends Controller
{
    public function index()
    {
        $this->display();
    }

    public function userLogin()
    {
        $username = I('username');
        $password = I('password');
        $user = M('user')->where("Uname='{$username}'")->find();
//        var_dump($user);
        if (!$user) {
//            $this->error('账号不存在', U('Login/index'), 3);
            json('-1001','用户不存在');
        }else{
            if ($user['upassword'] == $password) {
//            $_SESSION['username'] = $username;
                //使用thinkPHP session支持
//            session('username', $username);
//                $this->success('登录成功', U('Homepage/index'), 3);
                session('username', $username);
                json('1001','登录成功',array('username'=>$username));
            } else {
//                $this->error('密码错误');
                json('-1002','密码不正确');
            }
        }
    }

    public function logout()
    {
        $out=session(null);
        if(!$out){
            json(1001,'退出成功');
        }else{
            json(-1001,'退出失败');
        }
//        $this->success('退出成功', U('Homepage/index'), 3);

    }

//    找回密码
    public function lost()
    {
        $this->display('lost');
    }

    public function getLost()
    {

//******************** 配置信息 ********************************
        $smtpserver = "smtp.163.com";//SMTP服务器
        $smtpserverport = 25;//SMTP服务器端口
        $smtpusermail = "13625645047@163.com";//SMTP服务器的用户邮箱
        $smtpemailto = $_POST["Uemail"];//发送给谁
        $smtpuser = "13625645047";//SMTP服务器的用户帐号，注：部分邮箱只需@前面的用户名
        $smtppass = "wjs123";//SMTP服务器的用户密码
        $mailtitle = "找回密码提醒";//邮件主题

        $pattern = "/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";

        $username = I('Uname');
        $email = I('Uemail');
        $user = M('user')->where("Uname='{$username}'")->find();

        if (!$user) {
//            $this->error('没有该用户', U('login/lost'), 3);
            json(-1001,'没有该用户');
        } elseif (!($user['uemail'] == $email)) {
//            $this->error('邮箱不正确', U('login/lost'), 3);
            json(-1002,'邮箱不正确');
        } else {
            $conn = mysqli_connect("localhost", "root", "", "hotel");
            $result = mysqli_query($conn, "SELECT Upassword,Uemail FROM m_user WHERE Uname='$username'");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    if ($row['Uemail'] == $email) {
                        $psw = $row['Upassword'];
//                        json('1001','邮件发送成功,请查收');
                        $this->success('邮件发送成功,请查收');

                        break;
                    } else {
//                        $this->error('错误', U('login/lost'));
                        json(-1003,'邮箱发送失败');
                    }
                }
            }
        }
        $mailcontent = "<h2>您的密码是：{$psw}<br>(若不是本人操作请忽略)</h2>";//邮件内容
        $mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
        //************************ 配置信息 ****************************
        $smtp = new Smtp($smtpserver, $smtpserverport, true, $smtpuser, $smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
        $smtp->debug = false;//是否显示发送的调试信息
        $state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);
    }
}