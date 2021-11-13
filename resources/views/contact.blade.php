@extends("core")
@section('title', 'Contact Us - CodeBuilder, Inc.')
@section('description', 'Get in touch with us today and one of our experienced developers will get back to you soon.')


@section("content")

<!-- Bing ad code for conversions -->
<script>(function(w,d,t,r,u){var f,n,i;w[u]=w[u]||[],f=function(){var o={ti:"5762299"};o.q=w[u],w[u]=new UET(o),w[u].push("pageLoad")},n=d.createElement(t),n.src=r,n.async=1,n.onload=n.onreadystatechange=function(){var s=this.readyState;s&&s!=="loaded"&&s!=="complete"||(f(),n.onload=n.onreadystatechange=null)},i=d.getElementsByTagName(t)[0],i.parentNode.insertBefore(n,i)})(window,document,"script","//bat.bing.com/bat.js","uetq");</script><noscript><img src="//bat.bing.com/action/0?ti=5762299&Ver=2" height="0" width="0" style="display:none; visibility: hidden;" /></noscript>

    <script> 
        function reportCustomEvent()
        {
            window.uetq = window.uetq || []; window.uetq.push({ 'ec': 'MyCategory', 'ea': 'MyAction', 'el': 'MyLabel', 'ev': 3 });}
    </script>


<!-- Google Code for Contact Form Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 843977113;
    w.google_conversion_label = "2K3nCNft83UQmaO4kgM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>

			<script src='https://www.google.com/recaptcha/api.js'></script>
			<!-- section start -->
			<!-- ================ -->
			<section class="video-background4 pv-40 dark-translucent-bg hovered" style="padding-top: 30px;">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">Contact Us</h2>
							<div class="separator object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100"></div>
							<p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">Get in touch with us today and one of our experienced developers will get back to you soon.</p>
						</div>
					</div>
				</div>
			</section>
			<!-- section end -->

			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container" style="padding-top:25px;">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8 space-bottom">
							<p class="lead">Our developers are waiting to hear from you. Drop us a line and let us know if you have any questions, concerns, or feedback, and we will get back to you shortly.</p>
							<div class="alert alert-success hidden" id="MessageSent">
								We have received your message, we will contact you very soon.
							</div>
							<div class="alert alert-danger hidden" id="MessageNotSent">
								Oops! Something went wrong, please verify that you are not a robot or refresh the page and try again.
							</div>
							<div class="contact-form">
								<form id="contact_form" class="margin-clear" role="form">
									{{ csrf_field() }}
									<div class="form-group has-feedback">
										<label for="name">Name *</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="email">Email *</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="">
										<i class="fa fa-envelope form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="subject">Subject *</label>
										<input type="text" class="form-control" id="subject" name="subject" placeholder="">
										<i class="fa fa-navicon form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="message">Message *</label>
										<textarea class="form-control" rows="6" id="message" name="message" placeholder=""></textarea>
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<!--<div class="pull-left">
									<div class="g-recaptcha" data-sitekey="6LfDZC0UAAAAAAWBfA6nI7e8dEAfCSVSpRGJupTz"></div>
									</div>--->
									<div class="pull-right">
										<input type="submit" value="Contact Us" class="submit-button btn btn-default">
									</div>
								</form>
							</div>

							<div id="contact_loading_success" style="display: none; padding-top: 40px;">
				          		<div style="text-align: center;">
									<h1 id="contact_form_success_h1"><small>Sending Message</small></h1>

									<div class="circle-loader">
									  <div class="checkmark draw"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-3 col-lg-offset-1">
							<div class="sidebar">
								<div class="side vertical-divider-left">
									<h3 class="title logo-font"><span class="text-default">CodeBuilder</span>.us</h3>
									<div class="separator-2 mt-20"></div>
									<ul class="list">
										<li><i class="fa fa-home pr-10"></i>1211 22nd Ave NE<br><span class="pl-20">Minneapolis, MN 55418</span></li>
										<li><i class="fa fa-phone pr-10"></i><abbr title="Phone">P:</abbr> <a href="tel:+16122088873">(612) 208-8873</a></li>
										<li><i class="fa fa-envelope pr-10"></i><a href="mailto:andrew@codebuilder.us">andrew@codebuilder.us</a></li>
									</ul>
									<ul class="social-links circle small margin-clear clearfix animated-effect-1">
										<li class="facebook"><a target="_blank" href="http://www.facebook.com/codebuilder.us"><i class="fa fa-facebook"></i></a></li>
										<li class="googleplus"><a target="_blank" href="https://plus.google.com/u/1/108752322274477001531"><i class="fa fa-google-plus"></i></a></li>
										<li class="twitter"><a target="_blank" href="http://www.twitter.com/codebuilderinc"><i class="fa fa-twitter"></i></a></li>
										<li class="skype"><a target="_blank" href="https://join.skype.com/invite/DiyJJmNflVZl"><i class="fa fa-skype"></i></a></li>
										<li class="linkedin"><a target="_blank" href="http://www.linkedin.com/codebuilderinc"><i class="fa fa-linkedin"></i></a></li>
									</ul>
									<div class="separator-2 mt-20 "></div>
									  <iframe style="border: 0px; height: 300px; width: 80%" src="//www.google.com/maps/embed/v1/place?q=1211%2022nd%20Ave%20NE%20Minneapolis%20MN
									      &zoom=17
									      &key= AIzaSyCdnSPXfE71_GBBjj1lZYzmkohP_E9Ivm8 ">
									  </iframe>

								</div>
							</div>
						</aside>
						<!-- sidebar end -->
					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<section id="collapseMap">
				<div id="map-canvas"></div>
			</section>
			<!-- section end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="section pv-40 dark-translucent-bg footer-top" style="background-position:50% 77%; background-color:rgba(0,0,0,0.6); padding-top: 20px;display: none; ">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="call-to-action text-center">
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">
										<h2 class="title">Join Our Newsletter</h2>
										<p>Leave your email to receive articles, updates, and more from CodeBuilder Inc.</p>
										<div class="separator"></div>
										<form class="form-inline margin-clear">
											<div class="form-group has-feedback">
												<label class="sr-only" for="subscribe2">Email address</label>
												<input type="email" class="form-control" id="subscribe2" placeholder="Enter your email address" name="subscribe2" required="">
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
			<div class="clearfix"></div>
			<!-- section end -->


	<script type="text/javascript">

	function contactForm() {
		$("#contact_form").submit(function() {
			$(".contact-form").hide();
			$("#contact_loading_success").show();
			$.ajax({
				url: "/contact/submit",
				data: $("#contact_form").serialize(),
				type: "post",
				success: function(data) {
					$("#contact_form_success_h1").html("<small>Message Sent</small>")
					$('.circle-loader').toggleClass('load-complete');
					$('.checkmark').toggle();
					$("#MessageSent").show();
					goog_report_conversion();
                                        reportCustomEvent();
				}, 
				error: function(data) {
					$(".contact-form").show();
					$("#contact_loading_success").hide();
				}
			})
			return false;
		})
	}

	</script>
			
			
    @push("scripts")
    <script type="text/javascript">
      startVideo(".video-background4", "/template/videos/535495.mp4", "/template/videos/background-video.webm", "/template/videos/535495 01.jpg", "50% 100%");
      contactForm();
    </script>
    @endpush

    @if($ajax)
    	<script src='https://www.google.com/recaptcha/api.js'></script>
		<script src="/template/plugins/vide/jquery.vide.js"></script>
        <script type="text/javascript">
        	contactForm();
            document.title = "Contact Us - codebuilder.us";
			
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
                startVideo(".video-background4", "/template/videos/535495.mp4", "/template/videos/background-video.webm", "/template/videos/535495 01.jpg", "50% 100%");
            });
        </script>
    @endif
	
	<style>


.circle-loader {
  margin: 0 0 30px 10px;
  border: 2px solid rgba(0, 0, 0, 0.2);
  border-left-color: #5cb85c;
  animation-name: loader-spin;
  animation-duration: 1s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  position: relative;
  display: inline-block;
  vertical-align: top;
}

.circle-loader,
.circle-loader:after {
  border-radius: 50%;
  width: 8em;
  height: 8em;
}

.load-complete {
  -webkit-animation: none;
  animation: none;
  border-color: #5cb85c;
  transition: border 500ms ease-out;
}

.checkmark {
  display: none;
}
.checkmark.draw:after {
  animation-duration: 800ms;
  animation-timing-function: ease;
  animation-name: checkmark;
  transform: scaleX(-1) rotate(135deg);
}
.checkmark:after {
  opacity: 1;
  height: 4em;
  width: 2em;
  transform-origin: left top;
  border-right: 2px solid #5cb85c;
  border-top: 2px solid #5cb85c;
  content: '';
  left: 2em;
  top: 4em;
  position: absolute;
}

@keyframes loader-spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
@keyframes checkmark {
  0% {
    height: 0;
    width: 0;
    opacity: 1;
  }
  20% {
    height: 0;
    width: 2em;
    opacity: 1;
  }
  40% {
    height: 4em;
    width: 2em;
    opacity: 1;
  }
  100% {
    height: 4em;
    width: 2em;
    opacity: 1;
  }
}
</style>
		

			
@endsection
