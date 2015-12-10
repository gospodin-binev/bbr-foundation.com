@extends('admin.master')

@section('page-title')
	Headings
@endsection

@section('content')
	<form method="post" action="{{ url('/admin/home/homeSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">1. Home Heading</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 1)
			<input type="text" name="home-heading" id="home-heading" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>

	<br>

	<form method="post" action="{{ url('/admin/home/aboutSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">2. About Heading</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 2)
			<input type="text" name="about-heading" id="about-heading" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>

	<br>

	<form method="post" action="{{ url('/admin/home/solutionSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">3. Solution Heading</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 3)
			<input type="text" name="solution-heading" id="solution-heading" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>

	<br>

	<form method="post" action="{{ url('/admin/home/servicesSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">4. Services Heading</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 4)
			<input type="text" name="services-heading" id="services-heading" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>

	<br>

	<form method="post" action="{{ url('/admin/home/videoSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">5. Video Heading</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 5)
			<input type="text" name="video-heading" id="video-heading" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>

	<br>

	<form method="post" action="{{ url('/admin/home/secondVideoSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">6. Second Video Heading</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 6)
			<input type="text" name="s-video-heading" id="s-video-heading" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>

	<br>

	<form method="post" action="{{ url('/admin/home/teamSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">7. Team Heading</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 7)
			<input type="text" name="team-heading" id="team-heading" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>

	<br>

	<form method="post" action="{{ url('/admin/home/contactSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">8. Contact Heading</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 8)
			<input type="text" name="contact-heading" id="contact-heading" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>

	<br>

	<form method="post" action="{{ url('/admin/home/subheadingSave') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<label style="font-size: 22px;">Second video - Text</label>

		<div class="form-group">
			@foreach ($headings as $heading)
			@if ($heading->id == 14)
			<input type="text" name="video_text" id="video_text" class="form-control" 
			value="{{ $heading->heading }}">
			@endif
			@endforeach
		</div>

		<button class="btn btn-info">
			Save
		</button>
	</form>
@endsection