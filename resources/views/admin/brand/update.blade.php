@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                 @include('admin.massages.error')
              
                <h1>Update Specialist</h1>
            <form role="form" action="{{ route('admin.brand.update',$brand->id) }}" method="post">
             {{ csrf_field() }}
             {{ method_field('PATCH') }}
             <div class="form-group">
                    <label for="name">Create Brand : </label>
                    <input type="text" class="form-control" value="{{ $brand->name }}"  name="name" id="name" 
                     placeholder="New Category">
                  </div>
  
              
  
                    <div class="form-group">
                      <label for="tag">Brand Tag Name : </label>
                      <input type="text" class="form-control"  value="{{ $brand->tag }}" name="tag" id="tag" 
                       placeholder="Sub Category Tag Name">
                    </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection