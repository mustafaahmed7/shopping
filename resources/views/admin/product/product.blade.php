@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Products</h1>

                {{--<a href="/admin/product/add" type="button"--}}
                   {{--class="btn btn-success">Add Product</a>--}}

                <a href="/admin/product/add" title="Add New"
                   class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                </a>
                <h5></h5>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>In Stock</th>
                                <th>Quantity</th>
                                <th>Color</th>
                                <th>Category</th>
                                <th>Images</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->title}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>@if($product->inStock == true)
                                            {{'active'}}
                                        @else
                                            {{'no active'}}
                                        @endif</td>
                                    <td>{{$product->quantity}}</td>
                                    <td>{{$product->color}}</td>
                                    <td>{{$product->categories['categoryTitle']}}</td>
                                    <td>@foreach($product->images as $images)
                                            <img class="img-thumbnail"
                                                 style="width:50px" src="{{asset('uploads/products/'
                                                        .$images->ImagePath)}}">
                                        @endforeach</td>

                                    <td>
                                        <a href="/admin/product/update/{{$product->id}}"
                                           title="Edit" class="btn btn-primary">
                                            <i class="fa fa-pencil"></i></a>
                                        <a href="/admin/product/delete/{{$product->id}}" type="button"
                                           title="Delete" class="btn btn-danger">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@include('admin.layouts.footer')