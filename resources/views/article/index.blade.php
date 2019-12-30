@extends('admin.layouts.app')

@section('content')
<div class="box">
	<div class="box-header">
		@if($message = Session::get('success'))
			<div class="alert alert-info alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-info"></i> Alert!</h4>
				{{$message}}
			</div>
		@endif
		@if($message = Session::get('updated'))
			<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-info"></i> Alert!</h4>
				{{$message}}
			</div>
		@endif
		@if($message = Session::get('deleted'))
			<div class="alert alert-danger alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<h4><i class="icon fa fa-info"></i> Alert!</h4>
				{{$message}}
			</div>
		@endif
		<a href="{{url('article/add')}}" class="btn btn-primary" title="collapse"><i class="fa fa-plus"></i> Create</a>
	</div>
	<div class="box-body table-responsive">
		<table class="table table-striped table-hover table-bordered">
			<tr>
				<th style="width: 10px">No</th>
				<th>Category</th>
				<th>Title</th>
				<th>Content</th>
				<th>Author</th>
				<th>Status</th>
				<th>Action</th>
			</tr>
	  @php
		$no = 1;
	  @endphp
	  @foreach($article as $row)
		<tr>
		  <td>{{ $no++ }}</td>
		  <td>{{ $row->category->name }} </td>
		  <td>{{ $row->title }}</td>
		  <td>{{ $row->content }}</td>
		  <td>{{ $row->created_by }}</td>
		  <td>{{ ($row->status)?'Publish':'Draft' }}</td>
		  <td>
			  <a href="{{url('article/edit/'.$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-gear"></i> Edit</a>
			  <a href="{{url('article/delete/'.$row->id)}}" class="btn btn-xs btn-danger" onclick="javascript:return confirm('Are you sure want to DELETE this?');"><i class="fa fa-trash"></i> Delete</a>
		  </td>
		</tr>
	  @endforeach
		</table>
	</div>
</div>
@endsection