<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/21 0021
 * Time: 上午 11:09
 */

namespace Home\Controller;

use Think\Controller;

class HomepageController extends Controller
{
    //订单的操作
    public function getdingdan(){
        $emplist = M('order');
        $result = $emplist->select();
        json('1001','传递数据成功',$result);
//        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
//    public function getdingdan(){
//        $emplist = M('dingdan');
//        $result = $emplist->select();
//        json('1001','传递数据成功',$result);
////        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
//    }
    public function delete() {
        $id = I('delid');
        $dd = M('order');
        $result = $dd->execute("delete from m_order where Orid = '{$id}'");
        $results = $dd->select();
        if($result){
            json('10001','删除成功',$results);
        }else{
            json('-10001','删除失败');
        }
    }
    public function yipj() {
        $num = -1;
        $ypj = M('order');
        $result = $ypj->where("pj='$num'")->select();
        json('1001','传递数据成功',$result);
    }
    public function dopj() {
        $dd = M('order');
        $pjid = I('pjid');
//        $pjid = "10057";
        $pj = 1;
        //修改pj->1
        $result = $dd->execute("update m_order set pj = '{$pj}' WHERE orid = '{$pjid}'");
        if($result!==false){
            json('1001','评价成功',$result);
        }else{
            json('-1001','评价失败');
        }
    }
    public function pinglun() {
        $m = M('pinglun');
        $result = $m->select();
        json('1001','传递数据成功',$result);
    }
    public function dopinglun() {
        $m = M('pinglun');
        $imga = I('imga');
        $imgb = I('imgb');
        $imgc = I('imgc');
        if($imga==="http://localhost:8080/"){
            $imga = "";
        }
        if($imgb==="http://localhost:8080/"){
            $imgb = "";
        }
        if($imgc==="http://localhost:8080/"){
            $imgc = "";
        }
        $content = I('content');
        $touxiang = "https://ss0.baidu.com/6ONWsjip0QIZ8tyhnq/it/u=1569462993,172008204&fm=5";
        $name = "Eager";
        $riqi = I('riqi');
        $dianzanshu = "999+";
        $manyi = I('manyi');
        $dianzan = 1;
        //execute增删改
        $m->execute("insert into m_pinglun(name,touxiang,manyi,riqi,content,dianzanshu,hotelimg1,hotelimg2,hotelimg3,dianzan) VALUES ('{$name}','{$touxiang}','{$manyi}','{$riqi}','{$content}','{$dianzanshu}','{$imga}','{$imgb}','{$imgc}','{$dianzan}')");
    }




    //获取当前用户的信息，传递给message页面
    public function getusermessage() {
        $m = M('user');
        $name = session('username');
        $result = $m->where("Uname = '{$name}'")->select();
        json('10001','成功获取当前用户信息',$result);
    }
    //修改头像
    public function xgtouxiang() {
        $m = M('user');
        $userid = I('userid');
        $newtx = I('newtx');
        $result = $m->execute("update m_user set img = '{$newtx}' WHERE Uid = '{$userid}'");
        json('10001','成功修改',$result);
    }
    //注销登录
    public function zhuxiao() {
        unset($_SESSION);
        session_destroy();
    }
    //修改昵称
    public function xgname() {
        $m = M('user');
        $newname = I('uname');
        $name = session('username');
//        $userid = I('userid');
        $m->execute("update m_user set Unickname = '{$newname}' WHERE Uname = '{$name}'");
        json('1001','修改昵称成功');
    }
    //修改密码
    public function xgmima() {
        $m = M('user');
        $newmima = I('umima');
        $name = session('username');
        $m->execute("update m_user set Upassword = '{$newmima}' WHERE Uname = '{$name}'");
    }



    public function _initialize()
    {
        $login = "登录";
        $register = "注册";
        $personal = "个人中心";
        $logout = "退出";
//        $user="{session('username')}";
        if (!session('username')) {
            $this->assign('login', $login);
            $this->assign('register', $register);
        } elseif (session('username')) {
            $this->assign('personal', $personal);
            $this->assign('logout', $logout);
//            $this->assign('user',$user);
        }

    }

    public function lanjie()
    {
        $username=session('username');
        if($username){
            json(1001,'登录成功');
        }else{
            json(-1001,'拦截成功');
        }
    }
//    主页
    public function index()
    {
        $this->display();
    }

//    关于我们
    public function about()
    {
        $this->display();
    }

//    联系我们
    public function contact()
    {
        $this->display();
    }

//    地图
    public function map()
    {
        $this->display();
    }

//    景色
    public function gallery()
    {
        $this->display();
    }

//    服务
    public function services()
    {
        $this->display();
    }

//    搜索房间
    public function search()
    {
        $rooms = M('room')->select();
        $this->assign('rooms', $rooms);
        $this->display();
    }
    public function t_ajax(){
        $rname=$_POST['rname'];
        $rprice=$_POST['rprice'];

        switch ($rprice){
            case 1:
                $rprice="rprice>=1 and rprice<=99";
                break;
            case 2:
                $rprice="rprice>=100 and rprice<=299";
                break;
            case 3:
                $rprice="rprice>=300 and rprice<=599";
                break;
            case 4:
                $rprice="rprice>=600";
                break;
        }

        $m = M('room');
        if(empty($rname) && !empty($rprice)){
            $sql="SELECT * FROM m_room WHERE $rprice";
        }elseif(!empty($rname) && empty($rprice)){
            $sql="SELECT * FROM m_room WHERE  Rname like '%{$rname}%'";
        }elseif(empty($rname) && empty($rprice)){
            $sql="SELECT * FROM m_room";
        }else{
            $sql="SELECT * FROM m_room WHERE $rprice and Rname like '%{$rname}%'";
        }
        $data=$m->query($sql);
        $this->ajaxReturn($data);
    }

//    预订
    public function book()
    {
//        $Ogtime = I('Ogtime');
//        $Oltime = I('Oltime');
        $Ogtime = "2019-1-11";
        $Oltime = "2019-1-12";
        $cnt=strtotime("2019-1-12")-strtotime("2019-1-11");//计算时间的差值
        $days = floor($cnt/(3600*24));//算出天数
//        echo($days);
        $this->assign('Ogtime', $Ogtime);
        $this->assign('Oltime', $Oltime);
        $this->assign('days', $days);
        $Rid=I("rid");
        $room = M('room')
            ->where("rid='{$Rid}'")
            ->find();
//        dump($room);
        $data = session('username');
        $user = M('user')->where("Uname='{$data}'")->find();
        $this->assign('user', $user);
//        $order=M('order')->where("Orid='{$Rid}'")->find();
        $this->assign('room', $room);
        $this->display();
    }

    public function dobook()
    {
        if (!session('username')) {
            $this->error('请登录', U('login/index'));
        }
        $order = M('order');
        $data = $order->create();
        $result = $order->add($data);
        if ($result) {
//            $this->success('添加成功', U('personal/index'));
            json('1001','预订成功', U('personal/index'));
        } else {
//            $this->error('添加失败');
            json('1002','预订失败');
        }
    }
}