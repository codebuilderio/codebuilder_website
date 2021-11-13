@extends("core")
@section('title', 'Blog - CodeBuilder Inc.')
@section('description', 'Software Engineering Blog')


@section("content")
			<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li class="active">Blog</li>
					</ol>
				</div>
			</div>



<section class="main-container" style="padding-top: 15px;">

				<div class="container">
					<div class="row">

<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title"><i class="fa fa-comments"></i> CodeBuilder Inc. Blog</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<!-- blogpost start -->
							<article class="blogpost">
								<div class="row grid-space-10">
									<div class="col-md-6">
										<div id="carousel-blog-post" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											<ol class="carousel-indicators bottom margin-clear">
												<li data-target="#carousel-blog-post" data-slide-to="0" class=""></li>
												<li data-target="#carousel-blog-post" data-slide-to="1" class=""></li>
												<li data-target="#carousel-blog-post" data-slide-to="2" class="active"></li>
											</ol>

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item">
													<div class="overlay-container">
														<img src="/template/images/blog-1.jpg" alt="">
														<a class="overlay-link" href="/blog/some-blog-post"><i class="fa fa-link"></i></a>
													</div>
												</div>
												<div class="item">
													<div class="overlay-container">
														<img src="/template/images/blog-3.jpg" alt="">
														<a class="overlay-link" href="/blog/some-blog-post"><i class="fa fa-link"></i></a>
													</div>
												</div>
												<div class="item active">
													<div class="overlay-container">
														<img src="/template/images/blog-4.jpg" alt="">
														<a class="overlay-link" href="/blog/some-blog-post"><i class="fa fa-link"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<header>
											<h2><a href="/blog/some-blog-post">Blogpost with slider</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">12</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum...</p>
										</div>
									</div>
								</div>
								<footer class="clearfix">
									<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
									<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="blogpost">
								<div class="row grid-space-10">
									<div class="col-md-6">
										<div class="audio-wrapper">
											<iframe class="margin-clear" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/231321623&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false" height="166"></iframe>
										</div>
									</div>
									<div class="col-md-6">
										<header>
											<h2><a href="/blog/some-blog-post">Audio post</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">10</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in.</p>
										</div>
									</div>
								</div>
								<footer class="clearfix">
									<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
									<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="blogpost">
								<div class="row grid-space-10">
									<div class="col-md-6">
										<div class="overlay-container">
											<img src="/template/images/blog-2.jpg" alt="">
											<a class="overlay-link" href="/blog/some-blog-post"><i class="fa fa-link"></i></a>
										</div>
									</div>
									<div class="col-md-6">
										<header>
											<h2><a href="/blog/some-blog-post">Cute Robot</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">09</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim.</p>
										</div>
									</div>
								</div>
								<footer class="clearfix">
									<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
									<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="blogpost">
								<div class="row grid-space-10">
									<div class="col-md-6">
										<div class="embed-responsive embed-responsive-16by9">
											<iframe class="embed-responsive-item" src="//www.youtube.com/embed/91J8pLHdDB0"></iframe>
										</div>
									</div>
									<div class="col-md-6">
										<header>
											<h2><a href="/blog/some-blog-post">Blogpost with embedded youtube video</a></h2>
											<div class="post-info">
												<span class="post-date">
													<i class="icon-calendar"></i>
													<span class="day">08</span>
													<span class="month">May 2015</span>
												</span>
												<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
												<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
											</div>
										</header>
										<div class="blogpost-content">
											<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in.</p>
										</div>
									</div>
								</div>
								<footer class="clearfix">
									<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
									<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- blogpost start -->
							<article class="blogpost">
								<header>
									<h2><a href="/blog/some-blog-post">Text Post</a></h2>
									<div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="day">08</span>
											<span class="month">May 2015</span>
										</span>
										<span class="submitted"><i class="icon-user-1"></i> by <a href="#">John Doe</a></span>
										<span class="comments"><i class="icon-chat"></i> <a href="#">22 comments</a></span>
									</div>
								</header>
								<div class="blogpost-content">
									<p>Mauris dolor sapien, malesuada at interdum ut, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim.</p>
								</div>
								<footer class="clearfix">
									<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
									<div class="link pull-right"><i class="icon-link"></i><a href="#">Read More</a></div>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- pagination start -->
							<nav>
								<ul class="pagination">
									<li><a href="#" aria-label="Previous"><i class="fa fa-angle-left"></i></a></li>
									<li class="active"><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#" aria-label="Next"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</nav>
							<!-- pagination end -->

						</div>

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title"><i class="fa fa-list-alt" style="font-size: 20px;"></i> Categories</h3>
									<div class="separator-2"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li class="active"><a href="#"><i class="fa fa-list"></i> General</a></li>
											<li><a href="#"><i class="fa fa-globe"></i> Web Develeopment</a></li>
											<li><a href="#"><i class="fa fa-mobile" style="font-size: 18px;"></i> Mobile Applications</a></li>
											<li><a href="#"><i class="fa fa-database"></i> Database Administration</a></li>
											<li><a href="#"><i class="fa fa-cog"></i> Server Administration</a></li>
											<li><a href="#"><i class="fa fa-lock"></i> Operational Security</a></li>
											<li><a href="#"><i class="fa fa-connectdevelop"></i> Networking</a></li>
										</ul>
									</nav>
								</div>
								<div class="block clearfix">
									<h3 class="title">Featured Project</h3>
									<div class="separator-2"></div>
									<div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="1"></li>
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="2"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<div class="item active">
												<div class="image-box shadow bordered text-center mb-20">
													<div class="overlay-container">
														<img src="/template/images/portfolio-5.jpg" alt="">
														<a href="portfolio-item.html" class="overlay-link">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="image-box shadow bordered text-center mb-20">
													<div class="overlay-container">
														<img src="/template/images/portfolio-1-2.jpg" alt="">
														<a href="portfolio-item.html" class="overlay-link">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="image-box shadow bordered text-center mb-20">
													<div class="overlay-container">
														<img src="/template/images/portfolio-1-3.jpg" alt="">
														<a href="portfolio-item.html" class="overlay-link">
															<i class="fa fa-link"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="block clearfix">
									<h3 class="title">Latest tweets</h3>
									<div class="separator-2"></div>
									<ul class="tweets">
										<li>
											<i class="fa fa-twitter"></i>
											<p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
										</li>
										<li>
											<i class="fa fa-twitter"></i>
											<p><a href="#">@lorem</a> ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, aliquid, et molestias nesciunt <a href="#">http://t.co/dzLEYGeEH9</a>.</p><span>16 hours ago</span>
										</li>
									</ul>
								</div>								
								<div class="block clearfix">
									<h3 class="title">Popular Tags</h3>
									<div class="separator-2"></div>
									<div class="tags-cloud">
										<div class="tag">
											<a href="#">energy</a>
										</div>
										<div class="tag">
											<a href="#">business</a>
										</div>
										<div class="tag">
											<a href="#">food</a>
										</div>
										<div class="tag">
											<a href="#">fashion</a>
										</div>
										<div class="tag">
											<a href="#">finance</a>
										</div>
										<div class="tag">
											<a href="#">culture</a>
										</div>
										<div class="tag">
											<a href="#">health</a>
										</div>
										<div class="tag">
											<a href="#">sports</a>
										</div>
										<div class="tag">
											<a href="#">life style</a>
										</div>
										<div class="tag">
											<a href="#">books</a>
										</div>
										<div class="tag">
											<a href="#">lorem</a>
										</div>
										<div class="tag">
											<a href="#">ipsum</a>
										</div>
										<div class="tag">
											<a href="#">responsive</a>
										</div>
										<div class="tag">
											<a href="#">style</a>
										</div>
										<div class="tag">
											<a href="#">finance</a>
										</div>
										<div class="tag">
											<a href="#">sports</a>
										</div>
										<div class="tag">
											<a href="#">technology</a>
										</div>
										<div class="tag">
											<a href="#">support</a>
										</div>
										<div class="tag">
											<a href="#">life style</a>
										</div>
										<div class="tag">
											<a href="#">books</a>
										</div>
									</div>
								</div>
								<div class="block clearfix">
									<h3 class="title">Testimonial</h3>
									<div class="separator-2"></div>
									<blockquote class="margin-clear">
										<p>Design is not just what it looks like and feels like. Design is how it works.</p>	
										<footer><cite title="Source Title">Steve Jobs </cite></footer>
									</blockquote>
									<blockquote class="margin-clear">
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos dolorem.</p>	
										<footer><cite title="Source Title">Steve Doe </cite></footer>
									</blockquote>
								</div>
								<div class="block clearfix">
									<h3 class="title">Latest News</h3>
									<div class="separator-2"></div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-1.jpg" alt="blog-thumb">
												<a href="/blog/some-blog-post" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="/blog/some-blog-post">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-2.jpg" alt="blog-thumb">
												<a href="/blog/some-blog-post" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="/blog/some-blog-post">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-3.jpg" alt="blog-thumb">
												<a href="/blog/some-blog-post" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="/blog/some-blog-post">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-4.jpg" alt="blog-thumb">
												<a href="/blog/some-blog-post" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="/blog/some-blog-post">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
										</div>
									</div>
									<div class="text-right space-top">
										<a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>	
									</div>
								</div>
								
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>

			
@endsection