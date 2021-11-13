@extends("core")
@section('title', 'Client List @ Admin - CodeBuilder, Inc.')
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
					<h1 class="page-title"><i class="fa fa-user"></i> Clients <div class="pull-right"><a href="/admin/client/new" class="btn btn-primary"><i class="fa fa-plus"></i> New</a></div></h1>
					<div class="separator-2"></div>
					<table class="table table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Firm</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
							@foreach($clients as $client)
								<tr>
									<td><a href="/admin/client/view/{{$client->id}}">{{$client->name}}</a></td>
									<td>{{$client->firm}}</td>
									<td>{{$client->email}}</td>
								</tr>
							@endforeach
							</tbody>
						</table>
						{{ $clients->links() }}

				</div>
				<!-- main end -->

				@include("admin.sidebar")

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