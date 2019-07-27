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
        <legend>订单评价</legend>
    </fieldset>

    <div style="padding: 20px; background-color: #F2F2F2;">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md6">
                <div class="layui-card">
                    <div class="layui-card-header">我的订单</div>
                    <div class="layui-card-body">
                        <ul>
                            <?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><li style="padding-bottom: 10px">订单号：<?php echo ($order['oid']); ?></li>
                                <li style="padding-bottom: 10px">入住人：<?php echo ($order['uname']); ?></li>
                                <li style="padding-bottom: 10px">手机号：<?php echo ($order['ophone']); ?></li>
                                <li style="padding-bottom: 10px">入住时间：<?php echo ($order['ogtime']); ?></li>
                                <li style="padding-bottom: 10px">离店时间：<?php echo ($order['oltime']); ?></li>
                                <li style="padding-bottom: 10px">房型：<?php echo ($order['rname']); ?></li>
                                <li style="padding-bottom: 10px">房间详情：<?php echo ($order['rmsg']); ?></li>
                                <li style="padding-bottom: 10px">价格：<b style="color:#f60;font-size: 16px"><?php echo ($order['rprice']); ?></b>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="layui-col-md6">
                <div class="layui-card">
                    <div class="layui-card-header">说点什么吧</div>
                    <div class="layui-card-body">
                        <!--评分-->
                        <div>
                            <label class="layui-form-label">评个分吧：</label>
                            <div id="test5"></div>
                        </div>

                        <!--<div><div id="test6"></div></div>-->
                        <!--评价内容-->
                        <form class="layui-form" method="post" action="<?php echo U('personal/doevaluate');?>">
                            <input type="hidden" name="Oid" value="<?php echo ($order['oid']); ?>">
                            <div class="layui-form-item layui-form-text">
                                <label class="layui-form-label">留下脚印：</label>
                                <div class="layui-input-block">
                                    <!--<input class="layui-input layui-input-inline" type="text" name="Oevaluate" value="<?php echo ($order['oevaluate']); ?>" placeholder="请输入你的评价">-->
                                    <textarea name="Oevaluate"  placeholder="请输入你的评价" class="layui-textarea"><?php echo ($order['oevaluate']); ?></textarea>
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    <button class="layui-btn" type="submit">立即提交</button>
                                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
    layui.use(['element', 'layer','form','rate'], function () {
        var element = layui.element;
        var form = layui.form;
        var rate = layui.rate;
        //自定义文本
        rate.render({
            elem: '#test5'
            ,value: 3
            ,text: true
            ,setText: function(value){ //自定义文本的回调
                var arrs = {
                    '1': '极差'
                    ,'2': '差'
                    ,'3': '中等'
                    ,'4': '好'
                    ,'5': '极好'
                };
                this.span.text(arrs[value] || ( value + "星"));
            }
        })
    });


</script>
</body>
</html>