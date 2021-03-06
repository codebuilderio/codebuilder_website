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



<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Blog Post</h1>
							<!-- page-title end -->

							<!-- blogpost start -->
							<!-- ================ -->
							<article class="blogpost full">
								<header>
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
									<div id="carousel-blog-post" class="carousel slide mb-20" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel-blog-post" data-slide-to="0" class=""></li>
											<li data-target="#carousel-blog-post" data-slide-to="1" class="active"></li>
											<li data-target="#carousel-blog-post" data-slide-to="2" class=""></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<div class="item">
												<div class="overlay-container">
													<img src="/template/images/blog-1.jpg" alt="">
													<a class="overlay-link popup-img" href="images/blog-1.jpg"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="item active">
												<div class="overlay-container">
													<img src="/template/images/blog-3.jpg" alt="">
													<a class="overlay-link popup-img" href="images/blog-3.jpg"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
											<div class="item">
												<div class="overlay-container">
													<img src="/template/images/blog-4.jpg" alt="">
													<a class="overlay-link popup-img" href="images/blog-4.jpg"><i class="fa fa-search-plus"></i></a>
												</div>
											</div>
										</div>
									</div>
									<p>Mauris dolor sapien, <a href="#">malesuada at interdum ut</a>, hendrerit eget lorem. Nunc interdum mi neque, et  sollicitudin purus fermentum ut. Suspendisse faucibus nibh odio, a vehicula eros pharetra in. Maecenas  ullamcorper commodo rutrum. In iaculis lectus vel augue eleifend dignissim. Aenean viverra semper sollicitudin.</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ullam nemo itaque excepturi suscipit unde repudiandae nesciunt ad voluptates minima recusandae illum exercitationem, neque, ut totam ratione. Consequuntur consequatur ad nesciunt nulla voluptate voluptates qui natus labore facilis dolore odit vero ea sint inventore tenetur et eligendi nobis fugit veniam quod possimus, quasi, voluptatem. Cupiditate?</p>
									<ol>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, laboriosam tempore, veniam repudiandae dolor aperiam, iste porro amet odio eius earum tempora? Ex nobis suscipit, nam in eius, deserunt nihil.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis odit est quae amet iure quia reiciendis maxime eos blanditiis tenetur voluptates, ab, obcaecati eaque accusamus dolorem a beatae mollitia quod?</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam aperiam vel cum quisquam enim reprehenderit sunt cupiditate ullam, id quidem perspiciatis dolore molestiae iure odio. Dolore fuga voluptate, deleniti placeat.</li>
										<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, eaque. Totam nisi ducimus dolor ab obcaecati temporibus asperiores, ad dignissimos dolorum unde fuga quae voluptates beatae quasi voluptatum culpa dolore?</li>
									</ol>
									<blockquote>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
									</blockquote>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus incidunt, beatae rem omnis distinctio, dolor, praesentium impedit quisquam nobis pariatur nulla expedita aliquid repellendus laudantium. A illum sint corrupti eligendi quae ab, facilis eos quas! Velit earum facere ex maxime.</p>
								</div>
								<footer class="clearfix">
									<div class="tags pull-left"><i class="icon-tags"></i> <a href="#">tag 1</a>, <a href="#">tag 2</a>, <a href="#">long tag 3</a></div>
									<div class="link pull-right">
										<ul class="social-links circle small colored clearfix margin-clear text-right animated-effect-1">
											<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
											<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
											<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
										</ul>
									</div>
								</footer>
							</article>
							<!-- blogpost end -->

							<!-- comments start -->
							<!-- ================ -->
							<div id="comments" class="comments">
								<h2 class="title">There are 3 comments</h2>

								<!-- comment start -->
								<div class="comment clearfix">
									<div class="comment-avatar">
										<img class="img-circle" src="images/avatar.jpg" alt="avatar">
									</div>
									<header>
										<h3>Comment title</h3>
										<div class="comment-meta">By <a href="#">admin</a> | Today, 12:31</div>
									</header>
									<div class="comment-content">
										<div class="comment-body clearfix">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
											<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
										</div>
									</div>
									
									<!-- comment start -->
									<div class="comment clearfix">
										<div class="comment-avatar">
											<img class="img-circle" src="/template/images/avatar.jpg" alt="avatar">
										</div>
										<header>
											<h3>Comment title</h3>
											<div class="comment-meta">By <a href="#">admin</a> | Today, 12:31</div>
										</header>
										<div class="comment-content">
											<div class="comment-body clearfix">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
												<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
											</div>
										</div>
									</div>
									<!-- comment end -->

								</div>
								<!-- comment end -->

								<!-- comment start -->
								<div class="comment clearfix">
									<div class="comment-avatar">
										<img class="img-circle" src="/template/images/avatar.jpg" alt="avatar">
									</div>
									<header>
										<h3>Comment title</h3>
										<div class="comment-meta">By <a href="#">admin</a> | Today, 12:31</div>
									</header>
									<div class="comment-content">
										<div class="comment-body clearfix">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
											<a href="blog-post.html" class="btn-sm-link link-dark pull-right"><i class="fa fa-reply"></i> Reply</a>
										</div>
									</div>
								</div>
								<!-- comment end -->

							</div>
							<!-- comments end -->

							<!-- comments form start -->
							<!-- ================ -->
							<div class="comments-form">
								<h2 class="title">Add your comment</h2>
								<form role="form" id="comment-form">
									<div class="form-group has-feedback">
										<label for="name4">Name</label>
										<input class="form-control" id="name4" placeholder="" name="name4" required="" type="text">
										<i class="fa fa-user form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="subject4">Subject</label>
										<input class="form-control" id="subject4" placeholder="" name="subject4" required="" type="text">
										<i class="fa fa-pencil form-control-feedback"></i>
									</div>
									<div class="form-group has-feedback">
										<label for="message4">Message</label>
										<textarea class="form-control" rows="8" id="message4" placeholder="" name="message4" required=""></textarea>
										<i class="fa fa-envelope-o form-control-feedback"></i>
									</div>
									<input value="Submit" class="btn btn-default" type="submit">
								</form>
							</div>
							<!-- comments form end -->
						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Sidebar menu</h3>
									<div class="separator-2"></div>
									<nav>
										<ul class="nav nav-pills nav-stacked">
											<li><a href="index.html">Home</a></li>
											<li class="active"><a href="blog-large-image-right-sidebar.html">Blog</a></li>
											<li><a href="portfolio-grid-2-3-col.html">Portfolio</a></li>
											<li><a href="page-about.html">About</a></li>
											<li><a href="page-contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
								<div class="block clearfix">
									<h3 class="title">Featured Project</h3>
									<div class="separator-2"></div>
									<div id="carousel-portfolio-sidebar" class="carousel slide" data-ride="carousel">
										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="0" class=""></li>
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="1" class=""></li>
											<li data-target="#carousel-portfolio-sidebar" data-slide-to="2" class="active"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner" role="listbox">
											<div class="item">
												<div class="image-box shadow bordered text-center mb-20">
													<div class="overlay-container">
														<img src="/template/images/portfolio-10.jpg" alt="">
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
											<div class="item active">
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
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 23, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-2.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 22, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-3.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
										</div>
										<hr>
									</div>
									<div class="media margin-clear">
										<div class="media-left">
											<div class="overlay-container">
												<img class="media-object" src="images/blog-thumb-4.jpg" alt="blog-thumb">
												<a href="blog-post.html" class="overlay-link small"><i class="fa fa-link"></i></a>
											</div>
										</div>
										<div class="media-body">
											<h6 class="media-heading"><a href="blog-post.html">Lorem ipsum dolor sit amet...</a></h6>
											<p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>Mar 21, 2015</p>
										</div>
									</div>
									<div class="text-right space-top">
										<a href="blog-large-image-right-sidebar.html" class="link-dark"><i class="fa fa-plus-circle pl-5 pr-5"></i>More</a>	
									</div>
								</div>
								<div class="block clearfix">
									<h3 class="title">Text Sample</h3>
									<div class="separator-2"></div>
									<p class="margin-clear">Debitis eaque officia illo impedit ipsa earum <a href="#">cupiditate repellendus</a> corrupti nisi nemo, perspiciatis optio harum, hic laudantium nulla maiores rem sit magni neque nihil sequi temporibus. Laboriosam ipsum reiciendis iste, nobis obcaecati, a autem voluptatum odio? Recusandae officiis dicta quod qui eligendi.</p>
								</div>
								<div class="block clearfix">
									<form role="search">
										<div class="form-group has-feedback">
											<input class="form-control" placeholder="Search" type="text">
											<i class="fa fa-search form-control-feedback"></i>
										</div>
									</form>
								</div>								
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			
@endsection