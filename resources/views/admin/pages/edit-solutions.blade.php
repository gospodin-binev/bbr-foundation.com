@extends('admin.master')

@section('page-title')
	Solutions
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td><strong>ID</strong></td>
						<td><strong>Text</strong></td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<form method="post" action="{{url('/admin/solutions/create')}}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<td>
								X
							</td>
							<td>
								<div class="form-group">
									<input type="text" name="solution-text" id="solution-text" placeholder="Write some text..." class="form-control">
								</div>
							</td>
							<td><button class="btn btn-warning">Create</button></td>
						</form>
					</tr>
					@foreach ($solutions as $solution)
						<tr>
							<form method="post" action="">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<input type="hidden" name="solution-id" value="{{$solution->id}}">
								<td>
									{{$solution->id}}
								</td>
								<td>
									<div class="form-group">
										<input type="text" name="solution-text" id="solution-text" placeholder="Write some text..." class="form-control" value="{{$solution->text}}">
									</div>
								</td>
								<td><button formaction="{{url('/admin/solutions/update')}}/{{$solution->id}}" class="btn btn-info">Update</button></td>
								<td><button formaction="{{url('/admin/solutions/delete')}}/{{$solution->id}}" class="btn btn-danger">Delete</button></td>
							</form>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection