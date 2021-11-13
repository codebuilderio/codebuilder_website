@extends("core")
@section('title', 'Whoops, there has been a mistake. - CodeBuilder Inc.')
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
					<h1 class="page-title">CodeBuilder Admin Interface</h1>
					<div class="separator-2"></div>
					<!-- page-title end -->
					<h3>Clients <a href="/admin/client/new" style="font-size: 12px;">[New Client]</a></h3>
					@foreach($clients as $client)
						<p><a href="/admin/client/view/{{$client->id}}">{{$client->name}}</a></p>
					@endforeach

					<h3>Invoices <a href="/admin/invoice/new" style="font-size: 12px;">[New Invoice]</a></h3>
					@foreach($invoices as $invoice)
						<p><a href="/admin/invoice/view/{{$invoice->id}}">${{$invoice->usd_amount}} - {{$invoice->identifier}} - {{$invoice->client->name}}</a></p>
					@endforeach
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
            document.title = "Admin - CodeBuilder";
        </script>
    @endif
@endsection