@extends('admin.master')

@section('page-title')
	Contacts
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<h3>First contacts:</h3>
				<form method="post" action="{{ url('/admin/contacts/updateFirstContact') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
						<input type="text" name="firstContact" id="firstContact" class="form-control" 
						value="{{ $firstContact->heading }}">
					</div>

					<button class="btn btn-primary">Update</button>

				</form>

				<br>

				<br>

				<h3>Second contacts:</h3>
				<form method="post" action="{{ url('/admin/contacts/updateThirdContact') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				
					<div class="form-group">
						<input type="text" name="thirdContact" id="thirdContact" class="form-control" 
						value="{{ $thirdContact->heading }}">
					</div>

					<button class="btn btn-primary">Update</button>

				</form>
			</div>
		</div>
	</div>
@endsection