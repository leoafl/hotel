<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/12/26 0026
 * Time: 下午 16:53
 */

namespace Admin\Controller;

use Think\Controller;

class EmpController extends Controller
{
    public function _initialize()
    {
        if (!session('adminname')) {
            $this->error('请登录', U('login/index'));
        }
    }

    public function index($curpage = 1, $limit = 5)
    {
        //分页
        //a,初始化分页(http接收)
        //b,获取数据总数
        $empModel = M('emp');
        //获取数据总数
        $count = $empModel->count();
        $this->assign('count', $count);
        $this->assign('curr', $curpage);
        //1:0 2:5 3:10
        $emps = $empModel
            ->page($curpage, $limit)
            ->select();

        $this->assign('emps', $emps);
        $this->display();
    }

    //添加房间
    public function add()
    {
        $this->display();
    }

    public function doadd()
    {

        $Emp = M('emp');
        $data = $Emp->create();
        $result = $Emp->add($data);
        if ($result) {
            $this->success('添加成功', U('emp/index'));
        } else {
            $this->error('添加失败');
        }
    }

    //删除
    public function delete($id)
    {
        $result = M('emp')->delete($id);
        if ($result) {
            $this->success('删除成功');
        } else {
            $this->error('删除失败');
        }
    }

    //编辑
    public function edit($Eid)
    {
        //1.获取员工信息
        $emp = M('emp')->where("Eid='{$Eid}'")->find();
//        $sex=M('emp')->select();
        $this->assign('emp', $emp);
//        $this->assign('sex', $sex);
        $this->display();
    }

    public function doedit()
    {
        $emp = M('emp');
        $data = $emp->create();
//        var_dump($data);
        $result = $emp->save($data);
        if ($result) {
            $this->success('修改成功', U('index'));
        } else {
            $this->error('修改失败');
        }

    }
}