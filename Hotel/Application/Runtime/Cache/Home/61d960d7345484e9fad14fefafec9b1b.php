<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文津酒店</title>
    <!--一统一入口文件的位置为准-->
    <link rel="stylesheet" href="/PHPstormProject/thinkphp/Hotel/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/PHPstormProject/thinkphp/Hotel/Public/css/main.css">
    <link rel="stylesheet" href="/PHPstormProject/thinkphp/Hotel/Public/css/online.css">
    <style>
        .msg p {
            font-size: 16px;
            padding-top: 10px;
        }
    </style>
</head>
<body>

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">文津酒店预订</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="<?php echo U('homepage/index');?>">首页</a></li>
            <li class="layui-nav-item"><a href="<?php echo U('personal/index');?>">个人中心</a></li>

        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item"><a href="##" onclick="javascript:history.back(-1);">返回</a></li>
            <li class="layui-nav-item"><a href="<?php echo U('login/logout');?>">退出</a></li>
        </ul>
    </div>
</div>
<div id="emplist" class="layui-body" style="left: 0px">
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 70px;">
        <legend>订单信息</legend>
    </fieldset>
    <div style="padding: 20px; background-color: #F2F2F2;">
        <form action="dobook">
        <div class="layui-row layui-col-space15">
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">预订信息</div>
                        <div class="layui-card-body">
                            <ul>
                                <li>房型：</li>
                                <li>入住时间：</li>
                                <li>离开时间：</li>
                                <li>费用合计：</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">入住信息</div>
                        <div class="layui-card-body">
                            <ul>
                                <li>入住人姓名：</li>
                                <li>手机号：</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header">确认订单</div>
                        <input type="submit" value="信息无误，确认预订" class="layui-btn layui-btn-danger">
                    </div>
                </div>

        </div>
        </form>
    </div>
</div>
</div>

</body>
</html>