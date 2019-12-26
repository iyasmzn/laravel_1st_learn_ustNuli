@extends('admin.layouts.app')

@section('content')
	 <div class="box">
		<div class="box-header">
			@if(session('success'))
				<div class="alert alert-info alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-info"></i> Alert!</h4>
					Success!
				</div>
			@endif
			<a href="{{url('category/create')}}" class="btn btn-primary" title="Collapse">
			  <i class="fa fa-plus"></i> Create
			</a>
		</div>
		<div class="box-body table-responsive">
		  <table class="table table-striped table-hover table-bordered">
				<tr>
				  <th style="width: 10px">No</th>
				  <th>Category Name</th>
				  <th style="width: 200px;text-align: center;">Action</th>
				</tr>
				@php
						$no = 1;
				@endphp
				@foreach($category as $row)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{$row->name}}</td>
						<td style="text-align: center;">
							<a href="{{url('category/edit/'.$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-gear"></i> Edit</a>
							<a href="{{url('category/delete/'.$row->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
						</td>
					</tr>
				@endforeach
			</table>
		</div>
		<!-- /.box-body -->
		<div class="box-footer">
		  Footer
		</div>
		<!-- /.box-footer-->
	  </div>
@endsection