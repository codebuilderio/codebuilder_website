@extends("core")
@section('title', 'Create Invoice - CodeBuilder Inc.')
@section('description', 'Frequently Asked Questions asked by clients answered by professionals.')

@section("content")

@push('scripts')
<script type="text/javascript" src="https://openportl.io/bower_components/EasyAutocomplete/dist/jquery.easy-autocomplete.min.js"></script>
<link href="https://openportl.io/bower_components/EasyAutocomplete/dist/easy-autocomplete.css" rel="stylesheet">


<script type="text/javascript">
$(document).ready(function() {



	/* Handle Form Submission */
	$("#client-form").submit(function() {

		$.ajax({
			url: "/admin/invoice/new",
			type: "POST",
			data: $("#client-form").serialize(),
			success: function(data) {

			    new Noty({
			      text: '<div class="text-center">Invoice created. Redirecting...</strong></div>',
			      type: 'success',
			      killer: true,
			      theme: 'mint',
			      layout: 'topRight',
			      timeout: 4000,
			      force: true
			    }).show();

				window.location = "/admin/invoice/view/"+data.invoice_id;
			},
			error: function(data){
				var response = data.responseJSON;
				notyError(response.error);
			}
		})
		return false;
	});



	/* Enable Line Item Functionality */
	var html = "<div class='line_item'>"+$("#line_item_template").html()+"</div>";
	$("#line_item_template").eq(0).hide();
	$( html ).appendTo( $( "#line_items_wrapper" ) );
	$("#add_line_item").click(function() {
		$( html ).appendTo( $( "#line_items_wrapper" ) );
	});

	/* Update Invoice Total field(s) on line item rate or hourly change */
	$(document).on("change", ".line_item_rate, .line_item_hours", function() {
		var total_amt = 0;
		$(".line_item").each(function() {
			var rate = parseInt($(this).find(".line_item_rate").val());
			var hours = parseInt($(this).find(".line_item_hours").val());
			if(!hours) var hours = 0;
			if(!rate) var rate = 0;

			total_amt = total_amt+((rate)*(hours));
			$("#usd_amount").val("$"+total_amt);
		})
		
	})


	/* Client autocomplete */
	 var options = {
		  url: function(phrase) {
		    return "/admin/api/client/search?phrase="+phrase;
		  },

		  getValue: function(element) {
		    return element.name;

		  },

		  ajaxSettings: {
		    dataType: "json",
		    method: "GET",
		    data: {
		      dataType: "json"
		    }
		  },

		  preparePostData: function(data) {
		    data.phrase = $("#example-ajax-post").val();
		    return data;
		  },

		  requestDelay: 400,

		  cssClasses: "sheroes",

		  template: {
		    type: "description",
		    fields: {
		      description: "type"
		    }
		  },

		  list: {
			onChooseEvent: function() {
				var projects = $("#sheroes").getSelectedItemData().projects;
				$("#project_select").html("");
				for (var i in projects) {
					$("#project_select").append("<option value='"+i+"'>"+projects[i].title+"</option>");
				}
			},
		    showAnimation: {
		      type: "slide"
		    },
		    hideAnimation: {
		      type: "slide"
		    }
		  }
	};

	$("#sheroes").easyAutocomplete(options);



});





</script>
@endpush

<!-- main-container start -->
<!-- ================ -->
<section class="main-container">
	<div class="container">

		<form role="form" id="client-form" class="margin-clear">


		<div class="row">
			<!-- main start -->
			<!-- ================ -->
			<div class="main col-md-12">
				<!-- page-title start -->
				<!-- ================ -->
				<h1 class="page-title"><i class="fa fa-money"></i> New Invoice</h1>
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

				
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="row">
					<div class="col-md-2">
						<div class="form-group has-feedback">
							<label for="name3">Amount</label>
							<input type="text" class="form-control disabled" placeholder="$0.00" name="usd_amount" id="usd_amount" style="width: 150px; padding-right: 0px;" disabled>
						</div>
					</div>
					<div class="col-md-2">	
						<div class="form-group">
							<label>Status</label>
							<select class="form-control" name="status">
								<option value="unpaid">Unpaid</option>
								<option value="partial">Partial Payment</option>
								<option value="paid">Full Payment</option>
							</select>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label>Client</label>
							<input class="form-control input-sm" id="sheroes" placeholder="Type a client's name" type="text" name="client_name" value=""><span class="pmd-textfield-focused"></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Project</label>
							<select class="form-control" name="project_id" id="project_select">
								<option></option>
							</select>
						</div>
					</div>
				</div>



				<div class="form-group has-feedback">
					<label for="name3">Notes</label>
					<input type="text" class="form-control" placeholder="Notes" name="description" style="padding-right: 0px;" value="">
				</div>

				

			</div>
			<!-- main end -->
		</div>


		<div class="row">
			<div class="col-md-12">
					<div class="block clearfix">
						<h3 class="title">
							Line Items
							<a href="javascript: void(0);" id="add_line_item" style="font-size: 12px;">[Add]</a>

						</h3>
						<div class="separator-2"></div>
						<div class="row" id="line_items_wrapper">

						</div>

						<div id="line_items_wrapper">
							<div class="row" id="line_item_template">
								<div class="col-md-1">
									<div class="form-group has-feedback">
										<label for="name3">Rate</label>
										<input type="text" class="form-control line_item_rate" placeholder="$0.00" name="rate[]" style="width: 80px; padding-right: 0px;" value="">
									</div>
								</div>

								<div class="col-md-1">
									<div class="form-group has-feedback">
										<label for="name3">Hours</label>
										<input type="text" class="form-control line_item_hours" name="hours[]" placeholder="Hrs" style="width: 80px; padding-right: 0px;" value="">
									</div>
								</div>

								<div class="col-md-7">
									<div class="form-group has-feedback">
										<label for="name3">Description</label>
										<input type="text" class="form-control" name="description[]" style=" padding-right: 0px;" value="">
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group">
										<label>Category</label>
										<select class="form-control" name="category_id[]">
												<option value="1">Software Engineering</option>
												<option value="2">Database Administration</option>
												<option value="3">Server Engineering (DevOps)</option>
												<option value="4">Marketing / SEO</option>
												<option value="5">Interface / Graphic Design</option>
										</select>
									</div>
								</div>
							</div>




						</div>



					</div>	
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="pull-right">
					<input type="submit" value="Create Invoice" class="submit-button btn btn-default">
				</div>
			</div>
		</div>

		</form>

	</div>
</section>
<!-- main-container end -->

@if($ajax)
<script type="text/javascript">
document.title = "Admin - CodeBuilder.io";
</script>
@endif

@endsection