@extends("core")
@section('title', 'Admin - CodeBuilder Inc.')
@section('description', 'Frequently Asked Questions asked by clients answered by professionals.')


@push('scripts')
<script type="text/javascript" src="https://openportl.io/bower_components/EasyAutocomplete/dist/jquery.easy-autocomplete.min.js"></script>
<link href="https://openportl.io/bower_components/EasyAutocomplete/dist/easy-autocomplete.css" rel="stylesheet">

<script type="text/javascript">
	$(document).ready(function() {
		$("#timesheet-form").submit(function() {
			var _start = moment($("#start").val()).format("YYYY-MM-DD HH:mm:ss");;
			var _end = moment($("#end").val()).format("YYYY-MM-DD HH:mm:ss");


			$.ajax({
				url: "/admin/timesheet/new",
				type: "POST",
				data: $("#timesheet-form").serialize()+"&_start="+_start+"&_end="+_end,
				success: function(data) {
					if(data.success == true) {
						window.location = "/admin/timesheets";
					}
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

    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });

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



</script>
@endpush



@section("content")
<div class="breadcrumb-container">
				<div class="container">
					<ol class="breadcrumb">
						<li><i class="fa fa-home pr-10"></i><a href="/">Home</a></li>
						<li><i class="fa fa-home pr-10"></i><a href="/admin">Admin</a></li>
						<li><i class="fa fa-clock-o"></i> <a href="/admin">Timesheets</a></li>
						<li class="active">Create Entry</li>
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
				<h1 class="page-title"><i class="fa fa-clock-o"></i> Time & Effort Entry</h1>
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

				<form role="form" id="timesheet-form" class="margin-clear">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group has-feedback">
						<div class="row">
						    <div class='col-md-6'>
						    	<label>Start</label>
						        <div class="form-group" style="margin-bottom: 0px;">
						            <div class='input-group date' id='datetimepicker6'>
						                <input type='text' class="form-control" placeholder="Start Time" name="start" id="start"/>
						                <span class="input-group-addon">
						                    <span class="glyphicon glyphicon-calendar"></span>
						                </span>
						            </div>
						        </div>
						    </div>
						    <div class='col-md-6'>
						    	<label>End</label>
						        <div class="form-group" style="margin-bottom: 0px;">
						            <div class='input-group date' id='datetimepicker7'>
						                <input type='text' class="form-control" placeholder="End Time" name="end" id="end"/>
						                <span class="input-group-addon">
						                    <span class="glyphicon glyphicon-calendar"></span>
						                </span>
						            </div>
						        </div>
						    </div>
						</div>
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Description</label>
						<textarea class="form-control" cols="50" rows="4" name="description" placeholder="Description"></textarea>
					</div>

					<hr style="margin-top: 25px; margin-bottom: 25px;">

					<div class="form-group">
						<label>Client</label>
							<input class="form-control input-sm" id="sheroes" placeholder="Type a client's name" type="text" name="client_name"><span class="pmd-textfield-focused"></span>

					</div>

					<div class="form-group">
						<label>Project</label>
						<select class="form-control" name="project_id" id="project_select">
							<option></option>
						</select>
					</div>

					<input type="submit" value="Submit" class="submit-button btn btn-default">
				</form>

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