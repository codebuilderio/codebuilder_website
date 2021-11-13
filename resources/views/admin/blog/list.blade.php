@extends("core")
@section('title', 'Client List @ Admin - CodeBuilder, Inc.')
@section('description', 'Frequently Asked Questions asked by clients answered by professionals.')

@section("content")		

<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li><a href="/admin">Admin Dashboard</a></li>
						<li class="active">Content Management System & Blog</li>
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
					<h1 class="page-title"><i class="fa fa-book"></i> CMS & Blog <div class="pull-right"><a href="/admin/blog/new" class="btn btn-primary"><i class="fa fa-plus"></i> New</a></div></h1>
					<div class="separator-2"></div>


					<ul class="nav nav-tabs style-2" role="tablist">
						<li class="active"><a href="#h2tab1" role="tab" data-toggle="tab"><i class="fa fa-home pr-10"></i>CMS</a></li>
						<li><a href="#h2tab2" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>Blog Posts</a></li>
					</ul>
					<table class="table table-hover">
							<thead>
								<tr>
									<th>Title</th>
									<th>URL</th>
									<th>Views</th>
								</tr>
							</thead>
							<tbody>
							@foreach($posts as $post)
								<tr>
									<td><a href="/admin/blog/update/{{$post->id}}">{{$post->title}}</a></td>
									<td><a href="/{{$post->url}}" style="color: grey;"><i class="fa fa-external-link"></i> {{$post->url}}</a></td>
									<td><a href="/admin/invoice/view/{{$post->id}}">@php echo number_format($post->views) @endphp</a></td>
								</tr>
							@endforeach
							</tbody>
						</table>
						{{ $posts->links() }}

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