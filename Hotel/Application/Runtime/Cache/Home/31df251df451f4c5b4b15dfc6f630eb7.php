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
        .msg p{
            font-size: 16px;
            padding-top: 10px;
        }
    </style>
</head>
<body>

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">文津酒店个人中心</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="<?php echo U('personal/index');?>">个人中心</a></li>
            <li class="layui-nav-item"><a href="<?php echo U('homepage/index');?>">首页</a></li>
            <li class="layui-nav-item"><a href="<?php echo U('homepage/search');?>">预订</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <!--<li class="layui-nav-item">-->
                <!--<a href="javascript:;">-->
                    <!--&lt;!&ndash;<img src="http://t.cn/RCzsdCq" class="layui-nav-img">&ndash;&gt;-->
                    <!--<img src="/PHPstormProject/thinkphp/Hotel/Public/img/tx1.jpg" class="layui-nav-img">-->
                    <!--欢迎-->
                <!--</a>-->
            <!--</li>-->
            <li class="layui-nav-item"><a href="<?php echo U('login/logout');?>">退出</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">我的订单</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('personal/orderlist');?>">订单列表</a></dd>
                        <dd><a href="<?php echo U('personal/unevaluate');?>">待评价订单</a></dd>
                        <dd><a href="<?php echo U('personal/evaluated');?>">已评价订单</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">账户设置</a>
                    <dl class="layui-nav-child">
                        <!--<dd><a href="<?php echo U('personal/index');?>">个人中心</a></dd>-->
                        <dd><a href="<?php echo U('personal/edit');?>">修改资料</a></dd>
                        <dd><a href="<?php echo U('personal/safe');?>">安全设置</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">酒店服务</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('personal/help');?>">帮助中心</a></dd>
                        <dd><a href="<?php echo U('personal/vip');?>">会员中心</a></dd>
                        <dd><a href="<?php echo U('personal/online');?>">在线客服</a></dd>
                    </dl>
                </li>

            </ul>
        </div>
    </div>

<div id="emplist" class="layui-body">
    <!-- 内容主体区域 -->
    <fieldset class="layui-elem-field site-demo-button" style="margin-top: 30px;">
        <legend>修改个人信息</legend>

        <form class="layui-form" enctype="multipart/form-data" method="POST" action="<?php echo U('personal/doedit');?>">
            <input type="hidden" name="Uid" value="<?php echo ($user['uid']); ?>">
            <div class="layui-form-item">
                <label class="layui-form-label"></label>
                <?php if(!$my['img']): ?><img src="/PHPstormProject/thinkphp/Hotel/Public/img/tx1.jpg"
                         style="width: 100px;height: 100px;background-size: 100% 100%;border-radius: 50%"
                         class="layui-upload-img tx">
                    <?php else: ?>
                    <img src="/PHPstormProject/thinkphp/Hotel/Uploads/<?php echo ($my["img"]); ?>"
                         style="width: 100px;height: 100px;background-size: 100% 100%;border-radius: 50%"
                         class="layui-upload-img tx"><?php endif; ?>
                <!--<img src="/PHPstormProject/thinkphp/Hotel/Public/img/tx1.jpg" style="width: 100px;height: 100px;background-size: 100% 100%;">-->
                <!--<input class="layui-input layui-input-inline" type="text" name="form_data">-->
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">修改头像</label>
                <input class="layui-input layui-input-inline" type="file" name="img" id="pic">
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">昵称</label>
                <input class="layui-input layui-input-inline" type="text" name="Unickname" value="<?php echo ($user['unickname']); ?>">
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">性别</label>
                <div class="layui-input-block">
                    <input type="radio" name="Usex" value="男" title="男" checked="">
                    <input type="radio" name="Usex" value="女" title="女">
                </div>
            </div>
            <div class="btn-left">
                <a href="<?php echo U('personal/index');?>">
                    <input class="layui-btn layui-btn-primary" type="button" onclick="javascript:history.back(-1);"
                           value="返回">
                </a>
                <input class="layui-btn" type="submit" value="提交">
            </div>
        </form>
    </fieldset>
    <!--<div style="padding: 15px;">内容主体区域</div>-->
</div>


<script src="/PHPstormProject/thinkphp/Hotel/Public/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element', 'form', 'layer'], function () {
        var element = layui.element;
        var form = layui.form;
        form.render();
    });
</script>
</body>
</html>