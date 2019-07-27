<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员后台</title>
    <!--一统一入口文件的位置为准-->
    <link rel="stylesheet" href="/PHPstormProject/thinkphp/Hotel/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/PHPstormProject/thinkphp/Hotel/Public/css/main.css">
</head>
<body>

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">文津酒店后台管理</div>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="/PHPstormProject/thinkphp/Hotel/Public/img/tx3.jpg" class="layui-nav-img">
                    管理员
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="<?php echo U('login/logout');?>">退出</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">房间管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('room/index');?>">房间列表</a></dd>
                        <dd><a href="<?php echo U('room/add');?>">添加房间</a></dd>
                        <!--<dd><a href="javascript:;">列表三</a></dd>-->
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">酒店数据</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('data/index');?>">酒店数据（表格）</a></dd>
                        <dd><a href="<?php echo U('data/echarts');?>">订单数据（图表）</a></dd>
                        <dd><a href="<?php echo U('data/money');?>">营业额数据（图表）</a></dd>
                        <dd><a href="<?php echo U('data/user');?>">用户数据（表格）</a></dd>
                        <!--<dd><a href="javascript:;">酒店员工</a></dd>-->
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">员工管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('emp/index');?>">员工列表</a></dd>
                        <dd><a href="<?php echo U('emp/add');?>">添加员工</a></dd>
                        <!--<dd><a href="javascript:;">列表三</a></dd>-->
                    </dl>
                </li>
            </ul>
        </div>
    </div>

<div id="emplist" class="layui-body">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>酒店入住用户</legend>
    </fieldset>
    <div class="layui-form">
        <table class="layui-table">
            <thead>
            <tr>
                <th>姓名</th>
                <th>性别</th>
                <th>身份证号</th>
                <th>手机号</th>
                <th>入住时间</th>
                <th>离开时间</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($order["oname"]); ?></td>
                    <td><?php echo ($order["osex"]); ?></td>
                    <td><?php echo ($order["ocard"]); ?></td>
                    <td><?php echo ($order["ophone"]); ?></td>
                    <td><?php echo ($order["ogtime"]); ?></td>
                    <td><?php echo ($order["oltime"]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>
<script src="/PHPstormProject/thinkphp/Hotel/Public/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element', 'form'], function () {
        var element = layui.element;

    });
</script>
</body>
</html>