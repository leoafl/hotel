<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<title>酒店景色</title>
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
<link rel="stylesheet" href="/untitled/Hotel/Public/css/swipebox.css">
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
<!-- swipe box js -->
	<script src="/untitled/Hotel/Public/js/jquery.swipebox.min.js"></script>
	    <script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!-- //swipe box js -->
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
<!-- contact -->
<div class="gallery">
	<div class="container">
		<h3 class="tittle">景色</h3>
				<div class="gallery-grids">
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="/untitled/Hotel/Public/images/AIIT18.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/untitled/Hotel/Public/images/AIIT18.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>夕阳</h4>
										<span class="separator"></span>
										<p>落尽了碧叶的树林，枝条相交，如一张巨网，兜住了悠悠西下的夕阳。</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="/untitled/Hotel/Public/images/AIIT17.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/untitled/Hotel/Public/images/AIIT17.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>雨水</h4>
										<span class="separator"></span>
										<p>天街小雨润如酥，草色遥看近却无。</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="/untitled/Hotel/Public/images/AIIT4.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/untitled/Hotel/Public/images/AIIT4.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Royal Shine</h4>
										<span class="separator"></span>
										<p>Welcome to Wen Jin Hotel.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="/untitled/Hotel/Public/images/AIIT7.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/untitled/Hotel/Public/images/AIIT7.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Royal Shine</h4>
										<span class="separator"></span>
										<p>Welcome to Wen Jin Hotel.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInUp animated" data-wow-delay=".5s">
						<a href="/untitled/Hotel/Public/images/AIIT16.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/untitled/Hotel/Public/images/AIIT16.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Royal Shine</h4>
										<span class="separator"></span>
										<p>Welcome to Wen Jin Hotel.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3 baner-top ban-mar wow fadeInDown animated" data-wow-delay=".5s">
						<a href="/untitled/Hotel/Public/images/AIIT13.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/untitled/Hotel/Public/images/AIIT13.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Royal Shine</h4>
										<span class="separator"></span>
										<p>Welcome to Wen Jin Hotel.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInRight animated" data-wow-delay=".5s">
						<a href="/untitled/Hotel/Public/images/AIIT18.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/untitled/Hotel/Public/images/AIIT10.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Royal Shine</h4>
										<span class="separator"></span>
										<p>Welcome to Wen Jin Hotel.</p>
										<span class="separator"></span>

									</div>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-6 baner-top wow fadeInLeft animated" data-wow-delay=".5s">
						<a href="/untitled/Hotel/Public/images/AIIT2.jpg" class="b-link-stripe b-animate-go  swipebox">
							<div class="gal-spin-effect vertical ">
								<img src="/untitled/Hotel/Public/images/AIIT2.jpg" alt=" " />
								<div class="gal-text-box">
									<div class="info-gal-con">
										<h4>Royal Shine</h4>
										<span class="separator"></span>
										<p>Welcome to Wen Jin Hotel.</p>
										<span class="separator"></span>
										
									</div>
								</div>
							</div>
						</a>
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //gallery -->
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