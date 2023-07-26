@extends('admin.admin_mastert');

@section('admin_content')
{{-- 
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif --}}


<div class="row-fluid sortable">
<div class="box span12">
    <div class="box-header" data-original-title>
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add size</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{ url('/sizes') }}" method="post" enctype="multipart/form-data">
         @csrf
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">size</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="size" id="input" data-role="tagsinput" requerd="">
                    </div>
                </div>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add size</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->

@endsection