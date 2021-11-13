@extends("core")
@section('title', 'Client - CodeBuilder Inc.')
@section('description', 'Frequently Asked Questions asked by clients answered by professionals.')

@section("content")

@push('scripts')
<script type="text/javascript">
$(document).ready(function() {
	$("#client-form").submit(function() {
		$.ajax({
			url: "/admin/client/update/{{$client->id}}",
			type: "POST",
			data: $("#client-form").serialize(),
			success: function(data) {
				alert(data);
			},
			error: function(data){
				var errors = data.responseJSON;
				console.log(errors);
				for(var error in errors) alert(error);
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
				<h1 class="page-title" style="text-transform: none;"><i class="fa fa-user"></i> {{$client->firm}} <small>{{$client->name}}</small></h1>
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
					<input type="hidden" name="client_id" value="{{$client->id}}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group has-feedback">
						<label for="name3">Full Name</label>
						<input type="text" class="form-control" id="name3" placeholder="Enter full name" name="name" value="{{$client->name}}">
						<i class="fa fa-user form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label for="email3">Email address</label>
						<input type="email" class="form-control" id="email3" placeholder="Enter email address" name="email" value="{{$client->email}}">
						<i class="fa fa-envelope form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Firm Name</label>
						<input type="text" class="form-control" id="name3" placeholder="Enter firm name" name="firm" value="{{$client->firm}}">
						<i class="fa fa-cube form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Phone</label>
						<input type="text" class="form-control" id="name3" placeholder="Enter phone number" name="phone" value="{{$client->phone}}">
						<i class="fa fa-phone form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Fax</label>
						<input type="text" class="form-control" id="name3" placeholder="Enter fax number" name="fax" value="{{$client->fax}}">
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
						<textarea class="form-control" rows="4" id="message3" placeholder="" name="address" value="{{$client->address}}"></textarea>
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
					<div class="block clearfix" style="margin-bottom: 10px;">
						<h3 class="title"><i class="fa fa-qrcode"></i> Invoices
							<a href="/admin/invoice/new" style="font-size: 12px;">[Add]</a>
						</h3>
						<div class="separator-2"></div>

						<table class="table table-hover">
								<thead>
									<tr>
										<th>Date</th>
										<th>Invoice ID</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
								@foreach($client->Invoices as $invoice)
									<tr>
										<td>{{ Carbon\Carbon::parse($invoice->created_at)->format('m/d/Y') }}</td>
										<td><a href="/admin/invoice/view/{{$invoice->id}}">{{$invoice->identifier}}</a></td>
										<td>${{$invoice->usd_amount}}</td>
									</tr>
								@endforeach
								</tbody>
						</table>


					</div>			

					<div class="block" style="margin-bottom: 10px;">
						<h3 class="title"><i class="fa fa-dollar"></i> Payments
							<a href="/admin/payment/new" style="font-size: 12px;">[Add]</a>
						</h3>
						<div class="separator-2"></div>

						<table class="table table-hover">
								<thead>
									<tr>
										<th>Date</th>
										<th>Type</th>
										<th>Status</th>
										<th>Amount</th>
									</tr>
								</thead>
								<tbody>
								@foreach($client->Payments() as $payment)
									<tr>
										<td>{{ Carbon\Carbon::parse($payment->created_at)->format('m/d/Y') }}</td>
										<td>{{ucfirst($payment->payment_type)}}</td>
										<td><span style="font-weight: 800; color: @if($payment->status == 'confirmed') green @else red @endif;">{{ucfirst($payment->status)}}</span></td>
										<td>${{$payment->usd_amount}}</td>
									</tr>
								@endforeach
								</tbody>
						</table>
					</div>	



					<div class="block" style="margin-bottom: 10px;">
						<h3 class="title"><i class="fa fa-clock-o"></i> Time & Effort
							<a href="/admin/timesheet/new" style="font-size: 12px;">[Add]</a>
						</h3>
						<div class="separator-2"></div>
						<ul>
						@foreach($client->Timesheets as $timesheet)
							<li>{{number_format($timesheet->mins/60,2)}} hrs - {{$timesheet->user->name}} ({{ Carbon\Carbon::parse($timesheet->start)->format('d/m') }}) </li>
						@endforeach
						</ul>

						@if(!count($client->Timesheets))
							<p>No timesheets for this client yet.</p>
						@endif

					</div>	


					<div class="block" style="margin-bottom: 10px;">
						<h3 class="title"><i class="fa fa-briefcase"></i> Projects
							<a href="/admin/project/add" style="font-size: 12px;">[Add]</a>
						</h3>
						<div class="separator-2"></div>

						<ul>
						@foreach($client->Projects as $project)
							<li>{{$project->title}}</li>
						@endforeach
						</ul>

						@if(!count($client->Projects))
							<p>No projects for this client yet.</p>
						@endif

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