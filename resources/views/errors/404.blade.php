@extends("core")
@section('title', '404 Page Not Found - CodeBuilder Inc.')
@section('description', '404 Page Not Found')


@section("content")




<div class="main-container parallax jumbotron border-clear light-translucent-bg text-center margin-clear" style="background-image: url(&quot;/template/images/corporate-2-slider-slide-2.jpg&quot;); background-position: 75% 2px; padding-top: 0px;">
				<div class="container">
					<div class="row">
						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-6 col-md-offset-3 pv-40">
							<h1 class="page-title"><span class="text-default">404</span></h1>
							<h2>Ooops! Page Not Found</h2>
							<p>The requested URL was not found. Make sure that the web site address displayed in the address bar of your browser is spelled and formatted correctly.</p>
							<form role="search">
								<div class="form-group has-feedback">
									<input class="form-control" placeholder="Search" type="text">
									<i class="fa fa-search form-control-feedback"></i>
								</div>
							</form>
							<a href="/" class="btn btn-default btn-animated btn-lg">Return Home <i class="fa fa-home"></i></a>
						</div>
						<!-- main end -->
					</div>
				</div>
			</div>
<div class="dark-translucent-bg footer-top  default-hovered" style="background-color:rgba(0,0,0,0.6);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2>Need assistance? Contact us for help.</h2>
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
@endsection