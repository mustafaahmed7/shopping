@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1></h1>
                <div class="container-fluid">
                    <div class="pull-right">
                        <a href="/admin/product"
                           data-toggle="tooltip" title="" class="btn btn-default"
                           data-original-title="Cancel"><i class="fa fa-reply"></i>
                        </a>
                    </div>
                    <h1>Products</h1>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Product
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <form method="POST"
                                      action="/admin/product/add"
                                      enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="CategoryId">

                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->categoryTitle}}</option>

                                                @foreach($category->subCategory as $subCategory)
                                                    <option value="{{$subCategory->id}}">
                                                        {{$category->categoryTitle}}
                                                        ->
                                                        {{$subCategory->categoryTitle}}
                                                    </option>

                                                    @foreach($subCategory->subCategory as $subsubCategory)
                                                        <option value="{{$subsubCategory->id}}">
                                                            {{$category->categoryTitle}}
                                                            ->
                                                            {{$subCategory->categoryTitle}}
                                                            ->
                                                            {{$subsubCategory->categoryTitle}}
                                                        </option>
                                                    @endforeach
                                                @endforeach
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Title</label>
                                        <input class="form-control" name="Title"
                                               placeholder="Product Title">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="Description" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" name="Price"
                                               placeholder="Price">
                                    </div>
                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input class="form-control" name="Quantity"
                                               placeholder="Quantity">
                                    </div>
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input class="form-control" name="Color"
                                               placeholder="Color">
                                    </div>
                                    <div class="form-group">
                                        <label>In Stock</label>
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            <input type="checkbox" name="InStock"
                                                   id="inlineCheckbox2" value="true" checked>
                                            <label for="inlineCheckbox2"> </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Is Active</label>
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            <input type="checkbox" name="IsActive"
                                                   id="inlineCheckbox3" value="true" checked>
                                            <label for="inlineCheckbox3"> </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Images</label>
                                        <input type="file" name="Images[]" multiple>
                                    </div>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-default">Save</button>
                                </form>
                            </div>

                            <div class="col-lg-6">

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#wrapper -->
</div>
@include('admin.layouts.footer')