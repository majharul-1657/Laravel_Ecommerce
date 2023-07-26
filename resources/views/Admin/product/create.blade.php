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
        <h2><i class="halflings-icon edit"></i><span class="break"></span>Add product</h2>

    </div>

    <div class="box-content">
        <form class="form-horizontal" action="{{ url('/products') }}" method="post" enctype="multipart/form-data">
         @csrf
            <fieldset>
                <div class="control-group">
                    <label class="control-label" for="date01">product code</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="code" requerd="">
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label" for="date01">product name</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="name" requerd="">
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="">select category
                     <div class="control">
                        <select name="category" id="">
                            <option value="">select categoty</option>

                       @foreach ($categories as $category)
                       <option value="{{ $category->id }}">{{ $category->name }}</option>
                       @endforeach

                        </select>
                     </div>

                    </label>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="">select sub category
                     <div class="control">
                        <select name="subcategory" id="">
                            <option value="">select categoty</option>

                       @foreach ($subcategories as $subcategory)
                       <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                       @endforeach

                        </select>
                     </div>

                    </label>
                  </div>

                  <div class="control-group">
                    <label class="control-label" for="">select brand
                     <div class="control">
                        <select name="brand" id="">
                            <option value="">select brand</option>

                       @foreach ($brands as $brand)
                       <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                       @endforeach

                        </select>
                     </div>

                    </label>
                  </div>




                <div class="control-group hidden-phone">
                    <label class="control-label" for="textarea2">product Description</label>
                    <div class="controls">
                        <textarea class="" name="description" rows="1" requerd></textarea>
                    </div>

                </div>

                <div class="control-group">
                    <label class="control-label" for="date01">product price</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" name="price" requerd="">
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label">File Upload</label>
                    <div class="controls">
                        <input type="file" name='file[]' multiple requerd>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Add product</button>
                </div>
            </fieldset>
        </form>

    </div>
</div><!--/span-->
</div><!--/row-->
</div><!--/row-->

@endsection
