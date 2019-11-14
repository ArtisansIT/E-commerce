@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>Color Create</h1>


               @include('admin/massages/error')
            <form role="form" action="{{ route('admin.color.store') }}" enctype="multipart/form-data" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="name">Create Color : </label>
                  <input type="text" class="form-control"  name="name" id="name" 
                   placeholder="New Category">
                </div>

                
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection