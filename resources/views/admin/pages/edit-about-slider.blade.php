@extends('admin.master')

@section('page-title')
	About Slider
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<h3>Create slider object</h3>
			<br>
			<form method="post" action="{{url('/admin/about-slider/create')}}">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label>Icon Type:</label>
					<input type="text" name="icon-type" id="icon-type" placeholder="ex. ti-check" class="form-control" value="{{ old('icon-type') }}">
				</div>

				<div class="form-group">
					<label>Number:</label>
					<input type="text" name="slider-number" id="slider-number" placeholder="ex. 250" class="form-control" value="{{ old('slider-number') }}">
				</div>

				<div class="form-group">
					<label>Text:</label>
					<input type="text" name="slider-text" id="slider-text" placeholder="ex. Finished projects" class="form-control">
				</div>

				<button class="btn btn-warning">
					Create object
				</button>

			</form>
		</div>
		<div class="col-md-8">
			<h3>Edit / Delete { objects }</h3>
			<br>

			<table class="table table-bordered">
				<thead>
					<tr>
						<td><strong>Icon-Type</strong></td>
						<td><strong>Number</strong></td>
						<td><strong>Text</strong></td>
						<td><strong>Update</strong></td>
						<td><strong>Delete</strong></td>
					</tr>
				</thead>
				<tbody>	
					@foreach ($about_slider_objects as $about_slider_object)
						<tr>
							<form method="post" action="">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="slider-id" value="{{$about_slider_object->id}}">
								<td>
									<div class="form-group">
										<input type="text" name="icon-type" id="icon-type" class="form-control" value="{{ $about_slider_object->icon_type }}">
									</div>
								</td>
								<td>
									<div class="form-group">
										<input type="text" name="slider-number" id="slider-number" class="form-control" value="{{ $about_slider_object->number }}">
									</div>
								</td>
								<td>
									<div class="form-group">
										<input type="text" name="slider-text" id="slider-text" class="form-control" value="{{ $about_slider_object->text }}">
									</div>
								</td>
								<td><button formaction="{{url('/admin/about-slider/update')}}/{{$about_slider_object->id}}" type="submit" class="btn btn-info">Update</button></td>
								<td><button formaction="{{url('/admin/about-slider/delete')}}/{{$about_slider_object->id}}" class="btn btn-danger">Delete</button></td>
							</form>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection