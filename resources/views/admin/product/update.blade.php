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
                                      action="/admin/product/update"
                                      enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="CategoryId">
                                            <option value="{{$product->categories->id}}">
                                                {{$product->categories->categoryTitle}}
                                            </option>
                                            @foreach($categories as $category)
                                                @if($category->id != $product->categories->id)
                                                <option value="{{$category->id}}">
                                                    {{$category->categoryTitle}}</option>
                                                @endif
                                                @foreach($category->subCategory as $subCategory)
                                                    @if($subCategory->id != $product->categories->id)
                                                    <option value="{{$subCategory->id}}">
                                                        {{$category->categoryTitle}}
                                                        ->
                                                        {{$subCategory->categoryTitle}}
                                                    </option>
                                                    @endif
                                                    @foreach($subCategory->subCategory as $subSubCategory)
                                                        @if($subSubCategory->id != $product->categories->id)
                                                        <option value="{{$subSubCategory->id}}">
                                                            {{$category->categoryTitle}}
                                                            ->
                                                            {{$subCategory->categoryTitle}}
                                                            ->
                                                            {{$subSubCategory->categoryTitle}}
                                                        </option>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Product Title</label>
                                        <input class="form-control" name="Title"
                                               placeholder="Product Title"
                                                value="{{$product->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control"
                                         name="Description"
                                         rows="3">{{$product->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input class="form-control" name="Price"
                                               placeholder="Price"
                                               value="{{$product->price}}">
                                    </div>

                                    <div class="form-group">
                                        <label>Quantity</label>
                                        <input class="form-control" name="Quantity"
                                               placeholder="Quantity"
                                               value="{{$product->quantity}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Color</label>
                                        <input class="form-control" name="Color"
                                               placeholder="Color"
                                               value="{{$product->color}}">
                                    </div>
                                        <div class="form-check">
                                            <label>In Stock</label>
                                            <div class="checkbox checkbox-success checkbox-inline">
                                                @if($product->inStock == true)
                                                <input type="checkbox" name="InStock"
                                                       id="inlineCheckbox2" value="true" checked>
                                                @else
                                                <input type="checkbox" name="InStock"
                                                       id="inlineCheckbox2" value="false" >
                                                @endif
                                                <label for="inlineCheckbox2"> </label>
                                            </div>
                                        </div>
                                    <div class="form-check">
                                        <label>Is Active</label>
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            @if($product->isactive == true)
                                            <input type="checkbox" name="IsActive"
                                                   id="inlineCheckbox3" value="true" checked>
                                            @else
                                            <input type="checkbox" name="IsActive"
                                                   id="inlineCheckbox3" value="false">
                                            @endif
                                            <label for="inlineCheckbox3"> </label>
                                        </div>
                                    </div>

                                    <div class="form-control-file">
                                        <label>Images</label>
                                    @foreach($product->images as $image)
                                       <div>
                                        <img class="img-thumbnail" src="{{ asset('uploads/products/'
                                        .$image->ImagePath)}}" alt="" height="150" width="150">
                                        <button type="button" class="btn btn-primary btn-radio remove-image"
                                        data-id="{{$image->id}}">X</button>
                                       </div>
                                    @endforeach
                                    </div>

                                    <div class="form-inline">
                                        <label>Add New Image(s)</label>
                                        <input type="file" name="Images[]" multiple>
                                    </div>

                                    <input type="hidden" name="Id" value="{{ $product->id }}">
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