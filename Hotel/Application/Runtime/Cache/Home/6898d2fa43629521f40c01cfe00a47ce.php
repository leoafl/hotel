<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<title>酒店服务</title>
<link href="/untitled/Hotel/Public/images/logo.ico" rel="SHORTCUT ICON" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/untitled/Hotel/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- menu -->
<link href="/untitled/Hotel/Public/css/component.css" rel="stylesheet" type="text/css"  />
<!-- //menu -->
<link href="/untitled/Hotel/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="/untitled/Hotel/Public/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- fonts -->
<link href='http://fonts.googleapis.com/css?family=Gabriela' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- //fonts -->
	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="/untitled/Hotel/Public/js/move-top.js"></script>
		<script type="text/javascript" src="/untitled/Hotel/Public/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
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
</head>
<body class="cbp-spmenu-push">
	 <!--top-header-->
		<!--bottom-->
		  <section class="button">
					<button id="showLeftPush" class="wow fadeInDown animated" data-wow-delay=".5s"><img src="/untitled/Hotel/Public/images/menu.png" alt=""></button>
		   </section>
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
				<h3>欢迎</h3>
				<div class="logo">
					<a class=" link link--yaku active" href="index.html"><span>首</span><span>页</span></a>
					<a class=" link link--yaku" href="about.html"><span>关</span><span>于</span><span>我</span><span>们</span></a>
					<a class=" link link--yaku" href="services.html"><span>酒</span><span>店</span><span>服</span><span>务</span></a>
					<!--<a class=" link link&#45;&#45;yaku" href="shortcodes.html"><span>S</span><span>h</span></a>-->
					<a class=" link link--yaku" href="gallery.html"><span>酒</span><span>店</span><span>景</span><span>色</span></a>
					<a class=" link link--yaku" href="contact.html"><span>联</span><span>系</span><span>我</span><span>们</span></a>
				</div>
				
					
			</nav>
		  
		<!-- Classie - class helper functions by @desandro https://github.com/desandro/classie -->
		<script src="/untitled/Hotel/Public/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				showRightPush = document.getElementById( 'showRightPush' ),
				body = document.body;

			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
				if( button !== 'showRightPush' ) {
					classie.toggle( showRightPush, 'disabled' );
				}
			}
		</script>
<!-- banner -->
<div class="banner ">
	<div class="banner-left page-head">
		<div class="grid__item wow fadeInDown animated" data-wow-delay=".5s">
			<h1><a class="link link--ilin" href="index.html"><span>文津  </span><span>酒店</span></a></h1>
			<hr class="colorgraph">
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- services -->
<div class="services">
	<div class="container">
		<h3 class="tittle">服务</h3>
			<div class="col-md-3 ser-first-grid text-center wow fadeInRight animated" data-wow-delay=".5s">
						<img src="/untitled/Hotel/Public/images/globe.png" alt=" "/>
						<h4>会员特权</h4>
						<p>入住次数累计尊享礼品特权
							首次即享优惠价
							两次享金卡价+10元小吧免单
							三次享钻卡价+20元小吧免单
							网络预定客人 好评即赠精美礼品
							</p>
			</div>
			<div class="col-md-3 ser-first-grid text-center wow fadeInUp animated" data-wow-delay=".5s">
						<img src="/untitled/Hotel/Public/images/sett.png" alt=" "/>
						<h4>会员等级</h4>
						<p>普通会员	金卡会员 钻石会员</p>
			</div>
			<div class="col-md-3 ser-first-grid text-center wow fadeInDown animated" data-wow-delay=".5s">
						<img src="/untitled/Hotel/Public/images/cale.png" alt=" "/>
						<h4>会员及OTA退房时间</h4>
						<p>普卡会员（入住1次）退房时间为12:30
							金卡会员（入住2次）退房时间为13:30
							钻卡会员（入住3次）退房时间为14:30
							OTA订单退房时间为12:00   自有渠道订单退房为14:30</p>
			</div>
			<div class="col-md-3 ser-first-grid text-center wow fadeInLeft animated" data-wow-delay=".5s">
						<img src="/untitled/Hotel/Public/images/peo.png" alt=" "/>
						<h4>百问百答（Q&A）</h4>
						<p>文津会员按次入住升级，入住自动成为美宿会员。三次即可享钻卡价，会员权益不清零不过期，累计次数还有惊喜礼品。
							文津会员全国通用，入住次数系统会自动记录，包含钟点房、午夜房、全天房、长包房</p>
			</div>
			<div class="clearfix"></div>
	</div>
</div>
<!-- //services -->
<div class="experience">
	<div class="container">
		<h3 class="tittle">我们最好的服务</h3>
		<p class="exp-text">热门活动</p>
		<div class="col-md-4 exp-grids wow fadeInRight animated" data-wow-delay=".5s">
			<div class="exp-gd-info one">
				<div class="exp-info-text hvr-rectangle-out">
					<h4>客房免费升级</h4>
					<p>钻卡会员不满意预订房型，每月可享一次免费升级礼遇。视酒店房态情况而定。</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 exp-grids wow fadeInUp animated" data-wow-delay=".5s">
			<div class="exp-gd-info two">
				<div class="exp-info-text hvr-rectangle-out">
					<h4>会员连住 住10免1</h4>
					<p>钻卡会员连续住10间免1间房费。
						5000积分免费兑换酒店最高级房型。</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 exp-grids wow fadeInLeft animated" data-wow-delay=".5s">
			<div class="exp-gd-info three">
				<div class="exp-info-text hvr-rectangle-out">
					<h4>生日节日礼券大放送</h4>
					<p>金卡、钻卡会员节假日和生日入住酒店，即送电子现金券。更有福利大抽奖。</p>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->
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
				 <input type="text" value="电子邮件" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
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
				 <li><a href="about.html">关于我们</a></li>
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
		 <p>Copyright &copy; 2018.Company name.安徽信息工程学院 <a href="http://www.aiit.edu.cn/" target="_blank" title="安徽信息工程学院">安徽信息工程学院</a> - Collect from <a href="http://www.aiit.edu.cn/" title="安徽信息工程学院" target="_blank">安徽信息工程学院</a></p>
	 </div>
 </div>
 <!-- for bootstrap working -->
 <script src="/untitled/Hotel/Public/js/bootstrap.js"></script>
 <!-- //for bootstrap working -->
 <!-- smooth scrolling -->
 <script type="text/javascript">
	 $(document).ready(function() {
		 /*
			 var defaults = {
			 containerID: 'toTop', // fading element id
			 containerHoverID: 'toTopHover', // fading element hover id
			 scrollSpeed: 1200,
			 easingType: 'linear'
			 };
		 */
		 $().UItoTop({ easingType: 'easeOutQuart' });
	 });
 </script>
 <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
 <!-- //smooth scrolling -->

</body>
</html>