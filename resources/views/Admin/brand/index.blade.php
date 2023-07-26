@extends('admin.admin_mastert');

@section('admin_content')


<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                  <tr>
                      <th style="width: 5%;">ID</th>
                      <th style="width: 10%;">Brand name</th>
                      <th style="width: 30%;">Description</th>
                      <th style="width: 15%;">Status</th>
                      <th style="width: 30%;">Actions</th>
                  </tr>
              </thead>   

              @foreach ($Brands as $brand)
           
              <tbody>
                <tr>
                    <td>{{ $brand->id }}</td>
                    <td class="center">{{ $brand->name }}</td>
                    <td class="center">{{ $brand->description }}</td>                   
                    <td class="center">
                        @if($brand->status==1)
                        <span class="label label-success">Active</span>
                        @else
                        <span class="label label-danger">dective</span>
                        @endif
                    </td>
                    <td class="row">

                        @if ($brand->status==1)
                            
                        <a href="{{ url('/brand-status'.$brand->id) }}" class="btn btn-success">
                            <i class="halflings-icon white thumbs-down">status</i>  
                        </a>
                        @else
                        <a href="{{ url('/brand-status'.$brand->id)}}" class="btn btn-danger" >
                            <i class="halflings-icon white thumbs-up">status</i>  
                        </a>
                        @endif

                        <a class="btn btn-info" href="{{ url('/brands/'.$brand->id.'/edit') }}">
                            <i class="halflings-icon white edit">Edit</i>  
                        </a>
                        <form action="{{ url('/brands/'.$brand->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                      <button class="btn btn-danger" type="submit"><i class="halflings-icon white trash">delet</i></button>
                             
                      
                    </form>
                    </td>
                </tr>
                
              </tbody>

               @endforeach

          </table>            
        </div>
    </div><!--/span-->

</div><!--/row-->


@endsection 