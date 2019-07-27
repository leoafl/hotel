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
                    <a class="" href="javascript:;">个人设置</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('personal/index');?>">个人中心</a></dd>
                        <dd><a href="<?php echo U('personal/edit');?>">修改资料</a></dd>
                        <dd><a href="javascript:;">订单评价</a></dd>
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
        <legend>个人中心</legend>
    </fieldset>

    <div style="padding: 20px; background-color: #F2F2F2;">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header">我的订单</div>
                    <div class="layui-card-body">
                        <!--<h3>暂无订单，点击 <a href="<?php echo U('homepage/index');?>" style="color: #0069ca">这里</a>去看看</h3>-->
                        <table>
                            <thead>
                            <tr>
                                <th>订单号</th>
                                <th>入住时间</th>
                                <th>离店时间</th>
                                <th>房型</th>
                                <th>房间信息</th>
                                <th>价格</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(is_array($orders)): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><tr>
                                    <td><?php echo ($order["oid"]); ?></td>
                                    <td><?php echo ($order["ogtime"]); ?></td>
                                    <td><?php echo ($order["oltime"]); ?></td>
                                    <td><?php echo ($order["rname"]); ?></td>
                                    <td><?php echo ($order["rmsg"]); ?></td>
                                    <td><?php echo ($order["rprice"]); ?></td>
                                    <td>
                                        <a href="" class="layui-btn  layui-btn-sm">评价</a>
                                        <a class="layui-btn layui-btn-warm layui-btn-sm"
                                           onclick="showDel('<?php echo ($order["oid"]); ?>','<?php echo ($order["rname"]); ?>')">删除</a>
                                    </td>
                                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                            </tbody>
                        </table>
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
    layui.use(['element', 'layer'], function () {
        var element = layui.element;


    });




    // 修改资料
    function redit() {
        // if(location.href.indexOf('curpage')>=0){
        //     location.href='../../edit?Rno=<?php echo ($room["rid"]); ?>';
        // }else{
        //     location.href="edit?Uno=<?php echo ($user["uid"]); ?>";
        //     location.href="edit?Uno=<?php echo ($order["oid"]); ?>";
        // }
    }

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