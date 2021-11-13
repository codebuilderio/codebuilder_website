@extends("core")
@section('title', 'Payments List @ Admin - CodeBuilder, Inc.')
@section('description', 'Frequently Asked Questions asked by clients answered by professionals.')

@section("content")		

<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li class="active">Admin Dashboard</li>
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
					<h1 class="page-title"><i class="fa fa-dollar"></i> Payments <div class="pull-right"><a href="/admin/payment/new" class="btn btn-primary"><i class="fa fa-plus"></i> New</a></div></h1>
					<div class="separator-2"></div>
					<table class="table table-hover">
							<thead>
								<tr>
									<th>Transaction ID</th>
									<th>Date</th>
									<th>Type</th>
									<th>Status</th>
									<th>Amount</th>
								</tr>
							</thead>
							<tbody>
							@foreach($payments as $payment)
								<tr>
									<td>{{($payment->identifier)}}</td>
									<td>{{ Carbon\Carbon::parse($payment->created_at)->format('m/d/Y') }}</td>
									<td>{{ucfirst($payment->payment_type)}}</td>
									<td><span style="font-weight: 800; color: @if($payment->status == 'confirmed') green @else red @endif;">{{ucfirst($payment->status)}}</span></td>
									<td>${{$payment->usd_amount}}</td>
								</tr>
							@endforeach
							</tbody>
					</table>
						{{ $payments->links() }}

				</div>
				<!-- main end -->

				@include("admin.sidebar")

			</div>
		</div>
	</section>
	<!-- main-container end -->

    @if($ajax)
        <script type="text/javascript">
            document.title = "Admin - CodeBuilder, Inc.";
        </script>
    @endif
@endsection