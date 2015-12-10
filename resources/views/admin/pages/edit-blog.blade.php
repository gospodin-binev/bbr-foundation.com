@extends('admin.master')

@section('page-title')
	Blog
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<h2>Create a blog post</h2>
				<hr>
			</div>
			<div class="col-md-9">
				<form method="post" action="{{ url('/admin/blog/create') }}" enctype="multipart/form-data">
						
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="form-group">
					    <label>Title: </label>
					    <input type="text" class="form-control" name="title" id="title">
					</div>

					<div class="form-group">
					    <label>Image: </label>
					    <input type="file" name="file" id="file">
					</div>

					<div class="form-group">
					    <label>Author: </label>
					    <input type="text" class="form-control" name="author" id="author">
					</div>

					<label>Content: </label>
					<textarea class="form-control" name="content" id="content" rows="20"></textarea>
					<hr>

					<button class="btn btn-primary btn-lg">Create</button>

				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<h2>Edit posts</h2>
				<hr>

				<table class="table table-bordered">
					<tbody>
						@foreach ($posts as $post)
							<tr>
								<td>{{ $post->id }}</td>
								<td>{{ $post->title }}</td>
								<td><a href="{{ url('admin/blog/get-update') }}/{{ $post->id }}" class="btn btn-info">Edit</a></td>
							</tr>
						@endforeach
					</tbody>
				</table>

				{!! $posts->render() !!}
			</div>
		</div>
	</div>
@endsection