@extends('admin.master')

@section('mainContent')
    <div class="container">
        <div class="row">
            <br>
            <div class="col-md-6 col-md-offset-3">
                <h1>Category Create</h1>


               @include('admin/massages/error')
            <form role="form" action="{{ route('admin.subcategory.store') }}" enctype="multipart/form-data" method="post">
             {{ csrf_field() }}
             {{ method_field('') }}
                <div class="form-group">
                  <label for="name">Create Category : </label>
                  <input type="text" class="form-control"  name="name" id="name" 
                   placeholder="New Category">
                </div>

                <div class="form-group">
                    <label>Sub-Category</label>
                    <select class="form-control" name="category_id">
                      <option disabled selected>Select once</option>
                      @foreach ($Allcategory as $data)
                          <option value="{{ $data->id }}">{{ $data->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="tag">Sub-Category Tag Name : </label>
                    <input type="text" class="form-control"  name="tag" id="tag" 
                     placeholder="Sub Category Tag Name">
                  </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
@endsection