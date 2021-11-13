@extends("core")
@section('title', 'Technology - CodeBuilder, Inc.')
@section('description', 'Our developers use various types of technology to stay current with industry standards.')


@section("content")
		
    <!-- section start -->
    <!-- ================ -->
    <section class="video-background pv-40 dark-translucent-bg hovered">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 style="font-size: 28px; margin-bottom: 15px; font-weight: 400;" class="text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100">Technology</h1>
                    <div class="separator object-non-visible" data-animation-effect="zoomIn" data-effect-delay="100"></div>
                    <p class="large text-center object-non-visible" data-animation-effect="zoomIn" data-effect-delay="200">
                        @yield('description')
                    </p>
                    <p class="text-center"><a href="/contact" class="pjax btn btn-lg btn-gray-transparent object-non-visible" data-animation-effect="zoomIn" data-effect-delay="300">Contact Us</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->


    <!-- main-container start -->
    <!-- ================ -->
    <section class="main-container" style="padding-top: 0px;">

        <div class="container">
            <div class="row">

                <!-- sidebar start -->
                <!-- ================ -->
                <div class="main col-md-2" style="margin-top: 15px;">
                    <nav class="bs-docs-sidebar hidden-xs affix-top"> 
                        <ul class="nav bs-docs-sidenav" id="technology_side_menu"> 
                            <li> <a href="#environments">Environments</a></li>
                            <li> <a href="#database">Database Engines</a></li>
                            <li> <a href="#template">Template Engines</a></li>
                            <li> <a href="#servers">Servers</a></li>
                            <li> <a href="#networking">Networking</a></li>
                            <li> <a href="#apis">API's</a></li>
                        </ul>
                    </nav>
                </div>

                <!-- main start -->
                <!-- ================ -->
                <div class="main col-md-10" style="min-height: 400px;">
                    
                    <div id="environments">
                    <h2>Environments / Frameworks</h2>
                    <!-- accordion start -->
                    <!-- ================ -->
                    <div class="panel-group collapse-style-2" id="accordion-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-1" href="#nodejs" class="collapsed">
                                        <img src="/images/favicons/node.png" style="width: 16px; float: left;">&nbsp; Node.js / Socket.io
                                    </a>
                                </h4>
                            </div>
                            <div id="nodejs" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Node.js is an open source JavaScript runtime environment that can be used for developing client-side and server-side applications. It has an event-drive architecture that makes it very useful for near-real-time communication in the browser.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-1" href="#composer" class="collapsed">
                                        <img src="/images/favicons/laraval.jpg" style="width: 16px; float: left;">&nbsp; PHP / Composer / Laravel / WordPress
                                    </a>
                                </h4>
                            </div>
                            <div id="composer" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Composer is a PHP package manager that provides access to a myriad of libraries with just a few clicks. We love PHP and generally use the Laravel framework, however we have experience with many other PHP frameworks as well.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-1" href="#html5" class="collapsed">
                                        <img src="/images/favicons/html5.png" style="width: 16px; float: left;">&nbsp; HTML5 / CSS3 / JavaScript
                                    </a>
                                </h4>
                            </div>
                            <div id="html5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    HTML5 is the current web standard we have all come to know and love. We have extensive experience building HTML5 User Interfaces (UX) that make use of JavaScript and CSS3's capabilities. 
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-1" href="#angular" class="collapsed">
                                        <img src="/images/favicons/angular.ico" style="width: 16px; float: left;">&nbsp; Javascript / Angular / Vue / jQuery / Etc...
                                    </a>
                                </h4>
                            </div>
                            <div id="angular" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We have experience working with many different front-end platforms, frameworks, and libraries. We are experts in Ajax, Websockets, WebRTC, LocalStorage, and more. 
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-1" href="#python" class="collapsed">
                                        <img src="/images/favicons/py.png" style="width: 16px; float: left;">&nbsp; Python / Twistd / Django / Etc...
                                    </a>
                                </h4>
                            </div>
                            <div id="python" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Python is a great language and we make use it whenever appropriate. We have experience working with Twisted, Django, and more.
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-1" href="#ionic" class="collapsed">
                                        <img src="/images/favicons/ionic.png" style="width: 16px; float: left;">&nbsp; Ionic / Phonegap / Cordova
                                    </a>
                                </h4>
                            </div>
                            <div id="ionic" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Our developers are experts in responsive design and creating mobile and desktop WebView applications. We have been using Apache Cordova since before PhoneGap was purchased by Adobe Systems. These tools allow us to create cross-platform web applications for any organization.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-1" href="#ruby" class="collapsed">
                                        <img src="/images/favicons/ruby.ico" style="width: 16px; float: left;">&nbsp; Ruby on Rails
                                    </a>
                                </h4>
                            </div>
                            <div id="ruby" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We have experience building and maintaining Ruby on Rails applications. We're also familiar with Active Record, and paradigms such as convention over configuration or don't repeat yourself. 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- accordion end -->
                    </div>

                    <div id="database">
                        <h2>Database Engines</h2>
                        <!-- accordion start -->
                        <!-- ================ -->
                        <div class="panel-group collapse-style-2" id="accordion-3">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-3" href="#mysql" class="collapsed">
                                            <img src="/images/favicons/mysql.ico" style="width: 16px; float: left;">&nbsp; MySQL / MariaDB  
                                        </a>
                                    </h4>
                                </div>
                                <div id="mysql" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Our engineers are data experts and can build, upgrade, or maintain your relational database(s). We understand SQL security and query optmiziation well, and will structure your database / application architecture in an efficient manner. 
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-3" href="#mysql" class="collapsed">
                                            <img src="/images/favicons/postgres.ico" style="width: 16px; float: left;">&nbsp; PostgreSQL 
                                        </a>
                                    </h4>
                                </div>
                                <div id="mysql" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Our engineers are data experts and can build, upgrade, or maintain your relational database(s). We understand SQL security and query optmiziation well, and will structure your database / application architecture in an efficient manner. 
                                    </div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-3" href="#nosql" class="collapsed">
                                            <img src="/images/favicons/redis.png" style="width: 16px; float: left;">&nbsp; NoSQL / MongoDB / Redis / Memcached
                                        </a>
                                    </h4>
                                </div>
                                <div id="nosql" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We understand when and how to use NoSQL and Memory-Caching solutions in order to optimize performance on high-use applications.
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-3" href="#nosql" class="collapsed">
                                            <img src="/images/favicons/csv.png" style="width: 16px; float: left;">&nbsp; CSV's, AccessDB, and more!
                                        </a>
                                    </h4>
                                </div>
                                <div id="nosql" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We understand when and how to use NoSQL and Memory-Caching solutions in order to optimize performance on high-use applications.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- accordion end -->
                    </div>

                    <div id="template">
                    <h2>Template Engines</h2>
                    <!-- accordion start -->
                    <!-- ================ -->
                    <div class="panel-group collapse-style-2" id="accordion-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-4" href="#bootstrap" class="collapsed">
                                        <img src="/images/favicons/bootstrap.ico" style="width: 16px; float: left;">&nbsp; Bootstrap
                                    </a>
                                </h4>
                            </div>
                            <div id="bootstrap" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Bootstrap is a great HTML5 template engine that is at the core of a large number of websites online today. We understand the Stylesheets, JavaScript, and other Components well and can customize a new template to your exact specifications. 
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-4" href="#md"  class="collapsed">
                                        <img src="/images/favicons/materialdesign.png" style="width: 16px; float: left;">&nbsp; Material Design
                                    </a>
                                </h4>
                            </div>
                            <div id="md" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Material Design is a design language developed by Google that is a good starting point for building a new mobile template or website. 
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-4" href="#propellerin"  class="collapsed">
                                        <img src="/images/favicons/propellerin.ico" style="width: 16px; float: left;">&nbsp; Propeller.in
                                    </a>
                                </h4>
                            </div>
                            <div id="propellerin" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Propeller.in is a new framework that combines the best features of Bootstrap and Material design into an excellent starting point for new web templates and interfaces.
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- accordion end -->
                    </div>

                    <div id="servers">
                    <h2>Server Administration</h2>
                    <!-- accordion start -->
                    <!-- ================ -->
                    <div class="panel-group collapse-style-2" id="accordion-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-5" href="#linux"  class="collapsed">
                                        <img src="/images/favicons/linux.png" style="width: 16px; float: left;">&nbsp; Linux (Debian, CentOS, and more)
                                    </a>
                                </h4>
                            </div>
                            <div id="linux" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We understand server administration well and can help you setup or maintain any type of Linux or Windows Server. We are experts at SSH and can write custom bash scripts and setup software daemons for you. 
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-5" href="#linux"  class="collapsed">
                                        <img src="/images/favicons/microsoft.ico" style="width: 16px; float: left;">&nbsp; Windows Server 2008 / 2012
                                    </a>
                                </h4>
                            </div>
                            <div id="linux" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We understand server administration well and can help you setup or maintain any type of Linux or Windows Server. We are experts at SSH and can write custom bash scripts and setup software daemons for you. 
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-5" href="#apache" class="collapsed">
                                        <img src="/images/favicons/apache.ico" style="width: 16px; float: left;">&nbsp; Apache / nginx / lighttpd / IIS
                                    </a>
                                </h4>
                            </div>
                            <div id="apache" class="panel-collapse collapse">
                                <div class="panel-body">
                                    As master web engineers, we have experience installing, configuring, customizing, and maintaining various types of web servers. We can setup load balancers, reverse/forward proxies, and much more.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-5" href="#virtualization"  class="collapsed">
                                        <img src="/images/favicons/docker.png" style="width: 16px; float: left;">&nbsp; Virtualization (Docker, XenServer, Oracle VM, etc...)
                                    </a>
                                </h4>
                            </div>
                            <div id="virtualization" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Our engineers is comfortable working their way around virtualization technology and can setup any Operating System on as many Virtual Machines necessary to meet your organizational needs.
                                </div>
                            </div>
                        </div>                        

                    </div>
                    <!-- accordion end -->
                    </div>

                    <div id="networking">
                        <h2>Network Administration</h2>
                        <div class="panel-group collapse-style-2" id="accordion-9">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-9" href="#load" class="collapsed">
                                            <img src="/images/favicons/database_network.png" style="width: 16px; float: left;">&nbsp; Load Balancing / Scalability (clustering, distributed networking, etc...)
                                        </a>
                                    </h4>
                                </div>
                                <div id="load" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We are experienced in creating and optimizing distributed computing applications that can handle high-usage loads. Database clustering, RAM caching, and algorithmic performance tweaks will have your application running smoothly even during peak usage times.
                                    </div>
                                </div>
                            </div>  

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-9" href="#rtc"  class="collapsed">
                                            <img src="/images/favicons/network_cloud.png" style="width: 16px; float: left;">&nbsp; P2P Technology (Blockchain technology, bitcoin, bittorrent, webtorrent, etc...)
                                        </a>
                                    </h4>
                                </div>
                                <div id="rtc" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We are passionate about the potential applications that decentralization technology enables, and we  of distributed networking protocols behind popular networks like bitcoin and bittorrent. 
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion-9" href="#rtc"  class="collapsed">
                                            <img src="/images/favicons/ethernet.png" style="width: 16px; float: left;">&nbsp; WebRTC, Websockets, Ajax/Http, and more.
                                        </a>
                                    </h4>
                                </div>
                                <div id="rtc" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        We are passionate about the potential applications that decentralization technology enables, and we  of distributed networking protocols behind popular networks like bitcoin and bittorrent. 
                                    </div>
                                </div>
                            </div>  


                        </div>
                    </div>


                    <div id="cloud">
                    <h2>Cloud Providers</h2>
                    <!-- accordion start -->
                    <!-- ================ -->
                    <div class="panel-group collapse-style-2" id="accordion-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-6" href="#dedi"  class="collapsed">
                                        <img src="/images/favicons/server.png" style="width: 16px; float: left;">&nbsp; Dedicated Servers
                                    </a>
                                </h4>
                            </div>
                            <div id="dedi" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We work with several dedicated server providers in various locations throughout the world. Our team can setup your server or server cluster and help you maintain it. 
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-6" href="#cloud" class="collapsed">
                                        <img src="/images/favicons/aws.ico" style="width: 16px; float: left;">&nbsp; Amazon Web Services, Google Cloud, etc...
                                    </a>
                                </h4>
                            </div>
                            <div id="cloud" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We have experience building applications on top of popular cloud computer architectures such as AWS, G Cloud, and more.  
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-6" href="#do" class="collapsed">
                                        <img src="/images/favicons/digitalocean.png" style="width: 16px; float: left;">&nbsp; DigitalOcean, Linode, Online.net, etc..
                                    </a>
                                </h4>
                            </div>
                            <div id="do" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We can also setup VPS's on popular providers such as DO, Linode, and more.
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- accordion end -->
                    </div>

                    <div id="apis">
                    <h2>API's</h2>
                    <!-- accordion start -->
                    <!-- ================ -->
                    <div class="panel-group collapse-style-2" id="accordion-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-7" href="#fbgraph" class="collapsed">
                                        <img src="/images/favicons/facebook.png" style="width: 16px; float: left;">&nbsp; Facebook Graph
                                    </a>
                                </h4>
                            </div>
                            <div id="fbgraph" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We have experience building Automatic Posting and Parsing applications that connect with graph.facebook.com for data transfer. Our software can help you automate data processing coming in and out of the Facebook platform.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-7" href="#reddit"  class="collapsed">
                                        <img src="/images/favicons/reddit.gif" style="width: 16px; float: left;">&nbsp; Reddit API
                                    </a>
                                </h4>
                            </div>
                            <div id="reddit" class="panel-collapse collapse">
                                <div class="panel-body">
                                    We have built Reddit scrapers, posters, bots, and more. Let us build you an automated software solution for communicating with the Reddit platform.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-7" href="#gapi" class="collapsed">
                                        <img src="/images/favicons/google.png" style="width: 16px; float: left;">&nbsp; Google API's
                                    </a>
                                </h4>
                            </div>
                            <div id="gapi" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Our developers can build custom software solutions for automated interactions with the massive trove of information available through Google's numerous API's.
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- accordion end -->
                    </div>

            </div>
        </div>
    </section>
    <!-- main-container end -->




			
    @push("scripts")

    <script type="text/javascript">
        $(document).ready(function() {
            //$("#environments").hide();
            $("#database").hide();
            $("#template").hide();
            $("#servers").hide();
            $("#networking").hide();
            $("#apis").hide();
            $("#cloud").hide();
        });

        var id = null;
        $("#technology_side_menu a").each(function() {
            $(this).click(function () {
                id = $(this).attr("href").replace("#", "");

                $("#environments, #database, #template, #servers, #networking, #apis, #cloud").slideUp("fast", function() {
                    if($(this).attr("id") == id) $(this).slideDown("fast");
                });
                return false;
            })
        })
    </script>

    <script type="text/javascript">
        startVideo(".video-background", "/template/videos/futuristic-technology-abstract-background_4k3v6uqwg__WL.mp4", "/template/videos/background-video.webm", "/template/videos/video-fallback.jpg", "50% 100%");
    </script>
    @endpush

    @if($ajax)
		<script src="/template/plugins/vide/jquery.vide.js"></script>

        <script type="text/javascript">
            document.title = "Technology - CodeBuilder, Inc.";

            $(document).ready(function() {
                //$("#environments").hide();
                $("#database").hide();
                $("#template").hide();
                $("#servers").hide();
                $("#networking").hide();
                $("#apis").hide();
                $("#cloud").hide();
            });

            var id = null;
            $("#technology_side_menu a").each(function() {
                $(this).click(function () {
                    id = $(this).attr("href").replace("#", "");

                    $("#environments, #database, #template, #servers, #networking, #apis, #cloud").slideUp("fast", function() {
                        if($(this).attr("id") == id) $(this).slideDown("fast");
                    });
                    return false;
                })
            })

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
				startVideo(".video-background", "/template/videos/futuristic-technology-abstract-background_4k3v6uqwg__WL.mp4", "/template/videos/background-video.webm", "/template/videos/video-fallback.jpg", "50% 100%");
            });
        </script>
    @endif
		
		

			
@endsection