@extends('admin.master')

@section('page-title')
	Images
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-bordered">
					<tbody>
					@foreach ($images as $image)
						<form method="post" action="{{ url('admin/images/update') }}" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="image-id" value="{{ $image->id }}">
							<tr>
								<td>
									<div style="margin-top: 10px;">
				                		<input type="file" name="image" id="image">
				            		</div>
				            		<br>
				            		<img class="img-responsive" width="300" height="150" src="{{ $image->image }}">
								</td>

								<td>
									<button style="margin-left: 10px;" class="btn btn-info btn-lg">Update</button>
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