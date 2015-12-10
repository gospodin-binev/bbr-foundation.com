@extends('admin.master')

@section('page-title')
	Team
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Name</th>
							<th>Position</th>
							<th>Image</th>
						</tr>
					</thead>
					<tbody>
						<form method="post" action="{{ url('/admin/team/create') }}" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<tr>
								<td>
									<div class="form-group">
									    <input type="text" class="form-control" name="name" id="name">
									</div>
								</td>
								<td>
									<div class="form-group">
									    <input type="text" class="form-control" name="position" id="position">
									</div>
								</td>
								<td>
									<div>
				                		<input type="file" name="image" id="image">
				            		</div>
								</td>
								<td>
									<button class="btn btn-warning btn-lg">Create</button>
								</td>
							</tr>
						</form>
						@foreach ($team as $person)
						<form method="post" action="" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input type="hidden" name="person-id" value="{{ $person->id }}">
							<tr>
								<td>
									<div class="form-group">
									    <input type="text" class="form-control" name="name" id="name" value="{{ $person->name }}">
									</div>
								</td>
								<td>
									<div class="form-group">
									    <input type="text" class="form-control" name="position" id="position" value="{{ $person->position }}">
									</div>
								</td>
								<td>
									<div>
				                		<input type="file" name="image" id="image">
				            		</div>
				            		<br>
				            		<img width="120" height="120" src="/{{ $person->image }}">
								</td>
								<td>
									<button formaction="{{ url('admin/team/update') }}" class="btn btn-info">Update</button>
								</td>
								<td>
									<button formaction="{{ url('admin/team/delete') }}" class="btn btn-danger">Delete</button>
								</td>
							</tr>
						</form>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection