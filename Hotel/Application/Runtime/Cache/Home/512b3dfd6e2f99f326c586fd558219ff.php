<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <!--<base href="<%=basePath%>">-->

    <title>客服</title>

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: url(img/bg.jpg);
        }

        h1 {
            height: 80px;
            background: rgba(0, 0, 0, .5);
            color: #fff;
            font-weight: 100;
            text-align: center;
            line-height: 80px;
        }

        #box {
            width: 800px;
            height: 600px;
            background: rgba(255, 255, 255, .5);
            margin: 100px auto 0;
        }

        .b_head {
            height: 60px;
            background: #7bb7f3;
        }

        .b_head .h_img {
            margin: 0 20px;
            float: left;
        }

        .b_head .h_span {
            color: #fff;
            line-height: 60px;
            font-size: 24px;
            float: left;
        }

        .b_body {
            width: 760px;
            height: 400px;
            padding: 20px;
            overflow: auto;
        }

        .rotWord {
            overflow: hidden;
        }

        .rotWord span {
            width: 40px;
            height: 40px;
            background: url(img/rot.png);
            float: left;
        }

        .rotWord p {
            float: left;
            padding: 10px;
            background: #d8d8ff;
            margin-left: 10px;
            border-radius: 8px;
            word-break: break-all;
            max-width: 220px;
        }

        #rootchat {
            float: left;
            padding: 10px;
            background: #d8d8ff;
            margin-left: 10px;
            border-radius: 8px;
            word-break: break-all;
            max-width: 220px;
        }

        .myWord {
            overflow: hidden;
        }

        .myWord span {
            width: 40px;
            height: 40px;
            float: right;
        }

        .myWord p {
            float: right;
            padding: 10px;
            background: #fff;
            margin-right: 10px;
            border-radius: 8px;
            word-break: break-all;
            max-width: 220px;
        }

        #me {
            float: right;
            padding: 10px;
            background: #d8d8ff;
            margin-left: 10px;
            border-radius: 8px;
            word-break: break-all;
            max-width: 220px;
        }

        .b_footer {
            width: 760px;
            height: 60px;
            padding: 20px;
        }

        #input {
            width: 620px;
            height: 60px;
            background: rgba(0, 0, 0, .1);
            border-radius: 8px;
            text-indent: 10px;
            color: black;
            float: left;
            font-size: 18px;
            outline: none;
            overflow: hidden;
            border: none;
        }

        #btn {
            width: 100px;
            height: 60px;
            background: #78787e;
            border-radius: 8px;
            user-select: none;
            text-align: center;
            line-height: 60px;
            float: right;
            font-size: 18px;
            cursor: pointer;
        }

        .b_body::-webkit-scrollbar {
            width: 4px;
        }

        .b_body::-moz-scrollbar {
            width: 4px;
        }

        .b_body::-webkit-scrollbar-track {
            background-color: #808080;
            border-radius: 2em;
        }

        .b_body::-webkit-scrollbar-thumb {
            background-color: #03a9f4;
            borde-radius: 2em;
        }

        .b_body::-webkit-scrollbar-track {
            background-color: #808080;
            borde-radius: 2em;
        }

        .b_body::-webkit-scrollbar-thumb {
            background-color: #03a9f4;
            border-radius: 2em;
        }
    </style>
</head>

<body>

<div id="box">
    <div class="b_head">
        <span class="h_span">机器人</span>
    </div>
    <div class="b_body">
        <div class="rotWord">
            <span></span>
            <p>Hello,你好，学生管理系统客服</p>
        </div>

    </div>

    <div class="b_footer">
        <input id="input" type="text" autocoplete="off" />
        <div id="btn" onclick="action()">发送</div>
    </div>
</div>
<script type="text/javascript" src="/PHPstormProject/thinkphp/Hotel/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
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
            url : "<?php echo U('demo/demo');?>",
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