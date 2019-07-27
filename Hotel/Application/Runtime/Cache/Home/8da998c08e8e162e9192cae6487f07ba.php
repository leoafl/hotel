<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>房间搜索</title>
    <link rel="stylesheet" type="text/css" href="/untitled/Hotel/Public/css/list.css"/>
    <link rel="stylesheet" href="/untitled/Hotel/Public/css/calendar.css"/>
    <link rel="stylesheet" href="/untitled/Hotel/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/untitled/Hotel/Public/css/main.css">

    <style>
        .layui-body{
            width:980px;
            position:absolute;
            left: 0;
            right:0;
            top:0;
            bottom:0;
            z-index:998;
            width:auto;
            overflow:hidden;
            overflow-y:auto;
            box-sizing:border-box
        }
        #tabletest {
            margin: 180px auto 0 auto;
            width: 980px;
        }
        #tabletest table{
            border-collapse: collapse;
            margin:0 auto;
            width:100%;
            border:1px solid #c6c6c6 !important;

        }
        #tabletest table th{
            border-collapse: collapse;
            border-right:1px solid #c6c6c6 !important;
            border-bottom:1px solid #c6c6c6 !important;
            /*background-color:#ddeeff !important;*/
            background-color:#f2f2f2 !important;
            padding:5px 9px;
            font-size:14px;
            font-weight:normal;
            text-align:center;
        }
        #tabletest table td{
            border-collapse: collapse;
            border-right:1px solid #c6c6c6 !important;
            border-bottom:1px solid #c6c6c6 !important;
            font-size:12px;
            margin-top: 3px;
            margin-left: 5px;
            font-weight:normal;
            text-align:center;
            word-break: break-all;
        }
        #tabletest table td a{
            color: whitesmoke;
        }
        .Date_lr{
            width:50%;
            text-align:center;}
        .span21{
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
            font-size:14px;
            color: #666;
            border: 1px solid #e5e5e5;
            padding:2px 8px;
            line-height: 20px;
            border-radius: .2rem;
            background-color: #fff;
        }
        #checkinout{
            height: 50px;
            line-height: 50px;
            position: relative;
            margin: 10px;
            padding: 2px 0;
            display: -webkit-box;
            display: flex;
            border: 1px solid #e5e5e5;
            border-radius: .02rem;
            background-color: #fff;
        }
        #firstSelect p{line-height:21px;color: #999;font-size:12px;}
        #startDate{height: 25px; border:0;position: absolute;left: 0;margin: 0 auto;width: 50%;font-size: 16px;color: #05c0ad;text-align: center;}
        #endDate{ height: 25px; border:0;position: absolute;right: 0;margin:auto 0;width:50%;font-size: 16px;color: #05c0ad;text-align: center;}
        .mask_calendar {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0,0,0,.4);
            display: none;
            z-index: 9999;
        }
        .calendar {
            height: 400px;
            position: fixed;
            bottom: 0;
            left: 0;
        }
        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }
        @keyframes slideInDown {
            from {
                transform: translate3d(0, -100%, 0);
                visibility: visible;
            }

            to {
                transform: translate3d(0, 0, 0);
            }
        }
        .slideInDown {
            animation-name: slideInDown;
        }
        .btn-search {
            float: right;
            margin-top: -57px;
            width:96px;
            height: 58px;
            color: #fff;
            background-color: #ffa63c;
            border: 0;
            cursor: pointer;
        }
        .layui-form input[type=checkbox], .layui-form input[type=radio], .layui-form select {
            display: block;
        }
    </style>
</head>
<script src="/untitled/Hotel/Public/js/jquery-1.5.1.js"></script>
<script type="text/javascript">
    var $151 = $;//新的命名
</script>

<script src="/untitled/Hotel/Public/js/jquery.min.js"></script>

<script type="text/javascript">
    var $1102 = $;//新的命名
</script>

<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">文津酒店</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="<?php echo U('homepage/index');?>">首页</a></li>
            <li class="layui-nav-item"><a href="<?php echo U('personal/index');?>">个人中心</a></li>

        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item"><a href="##" onclick="javascript:history.back(-1);">返回</a></li>
            <li class="layui-nav-item"><a href="<?php echo U('login/logout');?>">退出</a></li>
        </ul>
    </div>

    <div id="emplist1" class="layui-body" style="left: 0px;bottom: 0px">
        <form class="layui-form" method="post" action="<?php echo U('homepage/book');?>">
            <div style="width:980px;margin:20px auto 0 auto;">
                <div class="list-screen">
                    <div class="screen-top" style="position:relative;">
                        <div id="firstSelect" style="width:100%;">
                            <div class="Date_lr" style="float:left;">
                                <P>入住</p>
                                <input id="startDate" type="text" name="Ogtime" value="" style="" readonly>
                            </div>
                            <div class="Date_lr" style="float:right;">
                                <p>离店</p>
                                <input id="endDate" type="text" name="Oltime" value="" style="" readonly>
                            </div>

                            <span class="span21">共<span class="NumDate">1</span>晚</span>
                        </div>

                    </div>

                    <input type="button" id="btn" class="layui-btn btn-search" value="搜索">
                    <div class="mask_calendar">
                        <div class="calendar"></div>
                    </div>
                    <div style="padding:10px 30px 10px 10px;">
                        <div class="screen-term">
                            <div class="selectNumberScreen">
                                <div id="selectList" class="screenBox screenBackground">
                                    <dl class="listIndex">
                                        <dt>房间类型</dt>
                                        <dd>
                                            <label><a href="javascript:;" attrval="不限">不限</a></label>
                                            <label><input   name="checkbox2" type="checkbox" value="特价房" /><a href="javascript:;">特价房</a></label>
                                            <label><input   name="checkbox2" type="checkbox" value="双人间" /><a href="javascript:;">双人间</a></label>
                                            <label><input  name="checkbox2" type="checkbox" value="单人间" /><a href="javascript:;">单人间</a></label>
                                            <label><input   name="checkbox2" type="checkbox" value="大床房" /><a href="javascript:;">大床房</a></label>
                                            <label><input   name="checkbox2" type="checkbox" value="套房" /><a href="javascript:;">套  房</a></label>
                                        </dd>
                                    </dl>
                                    <dl class="listIndex">
                                        <dt>酒店价格</dt>
                                        <dd>
                                            <label><a href="javascript:;" attrval="不限">不限</a></label>
                                            <label><input id="diyi" name="rprice" type="radio"   value="1" /><a href="javascript:;">100元以下</a></label>
                                            <label><input id="dier" name="rprice" type="radio"   value="2" /><a href="javascript:;">100-299元 </a></label>
                                            <label><input id="disan" name="rprice" type="radio"  value="3" /><a href="javascript:;">300-599元</a></label>
                                            <label><input id="disi" name="rprice" type="radio"   value="4" /><a href="javascript:;">600以上</a></label>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hasBeenSelected clearfix">
                        <div style="float:right;" class="eliminateCriteria">【清空全部】</div>
                        <dl>
                            <dt>已选条件：</dt>
                            <dd style="display:none" class="clearDd">
                                <div class="clearList"></div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>

            <div id='tabletest' class="layui-body">
                <table>
                    <thead>
                    <tr>
                        <th>房间号</th>
                        <th>房间类型</th>
                        <th>价格</th>
                        <th>房间简介</th>
                        <th>有无早餐</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody id="item">

                    <?php if(is_array($rooms)): $i = 0; $__LIST__ = $rooms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$room): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($room["rid"]); ?></td>
                            <td><?php echo ($room["rname"]); ?></td>
                            <td><?php echo ($room["rprice"]); ?></td>
                            <td><?php echo ($room["rmsg"]); ?></td>
                            <td><?php echo ($room["rfood"]); ?></td>
                            <td>
                                <!--<a  class="layui-btn ">预订</a>-->
                                <input type="hidden" name="Rid" value="<?php echo ($room["rid"]); ?>">
                                <a href="<?php echo U('homepage/book',array('rid'=>$room['rid']));?>" class="layui-btn">预订</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="/untitled/Hotel/Public/js/shaixuan.js"></script>
<script type="text/javascript" src="/untitled/Hotel/Public/js/date.js"></script>
<script type="text/javascript" src="/untitled/Hotel/Public/js/bootstrap.min.js"></script>
<script>

    $1102(function () {

        $1102("#btn").click(function () {
            $1102(function(){
                var rvalue =$1102('input:radio:checked').val();
                var cvalue=$1102('input:checkbox:checked').val();

                console.log(rvalue);
                console.log(cvalue);

                $1102.ajax({
                    url:"<?php echo U('Homepage/t_ajax');?>",
                    type:'post',
                    dataType:'json',
                    contentType:"application/x-www-form-urlencoded; charset=utf-8",
                    data:{
                        rname:cvalue,
                        rprice:rvalue

                    },
                    success:function(data) {
                        var  result;
                        for(var i=0;i<data.length;i++){
                            var id=data[i].rid;
                            console.log(id);
                            result+='<tr>';
                            result+='<td>' + data[i].rid + '</td>';
                            result+='<td>' + data[i].rname + '</td>';
                            result+='<td>' + data[i].rprice + '</td>';
                            result+='<td>' + data[i].rmsg+'</td>';
                            result+='<td>' + data[i].rfood +'</td>';
                            result+='<td  class="layui-btn">' + "<a href='<?php echo U('book');?>?rid="+data[i].rid+"'>预订</a>" +'</td>';
                            result+='</tr>';
                        }
                        // href="homepage/book.html/rid='+data[i].rid+'"
                        console.log(result);
                        $1102('#item').html(result);
                        // $1102.each(data.data, function (index, item) {
                        //     var tr;
                        //     tr = '<td>' + item.rid + '</td>'+
                        //          '<td>' + item.rname + '</td>'+
                        //          '<td>' + item.rprice + '</td>'+
                        //          '<td>' + item.rmsg+'</td>'+
                        //          '<td>' + item.rfood +'</td>'+
                        //          '<td>' + 操作 +'</td>';
                        //     console.log(tr);
                        //     $1102("#item").append('<tr>' + tr + '</tr>')
                        //     console.log(tr);
                        // })
                    },
                    error:function () {
                    }
                });
            });
        })
    })

    $1102(function () {
        $1102('#firstSelect').on('click', function () {
            $1102('.mask_calendar').show();
        });
        $1102('.mask_calendar').on('click', function (e) {
            if (e.target.className == "mask_calendar") {
                $1102('.calendar').slideUp(200);
                $1102('.mask_calendar').fadeOut(200);
            }
        })
        $1102('#firstSelect').calendarSwitch({
            selectors: {
                sections: ".calendar"
            },
            index: 4,      //展示的月份个数
            animateFunction: "slideToggle",        //动画效果
            controlDay: true,//知否控制在daysnumber天之内，这个数值的设置前提是总显示天数大于90天
            daysnumber: "90",     //控制天数
            comeColor: "#2EB6A8",       //入住颜色
            outColor: "#2EB6A8",      //离店颜色
            comeoutColor: "#E0F4F2",        //入住和离店之间的颜色

        });
        var b = new Date();
        var ye = b.getFullYear();
        var mo = b.getMonth() + 1;
        mo = mo < 10 ? "0" + mo : mo;
        var da = b.getDate();
        da = da < 10 ? "0" + da : da;
        $1102('#startDate').val(ye + '-' + mo + '-' + da);
        b = new Date(b.getTime() + 24 * 3600 * 1000);
        var ye = b.getFullYear();
        var mo = b.getMonth() + 1;
        mo = mo < 10 ? "0" + mo : mo;
        var da = b.getDate();
        da = da < 10 ? "0" + da : da;
        $1102('#endDate').val(ye + '-' + mo + '-' + da);
    });

    // $1102(function(){
    //     var value = $1102("#diyi").val();
    //     $1102.ajax({
    //         url:"<?php echo U('ajax');?>",
    //         type:'post',
    //         dataType:'json',
    //         data:{
    //             "rprice": value
    //         },
    //         success:function(result){
    //             //回调函数
    //         }
    //     });
    // });
</script>
</body>
</html>