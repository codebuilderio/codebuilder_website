@extends("core")
@section('title', 'Invoice - CodeBuilder Inc.')
@section('description', 'Invoice')


@section("content")


<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li class="active">Invoice #{{$invoice->identifier}}</li>
					</ol>
				</div>
			</div>
<section class="main-container" style="padding-top: 15px;">

				<div class="container">
					<div class="row">

<p class="bg-danger p-20" style="display: none;"><i class="fa fa-warning"></i> This invoice is past-due and an additional <b>$10.00</b> fee is being added for each day that passes without full payment. It will be sent to collections on <b>8/30/2017</b>.</p>
						<!-- main start -->
						<!-- ================ -->
						<div class="main col-md-12">

							<!-- page-title start -->
							<!-- ================ -->
							<h1 class="page-title" style="float: left;"><i class="fa fa-wpforms"></i> Client Invoice</h1>
							<div class="text-right">	
								<button id="download_invoice" class="btn btn-sm btn-print btn-gray-transparent btn-hvr hvr-shutter-out-horizontal">Download <i class="fa fa-floppy-o pl-10"></i></button>
								<button onclick="print_window();" class="btn btn-sm btn-print btn-default-transparent btn-hvr hvr-shutter-out-horizontal">Print <i class="fa fa-print pl-10"></i></button>

							</div>
							<div class="separator-2"></div>
							<!-- page-title end -->

							<div id="invoice-container" class="invoice-container">
								<div class="row">
									<div class="col-sm-6">
										<img src="https://codebuilder.us/images/mandala4_75.png" alt="logo">
										<address class="small">
											<strong>CodeBuilder Inc.</strong><br>
											1211 22nd Ave NE<br>
											Minneapolis, MN 55418<br>
											<abbr title="Phone">P:</abbr> (612) 567-2633<br>
											E-mail: <a href="mailto:info@codebuilder.us">info@codebuilder.us</a>
										</address>
									</div>
									<div class="col-sm-offset-3 col-sm-3">
										<p class="text-right small"><strong>Invoice #{{$invoice->identifier}}</strong> <br> 
											Created At: {{\Carbon\Carbon::parse($invoice->created_at)->format('M d, Y')}} <br>
											Due Date: {{\Carbon\Carbon::parse($invoice->created_at)->format('M d, Y')}}
										</p>
										<h5 class="text-right"><i class="fa fa-vcard-o"></i> Bill To</h5>
										<p class="text-right small">
											<span>{{$invoice->client->name}}</span> <br>
											{{$invoice->client->firm}} <br>
											<span style="white-space: pre;">{{$invoice->client->address}}</span> <br>
										</p>
									</div>
								</div>
								<p class="small" style="float: left;"><strong>Comments:</strong> N/A.</p>
								<div class="text-right" style="font-size :12px;"><i class="fa fa-clock-o"></i> <a href="javascript: void(0);" id="view_timesheet">View Timesheet</a></div>
								<table class="table cart table-bordered">
									<thead>
										<tr>
											<th>Description </th>
											<th>Price </th>
											<th>Hours</th>
											<th class="amount">Total </th>
										</tr>
									</thead>
									<tbody>
										@foreach($invoice->LineItems as $item)
											@php
												$amt = ($item->rate*$item->hours);
											@endphp
											<tr>
												<td class="product"><a href="javascript: void(0);">{{$item->Category->title}}</a> <small>{{$item->description}}</small></td>
												<td class="price">${{$item->rate}} </td>
												<td class="quantity">{{$item->hours}} </td>
												<td class="amount">${{$amt}} </td>
											</tr>
										@endforeach
										<tr>
											<td class="total-quantity" colspan="3">Total Paid</td>
											<td class="amount">${{$invoice->total_paid}}</td>
										</tr>
										<tr>										
											<td class="total-quantity" colspan="3">Late Fees</td>
											<td class="amount">$0.00</td>
										</tr>
										<tr>										
											<td class="total-quantity" colspan="3">Remaining Balance</td>
											<td class="amount">${{$invoice->total_unpaid}}</td>
										</tr>
										<tr>
											<td class="total-quantity" colspan="3">Invoice Total</td>
											<td class="total-amount">${{$invoice->usd_amount}}</td>
										</tr>
									</tbody>
								</table>
								<p class="small">If you have any questions concerning this invoice, please contact <strong>CodeBuilder, Inc.</strong>, tel: <strong>+1 (612) 567-2633 </strong>, email: <strong>info@codebuilder.us</strong> 
								<hr>
							</div>
							<div style="float: left;">
							<img src="https://codebuilder.us/images/payment.png">
							</div>
							<div class="text-right">	
								<button id="submit_payment_invoice" class="btn btn-print btn-default-transparent btn-hvr hvr-shutter-out-horizontal">Make A Payment <i class="fa fa-shopping-cart pl-10"></i></button>
							</div>
						</div>
						<!-- main end -->

						@push("scripts")
							<script src="/js/dom-screenshot.js" type="text/javascript"></script>

							<script type="text/javascript">


							$("#view_timesheet").click(function() {

								notyError("This feature is not available yet. Please email info@codebuilder.us for detailed timesheets.");
							})

							$("#submit_payment_invoice").click(function() {
								$(".invoice_text").val("{{$invoice->identifier}}");
								$(".invoice_modal_form").submit();
							});

							@include("invoice.pdfmakejs")

							$("#download_invoice").click(function() {
								var dataURI = (new DomScreenshot(document.querySelector(".main-container"))).toDataURI();

								img = new Image();
								img.setAttribute('src', dataURI);
								img.id = "img2Canvas1";
								document.body.appendChild(img);

								setTimeout(function() {
									var canvas = document.createElement("canvas");
									canvas.width = img.width;
									canvas.height = img.height;
									canvas.getContext("2d").drawImage(img, 0, 0);

									var image = new Image();
									image.id = "img2Canvas2";
									image.src = canvas.toDataURL("image/png");
									document.body.appendChild(image);

									var dd = {
										content: [
											{
										        image: $("#img2Canvas2").attr("src"),
										        width: 800
											}
										]
									}
									$("#img2Canvas1,#img2Canvas2").remove();
									pdfMake.createPdf(dd).download('CodeBuilder Invoice #{{$invoice->identifier}}.pdf');
								}, 100);
							})

							
							</script>
						@endpush
					</div>
				</div>
			</section>
		

			
@endsection