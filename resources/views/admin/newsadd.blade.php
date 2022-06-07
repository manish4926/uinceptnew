@extends('admin.master')
@section('content')
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
                                <form action="#" method="post">
									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Title</label>
												<input type="text" name="title" class="form-control">
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
												<label class="form-label">Joining Date</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Password</label>
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Confirm Password</label>
												<input type="password" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile Number</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Gender</label>
												<select class="form-control">
													<option value="Gender">Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Designation</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Department</label>
												<select class="form-control">
													<option value="Department">Department</option>
													<option value="html">HTML</option>
													<option value="css">CSS</option>
													<option value="javascript">JavaScript</option>
													<option value="angular">Angular</option>
													<option value="angular">React</option>
													<option value="vuejs">Vue.js</option>
													<option value="ruby">Ruby</option>
													<option value="php">PHP</option>
													<option value="asp">ASP.NET</option>
													<option value="python">Python</option>
													<option value="mysql">MySQL</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date of Birth</label>
												<input name="datepicker" class="datepicker-default form-control" id="datepicker1">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Education</label>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<textarea class="form-control" rows="5"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group fallback w-100">
												<input type="file" class="dropify" data-default-file="">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-light">Cencel</button>
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



@endpush

@endsection