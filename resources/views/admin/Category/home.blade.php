@extends('admin.master')
@section('headerContent')
    <link rel="stylesheet" href="{{ asset('admin/css/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection
@section('mainContent')
       <div class="box">
         @if (count($Allcategory)<1)

            <h1>There is No data</h1>

        @else

           <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
            <form action="{{ route('admin.category.delete_multiple') }}" method="POST">
            @csrf
            @method('DELETE')
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.L  No</th>
                 
                  <th>Name</th>
                  <th>Edit(s)</th>
                  <th>Delete</th>
                  
                </tr>
                </thead>
                <tbody>
                    @foreach ($Allcategory as $data)
                            <tr>
                              <td>
                                
                                  <div class="checkbox">
                                      <label>
                                        <input type="checkbox" value="{{ $data->id }}" name="deleteMany[]">
                                        {{ $loop->index+1 }}
                                      </label>
                                    </div>
                                    
                                  
                              </td>
                               
                                <td>{{ $data->name }}
                                </td>
                                <td><a href="{{ route('admin.category.edit', $data->id) }}"><i  class="fa fa-edit"></i></a></td>
                                <td>
                                  <a href="{{ route('admin.category.category_delete_single',$data->id) }}"
                                    ><i class="fa fa-trash-o text-danger"  data-toggle="tooltip" data-placement="top" title="Delete The Item"></i></a>
                                </td>
                               
                       
                            </tr>
                    @endforeach
                
               
                </tbody>
                <tfoot>
                <tr>
                  <th>S.L  No</th>
                  
                  <th>Name</th>
                  <th>Edit(s)</th>
                  <th>Delete</th>
                  

                </tr>
                </tfoot>
              </table>
              <input type="submit" value="Delete" class="btn btn-info"> 
            </form>
              
            </div>
           

           
         @endif
         
            <!-- /.box-body -->
          </div>
@endsection

@section('footerContent')
<script src="{{ asset('admin/css/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/css/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection