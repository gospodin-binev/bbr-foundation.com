@extends('admin.master')

@section('page-title')
	Edit
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-9">
				<h2>Blog post: <span style="color: orange;">{{ $selectedPost->title }}</span></h2>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<form method="post" action="{{ url('/admin/blog/update') }}/{{ $selectedPost->id }}" enctype="multipart/form-data">
						
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="post-id" value="{{ $selectedPost->id }}">

					<div class="form-group">
					    <label>Title: </label>
					    <input type="text" class="form-control" name="title" id="title" value="{{ $selectedPost->title }}">
					</div>

					<div class="form-group">
					    <label>Image: </label>
					    <input type="file" name="file" id="file">
					</div>

					Current: <img src="{{ $selectedPost->image }}" class="img-responsive" style="height: 200px;">

					<br>

					<div class="form-group">
					    <label>Author: </label>
					    <input type="text" class="form-control" name="author" id="author" value="{{ $selectedPost->author }}">
					</div>

					<label>Content: </label>
					<input class="form-control" name="content" id="content" value="{{ $selectedPost->content }}">
					<hr>

					<button class="btn btn-info btn-lg">Update</button>
				</form>

				<br>

				<form method="post" action="{{ url('/admin/blog/delete') }}/{{ $selectedPost->id }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="post-id" value="{{ $selectedPost->id }}">
					
					<button class="btn btn-danger btn-lg">Delete</button>
				</form>
			</div>
		</div>
	</div>
@endsection