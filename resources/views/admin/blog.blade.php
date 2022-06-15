@extends('admin.master')
@section('content')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
		
		<div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Blogs</h4>
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
						<h4 class="card-title">View Blogs</h4>
						<a href="{{ route('adminaddblog') }}" class="btn btn-primary">+ Add Blog</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="display datatable" style="min-width: 845px">
								<thead>
									<tr>
										<th>#</th>
										<th>Title</th>
										<th>Description</th>
										<th>Dated On</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($blogposts as $value)
									<tr>
										<td><strong>{{ $value->id }}</strong></td>
										<td>{{ $value->title }}</td>
										<td>{{ $value->short_desc }}</td>
										<td>{{ $value->posted_at }}</td>
										<td>{{ $value->status }}</td>	
										<td>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-primary"><i class="la la-pencil"></i></a>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i></a>
                                        </td>												
									</tr>
									@endforeach
									
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		
    </div>
</div>


@push('bottomscripts')

<script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    {{-- <script src="js/plugins-init/datatables.init.js"></script> --}}
<script type="text/javascript">
	
	var table = $('.datatable').DataTable();
	$('.datatable tbody').on('click', 'tr', function () {
		var data = table.row( this ).data();
	});
</script>

@endpush

@endsection