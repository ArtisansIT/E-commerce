@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>Size Create</h1>


               @include('admin/massages/error')
            <form role="form" action="{{ route('admin.size.store') }}" enctype="multipart/form-data" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="name">Create Size : </label>
                  <input type="text" class="form-control"  name="name" id="name" 
                   placeholder="New Size">
                </div>

               
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection