<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员登录</title>
    <!--/untitled/Hotel/Public模板替换-->
    <link rel="stylesheet" type="text/css" href="/untitled/Hotel/Public/css/styles.css">
    <link rel="stylesheet" href="/untitled/Hotel/Public/layui/css/layui.css">
    <style>
        .form input{
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="htmleaf-container">
    <div class="wrapper">
        <div class="container">
            <h1>管理员，请登录</h1>

            <form class="form" action="adminLogin" method="post">
                <input type="text"  name="adminName" placeholder="请输入管理员账号">
                <input type="password" name="adminPassword" placeholder="请输入密码">
                <input type="Submit"  name="Submit" value="登录"/>
                <input type="button" name="button" onclick="btn()" value="返回首页"/>
                <!--<a href="<?php echo U('login/index');?>">-->
                    <!--<input type="button"  value="注册"/>-->
                <!--</a>-->
                <!--<a href="<?php echo U('login/lost');?>">-->
                    <!--<input type="button"  value="忘记密码"/>-->
                <!--</a>-->
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
function btn() {
    location.href="<?php echo U('home/homepage/index');?>";
}

</script>
</body>
</html>