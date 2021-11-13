@extends("core")
@section('title', 'CodeBuilder, Inc. - Software Engineering Solutions')
@section('description', 'Custom software engineering solutions that are elegantly designed with scalability in mind.')

@section("content")

<div id="page-start"></div>
			<!-- banner start -->
			<!-- ================ -->
			<div class="banner clearfix" id="homepage_banner" @php echo Request::path() == "/" ? "" : "style='display: none;'" @endphp>
			
				<!-- slideshow start -->
				<!-- ================ -->
				<div class="slideshow">
			
					<!-- slider revolution start -->
					<!-- ================ -->
					<div class="slider-banner-container">
						<div class="slider-banner-fullwidth-big-height">
							<ul class="slides">
								<!-- slide 1 start -->
								<!-- ================ -->
								<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="2000" data-saveperformance="on" data-title="Web Engineering">
			
								<!-- main image -->
								<img src="/template/images/corporate-2-slider-slide-2.jpg" alt="Web Development Solutions" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
			
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
									data-x="center"
									data-y="bottom"
									data-speed="600"
									data-start="0">
								</div>
			
								<!-- LAYER NR. 1 -->
								<div class="homepageslider_header tp-caption sfb fadeout large_white"
									data-x="left"
									data-y="150"
									data-speed="500"
									data-start="1000"
									data-easing="easeOutQuad"
									data-end="10000">Web Engineering
								</div>
								<style>

@media all and (max-width: 600px) and (orientation:portrait) 
{
	.homepageslider_header { 
		position: relative !important; 
		top: -185px !important;
		font-size: 125% !important;
	}
	.homepageslider_li1 { 
		position: relative !important; 
		font-size: 75% !important;
		top: -165px !important;
	}
	.homepageslider_li2 { 
		position: relative !important; 
		font-size: 75% !important;
		top: -150px !important;
	}
	.homepageslider_li3 { 
		position: relative !important; 
		font-size: 75% !important;
		top: -135px !important;
	}
	.homepageslider_li4 { 
		position: relative !important; 
		font-size: 75% !important;
		top: -120px !important;
	}
	.homepage_read_more_btn {
		position: relative !important; 
		top: -20px !important;
		padding-left: 10px !important;
		padding-left: 20px !important;
		padding-top: 10px !important;
		padding-bottom: 10px !important;
	}
}

</style>
								<!-- LAYER NR. 2 -->
								<div class="homepageslider_li1 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="230"
									data-speed="500"
									data-start="1300"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-server"></i></span> Full Stack Development
								</div>
			
								<!-- LAYER NR. 3 -->
								<div class="homepageslider_li2 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="290"
									data-speed="500"
									data-start="1600"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-mobile" style="font-size: 26px; position: relative; top: 3px;"></i></span> Responsive Layouts
								</div>
			
								<!-- LAYER NR. 4 -->
								<div class="homepageslider_li3 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="350"
									data-speed="500"
									data-start="1900"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-cubes"></i></span> Complex Interfaces
								</div>
			
								<!-- LAYER NR. 5 -->
								<div class="homepageslider_li4 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="410"
									data-speed="500"
									data-start="2200"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-laptop"></i></span> Server Administration
								</div>
			
								<!-- LAYER NR. 6 -->
								<div class="tp-caption sfb fadeout small_white"
									data-x="left"
									data-y="480"
									data-speed="500"
									data-start="2500"
									data-easing="easeOutQuad"
									data-endspeed="600"><a href="/web-applications" class="homepage_read_more_btn btn btn-default-transparent btn-lg btn-animated pjax">Read More <i class="fa fa-chevron-right"></i></a>
								</div>
			
								</li>
								<!-- slide 1 end -->
			
								<!-- slide 2 start -->
								<!-- ================ -->
								<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="2000" data-saveperformance="on" data-title="Mobile Applications">
			
								<!-- main image -->
								<img src="/images/iphone-smartphone-apps-apple-inc-40011.jpeg" alt="Mobile Application Development" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
			
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
									data-x="center"
									data-y="bottom"
									data-speed="600"
									data-start="0">
								</div>
			
								<!-- LAYER NR. 1 -->
								<div class="homepageslider_header tp-caption sfb fadeout large_white"
									data-x="left"
									data-y="150"
									data-speed="500"
									data-start="1000"
									data-easing="easeOutQuad"
									data-end="10000">Mobile Applications
								</div>
			
								<!-- LAYER NR. 2 -->
								<div class="homepageslider_li1 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="230"
									data-speed="500"
									data-start="1300"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-apple"></i></span> iOS
								</div>
			
								<!-- LAYER NR. 3 -->
								<div class="homepageslider_li2 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="290"
									data-speed="500"
									data-start="1600"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-apple"></i></span> Android
								</div>
			
								<!-- LAYER NR. 4 -->
								<div class="homepageslider_li3 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="350"
									data-speed="500"
									data-start="1900"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-globe"></i></span> Cross-Platform WebViews
								</div>
			
								<!-- LAYER NR. 5 -->
								<div class="homepageslider_li4 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="410"
									data-speed="500"
									data-start="2200"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-code"></i></span> Unified Codebase
								</div>
			
								<!-- LAYER NR. 6 -->
								<div class="tp-caption sfb fadeout small_white"
									data-x="left"
									data-y="480"
									data-speed="500"
									data-start="2500"
									data-easing="easeOutQuad"
									data-endspeed="600"><a href="/mobile-applications" class="homepage_read_more_btn btn btn-default-transparent btn-lg btn-animated pjax">Read More <i class="fa fa-chevron-right"></i></a>
								</div>
			
								</li>
								<!-- slide 2 end -->

								<!-- slide 3 start -->
								<!-- ================ -->
								<li data-transition="slidehorizontal" data-slotamount="1" data-masterspeed="2000" data-saveperformance="on" data-title="Crypto Applications">
			
								<!-- main image -->
								<img src="/images/bitcoin-advantages.jpg" alt="Bitcoin Crypto-Currency Blockchain Applications" data-bgposition="center top"  data-bgrepeat="no-repeat" data-bgfit="cover">
			
								<!-- Transparent Background -->
								<div class="tp-caption dark-translucent-bg"
									data-x="center"
									data-y="bottom"
									data-speed="600"
									data-start="0">
								</div>
			
								<!-- LAYER NR. 1 -->
								<div class="homepageslider_header tp-caption sfb fadeout large_white"
									data-x="left"
									data-y="150"
									data-speed="500"
									data-start="1000"
									data-easing="easeOutQuad"
									data-end="10000">Crypto-Currency Applications
								</div>
			
								<!-- LAYER NR. 2 -->
								<div class="homepageslider_li1 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="230"
									data-speed="500"
									data-start="1300"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-lock"></i></span> Operational Security
								</div>
			
								<!-- LAYER NR. 3 -->
								<div class="homepageslider_li2 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="290"
									data-speed="500"
									data-start="1600"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-bug"></i></span> Penetration Testing
								</div>
			
								<!-- LAYER NR. 4 -->
								<div class="homepageslider_li3 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="350"
									data-speed="500"
									data-start="1900"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-handshake-o"></i></span> Multi-Sig Solutions
								</div>
			
								<!-- LAYER NR. 5 -->
								<div class="homepageslider_li4 tp-caption sfb fadeout text-left medium_white"
									data-x="left"
									data-y="410"
									data-speed="500"
									data-start="2200"
									data-easing="easeOutQuad"
									data-endspeed="600"><span class="icon default-bg circle small hidden-xs"><i class="fa fa-snowflake-o"></i></span> Cold Storage
								</div>
			
								<!-- LAYER NR. 6 -->
								<div class="tp-caption sfb fadeout small_white"
									data-x="left"
									data-y="480"
									data-speed="500"
									data-start="2500"
									data-easing="easeOutQuad"
									data-endspeed="600"><a href="/blockchain-applications" class="homepage_read_more_btn btn btn-default-transparent btn-lg btn-animated pjax">Read More <i class="fa fa-chevron-right"></i></a>
								</div>
			
								</li>
								<!-- slide 2 end -->

							</ul>
							
						</div>
					</div>
					<!-- slider revolution end -->
			
				</div>
				<!-- slideshow end -->
			</div>
			<!-- banner end -->

<!-- section start -->
<!-- ================ -->
<section class="section light-gray-bg pv-30 padding-bottom-clear clearfix" style="padding-top: 25px; padding-bottom: 35px !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                    <span class="icon without-bg"><i class="fa text-default fa-heart-o"></i></span>
                    <div class="body">
                        <h4 class="title">Clean Code &amp; Design</h4>
                        <p class="text-muted">Our code is readable, well structured, and extensible. Our engineers follow industry standard best practices for maximum efficiency.</p>
                        <a href="/technology" class="btn btn-default-transparent btn-md btn-animated pjax">Read More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon without-bg"><i class="fa text-default fa-connectdevelop"></i></span>
                    <div class="body">
                        <h4 class="title">Extremely Flexible</h4>
                        <p class="text-muted">We follow a modular and iterative development process with scalability in mind. Our code is made to be flexible and easily upgraded as your needs change.</p>
                        <a href="/technology" class="btn btn-default-transparent btn-md btn-animated pjax">Read More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon without-bg"><i class="fa text-default icon-snow"></i></span>
                    <div class="body">
                        <h4 class="title">Latest Technologies</h4>
                        <p class="text-muted">Our engineers stay up to date with latest trends and technologies. We will analyze your needs and determine the right tools to meet your project specifications.</p>
                        <a href="/technology" class="btn btn-default-transparent btn-md btn-animated pjax">Read More <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->

<!-- section start -->
<!-- ================ -->
<section class="section clearfix" style="padding-top: 10px;">
    <div class="container">
        <h1 style="font-size: 24px; font-family: Raleway, sans-serif !important; font-weight: 400; text-transform: none;">Hire Our Professional <strong>Software Engineers</strong>!</h1>
        <div class="separator-2"></div>
        <p class="lead">Choose us if you are looking for professional software solutions, our 
 <a href="/portfolio" class="pjax" style="color: #777777; text-decoration: underline;">portfolio</a> speaks for itself...</p>
        <div class="row">
            <div class="col-md-6">
                <!-- accordion start -->
                <!-- ================ -->
                <div class="panel-group collapse-style-2" id="accordion-home">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-home" href="#collapseOne2-home">
                                    <i class="fa fa-globe pr-10"></i>Web Development
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne2-home" class="panel-collapse collapse in">
                            <div class="panel-body">
                                At CodeBuilder, we can develop anything from simple brochureware websites to complex, scalable, and responsive web applications. We have experience building front-end end User Interfaces (UX) and back-end API's from the ground up. We can leverage cloud-based and third-party solutions for your website, saving you time and money.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-home" href="#collapseTwo-home" class="collapsed">
                                    <i class="fa fa-mobile pr-10" style="font-size: 18px;"></i>Mobile Applications
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo-home" class="panel-collapse collapse">
                            <div class="panel-body">
	                            Let our engineers build your website and mobile applications with a fully responsive interface. We can build your core application once, and have it deployed as a website, iOS, Android, and even a desktop application. We also have experience in building native mobile apps using Java for Android and Objective-C for iOS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion-home" href="#collapseThree-home" class="collapsed">
                                    <i class="fa fa-gear pr-10"></i>DevOps Engineering
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree-home" class="panel-collapse collapse">
                            <div class="panel-body">
	                            CodeBuilder specializes in DevOps Engineering and Operational Security; therefore, we can offer clients full stack development and maintenance services. Our engineers can deploy servers, databases, and more in a secure manner consistent with industry leading best practices.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- accordion end -->
            </div>
            <div class="col-md-6">
                <!-- tabs start -->
                <!-- ================ -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs style-1" role="tablist">
                    <li class="active"><a href="#htab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-10"></i>Very Flexible</a></li>
                    <li><a href="#htab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>Customer Support</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="htab1">
                        <h3>Very Flexible</h3>
                        <p>CodeBuilder’s services and pricing models are flexible and affordable. Time is logged, and clients are billed by the hour.</p>
                        <p>Our rates vary depending on the type of work required. An hourly time/cost estimate and agreement will be provided before work begins.</p>
                        <a href="/services" class="pjax btn btn-default margin-clear">Read more</a>
                    </div>
                    <div class="tab-pane fade" id="htab2">
                        <h3>Customer Support</h3>
                        <p>When working with us, you will receive a dedicated project manager who will provide customized support, and communicate with you at every stage of your project</p>
                        <p>CodeBuilder offers 24/7 On-Call services from our engineers, and we provide automated monitoring services for your application(s).</p>
                        <a href="/services" class="pjax btn btn-default margin-clear">Read more</a>
                    </div>
                </div>
                <!-- tabs end -->
            </div>
        </div>
                
        <h3>Recent <strong>Clients</strong></h3>
        <div class="separator-2"></div>
        <div class="row grid-space-10">

            <div class="col-sm-6 col-md-3">
                <div class="image-box style-2 mb-20 shadow bordered">
                    <div style="text-align: center; width: 100%;   margin-top: 10px;  margin-bottom: 10px;">
                        <img src="/images/united_nations_logo.svg" alt="United Nations SDG ESCAP Partnership" style="vertical-align: middle; margin-left: auto; margin-right: auto; height: 75px; ">
                    </div>
                    <div class="body shadow light-gray-bg ">
                        <h3 class="text-center">United Nations</h3>
                        <div class="separator"></div>
                        <p>The Asia Pacific SDG Partnership is development arm of the United Nations and serves as the main economic and social development centre for the UN in the region. </p>
                        <p style="height: 30px; text-align: center;"><a href="/portfolio" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="image-box style-2 mb-20 bordered">
                    <div style="text-align: left; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                        <img src="/images/sf_heart.jpg" alt="SingelForaldrar.se Swedish Dating Website" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; ">
                    </div>
                    <div class="body shadow light-gray-bg ">
                        <h3 class="text-center">SingelForaldrar</h3>
                        <div class="separator"></div>
                        <p>SingelForaldrar is a Swedish dating platform for single parents. Its responsive interface includes a facebook-esque feed and a tinder-esque matching system.</p>
                        <p style="height: 30px; text-align: center;"><a href="/portfolio" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="image-box style-2 mb-20 shadow bordered">
                    <div style="text-align: left; width: 100%;   margin-top: 10px; margin-bottom: 10px;">
                        <img src="/images/dha_smooth_logo1.png" alt="Defense Health Agency Learning Management Systems" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; ">
                    </div>
                    <div class="body shadow light-gray-bg ">
                        <h3 class="text-center">DHA</h3>
                        <div class="separator"></div>
                        <p>The Defense Health Agency is a Combat Support Agency that provides health care related services to the Department of Defense and its beneficiaries.</p>
                        <p style="height: 30px; text-align: center;"><a href="/portfolio" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                    </div>
                </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-sm-6 col-md-3">
                <div class="image-box style-2 mb-20 shadow bordered">
                    <div style="text-align: center; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                        <img src="/images/acs_portfolio_badge.png" alt="American College of Surgeons Learning Management Systems" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; max-width: 250px; ">
                    </div>
                    <div class="body shadow light-gray-bg ">
                        <h3 class="text-center">ACS</h3>
                        <div class="separator"></div>
                        <p>The American College of Surgeons is a non-profit educational association providing Continuing Education services to surgeons in various professions in 39 different countries.</p>
                        <p style="height: 30px; text-align: center;"><a href="/portfolio" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- footer top start -->
<!-- ================ -->
<div class="dark-translucent-bg footer-top animated-text default-hovered" style="background-color:rgba(0,0,0,0.6);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Get in touch with us today!</h2>
                            <h2>Waste no more time</h2>
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
    <script type="text/javascript">
		document.title = "CodeBuilder, Inc. - Software Engineering Solutions";
	</script>

    @if($ajax)
        <script type="text/javascript">
			document.title = "CodeBuilder, Inc. - Software Engineering Solutions";
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
        </script>
    @endif
    


@endsection
