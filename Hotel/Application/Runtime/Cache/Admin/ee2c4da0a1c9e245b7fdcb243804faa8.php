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
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field site-demo-button" style="margin-top: 30px;">
            <legend>修改房间信息</legend>
            <form class="layui-form" method="post" action="<?php echo U('room/doedit');?>">
                <!--使用hidden来传递Eno的值-->
                <input type="hidden" name="Rid" value="<?php echo ($room["rid"]); ?>">
                <div class="layui-form-item">
                    <label class="layui-form-label">房间类型</label>
                    <input class="layui-input layui-input-inline" type="text" name="Rname" value="<?php echo ($room["rname"]); ?>">
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">价格</label>
                    <input class="layui-input layui-input-inline" type="number" name="Rprice" value="<?php echo ($room["rprice"]); ?>">
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">房间信息</label>
                    <input class="layui-input layui-input-inline" type="text" name="Rmsg" value="<?php echo ($room["rmsg"]); ?>">
                </div>
                <!--<div class="layui-form-item">-->
                    <!--<label class="layui-form-label">房间图片</label>-->
                    <!--<input class="layui-input layui-input-inline" type="text" name="Rpicture" value="<?php echo ($room["rpicture"]); ?>">-->
                <!--</div>-->
                <div class="btn-left">
                    <input class="layui-btn layui-btn-primary" type="button" onclick="javascript:history.back(-1);"
                           value="返回">
                    <input class="layui-btn" type="submit" value="提交">
                </div>

            </form>
        </fieldset>
        <!--<div style="padding: 15px;">内容主体区域</div>-->
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