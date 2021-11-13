@extends("core")
@section('title', 'FAQ - CodeBuilder Inc.')
@section('description', 'Frequently Asked Questions asked by clients answered by professionals.')


@section("content")
		
			<!-- main-container start -->
			<!-- ================ -->
			<section class="main-container">

				<div class="container">
					<div class="row">

						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-8">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title">Frequently Asked Questions</h1>
							<div class="separator-2"></div>
							<!-- page-title end -->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ut quisquam ab harum hic enim quibusdam aut quasi recusandae temporibus quo voluptatibus, dolorem consectetur ipsam facere ipsa. Commodi sunt, inventore!</p>
							
						</div>
						<!-- main end -->

						<!-- sidebar start -->
						<!-- ================ -->
						<aside class="col-md-4 col-lg-3 col-lg-offset-1">
							<div class="sidebar">
								<div class="block clearfix">
									<h3 class="title">Contact Us</h3>
									<div class="separator-2"></div>
									<div class="alert alert-success hidden" id="MessageSent3">
										We have received your message, we will contact you very soon.
									</div>
									<div class="alert alert-danger hidden" id="MessageNotSent3">
										Oops! Something went wrong please refresh the page and try again.
									</div>
									<form role="form" id="sidebar-form" class="margin-clear">
										<div class="form-group has-feedback">
											<label for="name3">Name</label>
											<input type="text" class="form-control" id="name3" placeholder="Enter your name" name="name3">
											<i class="fa fa-user form-control-feedback"></i>
										</div>
										<div class="form-group has-feedback">
											<label for="email3">Email address</label>
											<input type="email" class="form-control" id="email3" placeholder="Enter your email" name="email3">
											<i class="fa fa-envelope form-control-feedback"></i>
										</div>
										<div class="form-group">
											<label>Category</label>
											<select class="form-control" id="category">
												<option value="Sales">Sales</option>
												<option value="Support">Support</option>
												<option value="Lorem">Lorem</option>
												<option value="Ipsum sit">Ipsum sit</option>
												<option value="Dolor amet">Dolor amet</option>
											</select>
										</div>
										<div class="form-group has-feedback">
											<label for="message3">Message</label>
											<textarea class="form-control" rows="4" id="message3" placeholder="" name="message3"></textarea>
											<i class="fa fa-pencil form-control-feedback"></i>
										</div>
										<input type="submit" value="Submit" class="submit-button btn btn-default">
									</form>
								</div>								
								<div class="block clearfix">
									<h3 class="title">Text Sample</h3>
									<div class="separator-2"></div>
									<p>Consectetur adipisicing. Repellendus neque doloremque, quasi earum voluptatum velit eveniet commodi vel, beatae consequuntur vero ex facilis blanditiis excepturi numquam pariatur ipsum ipsam voluptates!</p>
								</div>							
							</div>
						</aside>
						<!-- sidebar end -->

					</div>
				</div>
			</section>
			<!-- main-container end -->

    @if($ajax)
        <script type="text/javascript">
            document.title = "FAQ - CodeBuilder, Inc.";
        </script>
    @endif
		
		

			
@endsection