@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                 @include('admin.massages.error')
              
                <h1>Update Specialist</h1>
            <form role="form" action="{{ route('admin.category.update',$category->id) }}" method="post">
             {{ csrf_field() }}
             {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Update</label>
                  <input type="text" value="{{ $category->name }}" class="form-control" name="name" id="exampleInputEmail1" 
                   placeholder="Enter New Category">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection