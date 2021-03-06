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
        <legend>预订信息</legend>
    </fieldset>
    <div style="padding: 20px; background-color: #F2F2F2;">
        <form class="layui-form" method="post" action="<?php echo U('homepage/dobook');?>">
            <!--<input type="hidden" name="Rid" value="<?php echo ($room["rid"]); ?>">-->
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md6">
                    <div class="layui-card">
                        <div class="layui-card-header">预订信息</div>
                        <div class="layui-card-body">
                            <div class="layui-form-item">
                                <label class="layui-form-label">房型：</label>
                                <input class="layui-input layui-input-inline" type="text" name="Rname"
                                       value="<?php echo ($room['rname']); ?>" readonly>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">入住时间：</label>
                                <input class="layui-input layui-input-inline" type="text" name="Ogtime"
                                       value="<?php echo ($Ogtime); ?>" readonly>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">离开时间：</label>
                                <input class="layui-input layui-input-inline" type="text" name="Oltime"
                                       value="<?php echo ($Oltime); ?>" readonly>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">费用合计：</label>
                                <input class="layui-input layui-input-inline" type="text" name="Oprice"
                                       value="<?php echo ($room['rprice']*$days); ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md6">
                    <div class="layui-card">
                        <div class="layui-card-header">入住信息</div>
                        <div class="layui-card-body">
                            <div class="layui-form-item">
                                <label class="layui-form-label">姓名：</label>
                                <input class="layui-input layui-input-inline" type="text" name="Oname" lay-verify="required" autocomplete="off" placeholder="请输入真实姓名">
                                <input type="hidden" name="Ouid" value="<?php echo ($user['uid']); ?>">
                                <input type="hidden" name="Orid" value="<?php echo ($room['rid']); ?>">
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">性别</label>
                                <div class="layui-input-block">
                                    <input type="radio" name="Osex" value="男" title="男" checked="">
                                    <input type="radio" name="Osex" value="女" title="女">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">手机号：</label>
                                <!--<input class="layui-input layui-input-inline" type="text" name="Ophone"-->
                                       <!--value="<?php echo ($user['uphone']); ?>" readonly>-->
                                <input type="tel" name="Ophone" lay-verify="required|phone"
                                       autocomplete="off" class="layui-input layui-input-inline" placeholder="请输入您的手机号" value="<?php echo ($user['uphone']); ?>">
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">身份证号：</label>
                                <div class="layui-input-block">
                                    <input type="text" name="Ocard" lay-verify="identity" placeholder="请输入您的身份证号" autocomplete="off" class="layui-input layui-input-inline">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="layui-card">
                        <div class="layui-card-header">确认订单</div>
                        <div class="layui-card-body">
                            <a href="##" onclick="javascript:history.back(-1);">
                                <input type="button" value="重新选择" class="layui-btn">
                            </a>
                            <input type="submit" value="信息无误，确认预订" class="layui-btn layui-btn-danger" lay-submit="" lay-filter="demo1">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<script src="/PHPstormProject/thinkphp/Hotel/Public/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element', 'layer','form'], function () {
        var element = layui.element;
    });
    //监听提交
    form.on('submit(demo1)', function(data){
        layer.alert(JSON.stringify(data.field), {
            title: '最终的提交信息'
        })
        return false;
    });

</script>
</body>
</html>