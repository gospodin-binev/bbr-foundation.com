@extends('admin.master')

@section('page-title')
	Еvents
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<h1>Create an event</h1>
				<hr>

				<form method="post" action="{{ url('/admin/events/post') }}" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
					    <label>Title: </label>
					    <input type="text" class="form-control" name="title" id="title">
					</div>
					<div class="form-group">
					    <label>Image: </label>
					    <input type="file" name="file" id="file">
					</div>
					<label>Content: </label>
					<textarea class="form-control" name="content" id="content" rows="20"></textarea>
					<hr>

					<button class="btn btn-info btn-lg">Create</button>
				</form>
			</div>
		</div>

		<hr>

		<div class="row">
			<div class="col-md-9">
				<h1>Edit events</h1>
				<hr>

				<table class="table table-bordered">
					<tbody>
						@foreach($events as $event)
							<tr>
								<form method="get" action="">
									<td>{{ $event->id }}</td>
									<td>{{ $event->title }}</td>
									<td><button formaction="{{ url('admin/events/post') }}/{{ $event->id }}" class="btn btn-primary">Edit</button></td>
								</form>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection