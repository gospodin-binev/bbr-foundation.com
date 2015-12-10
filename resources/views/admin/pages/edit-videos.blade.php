@extends('admin.master')

@section('page-title')
	Videos
@endsection

@section('content')

	<div class="row">
		<div class="col-md-6">
			<form method="post" action="{{ url('/admin/videos/update') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
			
				<h2>Presentative video: </h2>
				<div class="form-group">
				    <input type="text" class="form-control" value="{{ $presentative->heading }}" name="presentative" id="presentative">
				</div>

				<h2>Last activity video: </h2>
				<div class="form-group">
				    <input type="text" class="form-control" value="{{ $last_activity->heading }}" name="last_activity" id="last_activity">
				</div>

				<button class="btn btn-info">Update</button>
			</form>
		</div>
	</div>

@endsection