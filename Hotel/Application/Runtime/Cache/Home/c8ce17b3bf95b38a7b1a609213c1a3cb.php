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

<div class="layui-body" id="right">
    <!-- 内容主体区域 -->
    <div class="aright">

        <div class="aform cl">
            <div class="layui-collapse" lay-filter="test">
                <fieldset class="layui-elem-field layui-field-title" style="margin: 50px 30px 20px 20px;">
                    <legend>您可能遇到以下问题</legend>
                </fieldset>
                <div class="" style="margin: 20px 30px 20px 100px;">
                <button class="layui-btn layui-btn-radius">如何办理入住</button>
                <button class="layui-btn layui-btn-radius">酒店无房接待</button>
                <button class="layui-btn layui-btn-radius">酒店查不到订单</button>
                <button class="layui-btn layui-btn-radius">如何取消退款</button>
                <button class="layui-btn layui-btn-radius">我想改日期</button>
                <button class="layui-btn layui-btn-radius">未带身份证</button>
                </div>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">积分有什么作用？会员积分兑换规则？</h2>
                    <div class="layui-colla-content">
                        <p>会员积分由住房次数，住房价格决定，每住房一次，可获得相应的积分，积累更多的积分可换取相应的优惠，会员积分可兑换优惠券</p>
                    </div>
                </div>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">当住房体验不好时，该怎么解决？</h2>
                    <div class="layui-colla-content">
                        <p>您可立刻联系酒店商家给与解决方案，还可联系客服小蜜哦</p>
                    </div>
                </div>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">怎么才知道预订房间有没有成功？</h2>
                    <div class="layui-colla-content">
                        <p>
                            当您预订后会出现预订成功页面，同时酒店会在一小时内发送短信通知是否成功预订
                        </p>
                    </div>
                </div>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">该酒店有哪些房型，质量怎么样</h2>
                    <div class="layui-colla-content">
                        <p>我们酒店有单人房，双人房，特价房，家庭房等多种房型，质量特别好哦，您可以在评价页面看到哦</p>
                    </div>
                </div>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">房间可以退定吗？如何退订房间</h2>
                    <div class="layui-colla-content">
                        <p>
                            在入住前可随时申请退订哦，在我的订单页面取消预订即可，成功后会发送短信通知。
                        </p>
                    </div>
                </div>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">怎么对所住房间环境发表评价？</h2>
                    <div class="layui-colla-content">
                        <p>
                            点击个人中心查看我的订单，点击评价即可进行评价，可上传图片，点亮星星，发表评价。
                        </p>
                    </div>
                </div>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">怎么修改订单日期？</h2>
                    <div class="layui-colla-content">
                        <p>
                            在入住前向商家发起申请改签，处理结果已短信为主，请耐心等待。
                        </p>
                    </div>
                </div>
                <div class="layui-colla-item">
                    <h2 class="layui-colla-title">未带身份证怎么办？</h2>
                    <div class="layui-colla-content">
                        <p>
                            根据现行法律法规，入住酒店需要提供有效身份证明，可前往附近派出所开具证明办理入住，也可联系商家申请退款。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <script src="/PHPstormProject/thinkphp/Hotel/Public/layui/layui.js"></script>
        <script>
            //JavaScript代码区域
            layui.use(['element', 'layer'], function(){
                var element = layui.element;
                var layer = layui.layer;

            });
        </script>
        </body>
        </html>