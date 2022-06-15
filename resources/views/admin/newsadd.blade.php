@extends('admin.master')
@section('content')

@push('topscripts')

<link rel="stylesheet" href="{{ asset('admin/vendor/pickadate/themes/default.css') }}">
<link rel="stylesheet" href="{{ asset('admin/vendor/pickadate/themes/default.date.css') }}">
<link href="{{ asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=qwp2vxacyh2n0efsc99k49utcc8wpxa7mhs6xkac3x65jdjh"></script>
    <script>tinymce.init({ 
      selector:'.tinymce',
      oninit : "setPlainText",
      plugins : "paste print preview" ,
      paste_as_text: true,
      theme: 'modern',
      paste_data_images: true,
      plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen link codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',

      toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link code | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat',
      //toolbar2: "print preview media | forecolor backcolor emoticons",
      
    });</script>


@endpush
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
		
		<div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Add News</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <?php $segments = ''; ?>
				    @foreach(Request::segments() as $segment)
				        <?php $segments .= '/'.$segment; ?>
				        <li class="breadcrumb-item active">
				            <a href="{{ $segments }}">{{ucfirst($segment)}}</a>
				        </li>
				    @endforeach                
				</ol>
            </div>
        </div>
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Add News</h4>
						<a href="{{ route('adminaddnews') }}" class="btn btn-primary">+ Add new</a>
					</div>
					<div class="card-body">
                                <form action="{{ route('adminaddnewssubmit') }}" method="post" enctype="multipart/form-data">
                                	@csrf
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Title</label>
												<input type="text" class="form-control" name="title">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Subtitle</label>
												<input type="text" class="form-control" name="subtitle">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Description (15 words)</label>
												<textarea class="form-control" rows="2" name="description"></textarea>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Source Name <code>(If Any)</code></label>
												<input type="text" class="form-control" name="source_name">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Source Link <code>(If Any)</code></label>
												<input type="url" class="form-control" name="source_link">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">News Date</label>
												<input class="datepicker form-control" name="news_date">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Status</label>
												<select class="form-control" name="status">
													<option value="1" selected>Active</option>
													<option value="0">Inactive</option>
												</select>
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Content</label>
												<textarea class="form-control tinymce" rows="5" name="content"></textarea>
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Extra Content <code>(If larger content)</code></label>
												<textarea class="form-control tinymce" rows="5" name="extracontent"></textarea>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group fallback w-100">
												<label class="form-label">Card Image (326 * 464)</label>
												<input type="file" class="dropify" data-default-file="" name="card_image">
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group fallback w-100">
												<label class="form-label">Cover Image (Width 1200px)</label>
												<input type="file" class="dropify" data-default-file="" name="cover_image">
											</div>
										</div>

										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="cancel" class="btn btn-light">Cancel</button>
										</div>
									</div>
								</form>
                            </div>
				</div>
			</div>
		</div>
		
    </div>
</div>


@push('bottomscripts')


<script src="{{ asset('admin/vendor/pickadate/picker.js') }}"></script>
<script src="{{ asset('admin/vendor/pickadate/picker.date.js') }}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js" integrity="sha512-hJsxoiLoVRkwHNvA5alz/GVA+eWtVxdQ48iy4sFRQLpDrBPn6BFZeUcW4R4kU+Rj2ljM9wHwekwVtsb0RY/46Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
	$('.dropify').dropify();
	$('.datepicker').pickadate({
		format: 'yyyy-mm-dd',
	});

</script>


@endpush

@endsection