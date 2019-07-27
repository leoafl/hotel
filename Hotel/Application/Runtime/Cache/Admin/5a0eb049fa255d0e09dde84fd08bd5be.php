<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
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
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
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
                    <a class="" href="">房间管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('rooms/index');?>">房间列表</a></dd>
                        <dd><a href="<?php echo U('rooms/add');?>">添加房间</a></dd>
                        <!--<dd><a href="javascript:;">列表三</a></dd>-->
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">员工管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">员工列表</a></dd>
                        <dd><a href="javascript:;">添加员工</a></dd>
                        <!--<dd><a href="javascript:;">列表三</a></dd>-->
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div id="emplist" class="layui-body">
        <!-- 内容主体区域 -->
        <fieldset class="layui-elem-field site-demo-button" style="margin-top: 30px;">
            <legend>添加房间</legend>
            <form class="layui-form" method="post" action="doadd">
                <div class="layui-form-item">
                    <label class="layui-form-label">房间类型</label>
                    <input class="layui-input layui-input-inline" type="text" name="Rname" placeholder="请输入房间类型">
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">价格</label>
                    <input class="layui-input layui-input-inline" type="number" name="Rprice" placeholder="请输入价格">
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">房间图片</label>
                    <input class="layui-input layui-input-inline" type="text" name="Rpicture" placeholder="请添加房间图片">
                </div>
                <div class="btn-left">
                    <input class="layui-btn layui-btn-primary" type="button" onclick="javascript:history.back(-1);" value="返回">
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
    layui.use(['element','form'], function () {
        var element = layui.element;

    });
</script>
</body>
</html>