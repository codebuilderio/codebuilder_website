@extends("core")
@section('title', 'Invoice List @ Admin - CodeBuilder, Inc.')
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
					<h1 class="page-title"><i class="fa fa-credit-card-alt"></i> Invoices <div class="pull-right"><a href="/admin/invoice/new" class="btn btn-primary"><i class="fa fa-plus"></i> New</a></div></h1>
					<div class="separator-2"></div>
					<table class="table table-hover">
							<thead>
								<tr>
									<th>Date</th>
									<th>Invoice ID</th>
									<th>Amount</th>
									<th>Client</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
							@foreach($invoices as $invoice)
								<tr>
									<td>{{ Carbon\Carbon::parse($invoice->created_at)->format('F dS, Y') }}</td>
									<td><a href="/admin/invoice/view/{{$invoice->id}}">{{$invoice->identifier}}</a></td>
									<td>${{$invoice->usd_amount}}</td>
									<td><a href="/admin/client/view/{{$invoice->client->id}}">{{$invoice->client->name}}</a></td>
									<td><span style="font-weight: 800; color: @if($invoice->status == 'unpaid') red @else green @endif;">{{ucfirst($invoice->status)}}</span></td>
								</tr>
							@endforeach
							</tbody>
						</table>
						{{ $invoices->links() }}

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