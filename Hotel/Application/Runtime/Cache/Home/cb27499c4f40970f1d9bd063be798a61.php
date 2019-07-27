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
    <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>安全设置</legend>
    </fieldset>
    <div class="layui-tab">
        <ul class="layui-tab-title">
            <li class="layui-this">修改密码</li>
            <li>绑定手机</li>
            <li>绑定邮箱</li>
        </ul>
        <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <h3 style="color:#f1730f;">登陆密码用于会员的登陆以及进行登陆的一系列操作，建议您定期更改密码</h3>
                <form class="layui-form" method="post" action="<?php echo U('personal/dopassword');?>">
                    <!--使用hidden来传递Eno的值-->
                    <input type="hidden" name="Uid" value="<?php echo ($user["uid"]); ?>">
                    <div class="layui-form-item">
                        <label class="layui-form-label">新密码</label>
                        <input class="layui-input layui-input-inline" type="password" name="Upassword"
                               value="<?php echo ($user['upassword']); ?>" placeholder="请输入新密码">
                    </div>
                    <div class="btn-left">
                        <a href="<?php echo U('personal/safe');?>">
                            <input class="layui-btn layui-btn-primary" type="button" value="返回">
                        </a>
                        <input class="layui-btn" type="submit" value="提交">
                    </div>

                </form>
            </div>
            <div class="layui-tab-item">
                <h3 style="color:#f1730f;">绑定手机方便您及时接收优惠促销信息，以及积分、优惠卷和账户余额变动的提醒</h3>
                <form class="layui-form" method="post" action="<?php echo U('personal/dosafe');?>">
                    <!--使用hidden来传递Eno的值-->
                    <input type="hidden" name="Uid" value="<?php echo ($user["uid"]); ?>">
                    <div class="layui-form-item">
                        <label class="layui-form-label">手机号</label>
                        <input class="layui-input layui-input-inline" type="text" name="Uphone"
                               value="<?php echo ($user['uphone']); ?>" placeholder="请输入手机号">
                    </div>
                    <div class="btn-left">
                        <a href="<?php echo U('personal/safe');?>">
                            <input class="layui-btn layui-btn-primary" type="button" value="返回">
                        </a>
                        <input class="layui-btn" type="submit" value="提交">
                    </div>

                </form>
            </div>
            <div class="layui-tab-item">
                <h3 style="color:#f1730f;">绑定邮箱方便您及时接收优惠促销信息，以及积分、优惠卷和账户余额变动的提醒</h3>
                <form class="layui-form" method="post" action="<?php echo U('personal/dosafe');?>">
                    <!--使用hidden来传递Eno的值-->
                    <input type="hidden" name="Uid" value="<?php echo ($user["uid"]); ?>">
                    <div class="layui-form-item">
                        <label class="layui-form-label">邮箱号</label>
                        <input class="layui-input layui-input-inline" type="text" name="Uemail"
                               value="<?php echo ($user['uemail']); ?>" placeholder="请输入邮箱号">
                    </div>
                    <div class="btn-left">
                        <a href="<?php echo U('personal/safe');?>">
                            <input class="layui-btn layui-btn-primary" type="button" value="返回">
                        </a>
                        <input class="layui-btn" type="submit" value="提交">
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

</div>
</div>


<script src="/PHPstormProject/thinkphp/Hotel/Public/layui/layui.js"></script>
<!--<script src="/PHPstormProject/thinkphp/Hotel/Public/layer/layer.js"></script>-->
<script>
    //JavaScript代码区域
    layui.use(['element', 'layer'], function () {
        var element = layui.element;


    });


</script>
</body>
</html>