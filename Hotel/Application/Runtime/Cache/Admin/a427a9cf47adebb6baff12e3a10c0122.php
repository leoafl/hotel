<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员后台</title>
    <!--一统一入口文件的位置为准-->
    <link rel="stylesheet" href="/untitled/Hotel/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/untitled/Hotel/Public/css/main.css">
</head>
<body>

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">文津酒店后台管理</div>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="/untitled/Hotel/Public/img/tx3.jpg" class="layui-nav-img">
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
    <div style="padding: 20px; background-color: #F2F2F2;">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header">用户数据</div>
                    <div class="layui-card-body">
                        <table>
                        <tr>
                            <td>用户总数：</td>
                            <td style="color:#f60;font-weight: bold"><?php echo ($ucount); ?></td>
                            <td>新增会员：</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>待付款：</td>
                            <td>0</td>
                            <td>登录会员：</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>已付款：</td>
                            <td>3</td>
                            <td>新增评价：</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>待评价：</td>
                            <td>3</td>
                            <td>已评价：</td>
                            <td>1</td>
                        </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header">酒店数据</div>
                    <div class="layui-card-body">
                        <table>
                            <tr>
                                <td>房间总数：</td>
                                <td style="color:#f60;font-weight: bold"><?php echo ($rcount); ?></td>
                                <td>今日新增房间：</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>今日订单总数：</td>
                                <td style="color:#f60;font-weight: bold"><?php echo ($ocount); ?></td>
                                <td>今日新增订单：</td>
                                <td>2</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header">员工数据</div>
                    <div class="layui-card-body">
                        <table>
                            <tr>
                                <td>员工总数：</td>
                                <td style="color:#f60;font-weight: bold"><?php echo ($ecount); ?></td>
                                <td>男员工数：</td>
                                <td style="color:#f60;font-weight: bold"><?php echo ($man); ?></td>
                            </tr>
                            <tr>
                                <td>在职员工：</td>
                                <td style="color:#f60;font-weight: bold"><?php echo ($ecount); ?></td>
                                <td>女员工数：</td>
                                <td style="color:#f60;font-weight: bold"><?php echo ($women); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/untitled/Hotel/Public/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element', 'form'], function () {
        var element = layui.element;

    });
</script>
</body>
</html>