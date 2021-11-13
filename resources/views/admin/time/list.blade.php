@extends("core")
@section('title', 'Time & Effort @ Admin - CodeBuilder, Inc.')
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
				<div class="main col-md-12">
					<!-- page-title start -->
					<!-- ================ -->
					<h1 class="page-title"><i class="fa fa-clock-o"></i> Timesheets <div class="pull-right"><a href="/admin/timesheet/new" class="btn btn-primary"><i class="fa fa-plus"></i> New</a></div></h1>
					<div class="separator-2"></div>
					<table class="table table-hover">
							<thead>
								<tr>
									<th>Date</th>
									<th>Hours</th>
									<th>User</th>
									<th>Client</th>
									<th>Description</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
							@foreach($timesheets as $timesheet)
								<tr>
									<td style="text-align: center;">{{ Carbon\Carbon::parse($timesheet->start)->format('F dS, Y') }} <br>
									<small>({{ Carbon\Carbon::parse($timesheet->start)->format('g:i A') }} - {{ Carbon\Carbon::parse($timesheet->end)->format('g:i A') }})</small>
									</td>
									<td><span style="font-weight: 800;">{{number_format($timesheet->mins/60,2)}} hrs</span></td>
									<td><a href="#">{{$timesheet->user->name}}</a></td>
									<td><a href="/admin/client/view/{{$timesheet->client->id}}">{{$timesheet->client->name}}</a> <br><small>{{$timesheet->client->firm}}</small></td>
									<td><textarea style="width: 100%; height: 150px;">{{$timesheet->description}}</textarea></td>
									<td><a href="#"><i class="fa fa-trash"></i></a></td>
								</tr>
							@endforeach
							</tbody>
						</table>
						{{ $timesheets->links() }}

				</div>
				<!-- main end -->

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