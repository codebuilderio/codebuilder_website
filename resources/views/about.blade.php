@extends("core")
@section('title', 'About Us - CodeBuilder, Inc.')
@section('description', 'We are a team of passionate developers committed to making the world better with code.')


@section("content")

			<!-- banner start -->
			<!-- ================ -->
			<div class="banner video-background-banner pv-40 dark-translucent-bg hovered" style="padding-top: 25px; max-height: 308px;">

				<div class="container">
					<div class="row">
						<div class="col-md-8 text-center col-md-offset-2">
							<h2 class="text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">About Us</h2>
							<div class="separator object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100"></div>
							<p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">@yield('description')</p>
							<p class="text-center"><a href="/contact" class="btn btn-lg btn-gray-transparent object-non-visible pjax" data-animation-effect="zoomIn" data-effect-delay="300">Contact Us</a></p>
						</div>
					</div>
				</div>

			</div>
			<!-- banner end -->
<? /*  We can make life easier for you and your customers by implementing software automation processes tailored to meet your business needs. */ ?>




				<?php /*
			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">
				<div class="container">

					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">
							<div class="row">
								<div class="col-md-4 ">
									<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
										<span class="icon without-bg"><i class="fa fa-diamond"></i></span>
										<div class="body">
											<h4 class="title">We Have Strong Background</h4>
											<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
											<a href="/portfolio"  class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 ">
									<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
										<span class="icon without-bg"><i class="fa fa-connectdevelop"></i></span>
										<div class="body">
											<h4 class="title">We Love Details</h4>
											<p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
											<a href="/technology"  class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 ">
									<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
										<span class="icon without-bg"><i class="fa icon-snow"></i></span>
										<div class="body">
											<h4 class="title">We Use Latest Technologies</h4>
											<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
											<a href="/technology"  class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 ">
									<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
										<span class="icon without-bg"><i class="fa fa-heart"></i></span>
										<div class="body">
											<h4 class="title">We Love to Code</h4>
											<p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem dolor consectetur.</p>
											<a href="/technology"  class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 ">
									<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
										<span class="icon without-bg"><i class="fa fa-cogs"></i></span>
										<div class="body">
											<h4 class="title">We Are Extremely Flexible</h4>
											<p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
											<a href="/faq"  class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-md-4 ">
									<div class="feature-box-2 object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
										<span class="icon without-bg"><i class="fa icon-lifebuoy"></i></span>
										<div class="body">
											<h4 class="title">We Will Support You</h4>
											<p>Inventore dolores aut laboriosam cum consequuntur delectus sequi lorem ipsum dolor sit amet, consectetur.</p>
											<a href="/faq" class="pjax">Read More<i class="pl-5 fa fa-angle-double-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

			<!-- section start -->
			<!-- ================ -->
			<section class="object-non-visible" data-animation-effect="fadeIn" data-effect-delay="100">
				<div class="full-width-section">
					<div class="full-image-container hovered">
						<img class="to-right-block" src="/template/images/page-about-1.jpg" alt="">
						<div class="full-image-overlay text-right">
							<h3>What <strong>We Offer</strong></h3>
							<ul class="list-icons">
								<li>We are here to support you <i class="icon-check-1"></i></li>
								<li>Free updates <i class="icon-check-1"></i></li>
								<li>ipsam asperiores fugiat quo <i class="icon-check-1"></i></li>
								<li>Animi veniam veritatis sint <i class="icon-check-1"></i></li>
								<li>Voluptatum officia suscipit <i class="icon-check-1"></i></li>
								<li>Unlimited options and variations <i class="icon-check-1"></i></li>
							</ul>
						</div>
					</div>
					<div class="full-text-container light-gray-bg border-bottom-clear">
						<h2>Why <strong>Choose Us</strong></h2>
						<div class="separator-2 visible-lg"></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi veniam, veritatis sint consequuntur! Natus, culpa, explicabo! Non quo laboriosam nobis quia, amet excepturi optio dolor impedit. Perferendis libero unde, nulla deserunt sequi. Voluptatum, officia suscipit porro reprehenderit vitae quo rem reiciendis, a vero quae. Vero beatae voluptatum.</p>
						<div class="separator-3 visible-lg"></div>
						<a href="mailto:theproject@mail.com" class="btn btn-default btn-animated">Contact Us <i class="pl-5 fa fa-envelope-o"></i></a>
					</div>
				</div>
			</section>
			<!-- section end -->
			*/
			?>
			<style>
			.banner > div:first-child {
				height: 308px !important;
			}
			.banner.video-background-banner {
				min-height: 0 !important;
			}

			</style>
			
			<!-- section start -->
			<!-- ================ -->
			<section class="section pv-40 stats" style="padding-top:15px;">
				<div class="container">
					<h1 class="text-center title" style="font-family: 'Raleway', sans-serif!important; font-size: 24px; text-transform: none; margin-bottom: 0px !important; font-weight: 400;">The CodeBuilder Inc. <strong>Team</strong></h1>
					<div class="separator"></div>
					<div class="image-box team-member style-3-b">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3">
								<div class="overlay-container overlay-visible">
									<img src="/images/corbin.jpg" alt="">
									<a href="mailto:andrew@codebuilder.us" class="popup-img overlay-link" title="Andrew Corbin - Founder"><i class="fa fa-envelope"></i></a>
									<div class="overlay-bottom hidden-xs" style="display: none;">
										<div class="text">
											<p class="small margin-clear"><em><i class="fa fa-circle" style="color: red;"></i> Offline Now</em></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-6">
								<div class="body">
									<h3 class="title margin-clear">Andrew Corbin - <small>Founder</small></h3>
									<div class="separator-2 mt-10"></div>
									<p>Andrew has been working passionately and professionally with software for 13 years. With his wide range of technical and business experiences, CodeBuilder Inc. was founded in 2017.</p>
									<ul class="social-links circle margin-clear colored" style="display: none;">
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									<br>
									<a href="tel:+16125672633" class="btn btn-gray-transparent"><i class="pr-10 fa fa-phone"></i>Call</a>
									<a href="mailto:andrew@codebuilder.us" class="btn btn-gray-transparent"><i class="pr-10 fa fa-envelope-o"></i>Email</a>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-3">
								<div class="pv-20 visible-lg visible-md"></div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Software Engineering</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Server Administration</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" data-animate-width="80%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Database Administration</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" data-animate-width="85%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Network Administration</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="85%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000"> Web Interfaces (JavaScript)</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" data-animate-width="60%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Audio & Video Engineering</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="image-box team-member style-3-b">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3">
								<div class="overlay-container overlay-visible">
									<img src="/images/JjAD9Xh.png" alt="">
									<a href="mailto:castiglia.kevin@gmail.com" class="popup-img overlay-link" title="Kevin Castiglia - Co-Founder"><i class="fa fa-envelope"></i></a>
									<div class="overlay-bottom hidden-xs"  style="display: none;">
										<div class="text">
											<p class="small margin-clear"><em><i class="fa fa-circle" style="color: red;"></i> Offline Now</em></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-6">
								<div class="body">
									<h3 class="title margin-clear">Kevin Castiglia - <small>Co-Founder</small></h3>
									<div class="separator-2 mt-10"></div>
									<p>Kevin is a software engineer with a penchant for the infrastructure side of things. Having worked for a couple tech startups, he decided it was time to start his own venture.</p>
									<ul class="social-links circle margin-clear colored" style="display: none;">
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									<br>
									<a href="tel:+18453638331" class="btn btn-gray-transparent"><i class="pr-10 fa fa-phone"></i>Call</a>
									<a href="mailto:kevin@codebuilder.us" class="btn btn-gray-transparent"><i class="pr-10 fa fa-envelope-o"></i>Email</a>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-3">
								<div class="pv-20 visible-lg visible-md"></div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="90%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Software Engineering</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="90%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">DevOps</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Python</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" data-animate-width="80%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Virtualization / Docker Containers</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" data-animate-width="80%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Build/Test Automation</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" data-animate-width="70%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Database Administration</span>
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="image-box team-member style-3-b">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3">
								<div class="overlay-container overlay-visible">
									<img src="/images/larrygoodrie.jpg" alt="">
									<a href="mailto:larrygoodrie@gmail.com" class="popup-img overlay-link" title="Larry Goodrie - System Analyst Specialist"><i class="fa fa-envelope"></i></a>
									<div class="overlay-bottom hidden-xs"  style="display: none;">
										<div class="text">
											<p class="small margin-clear"><em><i class="fa fa-circle" style="color: red;"></i> Offline Now</em></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-6">
								<div class="body">
									<h3 class="title margin-clear">Larry Goodrie - <small>System Analyst Specialist</small></h3>
									<div class="separator-2 mt-10"></div>
									<p>Larry Goodrie has 23 years experience designing and supporting Hardware infrastructure and Software requirements.</p>
									<ul class="social-links circle margin-clear colored" style="display: none;">
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									<br>
									<a href="mailto:larrygoodrie@gmail.com" class="btn btn-gray-transparent"><i class="pr-10 fa fa-envelope-o"></i>Email</a>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-3">
								<div class="pv-20 visible-lg visible-md"></div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="90%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">C++</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="90%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">PHP</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">JavaScript (ES7)</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" data-animate-width="80%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Linux / Bash</span>
									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="image-box team-member style-3-b">
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3">
								<div class="overlay-container overlay-visible">
									<img src="/images/18342202_10158624891780414_593784651159763495_n.jpg" alt="">
									<a href="mailto:castiglia.kevin@gmail.com" class="popup-img overlay-link" title="Tom Johnson - Software Engineer"><i class="fa fa-envelope"></i></a>
									<div class="overlay-bottom hidden-xs"  style="display: none;">
										<div class="text">
											<p class="small margin-clear"><em><i class="fa fa-circle" style="color: red;"></i> Offline Now</em></p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-4 col-lg-6">
								<div class="body">
									<h3 class="title margin-clear">Tom Johnson - <small>Software Engineer</small></h3>
									<div class="separator-2 mt-10"></div>
									<p>Tom is a software engineer with a passion for open source, optimisation and clean code. Having worked with many programming languages from a young age, joining CodeBuilder was a natural progression.</p>
									<ul class="social-links circle margin-clear colored" style="display: none;">
										<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
										<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									</ul>
									<br>
									<a href="mailto:tom@codebuilder.us" class="btn btn-gray-transparent"><i class="pr-10 fa fa-envelope-o"></i>Email</a>
								</div>
							</div>
							<div class="col-sm-12 col-md-4 col-lg-3">
								<div class="pv-20 visible-lg visible-md"></div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="90%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">C++</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="90%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">PHP</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" role="progressbar" data-animate-width="95%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">JavaScript (ES7)</span>
									</div>
								</div>
								<div class="progress style-1 dark">
									<span class="text"></span>
									<div class="progress-bar progress-bar-white" data-animate-width="80%">
										<span class="label object-non-visible" data-animation-effect="fadeInLeftSmall" data-effect-delay="1000">Linux / Bash</span>
									</div>
								</div>

							</div>
						</div>
					</div>
				
					<h3 class="text-center">Some <strong>Stats</strong> about <span class="logo-font"><span class="text-default">CodeBuilder</span></span><span class="text-muted">.us</span></h3>
					<div class="separator-2 mb-20"></div>
					<div class="row">
						<div class="col-md-3 col-xs-6 text-center">
							<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
								<span class="icon without-bg text-center"><i class="text-default fa fa-diamond"></i></span>
								<h3>Projects</h3>
								<span class="counter" data-to="487" data-speed="5000">0</span>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 text-center">
							<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
								<span class="icon without-bg text-center"><i class="text-default fa fa-users"></i></span>
								<h3>Clients</h3>
								<span class="counter" data-to="134" data-speed="5000">0</span>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 text-center">
							<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
								<span class="icon without-bg text-center"><i class="text-default fa fa-money"></i></span>
								<h3>Invoices</h3>
								<span class="counter" data-to="275" data-speed="5000">0</span>
							</div>
						</div>
						<div class="col-md-3 col-xs-6 text-center">
							<div class="feature-box shadow-narrow bordered pv-20 light-gray-bg object-non-visible" data-animation-effect="fadeIn" data-effect-delay="300">
								<span class="icon without-bg text-center"><i class="text-default fa fa-code"></i></span>
								<h3>Lines of Code</h3>
								<span class="counter" data-to="100000" data-speed="60000">0</span>
							</div>
						</div>
					</div>
					<div class="clients-container">
						<div class="clients">
							<div class="client-image object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="100" style="width: 80px;">
								<a href="/portfolio" class="pjax" data-toggle="tooltip" title="SingelForaldrar.se"><img src="/images/sf_heart.jpg" alt="SingelForaldrar" style="height: 80px; width: 100px;  position: relative; left: 50px;"></a>
							</div>
							<div class="client-image object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="200" style="width: 200px;">
								<a href="/portfolio" class="pjax"  data-toggle="tooltip" title="Defense Health Agency"><img src="/images/dha_smooth_logo1.png" alt="Defense Health Agency" style="height: 80px; position: relative; left: 20px;"></a>
							</div>
							
							<div class="client-image object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="400">
								<a href="/portfolio" class="pjax" data-toggle="tooltip" title="Orange County Bar Association"><img src="/images/logo-12252.jpg" alt="Orange County Bar Association"></a>
							</div>
							<div class="client-image object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="500">
								<a href="/portfolio" class="pjax" data-toggle="tooltip" title="Centers for Disease Control"><img src="/images/cdc.png" alt="Centers for Disease Control"></a>
							</div>
							<div class="client-image object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="600" style="">
								<a href="/portfolio" class="pjax" data-toggle="tooltip" title="Tax Course Central"><img alt="Tax Course Central" src="/images/taxcoursecentral_badge.png" style=""></a>
							</div>
							<div class="client-image object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="700">
								<a href="/portfolio" class="pjax" data-toggle="tooltip" title="Park It For Me"><img src="/images/pifm.png" alt="Park it for Me"></a>
							</div>
							<div class="client-image object-non-visible animated object-visible fadeIn" data-animation-effect="fadeIn" data-effect-delay="800" style="width: 200px;">
								<a href="/portfolio" class="pjax"><img src="/images/logo-ddna.gif" alt="Developmental Disablities Nurses Association"  data-toggle="tooltip" title="Developmental Disablities Nurses Association" style="height: 80px;  position: relative; right: 20px;"></a>
							</div>
						</div>
					</div>					
					<div class="separator-3"></div>
				</div>
			</section>
			<!-- section end -->
			
		@push("scripts")
		<script type="text/javascript">
			startVideo(".video-background-banner", "/template/videos/background-video-banner.mp4", "/template/videos/background-video-banner.webm", "/template/videos/video-fallback.jpg", "50% 50%");
		</script>
		@endpush
			
		@if($ajax)
			<script src="/template/plugins/vide/jquery.vide.js"></script>
			<script type="text/javascript">
				document.title = "About Us - CodeBuilder Inc.";
				
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
				
				
				// Stats Count To
				//-----------------------------------------------
				if ($(".stats [data-to]").length>0) {
					$(".stats [data-to]").each(function() {
						var stat_item = $(this),
						offset = stat_item.offset().top;
						if($(window).scrollTop() > (offset - 800) && !(stat_item.hasClass('counting'))) {
							stat_item.addClass('counting');
							stat_item.countTo();
						};
						$(window).scroll(function() {
							if($(window).scrollTop() > (offset - 800) && !(stat_item.hasClass('counting'))) {
								stat_item.addClass('counting');
								stat_item.countTo();
							}
						});
					});
				};

				// Animated Progress Bars
				//-----------------------------------------------
				if ($("[data-animate-width]").length>0) {
					$("[data-animate-width]").each(function() {
						if (Modernizr.touch || !Modernizr.csstransitions) {
							$(this).find("span").hide();
						};
						var waypoints = $(this).waypoint(function(direction) {
							$(this.element).animate({width: $(this.element).attr("data-animate-width")}, 800 );
							this.destroy();
							if (Modernizr.touch || !Modernizr.csstransitions) {
								$(this.element).find("span").show('slow');
							};
						},{
							offset: '90%'
						});
					});
				};

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
					startVideo(".video-background-banner", "/template/videos/background-video-banner.mp4", "/template/videos/background-video-banner.webm", "/template/videos/video-fallback.jpg", "50% 50%");
				});
			</script>
		@endif
		
		

		
			
@endsection