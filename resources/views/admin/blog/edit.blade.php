
@extends("core")
@section('title', 'Admin - CodeBuilder Inc.')
@section('description', 'Create blog post.')

@section("content")

@push('scripts')
<script src="/js/tinymce/js/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$("#blog-form").submit(function() {
			//$("#blog_body").val(tinyMCE.activeEditor.getContent({format : 'raw'}));
			$.ajax({
				url: "/admin/blog/update/{{$post->id}}",
				type: "POST",
				data: $("#blog-form").serialize(),
				success: function(data) {
					alert(data);
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
		/*tinymce.init({
		  selector: '#blog_body',
		  height: 500,
		  theme: 'modern',
		  valid_elements : '*[*]',
		  plugins: [
		    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		    'searchreplace wordcount visualblocks visualchars code fullscreen',
		    'insertdatetime media nonbreaking save table contextmenu directionality',
		    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
		  ],
		  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
		  image_advtab: true,
		  templates: [
		    { title: 'Test template 1', content: 'Test 1' },
		    { title: 'Test template 2', content: 'Test 2' }
		  ],
		  content_css: [
		    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
		    '//www.tinymce.com/css/codepen.min.css'
		  ]
		 });*/
	});


</script>
@endpush

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
				<h1 class="page-title"><i class="fa fa-book"></i> Edit Blog Post</h1>
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

				<form role="form" id="blog-form" class="margin-clear">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="blogpost_id" value="{{ $post->id }}">
					<div class="form-group has-feedback">
						<label for="name3">Title</label>
						<input type="text" class="form-control" placeholder="Title" name="title" value="{{$post->title}}">
					</div>
					<div class="form-group has-feedback">
						<label for="name3">URL</label>
						<input type="text" class="form-control" placeholder="URL" name="url"  value="{{$post->url}}">
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Abstract</label>
						<textarea class="form-control" cols="50" rows="2" name="abstract" placeholder="Abstract">{{$post->abstract}}</textarea>
					</div>
					<div class="form-group has-feedback">
						<label for="name3">Body</label>
						<textarea class="form-control" cols="50" rows="20" name="body" placeholder="Body" id="blog_body">{{$post->body}}</textarea>
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
document.title = "Admin - CodeBuilder.io";
</script>
@endif

@endsection