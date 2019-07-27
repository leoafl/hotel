<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员后台</title>
    <!--一统一入口文件的位置为准-->
    <link rel="stylesheet" href="/untitled/Hotel/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/untitled/Hotel/Public/css/main.css">
</head>
<body>

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">文津酒店后台管理</div>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="/untitled/Hotel/Public/img/tx3.jpg" class="layui-nav-img">
                    管理员
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="<?php echo U('login/logout');?>">退出</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">房间管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('room/index');?>">房间列表</a></dd>
                        <dd><a href="<?php echo U('room/add');?>">添加房间</a></dd>
                        <!--<dd><a href="javascript:;">列表三</a></dd>-->
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">酒店数据</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('data/index');?>">酒店数据（表格）</a></dd>
                        <dd><a href="<?php echo U('data/echarts');?>">订单数据（图表）</a></dd>
                        <dd><a href="<?php echo U('data/money');?>">营业额数据（图表）</a></dd>
                        <dd><a href="<?php echo U('data/user');?>">用户数据（表格）</a></dd>
                        <!--<dd><a href="javascript:;">酒店员工</a></dd>-->
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">员工管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('emp/index');?>">员工列表</a></dd>
                        <dd><a href="<?php echo U('emp/add');?>">添加员工</a></dd>
                        <!--<dd><a href="javascript:;">列表三</a></dd>-->
                    </dl>
                </li>
            </ul>
        </div>
    </div>


    <div id="emplist" class="layui-body">
        <!-- 内容主体区域 -->
        <!--<a class="layui-btn" href="<?php echo U('room/add');?>">添加房间</a>-->
        <table>
            <caption>房间列表</caption>
            <thead>
            <tr>
            <th>房间号</th>
            <th>房间类型</th>
            <th>价格</th>
            <th>房间信息</th>
            <!--<th>房间图片</th>-->
            <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($rooms)): $i = 0; $__LIST__ = $rooms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($room["rid"]); ?></td>
                    <td><?php echo ($room["rname"]); ?></td>
                    <td><?php echo ($room["rprice"]); ?></td>
                    <td><?php echo ($room["rmsg"]); ?></td>
                    <!--<td><?php echo ($room["rpicture"]); ?></td>-->
                    <!--<td><img src="/untitled/Hotel/Public/img/tx1.jpg" alt="" style="width: 100px;height: 50px;background-size: 100% 100%"></td>-->
                    <td>
                        <a href="<?php echo U('room/edit',array('Rid'=>$room['rid']));?>" class="layui-btn layui-btn-sm"><i class="layui-icon"></i>编辑</a>
                        <!--<a onclick="redit()" class="layui-btn layui-btn-sm"><i class="layui-icon"></i>编辑</a>-->
                        <!--<a href="<?php echo U('edit',array('Rid'=>$room['rid']));?>" onclick="redit()" class="layui-btn layui-btn-sm"><i class="layui-icon"></i>编辑</a>-->
                        <a class="layui-btn layui-btn-danger layui-btn-sm" onclick="showDel('<?php echo ($room["rname"]); ?>','<?php echo ($room["rid"]); ?>')"><i
                                class="layui-icon"></i>删除</a>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <!--分页-->
        <div id="listpage"></div>
    </div>
</div>


<script src="/untitled/Hotel/Public/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element', 'layer', 'laypage'], function () {
        // var element = layui.element;
        var laypage = layui.laypage;
        //总页数低于页码总数
        laypage.render({
            elem: 'listpage'
            , count: <?php echo ($count); ?> //数据总数
            ,limit:5
            ,curr:<?php echo ($curr); ?>
            ,jump: function(obj, first){
                //obj包含了当前分页的所有参数，比如：
                console.log(obj.curr); //得到当前页，以便向服务端请求对应页的数据。
                console.log(obj.limit); //得到每页显示的条数

                //首次不执行
                if(!first){
                    //do something
                    if(location.href.indexOf('curpage')==-1){
                        location.href='index/curpage/'+obj.curr+'.html';
                    }else{
                        location.href=obj.curr+'.html';
                    }
                }
            }
        });

    });

    // function redit() {
    //     if(location.href.indexOf('curpage')>=0){
    //         location.href='../../edit?Rid=<?php echo ($room["rid"]); ?>';
    //     }else{
    //         location.href="edit?Rid=<?php echo ($room["rid"]); ?>";
    //     }
    // }

    function showDel(name, Rid) {
        var layer = layui.layer;

        layer.confirm("确认删除" + name + "?", {
            btn: ['确认', '取消']//按钮
        }, function () {
            // location.href = 'delete?no=' + Eno;
            if(location.href.indexOf('curpage')>=0){
                location.href='../../delete?no=<?php echo ($room["rid"]); ?>';
            }else{
                location.href='delete?no=<?php echo ($room["rid"]); ?>';
            }
        });
    }
</script>
</body>
</html>