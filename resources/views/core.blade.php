@if($ajax)
	<script type="text/javascript">
        fetch("/stats?page="+window.location.href, {
          method: 'GET',
          credentials: "same-origin",
          headers: { 
                  "Accept": "application/json",
                  "X-Requested-With": "XMLHttpRequest",
                  "X-CSRF-Token": $('[name~=csrf-token][content]').attr("content")
           }})
	</script>

    @yield("content")
@else
<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="en" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	@php

	$canonical = Request::url();
	if(substr($canonical, -1) == "/") $canonical = substr($canonical, 0, -1);

	@endphp

	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="author" content="CodeBuilder, Inc.">

	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <meta name="robots" content="index,follow" />
	    <meta http-equiv="content-language" content="en" />
	    <meta name="description" content="@yield('description')" />
	    <meta name="keywords" content="Software Engineering Solutions, Web Development, Graphic Design, Online Marketing, MySQL, PHP, Python, Ruby on Rails, Laravel, Composer, Wordpress, Node.JS" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
	    <link rel="canonical" href="@php echo $canonical; @endphp"/>
	    <meta property="og:type" content="website" />
	    <meta property="og:image:width" content="1596" />
	    <meta property="og:image:height" content="591" />
	    <meta property="og:image:type" content="image/png" />
	    <meta property="og:image" content="/images/18491742_426884401007841_2404537221914163388_o.png" />
	    <meta property="article:publisher" content="https://www.facebook.com/codebuilder.us" />
	    <meta property="og:url" content="@php echo Request::url(); @endphp" />
	    <meta property="og:title" content="@yield('title')" />
	    <meta property="og:description" content="@yield('description')" />
	    <meta property="og:site_name" content="CodeBuilder Inc." />
	    <meta property="og:updated_time" content="" />


		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/images/mandala4_75.png">

		<!-- Bootstrap core CSS -->
		<link href="/template/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="/template/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="/template/plugins/rs-plugin/css/settings.css" rel="stylesheet">
		<link href="/template/css/animations.css" rel="stylesheet">
		<link href="/template/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
		<link href="/template/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
		<link href="/template/plugins/hover/hover-min.css" rel="stylesheet">		
		<link href="/template/plugins/morphext/morphext.css" rel="stylesheet">
		<link href="/js/noty-3.1.0/lib/noty.css" rel="stylesheet">
		<script src="/js/noty-3.1.0/lib/noty.js" type="text/javascript"></script>
		<script src="/js/davidshimjs-qrcodejs-04f46c6/qrcode.min.js" type="text/javascript"></script>

		<!-- The Project's core CSS file -->
		<link href="/template/css/style.css" rel="stylesheet" >
		<!-- The Project's Typography CSS file, includes used fonts -->
		<!-- Used font for body: Roboto -->
		<!-- Used font for headings: Raleway -->
		<link href="/template/css/typography-default.css" rel="stylesheet" >
		<!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
		<link href="/template/css/skins/light_blue.css" rel="stylesheet">
		<link href="/css/datepicker.css" rel="stylesheet" >
		

		<!-- Custom css --> 
		<link href="/template/css/custom.css" rel="stylesheet">


	</head>

	<!-- body classes:  -->
	<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
	<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
	<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
	<!-- "gradient-background-header": applies gradient background to header -->
	<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
	<body class="no-trans front-page transparent-header  ">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NLX5ML2GVC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NLX5ML2GVC');
</script>

		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>


		<!-- page wrapper start -->
		<!-- ================ -->
		<div class="page-wrapper">
		
			<!-- header-container start -->
			<div class="header-container">
	            <button type="button" class="hamburger is-closed" data-toggle="offcanvas" style="display: none;">
	                <span class="hamb-top"></span>
	    			<span class="hamb-middle"></span>
					<span class="hamb-bottom"></span>
	            </button>
				<!-- header start -->
				<!-- classes:  -->
				<!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
				<!-- "dark": dark version of header e.g. class="header dark clearfix" -->
				<!-- "full-width": mandatory class for the full-width menu layout -->
				<!-- "centered": mandatory class for the centered logo layout -->
				<!-- ================ --> 
				<header class="header  fixed   dark clearfix">
					<div class="container">
						<div class="row">
							<div class="col-md-2 ">
								<table style="position: relative; top: 10px; " id="logo_table">
									<tbody style="background: transparent !important;">
										<tr>
											<td style="width: 60px;">
												<img src="/images/mandala4_75.png" style="max-width: 55px;" id="logo_img">
											</td>
											<td id="logo_txt_td">
												<!-- logo -->
												<div id="logo" class="logo" style="min-width: 200px !important;">
													<h3 style="margin-bottom: 0px;" class="title logo-font object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"><span class="text-default">CodeBuilder</span> Inc.</h3>
												</div>
												<!-- name-and-slogan -->
												<div class="site-slogan">
													&nbsp;Software Engineering Solutions
												</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-md-10" style="max-height: 72px;">
					
								<!-- header-right start -->
								<!-- ================ -->
								<div class="header-right clearfix">
									
								<!-- main-navigation start -->
								<!-- classes: -->
								<!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
								<!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
								<!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
								<!-- ================ -->
								<div class="main-navigation  animated with-dropdown-buttons">
									<style>
									@media all and (max-width: 600px)
									{
									    /* styles here */
									    .navbar-default {display: none; }
									    .container { min-height: 78px; }
									    #logo_table { position: relative; top: 0px !important; }
									    .site-slogan { text-align: left !important; }
									    #logo_img { position: relative; top: 5px; }
									    #logo_txt_td { padding-bottom: 5px; }
									    .hamburger { display: block !important; }
									}
									</style>


									    <div id="wrapper">
									        <div class="overlay"></div>
									    
									        <!-- Sidebar -->
									        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" style="display: none;">
									            <ul class="nav sidebar-nav">
									                <li class="sidebar-brand">
										<table style="position: relative; top: 10px; width: 150%;" id="logo_table">
											<tbody style="background: transparent !important;">
											<tr>
											<td style="width: 60px;">
											<img src="/images/mandala4_75.png" style="max-width: 45px; left: 5px; position: relative; top: 8px;" id="logo_img" alt="CodeBuilder, Inc. Web Development Software Engineering Developers & Consultants.">
											</td>
											<td id="logo_txt_td">
											<!-- logo -->
											<div id="logo" class="logo">
												<h3 style="margin-bottom: 0px;" class="title logo-font object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100"><span class="text-default">CodeBuilder</span>.io</h3>
											</div>
											<!-- name-and-slogan -->
											<div class="site-slogan" style="position: relative; top:-20px; height: 10px;">
												&nbsp;Software Engineering Solutions
											</div>
											</td>
											</tr>
											</tbody>
											</table>
									                </li>
									                <li>
									                    <a href="/" class="pjax">Home</a>
									                </li>
									                <li>
									                    <a href="/about" class="pjax">About</a>
									                </li>
									                <li>
									                    <a href="/services" class="pjax">Services</a>
									                </li>
									                <li>
									                    <a href="/portfolio" class="pjax">Portfolio</a>
									                </li>

									                <!--<li>
									                    <a href="/faq" class="pjax">FAQ</a>
									                </li>-->
									                <li>
									                    <a href="/contact" class="pjax">Contact</a>
									                </li>
									                <li>
									                												<!-- header buttons -->
												<div class="header-dropdown-buttons">
													<a href="javascript: void(0);" class="btn btn-sm hidden-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pay Invoice <i class="fa fa-credit-card-alt" style="font-size: 13px;"></i></a>
													<a href="javascript: void(0);" class="btn btn-lg visible-xs btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pay Invoice <i class="fa fa-credit-card pl-5"></i></a>
													<form class="invoice_modal_form">
														<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
															<li style="padding: 10px;">
																<div class="form-group has-feedback" style="margin-bottom: 0px;">
																	<label for="name">Enter your invoice #:</label>
																	<input class="form-control invoice_text" style="background-color: white;" name="name" placeholder="Invoice #" type="text">
																</div>
																<div class="panel-body text-right" style="padding: 0px;">
																	<button class="btn btn-group btn-gray btn-sm invoice_a" type="submit">
																		Go <i class="fa fa-angle-right"></i>
																	</button>
																</div>
															</li>
														</ul>
													</form>
													
												</div>
												<!-- header buttons end-->
												</li>
									            </ul>

									        </nav>
									        <!-- /#sidebar-wrapper -->



									    </div>
									    <!-- /#wrapper -->

									<!-- navbar start -->
									<!-- ================ -->
									<nav class="navbar navbar-default" role="navigation">
										<div class="container-fluid">

											<!-- Toggle get grouped for better mobile display -->
											<div class="navbar-header">
												<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
													<span class="sr-only">Toggle navigation</span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
													<span class="icon-bar"></span>
												</button>
												
											</div>

											<!-- Collect the nav links, forms, and other content for toggling -->
											<div class="collapse navbar-collapse" id="navbar-collapse-1">
												<!-- main-menu -->
												<ul class="nav navbar-nav pull-right">

													<!-- mega-menu start -->
													<li class="active">
														<a href="/" class="pjax" id="nav_home">Home</a>
													</li>
													<li class="">
														<a href="/about" class="pjax">About Us</a>
													</li>
													<li class="">
														<a href="/services" class="pjax">Services</a>
													</li>
													<li class="">
														<a href="/portfolio" class="pjax">Portfolio</a>
													</li>
													<!--<li class="">
														<a href="/faq" class="pjax">FAQ</a>
													</li>-->
													<li class="">
														<a href="/contact" class="pjax">Contact Us</a>
													</li>
												</ul>
												<!-- main-menu end -->
												
												<!-- header buttons -->
												<div class="header-dropdown-buttons">
													<a href="javascript: void(0);" class="btn btn-sm hidden-xs btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pay Invoice <i class="fa fa-credit-card-alt" style="font-size: 13px;"></i></a>
													<a href="mailto:info@codebuilder.us" class="btn btn-lg visible-xs btn-block btn-default">Pay Invoice <i class="fa fa-credit-card pl-5"></i></a>

													<ul class="dropdown-menu dropdown-menu-right dropdown-animation cart">
														<form class="invoice_modal_form" style="margin: 0px;">
															<li style="padding: 10px;">
																<div class="form-group has-feedback" style="margin-bottom: 0px;">
																	<label for="name">Enter your invoice #:</label>
																	<input class="form-control invoice_text" style="background-color: white;" name="name" placeholder="Invoice #" type="text" id="invoice_id_input">
																</div>
																<div class="panel-body text-right" style="padding: 0px;">
																	<button class="btn btn-group btn-gray btn-sm invoice_a" type="submit">
																		Go <i class="fa fa-angle-right"></i>
																	</button>
																</div>
															</li>
														</form>
													</ul>
													
												</div>
												<!-- header buttons end-->
												
											</div>

										</div>
									</nav>
									<!-- navbar end -->

								</div>
								<!-- main-navigation end -->
								</div>
								<!-- header-right end -->
							</div>

						</div>
					</div>
					
				</header>
				<!-- header end -->
			</div>
			<!-- header-container end -->

			@include("partials.paymentModal")

			@include("partials.portfolioModals")

		    <!-- Content Container -->
            <div id="pjax-container">
                @yield("content")
            </div>
                
			<!-- footer top end -->
			<!-- footer start (Add "dark" class to #footer in order to enable dark footer) -->
			<!-- ================ -->
			<footer id="footer" class="clearfix ">
				<!-- .footer start -->
				<!-- ================ -->
				<div class="footer" style="padding-top: 15px; padding-bottom: 15px;">
					<div class="container">
						<div class="footer-inner text-center" style="width: 100%; text-align: center; padding: 0px;">
                            <div class="row text-center hidden-sm-down" style="display: inline-block; max-width: 750px;">
                                <nav>
                                    <ul class="nav nav-pills" id="footer_links" style="margin-bottom: 0px;">
                                        <li><a class="pjax" href="/">Home</a></li>
                                        <li style="font-size: 20px; padding-top: 16px; line-height: 1px">&middot;</li>
                                        <li><a href="/about" class="pjax">About Us</a></li>
                                        <li style="font-size: 20px; padding-top: 16px; line-height: 1px">&middot;</li>
                                        <li><a href="/services" class="pjax">Services</a></li>
                                        <li style="font-size: 20px; padding-top: 16px; line-height: 1px">&middot;</li>
                                        <li><a href="/portfolio" class="pjax">Portfolio</a></li>
                                        <li style="font-size: 20px; padding-top: 16px; line-height: 1px">&middot;</li>
                                        <li><a href="/technology" class="pjax">Technology</a></li>
                                        <li style="font-size: 20px; padding-top: 16px; line-height: 1px">&middot;</li>
                                        <li><a href="/sitemap" class="pjax">Sitemap</a></li>
                                        <li style="font-size: 20px; padding-top: 16px; line-height: 1px">&middot;</li>
                                        <li><a href="/contact" class="pjax">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>       
						</div>
					</div>
				</div>
				<!-- .footer end -->

				<!-- .subfooter start -->
				<!-- ================ -->
				<div class="subfooter" style="text-align: center; padding-top: 15px;">
					<div class="container">
						<div class="subfooter-inner">
                                <div class="row text-center" style="display: inline-block; padding-bottom: 10px;">
                                	<div style="text-align: center; margin-bottom: 5px;"><img src="/images/payments_accepted.png" alt="We accept payments via Credit Card (processed by Stripe.com), PayPal.com, Bank Transfers, and Bitcoin. Other Crypto-Currencies may also be accepted on a case by case basis." id="payments_accepted" style="display: inline; height: 50px;"></div>


								<div style="text-align: center; padding-bottom: 5px !important; position: relative; top: 0px;">
									<ul class="social-links">
										<li><a target="_blank" href="http://www.facebook.com/codebuilder.us" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook" style="color: #4267B2;"></i></a></li>
										<li><a target="_blank" href="http://www.twitter.com/codebuilderio" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter" style="color: #1DA1F2;"></i></a></li>
										<li><a target="_blank" href="https://plus.google.com/u/1/108752322274477001531" data-toggle="tooltip" title="Google+"><i class="fa fa-google-plus" style="color: #E05E53;"></i></a></li>
										<li><a target="_blank" href="skype: andrew.c.corbin" data-toggle="tooltip" title="Skype"><i class="fa fa-skype" style="color: #05ACF2;"></i></a></li>
										
										<li><a target="_blank" href="https://www.linkedin.com/company/25053333/" data-toggle="tooltip" title="LinkedIn"><i class="fa fa-linkedin" style="color: #0077B5;"></i></a></li>
										<li><a target="_blank" href="https://www.reddit.com/user/codebuilder_inc" data-toggle="tooltip" title="Reddit"><i class="fa fa-reddit" style="color: #7FC2FE;"></i></a></li>
									</ul>
								</div>
                                    <div>
                                        <div class="col-md-4" style="padding-right: 0px; padding-left: 0px; margin-top: 5px;">
                                            <a href="mailto:info@codebuilder.us" style="color: #777777;">
                                                <i class="fa fa-envelope pr-10" style="padding-right: 0px; color: #09afdf;"></i>
                                                info@codebuilder.us
                                            </a>
                                        </div>
                                        <div  class="col-md-4" style="padding-right: 0px; padding-left: 0px;margin-top: 5px;">
                                        	<a href="tel:+16125672633" style="color: #777777;">
                                            <i class="fa fa-phone pr-10 text-default" style="padding-right: 0px;"></i> +1 (612) 567-2633
                                            </a>
                                        </div>
                                        <div  class="col-md-4" style="padding-right: 0px; padding-left: 0px;margin-top: 5px;">
                                            <i class="fa fa-map-marker pr-10 text-default" style="padding-right: 0px;"></i>
                                            Minneapolis, MN
                                        </div>
                                    </div>
                                </div>

                                <div class="clear"></div>
    						<div class="row">
								<div class="col-md-12">
									<p class="text-center">Copyright © 2017 CodeBuilder Inc.</p>
								</div>
							</div>     
						</div>
					</div>
				</div>
				<!-- .subfooter end -->
			</footer>
			<!-- footer end -->
		</div>
		<!-- page-wrapper end -->

		<style>
			@media screen and (max-width: 500px) {
				.footer { display: none !important; }
				#payments_accepted {
					display: none !important;
				}
			}
		</style>

		<!-- Web Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>

		<!-- Font Awesome CSS -->
		<link href="/template/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Fontello CSS -->
		<link href="/template/fonts/fontello/css/fontello.css" rel="stylesheet">
		

        <script src="{{ asset('/js/vendor.js') }}"></script>

		<!-- JavaScript files placed at the end of the document so the pages load faster -->
		<!-- ================================================== -->
		<!-- Jquery and Bootstap core js files -->        
		<script type="text/javascript" src="/template/bootstrap/js/bootstrap.min.js"></script>
		<!-- Modernizr javascript -->
		<script type="text/javascript" src="/template/plugins/modernizr.js"></script>
		<!-- jQuery Revolution Slider  -->
		<script type="text/javascript" src="/template/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="/template/plugins/rs-plugin/js/jquery.themepunch.revolution.js"></script>
		<!-- Isotope javascript -->
		<script type="text/javascript" src="/template/plugins/isotope/isotope.pkgd.min.js"></script>
		<!-- Magnific Popup javascript -->
		<script type="text/javascript" src="/template/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<!-- Appear javascript -->
		<script type="text/javascript" src="/template/plugins/waypoints/jquery.waypoints.min.js"></script>
		<!-- Count To javascript -->
		<script type="text/javascript" src="/template/plugins/jquery.countTo.js"></script>
		<!-- Parallax javascript -->
		<script src="/template/plugins/jquery.parallax-1.1.3.js"></script>
		<!-- Contact form -->
		<script src="/template/plugins/jquery.validate.js"></script>
		<!-- Morphext -->
		<script type="text/javascript" src="/template/plugins/morphext/morphext.min.js"></script>
		<!-- Background Video -->
		<!-- Owl carousel javascript -->
		<script type="text/javascript" src="/template/plugins/owl-carousel/owl.carousel.js"></script>
		<!-- SmoothScroll javascript -->
		<script type="text/javascript" src="/template/plugins/jquery.browser.js"></script>
		<script type="text/javascript" src="/template/plugins/SmoothScroll.js"></script>
		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="/template/js/template.js"></script>
		<!-- Custom Scripts -->
		<script type="text/javascript" src="/template/js/custom.js"></script>
			
		<script src="/template/plugins/vide/jquery.vide.js"></script>
		<script src="https://js.stripe.com/v3/"></script>
		<script src="/js/moment.js"></script>
		<script src="/js/datepicker.min.js"></script>
		<script src="/js/core.js"></script>

	    <script type="text/javascript">
	      var stripe = Stripe('pk_live_xhD1wTiO7qqhDza69A6DwIDv00v66UqBKK');
	    </script>
		<script>
		$(document).ready(function(){
		    $('[data-toggle="tooltip"]').tooltip();
		});
		</script>

		
		<script type="text/javascript">
	        fetch("/stats?page="+window.location.href, {
	          method: 'GET',
	          credentials: "same-origin",
	          headers: { 
	                  "Accept": "application/json",
	                  "X-Requested-With": "XMLHttpRequest",
	                  "X-CSRF-Token": $('[name~=csrf-token][content]').attr("content")
	           }})
		</script>

		@stack('scripts')

            
        <div class="tp-bannertimer" id="pjax_loading" style="display: none;"></div>

        <link href="/css/core.css" rel="stylesheet">
	</body>
</html>
@endif
