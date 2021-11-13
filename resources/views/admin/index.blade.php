@extends("core")
@section('title', 'Admin - CodeBuilder Inc.')
@section('description', 'Frequently Asked Questions asked by clients answered by professionals.')

@section("content")		


@php

//$url = "https://spreadsheets.google.com/feeds/list/13XD-0TM0wvGMWNUUH4rplGOZLldRyWBc5oWCPMcd7mI/od6/public/values?alt=json";

//$json = file_get_contents($url);
//$data = json_decode($json, TRUE);

//print_r ($data);

@endphp

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
					<h1 class="page-title">CodeBuilder Admin Interface</h1>
					<div class="separator-2"></div>
					
<div id="embed-api-auth-container"></div>
<div id="chart-container"></div>
<div id="view-selector-container"></div>

				</div>
				<!-- main end -->

				@include("admin.sidebar")

			</div>
		</div>
	</section>
	<!-- main-container end -->

@push("scripts")
<script>
(function(w,d,s,g,js,fs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
  js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
}(window,document,'script'));
</script>
<script>

gapi.analytics.ready(function() {

  /**
   * Authorize the user immediately if the user has already granted access.
   * If no access has been created, render an authorize button inside the
   * element with the ID "embed-api-auth-container".
   */
  gapi.analytics.auth.authorize({
    container: 'embed-api-auth-container',
    clientid: '733721131979-9ucm39o7tf54p32gahbv6uv6f5nel3l6.apps.googleusercontent.com'
  });


  /**
   * Create a new ViewSelector instance to be rendered inside of an
   * element with the id "view-selector-container".
   */
  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector-container'
  });

  // Render the view selector to the page.
  viewSelector.execute();


  /**
   * Create a new DataChart instance with the given query parameters
   * and Google chart options. It will be rendered inside an element
   * with the id "chart-container".
   */
  var dataChart = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:date',
      'start-date': '30daysAgo',
      'end-date': 'yesterday'
    },
    chart: {
      container: 'chart-container',
      type: 'LINE',
      options: {
        width: '100%'
      }
    }
  });


  /**
   * Render the dataChart on the page whenever a new view is selected.
   */
  viewSelector.on('change', function(ids) {
    dataChart.set({query: {ids: ids}}).execute();
  });

});
</script>

@endpush

    @if($ajax)
        <script type="text/javascript">
            document.title = "Admin - CodeBuilder, Inc.";
        </script>
    @endif
@endsection