@extends('admin.layouts.app')
@section('content')
	<div class="box">
		<div class="box-header">
			<a href="{{url('user/add')}}" class="btn btn-primary" title="Collapse">
			  <i class="fa fa-plus"></i> Add
			</a>
		</div>
		<div class="box-body table-responsive">
		  <table class="table table-striped table-hover table-bordered">
				<tr>
				  <th style="width: 10px">No</th>
                  <th>Name</th>
				  <th>Email</th>
				  <th style="width: 200px;text-align: center;">Action</th>
				</tr>
				@php
						$no = 1;
				@endphp
				@foreach($users as $row)
					<tr>
						<td>{{ $no++ }}</td>
                        <td>{{ $row->name}}</td>
                        <td>{{ $row->email}}</td>
						<td style="text-align: center;">
							<a href="{{url('user/edit/'.$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-gear"></i> Edit</a>
							<a href="{{url('user/delete/'.$row->id)}}" class="btn btn-xs btn-danger" onclick="javascript:return confirm('Are you sure want to DELETE this?');"><i class="fa fa-trash"></i> Delete</a>
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