@extends("core")
@section('title', 'Services - CodeBuilder, Inc.')
@section('description', 'Our team offers practical solutions using a wide range of technology.')

@section("content")
				

<!-- section start -->
<!-- ================ -->
<section class="video-background3 pv-40 dark-translucent-bg hovered" style="padding-top: 25px;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 style="font-size: 28px; margin-bottom: 15px; font-weight: 400;" class="text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">Our Services</h1>
				<div class="separator object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100"></div>
				<p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">@yield('description')</p>

				<p class="text-center"><a href="/technology" class="pjax btn btn-lg btn-gray-transparent object-non-visible" data-animation-effect="zoomIn" data-effect-delay="300">View Technologies</a></p>
			</div>
		</div>
	</div>
</section>
<!-- section end -->


<!-- main-container start -->
<!-- ================ -->
<section class="main-container padding-bottom-clear" style="padding-top:25px;">

	<div class="container">
		<div class="row">

			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">

				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon large default-bg circle"><i class="fa fa-globe"></i></span>
							<h3>Web Development</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted">Our team has expertise with HTML5, CSS3, JavaScript, and much more.</p>
							<a href="/web-applications" class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon large dark-bg circle"><i class="fa fa-mobile"></i></span>
							<h3>Mobile Applications</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted">We have experience building mobile applications in Android and iOS platforms.</p>
							<a class="link-dark pjax" href="/mobile-applications">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
							<span class="icon large default-bg circle"><i class="fa fa-bitcoin"></i></span>
							<h3>Bitcoin Applications</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted">We are P2P and bitcoin experts and can help you meet your payment & crypto-currency needs.</p>
							<a href="/blockchain-applications" class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
						</div>
					</div>
					<div class="clearfix visible-md"></div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
							<span class="icon large dark-bg circle"><i class="icon-database"></i></span>
							<h3>Database Administration</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted">Our Engineers can build, upgrade, and maintain databases with MySQL, Web storage, and more.</p>
							<a class="link-dark pjax"  href="/database-administration">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
							<span class="icon large default-bg circle"><i class="icon-cloud"></i></span>
							<h3>Cloud Computing</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted">We work with cloud providers such as Amazon Web Services, Google Cloud, and Digital Ocean.</p>
							<a href="/server-administration" class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="ph-20 feature-box text-center object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
							<span class="icon large dark-bg circle"><i class="fa fa-bug"></i></span>
							<h3>Penetration Testing</h3>
							<div class="separator clearfix"></div>
							<p class="text-muted">We are OpSec & pen-testing experts. Let us hack & secure your organization's infrastructure.</p>
							<a class="link-dark pjax"  href="/penetration-testing">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
						</div>
					</div>
				</div>

			</div>
			<!-- main end -->

		</div>
	</div>
</section>
<!-- main-container end -->


<div class="dark-translucent-bg footer-top default-hovered" style="background-color:rgba(0,0,0,0.6);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
						<div class="col-sm-8">
							<h2 class="title">Unlimited Options</h2>
							<p>Our developers can create customized solutions to meet your organization's software requirements. </p>
						</div>
                        <div class="col-sm-4">
                            <p class="mt-10"><a href="/contact" class="pjax btn btn-animated btn-lg btn-gray-transparent">Contact Us<i class="fa fa-envelope pl-20"></i></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- section start -->
<!-- ================ -->
<section class="pv-20 padding-bottom-clear clearfix">
	<div class="container">
		<h2 class="text-center">Mobile Applications</h2>
		<div class="separator"></div>
		<p class="text-center space-bottom">We can build your web application so that it is deployable on several Operating Systems and screen sizes (iOS, Android, Windows, OSX, Linux).</p>
		<div class="row">
			<div class="col-md-6 space-top">
				<br>
				<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
					<span class="icon without-bg"><i class="fa fa-arrows"></i></span>
					<div class="body">
						<h4 class="title">Responsive Design</h4>
						<p>We design with responsiveness in mind. We use template engines that are compatible with desktop, tablet, and mobile devices.
						<br> <a href="/mobile-applications" class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a></p>
						<div class="separator-3"></div>
					</div>
				</div>
				<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
					<span class="icon without-bg"><i class="icon-megaphone"></i></span>
					<div class="body">
						<h4 class="title">Code Once, Deploy Anywhere</h4>
						<p>Our software is built with web technology that can be coded once and deployed on popular platforms such as iOS, Android, Windows, and more. <a href="/mobile-applications" class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a></p>
						<div class="separator-3"></div>
					</div>
				</div>
				<div class="feature-box-2 object-non-visible right" data-animation-effect="fadeInDownSmall" data-effect-delay="300">
					<span class="icon without-bg"><i class="icon-infinity"></i></span>
					<div class="body">
						<h4 class="title">Public Marketplaces</h4>
						<p>Our team can help you publish your apps in public marketplaces such as Google Play, iTunes, Windows Store, and more. We can also create graphics and other marketing materials for you. <br><a href="/mobile-applications" class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<img src="/images/devices.jpg" alt="">
			</div>
		</div>



	</div>
</section>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<section class="section light-gray-bg pv-40 clearfix" style="display: none;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="call-to-action text-center">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<h2 class="title">Contact us Now</h2>
							<p>Leave your email and one of our representatives will get in touch with you right away.</p>
							<div class="separator"></div>
							<form class="form-inline margin-clear">
								<div class="form-group has-feedback">
									<label class="sr-only" for="subscribe2">Email address</label>
									<input type="email" class="form-control" id="subscribe2" placeholder="Enter email" name="subscribe2" required="">
									<i class="fa fa-envelope form-control-feedback"></i>
								</div>
								<button type="submit" class="btn btn-gray-transparent btn-animated margin-clear">Submit <i class="fa fa-send"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- section end -->
	
	
@push("scripts")
<script type="text/javascript">
	startVideo(".video-background3", "/template/videos/network-technology-be2-hd_noxpasagfg__WL.mp4", "/template/videos/background-video.webm", "/template/videos/network-technology-be2-hd_noxpasagfg__WL 01.jpg", "50% 100%");
</script>
@endpush
	
@if($ajax)
	<script src="/template/plugins/vide/jquery.vide.js"></script>
	<script type="text/javascript">
		document.title = "Services - CodeBuilder, Inc.";
		
		//Scroll totop
		//-----------------------------------------------
		$(window).scroll(function() {
			if($(this).scrollTop() != 0) {
				$(".scrollToTop").fadeIn();
			} else {
				$(".scrollToTop").fadeOut();
			}
		});

		$(".scrollToTop").click(function() {
			$("body,html").animate({scrollTop:0},800);
		});
		
		
		// Animations
		//-----------------------------------------------
		if ($("[data-animation-effect]").length>0) {
			$("[data-animation-effect]").each(function() {
				if(Modernizr.csstransitions) {
					var waypoints = $(this).waypoint(function(direction) {
						var appearDelay = $(this.element).attr("data-effect-delay"),
						animatedObject = $(this.element);
						setTimeout(function() {
							animatedObject.addClass('animated object-visible ' + animatedObject.attr("data-animation-effect"));
						}, appearDelay);
						this.destroy();
					},{
						offset: '95%'
					});
				} else {
					$(this).addClass('object-visible');
				}
			});
		};

		// Text Rotators
		//-----------------------------------------------
		if ($(".text-rotator").length>0) {
			$(".text-rotator").each(function() {
				var tr_animationEffect = $(this).attr("data-rotator-animation-effect");
				$(this).Morphext({
					animation: ""+tr_animationEffect+"", // Overrides default "bounceIn"
					separator: ",", // Overrides default ","
					speed: 3000 // Overrides default 2000
				});
			});
		};
		
		$(document).ready(function() {
			startVideo(".video-background3", "/template/videos/network-technology-be2-hd_noxpasagfg__WL.mp4", "/template/videos/background-video.webm", "/template/videos/network-technology-be2-hd_noxpasagfg__WL 01.jpg", "50% 100%");
		});
	</script>
@endif		
@endsection