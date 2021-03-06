<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--一统一入口文件的位置为准-->
    <link rel="stylesheet" href="/untitled/Hotel/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/untitled/Hotel/Public/css/main.css">
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
            <li class="layui-nav-item"><a href="<?php echo U('homepage/index');?>">首页</a></li>
            <li class="layui-nav-item"><a href="<?php echo U('homepage/search');?>">预订</a></li>

        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <?php if(!$my['img']): ?><img src="/untitled/Hotel/Public/img/tx1.jpg" style="width: 50px;height: 50px;background-size: 100% 100%;border-radius: 50%" class="layui-upload-img tx">
                        欢迎，<b style="color:#ff7900;"><?php echo ($data); ?></b>
                        <?php else: ?>
                        <img src="/untitled/Hotel/Uploads/<?php echo ($my["img"]); ?>" style="width: 50px;height: 50px;background-size: 100% 100%;border-radius: 50%" class="layui-upload-img tx">
                        欢迎，<b style="color:#ff7900;"><?php echo ($data); ?></b><?php endif; ?>
                    <!--<img src="/untitled/Hotel/Public/img/tx1.jpg" class="layui-nav-img">-->
                    <!--欢迎，<b style="color:#ff7900;"><?php echo ($data); ?></b>-->
                </a>
            </li>
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
                        <dd><a href="<?php echo U('personal/edit');?>">修改资料</a></dd>
                        <dd><a href="<?php echo U('personal/safe');?>">安全设置</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">酒店服务</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('personal/help');?>">帮助中心</a></dd>
                        <dd><a href="<?php echo U('personal/vip');?>">会员中心</a></dd>
                        <dd><a href="<?php echo U('personal/online');?>">在线客服<span class="layui-badge">1   </span></a></dd>
                    </dl>
                </li>

            </ul>
        </div>
    </div>


    <div id="emplist" class="layui-body" style="bottom: 0">
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
            <legend>个人中心</legend>
        </fieldset>

        <div style="padding: 20px; background-color: #F2F2F2;">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md9">
                    <div class="layui-card">
                        <div class="layui-card-header">我的订单</div>
                        <div class="layui-card-body">
                            <p id="p3"><a href="<?php echo U('homepage/index');?>" style="color: #0069ca"><?php echo ($order); ?></a></p>
                            <!--<p id="p3"><a href="<?php echo U('homepage/index');?>" style="color: #0069ca"><?php echo ($order); ?></a></p>-->
                            <table id="table">
                                <?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><thead>
                                <tr>
                                    <th>订单号</th>
                                    <th>入住时间</th>
                                    <th>离店时间</th>
                                    <th>房型</th>
                                    <th>价格</th>
                                    <th>查看详情</th>
                                    <th>操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--<volist name="orders" id="order">-->
                                    <tr>
                                        <td><?php echo ($order["oid"]); ?></td>
                                        <td><?php echo ($order["ogtime"]); ?></td>
                                        <td><?php echo ($order["oltime"]); ?></td>
                                        <td><?php echo ($order["rname"]); ?></td>
                                        <td><?php echo ($order["rprice"]); ?></td>
                                        <td>
                                            <!--<a href="<?php echo U('personal/order');?>" style="color: #ff7900">点击查看</a>-->
                                            <a href="<?php echo U('personal/ordermsg',array('Oid'=>$order['oid']));?>" style="color: #ff7900">点击查看</a>
                                        </td>
                                        <td>
                                            <a href="<?php echo U('personal/evaluate',array('Oid'=>$order['oid']));?>" class="layui-btn  layui-btn-sm">评价</a>
                                            <a class="layui-btn layui-btn-warm layui-btn-sm"
                                               onclick="showDel('<?php echo ($order["oid"]); ?>','<?php echo ($order["rname"]); ?>')">删除</a>
                                        </td>
                                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md3">
                    <div class="layui-card">
                        <div class="layui-card-header">个人信息</div>
                        <div class="layui-card-body" style="margin-left: 10px">
                            <div>
                                <?php if(!$my['img']): ?><img src="/untitled/Hotel/Public/img/tx1.jpg" style="width: 100px;height: 100px;background-size: 100% 100%" class="layui-upload-img tx">
                                    <?php else: ?>
                                    <img src="/untitled/Hotel/Uploads/<?php echo ($my["img"]); ?>" style="width: 100px;height: 100px;background-size: 100% 100%" class="layui-upload-img tx"><?php endif; ?>
                                <!--<a href="<?php echo U('upload/index');?>" style="color: grey">更换头像</a>-->
                            </div>
                            <div class="msg">
                                <!--<p>用户名：<?php echo ($user['uname']); ?></p>-->
                                <p>昵称：<b style="color:#555;font-weight: bold"><?php echo ($user['unickname']); ?></b></p>
                                <p>性别：<b style="color:#555;font-weight: bold"><?php echo ($user['usex']); ?></b></p>
                                <p>手机号：<b style="color:#555;font-weight: bold"><?php echo ($user['uphone']); ?></b></p>
                                <p>邮箱：<b style="color:#555;font-weight: bold"><?php echo ($user['uemail']); ?></b></p>
                                <p>会员积分：<a href="#" style="color: crimson"><b><?php echo ($sum); ?></b></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



<script src="/untitled/Hotel/Public/layui/layui.js"></script>
<script src="/untitled/Hotel/Public/js/jquery.min.js"></script>
<!--<script src="/untitled/Hotel/Public/layer/layer.js"></script>-->
<script>
    //JavaScript代码区域
    layui.use(['element', 'layer'], function () {
        var element = layui.element;


    });


    // 删除
    function showDel(name, Oid) {
        var layer = layui.layer;

        layer.confirm("确认删除" + name + "号订单"+"?", {
            btn: ['确认', '取消']//按钮
        }, function () {
            location.href='delete?no=<?php echo ($order["oid"]); ?>';
        });
    }
</script>
</body>
</html>