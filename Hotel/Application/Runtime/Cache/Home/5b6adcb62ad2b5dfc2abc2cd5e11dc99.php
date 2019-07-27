<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户登录</title>
    <!--/PHPstormProject/TP_hotel/Hotel/Public模板替换-->
    <link rel="stylesheet" type="text/css" href="/PHPstormProject/TP_hotel/Hotel/Public/css/styles.css">
    <link rel="stylesheet" href="/PHPstormProject/TP_hotel/Hotel/Public/layui/css/layui.css">
</head>
<body>
<div class="htmleaf-container">
    <div class="wrapper">
        <div class="container">
            <h1>欢迎，请登录</h1>

            <form class="form" action="userLogin" method="post">
                <input type="text"  name="username" placeholder="请输入账号">
                <input type="password" name="password" placeholder="请输入密码">
                <input type="Submit"  name="Submit" value="登录"/>
                <a href="<?php echo U('register/index');?>">
                    <input type="button"  value="注册"/>
                </a>
                <a href="<?php echo U('login/lost');?>">
                    <input type="button"  value="忘记密码"/>
                </a>
                <a href="<?php echo U('homepage/index');?>">
                    <input type="button"  value="返回首页"/>
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

<script src="/PHPstormProject/TP_hotel/Hotel/Public/js/jquery-2.1.1.min.js"></script>
<script>
    $('#login-button').click(function (event) {
        event.preventDefault();
        $('form').fadeOut(500);
        $('.wrapper').addClass('form-success');
    });


</script>
</body>
</html>