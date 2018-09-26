@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Orders</h1>
                <h5></h5>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Orders
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover"
                               id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>User</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Order Date</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->userId}}</td>
                                    <td>{{$order->FirstName}}</td>
                                    <td>{{$order->LastName}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>
                                        <a href="/admin/order/detail/{{$order->id}}"
                                           data-toggle="tooltip" title=""
                                           class="btn btn-info" data-original-title="View">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a href="/admin/order/update/{{$order->id}}"
                                           data-toggle="tooltip" title=""
                                           class="btn btn-primary" data-original-title="Edit">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="/admin/order/delete/{{$order->id}}" id="button-delete70" data-toggle="tooltip"
                                           title=""
                                           class="btn btn-danger" data-original-title="Delete">
                                            <i class="fa fa-trash-o"></i>
                                        </a>
                                    </td>
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