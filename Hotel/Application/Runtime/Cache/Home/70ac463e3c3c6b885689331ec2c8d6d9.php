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


<div id="emplist" class="layui-body"style="bottom: 0">
    <!-- 内容主体区域 -->
    <div id="box" >
        <div class="b_head">
            <span class="h_span">文津酒店智能客服</span>
        </div>
        <div class="b_body">
            <div class="rotWord">
                <span></span>
                <p>您好，欢迎使用文津酒店智能客服很高兴为您服务！</p>
            </div>
        </div>

        <div class="b_footer">
            <input id="input" type="text" autocoplete="off" />
            <div id="btn" onclick="action()">发送</div>
        </div>
    </div>
</div>
<script src="/PHPstormProject/thinkphp/Hotel/Public/layui/layui.js"></script>
<script type="text/javascript" src="/PHPstormProject/thinkphp/Hotel/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
    layui.use(['element', 'layer'], function () {
        var element = layui.element;

    });
    var text = $("#input");
    function action() {
        if (text.val() == "" || text.val == "") {
            text.focus();
            return;
        }
        $(".b_body").append(
            "<div class='myWord'><span></span><p id='me'>" + text.val()
            + "</p></div>")

        $.ajax({
            type : "post",
            url : "<?php echo U('personal/onlineService');?>",
            data : {
                "text" : text.val()
            },
            success : function(data) {
                //alert(data);
                var item = data;
                var userObj = eval("(" + item + ")");
                // alert(userObj.text);
                $(".b_body").append(
                    "<div id='s'><span></span><p id='rootchat'>"
                    + userObj.text + "</p></div>")

            }
        });
    }
</script>
</body>
</html>