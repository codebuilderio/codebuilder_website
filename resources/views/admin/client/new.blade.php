@extends("core")
@section('title', 'Admin - CodeBuilder Inc.')
@section('description', 'Frequently Asked Questions asked by clients answered by professionals.')

@section("content")

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
	$("#client-form").submit(function() {
		$.ajax({
			url: "/admin/client/new",
			type: "POST",
			data: $("#client-form").serialize(),
			success: function(data) {
				alert(data);
			},
			error: function(data){
				var errors = data.responseJSON;
				console.log(errors);
				for(var error in errors) console.log(error);
				// Render the errors with js ...
			}
		})
		return false;
	});
});
</script>
@endpush

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
				<h1 class="page-title">New Client</h1>
				<div class="separator-2"></div>
				<!-- page-title end -->

				@if (count($errors) > 0)
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif

				<form role="form" id="client-form" class="margin-clear">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group has-feedback">
						<label for="name3">Full Name</label>
						<input type="text" class="form-control" id="name3" placeholder="Enter full name" name="name">
						<i class="fa fa-user form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label for="email3">Email address</label>
						<input type="email" class="form-control" id="email3" placeholder="Enter email address" name="email">
						<i class="fa fa-envelope form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Firm Name</label>
						<input type="text" class="form-control" id="name3" placeholder="Enter firm name" name="firm">
						<i class="fa fa-user form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Phone</label>
						<input type="text" class="form-control" id="name3" placeholder="Enter phone number" name="phone">
						<i class="fa fa-phone form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Fax</label>
						<input type="text" class="form-control" id="name3" placeholder="Enter fax number" name="fax">
						<i class="fa fa-fax form-control-feedback"></i>
					</div>
					<div class="form-group" style="display: none;">
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
						<label for="message3">Address</label>
						<textarea class="form-control" rows="4" id="message3" placeholder="" name="address"></textarea>
						<i class="fa fa-address-book-o form-control-feedback"></i>
					</div>
					<input type="submit" value="Submit" class="submit-button btn btn-default">
				</form>

			</div>
			<!-- main end -->

			<!-- sidebar start -->
			<!-- ================ -->
			<aside class="col-md-4 col-lg-3 col-lg-offset-1">
				<div class="sidebar">								
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
document.title = "Admin - CodeBuilder.io";
</script>
@endif

@endsection