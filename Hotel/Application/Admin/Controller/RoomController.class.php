<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/18 0018
 * Time: 上午 10:50
 */
namespace Admin\Controller;
use Think\Controller;

class RoomController extends Controller{

    public function _initialize()
    {
        if (!session('adminname')) {
            $this->error('请登录', U('login/index'));
        }
    }


    public function index($curpage = 1, $limit = 5){
        //分页
        //a,初始化分页(http接收)
        //b,获取数据总数
        $roomModel = M('room');
        //获取数据总数
        $count = $roomModel->count();
        $this->assign('count', $count);
        $this->assign('curr', $curpage);
        //1:0 2:5 3:10
        $rooms = $roomModel
            ->page($curpage, $limit)
            ->select();

        $this->assign('rooms', $rooms);
        $this->display();
    }

    //添加房间
    public function add()
    {

        $this->display();
    }

    public function doadd()
    {

        $Room = M('room');
        $data = $Room->create();
        $result = $Room->add($data);
        if ($result) {
            $this->success('添加成功', U('room/index'));
        } else {
            $this->error('添加失败');
        }
    }

    //删除
    public function delete($no)
    {
        $result = M('room')->delete($no);
        if ($result) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    //编辑
    public function edit($Rid)
    {
        //1.获取房间信息
        $room = M('room')->where("Rid='{$Rid}'")->find();
        //3,页面展示
        $this->assign('room', $room);
        $this->display();
    }

    public function doedit()
    {
        $room = M('room');
        $data = $room->create();
//        var_dump($data);
        $result = $room->save($data);
        if ($result) {
            $this->success('修改成功', U('index'));
        } else {
            $this->error('修改失败');
        }

    }

}