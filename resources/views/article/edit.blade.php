@extends('admin.layouts.app')

@section('content')

<div class="box">
	<div class="box-body">
		<form role="form" action="{{url('article/update/'.$article->id)}}" method="POST">
			@csrf
			<div class="box-body">
				<div class="form-group">
					<label for="category">Category</label>
					<select name="category" class="form-control select2" style="width: 100%;">
						@foreach($category as $cate)
							<option value="{{$cate->id}}" @if($cate->id == $article->category_id) selected = "selected"
								@endif >
								{{$cate->name}}
							</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label for="title">Title</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
						<input type="text" class="form-control"  name="title" id="title" placeholder="Enter title" value="{{$article->title}}">
					</div>
				</div>
				<div class="form-group">
				</div>
				<div class="form-group">
					<label for="content">Content</label>
					<textarea class="form-control" name="content" id="content" placeholder="Content">{{$article->content}}</textarea>
				</div>
				<div class="form-group">
					<label for="author">Created By</label>
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-tag"></i></span>
							<input type="text" class="form-control" name="created_by" id="author" placeholder="Enter author name" value="{{$article->created_by}}">
					</div>
				</div>
				<div class="form-group">
					<label for="status">Status</label><br>
					<label>
					<label>
						<input type="radio" name="status" class="flat-blue" value="1" {{ ($article->status)?"checked":"" }}>
						Publish
					</label>
					<label>
						<input type="radio" name="status" class="flat-orange" value="0" {{ ($article->status)?"":"checked" }}>
						Draft
					</label>
				</div>
			</div>

			<!-- /.box-body -->

			<div class="box-footer">
				<a href="/article" class="btn btn-l btn-warning"><i class="fa fa-arrow-left"></i> Back</a>
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>
</div>

@endsection