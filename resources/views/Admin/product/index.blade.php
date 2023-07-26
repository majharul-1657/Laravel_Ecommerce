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
                      <th style="width: 5%;">code</th>
                      <th style="width: 10%;">product name</th>
                      <th style="width: 10%;">Description</th>
                      <th style="width: 10%;">price</th>
                      <th style="width: 10%;">image</th>
                      <th style="width: 10%;">Category name</th>
                      <th style="width: 10%;">brand</th>
                      <th style="width: 15%;">Status</th>
                      <th style="width: 10%;">Actions</th>
                  </tr>
              </thead>

              @foreach ($products as $product)

              <tbody>
                <tr>
                    <td class="center">{{ $product->code }}</td>
                    <td class="center">{{ $product->name }}</td>
                    <td class="center">{{ $product->description }}</td>
                    <td class="center">{{ $product->price }}</td>
                    <td class="center">

                        <img src="{{ asset( $product->imag) }}" style="width:80%; height:70%">

                    </td>

                    <td class="center">{{ $product->cat_id }}</td>
                    <td class="center">{{ $product->br_id }}</td>
                    <td>

                    @if($product->status==1)
                    <span class="label label-success">Active</span>
                    @else
                    <span class="label label-danger">dective</span>
                    @endif
                </td>


                <td class="row">

                    @if ($product->status==1)

                    <a href="{{ url('/cat-status'.$product->id) }}" class="btn btn-success">
                        <i class=" white thumbs-down">status</i>
                    </a>
                    @else
                    <a href="{{ url('/cat-status'.$product->id)}}" class="btn btn-danger" >
                        <i class=" white thumbs-up">status</i>
                    </a>
                    @endif

                    <a class="btn btn-info" href="{{ url('/categories/'.$product->id.'/edit') }}">
                        <i class=" white edit">Edit</i>
                    </a>
                    <form action="{{ url('/categories/'.$product->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                  <button class="btn btn-danger" type="submit"><i class=" white trash">delet</i></button>


                </form>
                </td>
                    </td>


                </tr>



              </tbody>

               @endforeach

          </table>
        </div>
    </div><!--/span-->

</div><!--/row-->


@endsection
