@extends('admin.layouts.app')

@section('content')
<div class="box">
	<div class="box-header with-border">
		<a href="{{url('article/add')}}" class="btn btn-primary" title="collapse"><i class="fa fa-plus"></i> Add</a>
	</div>
	<div class="box-body">
		<table class="table table-bordered">
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
        function category($x) {
            // $cate = Category::find($x);
            return 'w';
        }
      @endphp
      @foreach($article as $row)
        <tr>
          <td>{{ $no++ }}</td>
          <td>{{ category($row->category_id)}} </td>
          <td>{{ $row->title }}</td>
          <td>{{ $row->content }}</td>
          <td>{{ $row->created_by }}</td>
          <td>{{ ($row->status)?'Publish':'Draft' }}</td>
          <td>
              <a href="{{url('article/edit/'.$row->id)}}" class="btn btn-xs btn-warning"><i class="fa fa-gear"></i> Edit</a>
              <a href="{{url('article/delete/'.$row->id)}}" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i> Delete</a>
          </td>
        </tr>
      @endforeach
		</table>
	</div>
</div>
@endsection