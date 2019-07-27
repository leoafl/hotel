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
    <fieldset class="layui-elem-field layui-field-title" style="margin: 20px 20px 20px 20px;">
        <legend style="color: #f60">我的积分</legend>
        <p>当前共有积分：</p><strong style="color: #f60"><?php echo ($sum); ?></strong>分
        （抵现金￥<?php echo ($money); ?>元）
    </fieldset>
    <div class="layui-tab layui-tab-brief" lay-filter="docDemoTabBrief">
        <ul class="layui-tab-title">
            <li class="layui-this">积分收入明细</li>
            <li>积分消费记录</li>
            <li>已用积分</li>
            <li>如何获得积分</li>
        </ul>
        <div class="layui-tab-content" style="height: 100px;">
            <div class="layui-tab-item layui-show">
                <div class="layui-form">
                    <table class="layui-table">
                        <thead>
                        <tr>
                            <th>积分变化原因</th>
                            <th>描述</th>
                            <th>积分数</th>
                            <th>可用积分</th>
                            <th>可抵现金</th>
                            <th>有效期至</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><tr>
                                <td>预订房间</td>
                                <td>预订了--<?php echo ($order["rname"]); ?></td>
                                <td style="color: #f60">+<?php echo ($order['oprice']); ?></td>
                                <td style="color: #f60">+<?php echo ($order['oprice']); ?></td>
                                <td style="color: #f60"><?php echo ($order['oprice']/100); ?>元</td>
                                <td>2019年12月31日</td>
                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="layui-tab-item">积分消费记录</div>
            <div class="layui-tab-item">已用积分</div>
            <div class="layui-tab-item">
                <div style="border: 1px solid #f5dcbc;padding-left: 10px">
                    <h3>如何获得积分：</h3>
                    <ul>
                        <li>1、预订房屋并完成入住可获得积分奖励。</li>
                        <li>2、每条有效点评最高可获得积分1000分，抵10元订金。</li>
                        <li>3、登录社区、发表攻略游记、点评社区文章。</li>
                    </ul>
                    <h3>积分有效期：</h3>
                    <ul>
                        <li>1、注意：订单一旦删除，订单包含积分也将随之取消</li>
                        <li>2、积分有效期：根据不同积分来源，积分的有效期也各不相同，您可以通过积分收入明细中的有效期查看每笔积分的具体有效期。</li>
                        <li>3、积分入账时间：预订房屋的积分将在您成功结账退房后的7个工作日内到账(极少数房屋可能会晚于7个工作日)；注册、点评等行为产生的积分会在达成条件时实时入账。</li>
                    </ul>
                    <h3>积分如何使用：</h3>
                    <ul>
                        <li>1、积分目前可用于抵扣房费(仅线上支付部分，线下支付部分无法使用积分抵扣)未来积分可换取礼品、参与积分抽大奖等用途。敬请期待。</li>
                    </ul>
                    <p>积分最终解释权商家所有，规则如有调整将更新在此页面，恕不另行通知。</p>
                </div>
            </div>
        </div>
    </div>


</div>
<script src="/PHPstormProject/thinkphp/Hotel/Public/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element', 'layer'], function () {
        var element = layui.element;
        var layer = layui.layer;

        var $ = layui.jquery
            , element = layui.element;
        //Tab的切换功能，切换事件监听等，需要依赖element模块
    });

</script>
</body>
</html>