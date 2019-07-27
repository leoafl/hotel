<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <!--/untitled/Hotel/Public模板替换-->
    <link rel="stylesheet" type="text/css" href="/untitled/Hotel/Public/css/styles.css">
    <link rel="stylesheet" href="/untitled/Hotel/Public/layui/css/layui.css">
</head>
<body>
<div class="htmleaf-container">
    <div class="wrapper">
        <div class="container">
            <h1>欢迎，找回密码</h1>

            <form class="form" action="getLost" method="post">
                <input type="text" name="Uname" placeholder="请输入账号" required lay-verify="required" autocomplete="off">
                <input type="text" name="Uemail" placeholder="请输入绑定的邮箱" required lay-verify="required" autocomplete="off">
                <input type="Submit" name="Submit" value="找回密码"/>
                <a href="<?php echo U('login/index');?>">
                    <input type="button" name="button" value="返回"/>
                </a>
            </form>
        </div>

        <ul class="bg-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</div>

<script src="/untitled/Hotel/Public/js/jquery-2.1.1.min.js"></script>
<script>
    $('#login-button').click(function (event) {
        event.preventDefault();
        $('form').fadeOut(500);
        $('.wrapper').addClass('form-success');
    });

    function Regbtn() {
        location.href = "";
    }

</script>
</body>
</html>