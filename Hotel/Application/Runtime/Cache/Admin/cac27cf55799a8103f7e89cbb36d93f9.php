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
    <div id="container" style="height: 100%"></div>
</div>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-gl/echarts-gl.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts-stat/ecStat.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/dataTool.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/china.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/map/js/world.js"></script>
<script type="text/javascript" src="https://api.map.baidu.com/api?v=2.0&ak=ZUONbpqGBsYGXNIYHicvbAbM"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/extension/bmap.min.js"></script>
<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/simplex.js"></script>
<script type="text/javascript">
    var dom = document.getElementById("container");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    app.title = '堆叠柱状图';

    option = {
        tooltip : {
            trigger: 'axis',
            axisPointer : {            // 坐标轴指示器，坐标轴触发有效
                type : 'shadow'        // 默认为直线，可选为：'line' | 'shadow'
            }
        },
        legend: {
            // data:['直接访问','邮件营销','联盟广告','视频广告','搜索引擎','百度','谷歌','必应','其他']
            data:['经济双人间','行政双人间','行政大床房','经济江景大床房','豪华双床房','豪华江景大床房','行政江景大床房','豪华套房','家庭套房']
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        xAxis : [
            {
                name:'月份',        //坐标轴名称
                nameTextStyle:{        //坐标轴名称的文字样式
                    color:'green',
                },
                type : 'category',
                // data : ['周一','周二','周三','周四','周五','周六','周日']
                data : ['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月']
            }
        ],
        yAxis : [
            {
                name:'销量',        //坐标轴名称
                nameTextStyle:{        //坐标轴名称的文字样式
                    color:'green',
                },
                type : 'value'
            }
        ],
        series : [
            {
                name:'经济双人间',
                type:'bar',
                data:[320, 332, 301, 334, 390, 330, 320, 301, 334, 390, 330, 320]
            },
            {
                name:'行政双人间',
                type:'bar',
                stack: '广告',
                data:[120, 132, 101, 134, 90, 230, 210, 301, 334, 390, 330, 320]
            },
            {
                name:'行政大床房',
                type:'bar',
                stack: '广告',
                data:[220, 182, 191, 234, 290, 330, 310, 301, 334, 390, 330, 320]
            },
            {
                name:'经济江景大床房',
                type:'bar',
                stack: '广告',
                data:[150, 232, 201, 154, 190, 330, 410, 182, 191, 234, 290, 330]
            },
            {
                name:'豪华双床房',
                type:'bar',
                data:[862, 1018, 964, 1026, 1679, 1600, 1570, 182, 191, 234, 290, 330],
                // markLine : {
                //     lineStyle: {
                //         normal: {
                //             type: 'dashed'
                //         }
                //     },
                // data : [
                //     [{type : 'min'}, {type : 'max'}]
                // ]
                // }
            },
            {
                name:'豪华双床房',
                type:'bar',
                barWidth : 5,
                stack: '搜索引擎',
                data:[620, 732, 701, 734, 1090, 1130, 1120, 182, 191, 234, 290, 330]
            },
            {
                name:'豪华江景大床房',
                type:'bar',
                stack: '搜索引擎',
                data:[120, 132, 101, 134, 290, 230, 220, 182, 191, 234, 290, 330]
            },
            {
                name:'豪华套房',
                type:'bar',
                stack: '搜索引擎',
                data:[60, 72, 71, 74, 190, 130, 110, 182, 191, 234, 290, 330]
            },
            {
                name:'家庭套房',
                type:'bar',
                stack: '搜索引擎',
                data:[62, 82, 91, 84, 109, 110, 120, 182, 191, 234, 290, 330]
            }
        ]
    };
    ;
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
</script>
</body>
</html>