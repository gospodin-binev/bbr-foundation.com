@extends('admin.master')

@section('page-title')
	Services
@endsection

@section('content')
	<table class="table table-bordered">
		<thead>
			<tr>
				<td><strong>Icon-Type</strong></td>
				<td><strong>Title</strong></td>
				<td><strong>Content</strong><td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<form method="post" action="{{ url('/admin/services/create') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<td>
						<div class="form-group">
							<input type="text" name="serv-icon-type" id="serv-icon-type" class="form-control">
						</div>
					</td>
					<td>
						<div class="form-group">
							<input type="text" name="serv-title" class="serv-title" class="form-control">
						</div>
					</td>
					<td>
						<div class="form-group">
							<input type="text" name="serv-content" id="serv-content" class="form-control" placeholder="Each row in <li></li>">
						</div>
					</td>
					<td>
						<button class="btn btn-warning">Create</button>
					</td>
				</form>
			</tr>
		</tbody>
	</table>
	<br>

	<h1>Edit services</h1>
	<table class="table table-bordered table-hover">
		<tbody>
			@foreach($services as $service)
			<tr>
				<form method="post" action="">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="service_id" value="{{ $service->id }}">

					<td>
						<div class="form-group">
							<input type="text" name="serv-icon-type" id="serv-icon-type" class="form-control" value="{{ $service->icon_type }}">
						</div>
					</td>
					<td>
						<div class="form-group">
							<input type="text" name="serv-title" class="serv-title" class="form-control" value="{{ $service->title }}">
						</div>
					</td>
					<td>
						<div class="form-group">
							<input type="text" name="serv-content" id="serv-content" class="form-control" placeholder="Each row in <li></li>" value="{{ $service->content }}">
						</div>
					</td>
					<td>
						<button formaction="{{ url('/admin/services/update') }}/{{ $service->id }}" class="btn btn-info">Update</a>
					</td>
					<td>
						<button formaction="{{ url('/admin/services/delete') }}/{{ $service->id }}" class="btn btn-danger">Delete</button>
					</td>
				</form>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection