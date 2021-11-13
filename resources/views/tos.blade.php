@extends("core")
@section('title', 'Terms of Service - CodeBuilder, Inc.')
@section('description', 'Terms of Service')


@section("content")
<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li class="active">Terms of Service</li>
					</ol>
				</div>
			</div>
			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container" style="padding-top: 15px;">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title"><i class="fa fa-gavel"></i>Codebuilder, Inc. - Terms of Service</h1>
							<div class="separator-2"></div>

								<h3>1. Terms</h3>

								  <p>By accessing the website at&nbsp;<a href="https://codebuilder.us">https://codebuilder.us</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>

								<h3>2. Use License</h3>

								  <ol type="a">
								    <li>
								      Permission is granted to temporarily download one copy of the materials (information or software) on CodeBuilder's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:

								      <ol type="i">
								        <li>modify or copy the materials;</li>
								        <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
								        <li>attempt to decompile or reverse engineer any software contained on CodeBuilder's website;</li>
								        <li>remove any copyright or other proprietary notations from the materials; or</li>
								        <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
								      </ol>
								    </li>
								    <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by CodeBuilder at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
								  </ol>

								<h3>3. Disclaimer</h3>

								  <ol type="a">
								    <li>The materials on CodeBuilder's website are provided on an 'as is' basis. CodeBuilder makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
								    <li>Further, CodeBuilder does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
								  </ol>

								<h3>4. Limitations</h3>

								  <p>In no event shall CodeBuilder or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on CodeBuilder's website, even if CodeBuilder or a CodeBuilder authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

								<h3>5. Accuracy of materials</h3>

								  <p>The materials appearing on CodeBuilder's website could include technical, typographical, or photographic errors. CodeBuilder does not warrant that any of the materials on its website are accurate, complete or current. CodeBuilder may make changes to the materials contained on its website at any time without notice. However CodeBuilder does not make any commitment to update the materials.</p>

								<h3>6. Links</h3>

								  <p>CodeBuilder has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by CodeBuilder of the site. Use of any such linked website is at the user's own risk.</p>

								<h3>7. Modifications</h3>

								  <p>CodeBuilder may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>

								<h3>8. Governing Law</h3>

								  <p>These terms and conditions are governed by and construed in accordance with the laws of MN and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>

								<h2><a href='/privacypolicy'>See Privacy Policy here</a></h2>


							</div>
						<!-- main end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->
			
			
    @push("scripts")
    <script type="text/javascript">
    </script>
    @endpush

    @if($ajax)
        <script type="text/javascript">
            document.title = "FAQ - CodeBuilder, Inc.";
			
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
            });
        </script>
    @endif
		
		

			
@endsection