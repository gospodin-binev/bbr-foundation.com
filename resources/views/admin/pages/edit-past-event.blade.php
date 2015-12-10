@extends('admin.master')

@section('page-title')
	Past events
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<h1>Edit past event</h1>
				<hr>

				<form method="post" action="{{ url('/admin/past-events/post') }}/{{ $past_events->id }}/update" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="past-event-id" value="{{ $past_events->id }}">

					<div class="form-group">
					    <label>Title: </label>
					    <input type="text" class="form-control" name="title" id="title" value="{{ $past_events->title }}">
					</div>
					<div class="form-group">
					    <label>Image: </label>
					    <input type="file" name="file" id="file">

					    <label>Current: </label><img class="img-responsive" src="{{ $past_events->image }}" style="height: 200px;" alt="">
					</div>

					<label>Content: </label>
					<input class="form-control" type="text" name="content" id="content" value="{{ $past_events->content }}">
					<hr>

					<button class="btn btn-warning btn-lg">Update</button>
				</form>
				<br>
				<form method="post" action="{{ url('/admin/past-events/post') }}/{{ $past_events->id }}/delete">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="event-id" value="{{ $past_events->id }}">

					<button class="btn btn-danger btn-lg">Delete</button>
				</form>
			</div>
		</div>
	</div>
@endsection