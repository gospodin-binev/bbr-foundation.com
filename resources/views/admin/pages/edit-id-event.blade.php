@extends('admin.master')

@section('page-title')
	Еvents
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<h1>Edit event</h1>
				<hr>

				<form method="post" action="{{ url('/admin/events/post') }}/{{ $events->id }}/update" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="event-id" value="{{ $events->id }}">

					<div class="form-group">
					    <label>Title: </label>
					    <input type="text" class="form-control" name="title" id="title" value="{{ $events->title }}">
					</div>
					<div class="form-group">
					    <label>Image: </label>
					    <input type="file" name="file" id="file">

					    <label>Current: </label><img class="img-responsive" src="{{ $events->image }}" style="height: 200px;" alt="">
					</div>

					<label>Content: </label>
					<input class="form-control" type="text" name="content" id="content" value="{{ $events->content }}">
					<hr>

					<button class="btn btn-warning btn-lg">Update</button>
				</form>
				<br>
				<form method="post" action="{{ url('/admin/events/post/') }}/{{ $events->id }}/delete">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="event-id" value="{{ $events->id }}">

					<button class="btn btn-danger btn-lg">Delete</button>
				</form>
			</div>
		</div>
	</div>
@endsection