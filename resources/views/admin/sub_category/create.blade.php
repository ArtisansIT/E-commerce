@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>Sub-Category Create</h1>
                
            <form role="form" action="{{ route('admin.category.store') }}" enctype="multipart/form-data" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="exampleInputEmail1">Create Category : </label>
                  <input type="text" class="form-control"  name="name" id="exampleInputEmail1" 
                   placeholder="New Category">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection