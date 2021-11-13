@extends("core")
@section('title', 'Portfolio - CodeBuilder, Inc.')
@section('description', 'Our Portfolio includes clients ranging from small business to enterprise level.')


@section("content")
    <style>
    .video_background > div:first-child {
        height: 308px !important;
    }
    .banner.video-background-banner {
        min-height: 0 !important;
    }

    </style>
    <!-- section start -->
    <!-- ================ -->
    <section class="video-background pv-40 dark-translucent-bg hovered" style="padding-top: 25px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 style="font-size: 28px; margin-bottom: 15px; font-weight: 400;" class="text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">Our Portfolio</h1>
                    <div class="separator object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100"></div>
                    <p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">@yield('description')</p>
                    <p class="text-center"><a href="/contact" class="pjax btn btn-lg btn-gray-transparent object-non-visible" data-animation-effect="zoomIn" data-effect-delay="300">Contact Us</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->

    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container" style="padding-top: 20px;">

        <div class="container">

                <p class="text-center">The following are examples of some of the types of clients and projects we currently work with or have worked with in the past.</p>
        <div class="separator" style="margin-top: 5px;"></div>

            <div class="row">

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-12">
                    <!-- page-title start -->
                    <!-- ================ -->
                    <!-- page-title end -->
                    <div class="row">
                         <div class="row grid-space-10">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="image-box style-2 mb-20 bordered">
                                            <div style="text-align: left; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                                                <img src="/images/sf_heart.jpg" alt="" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; ">
                                            </div>
                                            <div class="body shadow light-gray-bg ">
                                                <h3 class="text-center">SingelForaldrar</h3>
                                                <div class="separator"></div>
                                                <p>SingelForaldrar is a Swedish dating platform for single parents. Its responsive interface includes a facebook-esque feed and a tinder-esque matching system.</p>
                                                <p style="height: 30px; text-align: center;"><a href="javascript: void(0);" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear" data-toggle="modal" data-target="#sf_modal">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="image-box style-2 mb-20 shadow bordered">
                                            <div style="text-align: left; width: 100%;   margin-top: 10px; margin-bottom: 10px; ">
                                                <img src="/images/dha_smooth_logo1.png" alt="" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; ">
                                            </div>
                                            <div class="body shadow light-gray-bg ">
                                                <h3 class="text-center">DHA</h3>
                                                <div class="separator"></div>
                                                <p>The Defense Health Agency is a Combat Support Agency that provides health care related services to the Department of Defense and its beneficiaries.</p>
                                                <p style="height: 30px; text-align: center;"><a href="javascript: void(0);" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear"  data-toggle="modal" data-target="#dha_modal">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-sm"></div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="image-box style-2 mb-20 shadow bordered">
                                            <div style="text-align: center; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                                                <img src="/images/acs_portfolio_badge.png" alt="" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; max-width: 250px; ">
                                            </div>
                                            <div class="body shadow light-gray-bg ">
                                                <h3 class="text-center">ACS</h3>
                                                <div class="separator"></div>
                                                <p>The American College of Surgeons is a non-profit educational association providing Continuing Education services to surgeons in various professions in 39 different countries.</p>
                                                <p style="height: 30px; text-align: center;"><a href="javascript: void(0);" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear"  data-toggle="modal" data-target="#acs_modal">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="image-box style-2 mb-20 shadow bordered">
                                            <div style="text-align: center; width: 100%;   margin-top: 10px;  margin-bottom: 10px;">
                                                <img src="/images/logo-12252.jpg" alt="" style="vertical-align: middle; margin-left: auto; margin-right: auto; height: 75px; ">
                                            </div>
                                            <div class="body shadow light-gray-bg ">
                                                <h3 class="text-center">OCBA</h3>
                                                <div class="separator"></div>
                                                <p>The Orange County Bar Association is a 3,500-member professional association providing legal resources for attorneys and community in the Orlando, FL area. </p>
                                                <p style="height: 30px; text-align: center;"><a href="javascript: void(0);" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear"  data-toggle="modal" data-target="#ocba_modal">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>




                   <div class="row">
                         <div class="row grid-space-10">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="image-box style-2 mb-20 bordered">
                                            <div style="text-align: left; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                                                <img src="/images/cdc.png" alt="" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; ">
                                            </div>
                                            <div class="body shadow light-gray-bg ">
                                                <h3 class="text-center">CDC</h3>
                                                <div class="separator"></div>
                                                <p>The CDC's "You Call The Shots" is a Learning Management System that provided Web-Based Immunization Training Modules for Healthcare Professionals.</p>
                                                <p style="height: 30px; text-align: center;"><a href="javascript: void(0);" class="btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear"  data-toggle="modal" data-target="#cdc_modal">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="image-box style-2 mb-20 shadow bordered">
                                            <div style="text-align: left; width: 100%;   margin-top: 21px; margin-bottom: 25px; ">
                                                <img src="/images/taxcoursecentral.png" alt="" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; max-width: 80%; ">
                                            </div>
                                            <div class="body shadow light-gray-bg ">
                                                <h3 class="text-center">Tax Course Central</h3>
                                                <div class="separator"></div>
                                                <p>Tax Course Central is a Web-Based Learning Management System proving Annual Filing Season Program courses, as well as many other Tax Law updates for tax preparers.</p>
                                                <p style="height: 30px; text-align: center;"><a href="javascript: void(0);" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear"  data-toggle="modal" data-target="#tax_modal">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix visible-sm"></div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="image-box style-2 mb-20 shadow bordered">
                                            <div style="text-align: center; width: 100%; margin-top: 10px; margin-bottom: 10px;">
                                                <img src="/images/united_nations_logo.svg" alt="" style="vertical-align: middle; margin-left: auto; margin-right: auto; max-height: 75px; max-width: 250px; ">
                                            </div>
                                            <div class="body shadow light-gray-bg ">
                                                <h3 class="text-center">United Nations</h3>
                                                <div class="separator"></div>
                                                <p>The Asia Pacific SDG Partnership is development arm of the United Nations and serves as the main economic and social development centre for the UN in the region.</p>
                                                <p style="height: 30px; text-align: center;"><a href="javascript: void(0);" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear"  data-toggle="modal" data-target="#un_modal" onClick="notyError('Additional Details Coming soon.');">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="image-box style-2 mb-20 shadow bordered">
                                            <div style="text-align: center; width: 100%;   margin-top: 10px;  margin-bottom: 10px;">
                                                <img src="/images/logo-ddna.gif" alt="" style="vertical-align: middle; margin-left: auto; margin-right: auto; height: 75px; ">
                                            </div>
                                            <div class="body shadow light-gray-bg ">
                                                <h3 class="text-center">DDNA</h3>
                                                <div class="separator"></div>
                                                <p>A non-profit professional nursing organization, founded to meet the professional needs of nurses serving individuals with developmental disabilities. </p>
                                                <p style="height: 30px; text-align: center;"><a href="javascript: void(0);" class="pjax btn btn-default btn-sm btn-hvr hvr-shutter-out-horizontal margin-clear"  data-toggle="modal" data-target="#ddna_modal">Read More<i class="fa fa-arrow-right pl-10"></i></a></p>
                                            </div>
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

	
    @push("scripts")
    <script type="text/javascript">
        startVideo(".video-background", "/template/videos/background-video.mp4", "/template/videos/background-video.webm", "/template/videos/video-fallback.jpg", "50% 100%");
    </script>
    @endpush

    @if($ajax)
		<script src="/template/plugins/vide/jquery.vide.js"></script>

        <script type="text/javascript">
            document.title = "Portfolio - CodeBuilder";
			
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
				startVideo(".video-background", "/template/videos/background-video.mp4", "/template/videos/background-video.webm", "/template/videos/video-fallback.jpg", "50% 100%");
            });
        </script>
    @endif
		
		

			
@endsection