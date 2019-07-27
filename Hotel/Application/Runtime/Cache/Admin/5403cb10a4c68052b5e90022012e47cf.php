<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>layui</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/PHPstormProject/thinkphp/Hotel/Public/layui/css/layui.css" media="all">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>

<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">文津酒店管理后台</div>
        <!--</ul>-->
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
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
            <ul class="layui-nav layui-nav-tree" lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">房间管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="<?php echo U('rooms/index');?>">房间列表</a></dd>
                        <dd><a href="<?php echo U('rooms/add');?>">添加房间</a></dd>
                        <!--<dd><a href="javascript:;">列表三</a></dd>-->
                    </dl>
                </li>
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">员工管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="javascript:;">员工列表</a></dd>
                        <dd><a href="javascript:;">添加员工</a></dd>
                        <!--<dd><a href="javascript:;">列表三</a></dd>-->
                    </dl>
                </li>
            </ul>
        </div>
    </div>
    <div id="emplist" class="layui-body">
        <table class="layui-hide" id="test" lay-filter="test"></table>
        <div id="listpage"></div>
    </div>
</div>

<script type="text/html" id="toolbarDemo">
    <div class="layui-btn-container">
        <button class="layui-btn layui-btn-sm" lay-event="getCheckData">获取选中行数据</button>
        <button class="layui-btn layui-btn-sm" lay-event="getCheckLength">获取选中数目</button>
        <button class="layui-btn layui-btn-sm" lay-event="isAll">验证是否全选</button>
    </div>
</script>

<script type="text/html" id="barDemo">
    <!--<a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>-->
    <a onclick="redit()" class="layui-btn layui-btn-sm"><i class="layui-icon"></i>编辑</a>
    <!--<a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>-->
    <a class="layui-btn layui-btn-danger layui-btn-sm" onclick="showDel('<?php echo ($room["rname"]); ?>','<?php echo ($room["rid"]); ?>')"><i
            class="layui-icon"></i>删除</a>
</script>


<script src="/PHPstormProject/thinkphp/Hotel/Public/layui/layui.js" charset="utf-8"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->

<script>
    layui.use(['element', 'table', 'layer', 'laypage'], function () {
        var element = layui.element;
        var table = layui.table;
        var laypage = layui.laypage;
        //总页数低于页码总数
        laypage.render({
            elem: 'listpage'
            , count: <?php echo ($count); ?> //数据总数
            ,limit:10
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

        // 数据表格数据
        table.render({
            elem: '#test'
            , url: '<?php echo U("rooms/rooms");?>'
            // ,url:'/PHPstormProject/thinkphp/Hotel/Public/demo1.json'
            , toolbar: '#toolbarDemo'
            , title: '用户数据表'
            , response: {
                statusName: 'code' //规定数据状态的字段名称，默认：code
                , statusCode: 200 //规定成功的状态码，默认：0
                , msgName: 'msg' //规定状态信息的字段名称，默认：msg
                , countName: 'count' //规定数据总数的字段名称，默认：count
                , dataName: 'data' //规定数据列表的字段名称，默认：data
            }
            , cols: [[
                {type: 'checkbox', fixed: 'left'}
                , {field: 'rid', title: 'ID', width: 80, fixed: 'left', unresize: true, sort: true}
                , {field: 'rname', title: '用户名', width: 120, edit: 'text'}
                // ,{field:'email', title:'邮箱', width:150, edit: 'text', templet: function(res){
                //         return '<em>'+ res.email +'</em>'
                //     }}
                // ,{field:'sex', title:'性别', width:80, edit: 'text', sort: true}
                , {field: 'rprice', title: '价格', width: 100}
                , {field: 'rstate', title: '备注', width: 100}
                // ,{field:'sign', title:'签名'}
                // ,{field:'experience', title:'积分', width:80, sort: true}
                // ,{field:'ip', title:'IP', width:120}
                // ,{field:'logins', title:'登入次数', width:100, sort: true}
                // ,{field:'joinTime', title:'加入时间', width:120}
                ,{fixed: 'right', title:'操作', toolbar: '#barDemo', width:200}
            ]]
            // , page: true
        });

        //头工具栏事件
        table.on('toolbar(test)', function (obj) {
            var checkStatus = table.checkStatus(obj.config.id);
            switch (obj.event) {
                case 'getCheckData':
                    var data = checkStatus.data;
                    layer.alert(JSON.stringify(data));
                    break;
                case 'getCheckLength':
                    var data = checkStatus.data;
                    layer.msg('选中了：' + data.length + ' 个');
                    break;
                case 'isAll':
                    layer.msg(checkStatus.isAll ? '全选' : '未全选');
                    break;
            }
            ;
        });

        //监听行工具事件
        table.on('tool(test)', function (obj) {
            var data = obj.data;
            //console.log(obj)
            if (obj.event === 'del') {
                layer.confirm('真的删除行么', function (index) {
                    obj.del();
                    layer.close(index);
                });
            } else if (obj.event === 'edit') {
                layer.prompt({
                    formType: 2
                    , value: data.email
                }, function (value, index) {
                    obj.update({
                        email: value
                    });
                    layer.close(index);
                });
            }
        });

        // 编辑
        function redit() {
            if(location.href.indexOf('curpage')>=0){
                location.href='../../edit?Rno=<?php echo ($room["rid"]); ?>';
            }else{
                location.href="edit?Rno=<?php echo ($room["rid"]); ?>";
            }
        }

        // 删除
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
    });
</script>

</body>
</html>