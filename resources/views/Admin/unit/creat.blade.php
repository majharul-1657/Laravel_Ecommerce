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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add unti</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{ url('/units') }}" method="post" enctype="multipart/form-data">
         @csrf
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">unit Name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="name" requerd="">
                    </div>
                </div>


                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">unit Description</label>
                    <div class="controls">
                        <textarea class="" name="description" rows="3" requerd></textarea>
                    </div>

                </div>


                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add unit</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->

@endsection