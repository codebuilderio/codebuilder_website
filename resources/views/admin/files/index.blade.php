@extends("core")
@section('title', 'File Manager @ Admin - CodeBuilder, Inc.')
@section('description', 'Admin Panel File Upload Management')

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
					<h1 class="page-title"><i class="fa fa-save"></i> File Manager 
						<div class="pull-right"><a href="#" class="fileinput-button btn btn-success"><i class="fa fa-plus"></i> Upload</a></div>
					</h1>
					<div class="separator-2"></div>

						<div class="col-md-12">

							<div class="tab-content clear-style">
								<div class="tab-pane active" id="pill-1">						
									<div class="row masonry-grid-fitrows grid-space-12" style="position: relative;" id="previews">

											<div id="template" class="file-row col-md-4 col-sm-6 masonry-grid-item">
												<div class="listing-item white-bg bordered mb-20"  style="height: 250px;">
													<div class="overlay-container" style="text-align: center;">
														<span class="preview"><img data-dz-thumbnail style="display: inline;"/></span>
													</div>
													<div class="body">
														<h3><a href="shop-product.html"><p class="name" data-dz-name></p></a></h3>
														<strong class="error text-danger" data-dz-errormessage></strong>
														<p class="small size" data-dz-size></p>

														<div class="elements-list clearfix">
															<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
													          <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
													        </div>
														</div>

													    <div style="display: none;">
													      <button class="btn btn-primary start">
													          <i class="glyphicon glyphicon-upload"></i>
													          <span>Start</span>
													      </button>
													      <button data-dz-remove class="btn btn-warning cancel">
													          <i class="glyphicon glyphicon-ban-circle"></i>
													          <span>Cancel</span>
													      </button>
													      <button data-dz-remove class="btn btn-danger delete">
													        <i class="glyphicon glyphicon-trash"></i>
													        <span>Delete</span>
													      </button>
													    </div>
													</div>
												</div>
											</div>


										@foreach($files as $file)
											<div id="" class="col-md-4 col-sm-6 masonry-grid-item">
												<div class="listing-item white-bg bordered mb-20"  style="height: 250px;">
													<div class="overlay-container" style="text-align: center;">
														<span class="preview"><img data-dz-thumbnail style="display: inline;"/></span>
													</div>
													<div class="body">
														<div class="" style="height: 55px; text-align: center;">
														<h3 style="font-size: 16px;">
															<a href="#" data-toggle="tooltip" title="{{$file->original_name}}"><p class="name">{{str_limit($file->original_name, $limit = 45, $end = '...')}}</p></a>
														</h3>
														</div>
				

														<table class="table table-bordered">
		
															<tbody>
																<tr>
																	<td><i class="fa fa-calendar"></i> Added</td>
																	<td>1/1/17</td>
																</tr>
																<tr>
																	<td><i class="fa fa-save"></i> Size</td>
																	<td>25 MB</td>
																</tr>
																<tr>
																	<td><i class="fa fa-mouse-pointer"></i> Hits</td>
																	<td>25</td>
																</tr>
	
															</tbody>
														</table>


														<div class="row">
	
													        <div class="col-md-6">	
														      <small>
														      	<i class="glyphicon glyphicon-trash"></i> Delete
														      </small>
														    </div>
	
													        <div class="col-md-6">	
														      <small>
														      	<i class="glyphicon glyphicon-save"></i> Download
														      </small>
														    </div>
														</div>
													</div>
												</div>
											</div>
										@endforeach


									</div>
								</div>
							</div>


						</div>

									      <div class="col-lg-5">
									        <!-- The global file processing state -->
									        <span class="fileupload-process">
									          <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
									            <div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
									          </div>
									        </span>
									      </div>


				</div>
				<!-- main end -->

				@include("admin.sidebar")



				@push("scripts")
				<script src="/js/dropzone.js" type="text/javascript"></script>
				<script type="text/javascript">
					// Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
					var previewNode = document.querySelector("#template");
					previewNode.id = "";
					var previewTemplate = previewNode.parentNode.innerHTML;
					previewNode.parentNode.removeChild(previewNode);

					var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
					  url: "/admin/file/upload?_token={{ csrf_token() }}", // Set the url
					  thumbnailWidth: 100,
					  thumbnailHeight: 100,
					  parallelUploads: 20,
					  previewTemplate: previewTemplate,
					  autoQueue: true, // Make sure the files aren't queued until manually added
					  previewsContainer: "#previews", // Define the container to display the previews
					  clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
					});

					myDropzone.on("addedfile", function(file) {
					  // Hookup the start button
					  //file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
					});

					// Update the total progress bar
					myDropzone.on("totaluploadprogress", function(progress) {
					  document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
					});

					myDropzone.on("sending", function(file) {
					  // Show the total progress bar when upload starts
					  document.querySelector("#total-progress").style.opacity = "1";
					  // And disable the start button
					  //file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");

					});


					myDropzone.on("complete", function(file) {
						console.log(file.xhr.response);
					  	console.log(file);
					});
					// Hide the total progress bar when nothing's uploading anymore
					myDropzone.on("queuecomplete", function(progress) {
					  document.querySelector("#total-progress").style.opacity = "0";
					});

					// Setup the buttons for all transfers
					// The "add files" button doesn't need to be setup because the config
					// `clickable` has already been specified.
					/*document.querySelector("#actions .start").onclick = function() {
					  myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
					};
					document.querySelector("#actions .cancel").onclick = function() {
					  myDropzone.removeAllFiles(true);
					};*/
				</script>
				@endpush

			</div>
		</div>
	</section>
	<!-- main-container end -->


@endsection