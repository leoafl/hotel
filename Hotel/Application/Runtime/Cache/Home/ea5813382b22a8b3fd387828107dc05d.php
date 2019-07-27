<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>文津酒店官网</title>
    <link href="/untitled/Hotel/Public/images/logo.ico" rel="SHORTCUT ICON"/>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <!-- //for-mobile-apps -->
    <link href="/untitled/Hotel/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- menu -->
    <link href="/untitled/Hotel/Public/css/component.css" rel="stylesheet" type="text/css"/>
    <!-- //menu -->
    <link href="/untitled/Hotel/Public/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="/untitled/Hotel/Public/layui/css/layui.css" media="all">
    <!-- js -->
    <script type="text/javascript" src="/untitled/Hotel/Public/js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Gabriela' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <!-- //fonts -->
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="/untitled/Hotel/Public/js/move-top.js"></script>
    <script type="text/javascript" src="/untitled/Hotel/Public/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <!--animate-->
    <link href="/untitled/Hotel/Public/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="/untitled/Hotel/Public/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!--客服-->
    <link rel="stylesheet" type="text/css" href="/untitled/Hotel/Public/css/kefu.css">

</head>
<body class="cbp-spmenu-push">
<!--top-header-->
<!--bottom-->
<section class="button">
    <button id="showLeftPush"><img src="/untitled/Hotel/Public/images/menu.png" alt=""></button>
</section>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <h3>欢迎</h3>
    <div class="logo">
        <a class=" link link--yaku active" href="index.html"><span>首</span><span>页</span></a>
        <a class=" link link--yaku"
           href="<?php echo U('homepage/about');?>"><span>关</span><span>于</span><span>我</span><span>们</span></a>
        <a class=" link link--yaku" href="services.html"><span>酒</span><span>店</span><span>服</span><span>务</span></a>
        <!--<a class=" link link&#45;&#45;yaku" href="shortcodes.html"><span>S</span><span>h</span></a>-->
        <a class=" link link--yaku" href="gallery.html"><span>酒</span><span>店</span><span>景</span><span>色</span></a>
        <a class=" link link--yaku" href="contact.html"><span>联</span><span>系</span><span>我</span><span>们</span></a>
    </div>
</nav>

<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
<script src="/untitled/Hotel/Public/js/classie.js"></script>
<script>
    var menuLeft = document.getElementById('cbp-spmenu-s1'),
        showLeftPush = document.getElementById('showLeftPush'),
        showRightPush = document.getElementById('showRightPush'),
        body = document.body;

    showLeftPush.onclick = function () {
        classie.toggle(this, 'active');
        classie.toggle(body, 'cbp-spmenu-push-toright');
        classie.toggle(menuLeft, 'cbp-spmenu-open');
        disableOther('showLeftPush');
    };

    function disableOther(button) {
        if (button !== 'showLeftPush') {
            classie.toggle(showLeftPush, 'disabled');
        }
        if (button !== 'showRightPush') {
            classie.toggle(showRightPush, 'disabled');
        }
    }
</script>
<!-- banner -->
<div class="banner">
    <div class="banner-left">
        <div class="grid__item wow fadeInDown animated" data-wow-delay=".5s">
            <h1><a class="link link--ilin" href="index.html"><span>文津  </span><span> 酒店</span></a></h1>
            <hr class="colorgraph">
        </div>
        <div class="clearfix"></div>
        <div class="banner-info wow fadeInUp animated" data-wow-delay=".5s">
            <h3></h3>
            <p>尊敬的客户，欢迎您来到文津酒店<br>
                暖暖冬日，您的满意是我们前进的动力</p>
        </div>
        <!--<div class="social-pos wow fadeInDown animated" data-wow-delay=".5s">-->
        <!--<ul>-->
        <!--<li><a class="ico1" href="#"></a></li>-->
        <!--<li><a class="ico2" href="#"></a></li>-->
        <!--<li><a class="ico3" href="#"></a></li>-->
        <!--</ul>-->
        <!--</div>-->

        <!--<div class="social-pos wow fadeInDown animated " data-wow-delay=".5s">-->
        <!--<a href="#" class="">个人中心</a>-->
        <!--</div>-->

        <div class="social-pos wow fadeInDown animated" data-wow-delay=".5s">
            <a href="<?php echo U('login/index');?>" class="#" style="font-size: 18px"><?php echo ($login); ?></a>
            <a href="<?php echo U('register/index');?>" class="" style="font-size: 18px"><?php echo ($register); ?></a>
            <a href="<?php echo U('personal/index');?>" class="#" style="font-size: 18px"><?php echo ($personal); ?></a>
            <a href="<?php echo U('login/logout');?>" class="" style="font-size: 18px"><?php echo ($logout); ?></a>
        </div>

        <div class="banner-right wow fadeInRight animated" data-wow-delay=".5s">
            <div class="banner-text">
                <h3>房间搜索</h3>
                <form class="layui-form" action="<?php echo U('homepage/search');?>">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label"
                                   style="width: 100px;font-weight: 800;text-align: left;font-size: 16px">入住日期</label>
                            <div class="layui-input-inline">
                                <input type="text" class="layui-input" name="Ogtime" id="test1" placeholder="请选择入住日期">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label"
                                   style="width: 100px;font-weight: 800;text-align: left;font-size: 16px">退房日期</label>
                            <div class="layui-input-inline">
                                <input type="text" class="layui-input" name="Oltime" id="test2" placeholder="请选择退房日期">
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="立即搜索">
                </form>
            </div>
        </div>
    </div>
</div>

<!--客服-->
<div class="scrollsidebar" id="scrollsidebar">
    <div class="side_content">
        <div class="side_list">
            <div class="side_title">
                <a title="隐藏" class="close_btn"><span>关闭</span></a>
            </div>
            <div class="side_center">
                <div class="custom_service">
                    <p>
                        <a target="_blank" href="tencent://message/?uin=575920500&Site=qq&Menu=yes">
                            <!--<img border="0" src="http://wpa.qq.com/pa?p=2:8983659:41"/>-->
                            <img style="border-radius: 5px" src="/untitled/Hotel/Public/img/qq.png"/>
                        </a>
                    </p>
                </div>
                <div class="other">
                    <p><img src="/untitled/Hotel/Public/img/2wm.jpg" width="120"/></p>
                    <p>客户服务热线</p>
                    <p>0755-400-12345</p>
                </div>
                <div class="msgserver">
                    <p>
                        <a href="###">联系我们</a>
                    </p>
                </div>
            </div>
            <div class="side_bottom"></div>
        </div>
    </div>
    <div class="show_btn"><span>在线客服</span></div>
</div>
<script type="text/javascript" src="/untitled/Hotel/Public/js/kefu.js"></script>
<!--主体-->
<div class="banner-bot">
    <div class="container">
        <div class="col-md-3 bottom-one btm-two wow fadeInLeft animated" data-wow-delay=".5s">
            <h3>美丽的景色</h3>
            <p> 本酒店位于长江边，优美的风景，宜人的景色<br>
                给您带来愉悦的享受</p>
        </div>
        <div class="col-md-3 bottom-gd wow fadeInRight animated" data-wow-delay=".5s">
            <div class="item item-type-double">
                <div class="item-hover">
                    <div class="item-info">
                        <div class="date">长江</div>
                        <div class="line"></div>
                        <div class="headline">黄昏的长江</div>
                        <div class="line"></div>
                    </div>
                    <div class="mask"></div>
                </div>
                <div class="item-img"><img class="img-responsive" src="/untitled/Hotel/Public/images/AIIT7.jpg" alt=" "/></div>
            </div>
        </div>
        <div class="col-md-3 bottom-one wow fadeInLeft animated" data-wow-delay=".5s">
            <h3>美丽的景色</h3>
            <p> 夜晚的长江，伴着淡淡的魅力<br>
                您走出门即可享受大自然的馈赠</p>
        </div>
        <div class="col-md-3 bottom-gd wow fadeInRight animated" data-wow-delay=".5s">
            <div class="item item-type-double">
                <div class="item-hover">
                    <div class="item-info">
                        <div class="date">长江</div>
                        <div class="line"></div>
                        <div class="headline">夜晚</div>
                        <div class="line"></div>
                    </div>
                    <div class="mask"></div>
                </div>
                <div class="item-img"><img class="img-responsive" src="/untitled/Hotel/Public/images/AIIT9.jpg" alt=" "/></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="content">
    <div class="content-wid">
        <div class="col-md-5 content-left wow fadeInRight animated" data-wow-delay=".5s">
            <ul id="sti-menu" class="sti-menu">
                <li data-hovercolor="#fff">
                    <a href="#">
                        <h4 data-type="mText" class="sti-item">最好的服务 </h4>
                        <p data-type="sText" class="sti-item">您的满意是我们前进的动力</p>
                        <span data-type="icon" class="sti-icon glyphicon glyphicon-pencil sti-item"></span>
                    </a>
                </li>
                <li data-hovercolor="#fff">
                    <a href="#">
                        <h4 data-type="mText" class="sti-item">最好的位置</h4>
                        <p data-type="sText" class="sti-item">交通便利 风景优美</p>
                        <span data-type="icon" class="sti-icon glyphicon glyphicon-map-marker sti-item"></span>
                    </a>
                </li>
            </ul>

        </div>
        <div class="col-md-7 content-right wow fadeInLeft animated" data-wow-delay=".5s">

            <div class="wrapper">
                <div class="link" href="#"></div>
                <div class="overlay">
                    <div class="arrow-left"></div>
                    <div class="rectangle"></div>
                </div>
                <div class="description">
                    <h3>位置</h3>
                    <p>安徽信息工程学院北门<br>
                        芦花塘公园<br></p>
                </div>
                <img class="img-responsive" src="/untitled/Hotel/Public/images/map.jpg" alt=" "/>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="content-bottom">
    <div class="container">
        <div class="col-md-6 con-btm-right wow fadeInRight animated" data-wow-delay=".5s">
            <h4>想要了解我们吗？</h4>
            <p>企业愿景：成为行业首屈一指的中高端酒店品牌</p>
            <a href="about.html" class="hvr-outline-out button2">更多关于我们</a>
        </div>
        <div class="col-md-6 con-btm-gds wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="text-center">
                <img src="/untitled/Hotel/Public/images/test1.png" alt=" "/>
                <h3>总经理（蔡兵）</h3>
            </div>
            <div class="stars-rate">
				<span class="starRating">
					<input id="rating5" type="radio" name="rating" value="5">
					<label for="rating5">5</label>
					<input id="rating4" type="radio" name="rating" value="4" checked>
					<label for="rating4">4</label>
					<input id="rating3" type="radio" name="rating" value="3">
					<label for="rating3">3</label>
					<input id="rating2" type="radio" name="rating" value="2">
					<label for="rating2">2</label>
					<input id="rating1" type="radio" name="rating" value="1">
					<label for="rating1">1</label>
				</span>
            </div>
            <div class="text-center">
                <p> 携手员工给您一个温馨的家</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="we-focus">
    <div class="container">
        <div class="focus-grids">
            <div class="col-md-6 focus-grid wow fadeInDown animated" data-wow-delay=".5s">
                <h3>服务展示</h3>
                <p>热门活动<br>会员特权<br>会员等级<br>百问百答（Q&A）</p>
            </div>
            <div class="col-md-3 focus-grid wow fadeInDown animated" data-wow-delay=".5s">
                <div class="focus-border">
                    <div class="focus-layout">
                        <div class="focus-image a">
                            <span class="glyphicon glyphicon-road" aria-hidden="true"></span>
                        </div>
                        <h4>交通便利</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 focus-grid wow fadeInDown animated" data-wow-delay=".5s">
                <div class="focus-border">
                    <div class="focus-layout">
                        <div class="focus-image b"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </div>
                        <h4>服务全面</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 focus-grid wow fadeInUp animated" data-wow-delay=".5s">
                <div class="focus-border">
                    <div class="focus-layout">
                        <div class="focus-image c"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                        </div>
                        <h4>客房品质</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 focus-grid wow fadeInUp animated" data-wow-delay=".5s">
                <div class="focus-border">
                    <div class="focus-layout">
                        <div class="focus-image d"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                        </div>
                        <h4>景色优美</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 focus-grid wow fadeInUp animated" data-wow-delay=".5s">
                <div class="focus-border">
                    <div class="focus-layout">
                        <div class="focus-image e"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                        </div>
                        <h4>业务范围</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-3 focus-grid wow fadeInUp animated" data-wow-delay=".5s">
                <div class="focus-border">
                    <div class="focus-layout">
                        <div class="focus-image f"><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>
                        </div>
                        <h4>餐厅饮食</h4>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="experience">
    <div class="container">
        <h3>客房展示</h3>
        <p class="exp-text">含有奢华-雅致大床房及双床房，奢华家庭房，行政大床房<br>
            优选大床房及双床房，特价房等</p>
        <div class="col-md-4 exp-grids wow fadeInRight animated" data-wow-delay=".5s">
            <div class="exp-gd-info one">
                <div class="exp-info-text hvr-rectangle-out">
                    <h4>特价房</h4>
                    <p>每天推出限量特价房，数量有限,品质保证<br><br><br><br><br></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 exp-grids wow fadeInUp animated" data-wow-delay=".5s">
            <div class="exp-gd-info two">
                <div class="exp-info-text hvr-rectangle-out">
                    <h4>雅致大床房</h4>
                    <p>美丽的景色，宜人的环境，豪华大床给您舒适的睡眠<br><br><br><br><br></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 exp-grids wow fadeInLeft animated" data-wow-delay=".5s">
            <div class="exp-gd-info three">
                <div class="exp-info-text hvr-rectangle-out">
                    <h4>奢华家庭房</h4>
                    <p>亲子家庭房，为家庭旅行带来美好感受，为您的旅行添加色彩<br><br><br><br><br></p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="col-md-4 footer-grids wow fadeInRight animated" data-wow-delay=".5s">
            <h3>联系我们</h3>
            <p>安徽省芜湖市弋江区芦花塘公园-安徽信息工程学院文津校区北门</p>
            <!--<ul>-->
            <!--<li><a class="ico1" href="#"></a></li>-->
            <!--<li><a class="ico2" href="#"></a></li>-->
            <!--<li><a class="ico3" href="#"></a></li>-->
            <!--<li><a class="ico4" href="#"></a></li>-->
            <!--</ul>-->
        </div>
        <div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
            <h3>订阅我们</h3>
            <form>
                <input type="text" value="电子邮件" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="提交">
            </form>
            <div id="adminlogin">
                <a href="<?php echo U('admin/login/index');?>">登录后台</a>
            </div>

        </div>
        <div class="col-md-4 footer-grids wow fadeInLeft animated" data-wow-delay=".5s">
            <h3>地址</h3>
            <p> 安徽省芜湖市 <br>
                弋江区安徽信息工程学院文津校区<br>
                移动电话: +86 182 2661 1159<br>
                固定电话: +86 182 2661 1159<br>
                传真: +86 182 2661 1159</p>
            <p>邮箱 : <a href="mailto:info@example.com">913035696@qq.com</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="footer-bot wow fadeInRight animated" data-wow-delay=".5s">
    <div class="container">
        <div class="logo2">
            <h2><a href="index.html">文津酒店</a></h2>
        </div>
        <div class="ftr-menu">
            <ul>
                <li><a href="index.html">首页 </a></li>
                <li><a href="<?php echo U('homepage/about');?>">关于我们</a></li>
                <li><a href="services.html">酒店服务</a></li>
                <li><a href="gallery.html">酒店景色</a></li>
                <li><a href="contact.html">联系我们</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="copy-right wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <p>Copyright &copy; 2018.Company name.安徽信息工程学院 <a href="http://www.aiit.edu.cn/" target="_blank"
                                                          title="安徽信息工程学院">安徽信息工程学院</a> - Collect from <a
                href="http://www.aiit.edu.cn/" title="安徽信息工程学院" target="_blank">安徽信息工程学院</a></p>
    </div>
</div>
<!-- for bootstrap working -->
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->

<script type="text/javascript" src="/untitled/Hotel/Public/js/jquery.iconmenu.js"></script>
<script src="/untitled/Hotel/Public/js/bootstrap.js"></script>
<script src="/untitled/Hotel/Public/layui/layui.js"></script>
<script type="text/javascript">
    layui.use('laydate', function () {
        var laydate = layui.laydate;

        //常规用法
        laydate.render({
            elem: '#test1'
        });
        laydate.render({
            elem: '#test2'
        });
    });
    $(function () {
        $('#sti-menu').iconmenu({
            animMouseenter: {
                'mText': {speed: 400, easing: 'easeOutExpo', delay: 140, dir: 1},
                'sText': {speed: 400, easing: 'easeOutExpo', delay: 0, dir: 1},
                'icon': {speed: 800, easing: 'easeOutBounce', delay: 280, dir: 1}
            },
            animMouseleave: {
                'mText': {speed: 400, easing: 'easeInExpo', delay: 140, dir: 1},
                'sText': {speed: 400, easing: 'easeInExpo', delay: 280, dir: 1},
                'icon': {speed: 400, easing: 'easeInExpo', delay: 0, dir: 1}
            }
        });
    });
    $(document).ready(function () {
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>


</body>
</html>