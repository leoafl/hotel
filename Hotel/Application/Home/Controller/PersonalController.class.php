<?php

namespace Home\Controller;

use Think\Controller;

class PersonalController extends Controller
{
    public function _initialize()
    {
        if (!session('username')) {
            $this->error('请登录', U('login/index'));
        }
    }

    public function index()
    {
//            显示用户名
        $data = session('username');
        $this->assign('data', $data);
//            显示用户信息
        $user = M('user')->where("Uname='{$data}'")->find();
//            var_dump($user);
        $myModel = M('user');
        $my = $myModel->where("Uname='{$data}'")->find();
        $this->assign('my', $my);
        $this->assign('user', $user);
        $orderModel = M('order');
//          左连接查询order表中包含的用户
        $order = $orderModel
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->select();
//            dump($order);
        //        订单数
        $ocount = M('order')
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->count();
        $sum = 0;
        for ($i = 0; $i < $ocount; $i++) {
            $sum += $order[$i]['oprice'];
        }
        $this->assign('sum', $sum);
        if ($order) {
            $this->assign('orders', $order);
        } else {
            $order = "暂无订单，点击这里去看看";
            $this->assign('order', $order);
        }


        $this->display();
    }

//    修改资料
    public function edit()
    {
        $data = session('username');
        $user = M('user')->where("Uname='{$data}'")->find();
//        dump($user);
//        //3,页面展示
        $this->assign('user', $user);
        $myModel = M('user');
        $my = $myModel->where("Uname='{$data}'")->find();
        $this->assign('my', $my);
//        dump($my);
        $this->display();
    }

    public function doedit()
    {
        $user = M('user');
        $data = $user->create();
        if ($_FILES['img']['tmp_name'] != '') {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Uploads/';
            $upload->savePath = '';
            $info = $upload->uploadOne($_FILES['img']);
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $data['img'] = $info['savepath'] . $info['savename'];
            }
        }
        $result = $user->save($data);
//  !!!!!!save()方法执行失败返回false，无修改操作返回0，
//在判断是否更新成功时需要用恒等判断而不是根据返回值是否存在判断。
        if ($result !== false) {
            $this->success('修改成功', U('personal/edit'));
        } else {
            $this->error('修改失败');
        }

    }


    //删除
    public function delete($no)
    {
        $result = M('order')->delete($no);
        if ($result) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

//    查看详情
    public function ordermsg($Oid)
    {
        $order = M('order')
            ->where("Oid='{$Oid}'")
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->select();
        $this->assign('orders', $order);
//       dump($order);
        $this->display();
    }

//    订单列表
    public function orderlist()
    {
        $data = session('username');
        $order = M('order')
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->select();
        if ($order) {
            $this->assign('orders', $order);
        } else {
            $order = "暂无订单，点击这里去看看";
            $this->assign('order', $order);
        }
//        $this->assign('orders', $order);
        $this->display();
    }

//    评价
    public function evaluate($Oid)
    {
        $order = M('order')
            ->where("Oid='{$Oid}'")
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->select();
        $this->assign('orders', $order);
        $this->display();
    }

    public function doevaluate()
    {
        $evaluate = M('order');
        $data = $evaluate->create();
        $result = $evaluate->save($data);
        if ($result) {
            $this->success('评价成功', U('personal/index'));
        } else {
            $this->error('评价失败');
        }
    }

//    待评价订单
    public function unevaluate()
    {
        $data = session('username');

        $ocount = M('order')
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->count();
//        找到对应用户的订单
        $order = M('order')
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->select();
//        dump($ocount);
        $ocount = (int)$ocount;
//        dump($ocount);
//        $resd = array();
        $unres = array();
        for ($i = 0; $i < $ocount; $i++) {
            if (!$order[$i]['oevaluate']) {
//                把未评价的订单push进数组
                array_push($unres, $order[$i]);
                $this->assign('unres', $unres);
//                dump($unres);
            }
        }

        $this->display();
    }

//    已评价订单
    public function evaluated()
    {
        $data = session('username');
        $ocount = M('order')
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->count();
//        找到对应用户的订单
        $order = M('order')
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->select();
        $ocount = (int)$ocount;
        $resd = array();
        for ($i = 0; $i < $ocount; $i++) {
            if ($order[$i]['oevaluate']) {
//                把已评价的订单push进数组
                array_push($resd, $order[$i]);
                $this->assign('resd', $resd);
//                dump($unres);
            }
        }

        $this->display();
    }


//    安全设置
    public function safe()
    {
        $data = session('username');
        $user = M('user')->where("Uname='{$data}'")->find();
        $this->assign('user', $user);
        $this->display();
    }

    public function dosafe()
    {
        $user = M('user');
        $datas = $user->create();
        $result = $user->save($datas);
        if ($result) {
            $this->success('绑定成功', U('personal/safe'));
        } else {
            $this->error('绑定失败');
        }
    }

//    修改密码
    public function dopassword()
    {
        $user = M('user');
        $datas = $user->create();
        $result = $user->save($datas);
        if ($result) {
            $this->success('修改密码成功', U('personal/safe'));
        } else {
            $this->error('修改密码失败');
        }
    }

    //帮助中心
    public function help()
    {
        $this->display();
    }

//    会员中心

    public function vip()
    {
        $data = session('username');
//        订单数
        $ocount = M('order')
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->count();
//        找到对应用户的订单
        $order = M('order')
            ->join("LEFT JOIN __USER__ ON __USER__.Uid = __ORDER__.Ouid")
            ->join("__ROOM__ ON __ORDER__.Orid = __ROOM__.Rid")
            ->where("Uname='{$data}'")
            ->select();
//        计算总积分可兑换人民币
        $money = 0;
        $sum = 0;
        for ($i = 0; $i < $ocount; $i++) {
            $money += $order[$i]['oprice'] / 100;
            $sum += $order[$i]['oprice'];
        }
        $this->assign('money', $money);
        $this->assign('sum', $sum);
//        dump($sum);
        $this->assign('order', $order);
        $this->display();
    }

//    public function evaluate()
//    {
//        $vip=M('order')->select();
//        $this->assign('vip',$vip);
//    }

//    在线客服
    public function online()
    {
        $this->display();
    }

    public function onlineService()
    {
        $apiKey = "de65974a17d84f7ea6ba4a561738a8bf";
//v1.0版本请求方式
        $apiURL = "http://www.tuling123.com/openapi/api?key=KEY&info=INFO";
//$apiURL = "http://www.tuling123.com/openapi/api?key=";

//设置报文头，构建报文
//header("Content-type:text/html;charset=utf-8");
        header("Content-type: text/html; charset=utf-8");//设置源文件编码格式
        $reqInfo = $_POST['text'];
//        $reqInfo="hello111";
        $url = str_replace('INFO', $reqInfo, str_replace('KEY', $apiKey, $apiURL));

//获取文件数据流
        $res = file_get_contents($url);

//得到json对象
        $obj_json = json_decode($res, true);

//添加时间属性
        $obj_json->time = date("Y-m-d H:i:s");

//var_dump($obj_json);

        echo json_encode($obj_json, JSON_UNESCAPED_UNICODE);

    }

}