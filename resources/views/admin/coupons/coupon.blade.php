@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Coupons</h1>

                {{--<a href="/admin/product/add" type="button"--}}
                {{--class="btn btn-success">Add Product</a>--}}

                <a href="/admin/coupon/add" title="Add New"
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
                                <th>Coupon Name</th>
                                <th>Code</th>
                                <th>Discount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coupons as $coupon)
                                <tr>
                                    <td>{{$coupon->id}}</td>
                                    <td>{{$coupon->name}}</td>
                                    <td>{{$coupon->code}}</td>
                                    <td>{{$coupon->discount}}</td>
                                    <td>@if($coupon->status == true)
                                            {{'active'}}
                                        @else
                                            {{'no active'}}
                                        @endif</td>
                                    <td>
                                        <a href="/admin/coupon/update/{{$coupon->id}}"
                                           title="Edit" class="btn btn-primary">
                                            <i class="fa fa-pencil"></i></a>
                                        <a href="/admin/coupon/delete/{{$coupon->id}}" type="button"
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