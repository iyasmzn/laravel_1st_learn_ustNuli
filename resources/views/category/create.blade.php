@extends('admin.layouts.app')

@section('content')
{{-- @if(session('success')) --}}
        
<div class="box">
  <div class="box-body">
      <form role="form" action="{{url('/category/store')}}" method="post">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter name">
          </div>
          <a href=""></a>
        </div>
        <a class="btn btn-warning" href="{{url('/category')}}"><i class="fa fa-arrow-left"></i> Back</a>
        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Submit</button>      
      </form>
  </div>
      <!-- /.box-body -->
  <div class="box-footer">
    Footer
  </div>
      <!-- /.box-footer-->
</div>
@endsection