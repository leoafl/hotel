<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<title>关于我们</title>
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
			<h1><a class="link link--ilin" href="index.html"><span>文津</span><span>酒店</span></a></h1>
			<hr class="colorgraph">
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- contact -->
<div class="about-page">
	<div class="container">
		<h3 class="tittle">关于我们</h3>
            <div class="col-md-6 about_img wow fadeInRight animated" data-wow-delay=".5s">
				<img src="/untitled/Hotel/Public/images/g1.jpg" alt="">
            </div>
			<div class="col-md-6 about_img about_img_left">
				<div class="choose-grid wow fadeInRight animated" data-wow-delay=".5s">
					<h4>关于发展</h4>
					<p>绝不做不顾质量的扩张，踏踏实实的发展集团旗下不同定位的多个品牌酒店。</p>
				</div>
				<div class="choose-grid wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>关于香氛</h4>
					<p>我们专注于香氛系统，由多位国际级香薰大师特别调制，
						导入我们专利研发的香氛系统中，为您提供充满温馨香氛的个性化空间。</p>
				</div>
            </div>
			<div class="clearfix"></div>
		<p class="para_abt wow fadeInUp animated" data-wow-delay=".5s">企业愿景：成为行业首屈一指的中高端酒店品牌<br>
			企业使命：引领全国经济型酒店转型升级 <br>核心价值观：革新分享 共创共赢 </p>
	</div>
</div>
<div class="team">
	<div class="container">
		<h3 class="tittle">团队</h3>
		<div class="col-md-3 team-gds wow fadeInLeft animated" data-wow-delay=".5s">
			<div class="gal-grid-rev vertical">
				<div class="img-box-content"><img src="/untitled/Hotel/Public/images/person2.jpg" alt=" " /></div>
					<div class="gal-text-box">
						<div class="info-gal-con">
							<h4>孔燕</h4>
						</div>
					</div>
			</div>
			<p>人事部孔经理</p>
		</div>
		<div class="col-md-3 team-gds wow fadeInUp animated" data-wow-delay=".5s">
			<div class="gal-grid-rev vertical">
				<div class="img-box-content"><img src="/untitled/Hotel/Public/images/person1.jpg" alt=" " /></div>
					<div class="gal-text-box">
						<div class="info-gal-con">
							<h4>柴子凡</h4>		-->
							<!--</div>-->
						</div>
					</div>
			</div>
			<p>餐饮部柴经理</p>
		</div>
		<div class="col-md-3 team-gds wow fadeInDown animated" data-wow-delay=".5s">
			<div class="gal-grid-rev vertical">
				<div class="img-box-content"><img src="/untitled/Hotel/Public/images/person3.jpg" alt=" " /></div>
					<div class="gal-text-box">
						<div class="info-gal-con">
							<h4>马良志</h4>
						</div>
					</div>
			</div>
			<p>客房部马经理</p>
		</div>
		<div class="col-md-3 team-gds wow fadeInRight animated" data-wow-delay=".5s">
			<div class="gal-grid-rev vertical">
				<div class="img-box-content"><img src="/untitled/Hotel/Public/images/person4.jpg" alt=" " /></div>
					<div class="gal-text-box">
						<div class="info-gal-con">
							<h4>危劲松</h4>
						</div>
					</div>
			</div>
			<p>危副总经理</p>
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