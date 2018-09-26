@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <div class="container-fluid">
                        <div class="pull-right">
                            <a href="" target="_blank" data-toggle="tooltip"
                               title="" class="btn btn-info"
                               data-original-title="Print Invoice">
                                <i class="fa fa-print"></i>
                            </a>
                            <a href="" target="_blank" data-toggle="tooltip"
                               title="" class="btn btn-info"
                               data-original-title="Print Shipping List">
                                <i class="fa fa-truck"></i>
                            </a>
                            <a href="" data-toggle="tooltip" title=""
                               class="btn btn-primary" data-original-title="Edit">
                                <i class="fa fa-pencil"></i></a>
                            <a href="/admin/order" data-toggle="tooltip" title=""
                               class="btn btn-default"
                               data-original-title="Cancel">
                                <i class="fa fa-reply"></i>
                            </a>
                        </div>
                        <h1>Orders</h1>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="container-fluid">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-list"></i> Orders</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-order" data-toggle="tab" aria-expanded="true">Order Details</a></li>
                            <li class=""><a href="#tab-payment" data-toggle="tab" aria-expanded="false">Payment Details</a></li>
                            <li><a href="#tab-shipping" data-toggle="tab">Shipping Details</a></li>
                            <li><a href="#tab-product" data-toggle="tab">Products</a></li>
                            <li><a href="#tab-history" data-toggle="tab">History</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-order">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <td>Order ID:</td>
                                        <td>{{$order->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Invoice No.:</td>
                                        <td>                  <button id="button-invoice" class="btn btn-success btn-xs"><i class="fa fa-cog"></i> Generate</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Store Name:</td>
                                        <td>Bigshop</td>
                                    </tr>
                                    <tr>
                                        <td>Store Url:</td>
                                        <td><a href="/" target="_blank">bigshop.dev</a></td>
                                    </tr>
                                    <tr>
                                        <td>Customer:</td>
                                        <td>{{$order->userId}}</td>
                                    </tr>

                                    <tr>
                                        <td>E-Mail:</td>
                                        <td><a href="mailto:{{$order->eMail}}">{{$order->eMail}}</a></td>
                                    </tr>
                                    <tr>
                                        <td>Telephone:</td>
                                        <td>{{$order->Telephone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total:</td>
                                        <td>${{$total['total']}}</td>
                                    </tr>
                                    <tr>
                                        <td>Order Status:</td>
                                        <td id="order-status">Pending</td>
                                    </tr>
                                    {{--<tr>--}}
                                        {{--<td>IP Address:</td>--}}
                                        {{--<td>46.61.12.119</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>User Agent:</td>--}}
                                        {{--<td>Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Safari/537.36</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td>Accept Language:</td>--}}
                                        {{--<td>ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td>Date Added:</td>
                                        <td>{{$order->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date Modified:</td>
                                        <td>{{$order->updated_at}}</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <div class="tab-pane" id="tab-payment">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <td>First Name:</td>
                                        <td>{{$order->FirstName}}</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name:</td>
                                        <td>{{$order->LastName}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address 1:</td>
                                        <td>{{$order->Address1}}</td>
                                    </tr>
                                    <tr>
                                        <td>City:</td>
                                        <td>{{$order->City}}</td>
                                    </tr>
                                    <tr>
                                        <td>Postcode:</td>
                                        <td>{{$order->Postcode}}</td>
                                    </tr>
                                    <tr>
                                        <td>Region / State:</td>
                                        <td>{{$order->Region}}</td>
                                    </tr>
                                    {{--<tr>--}}
                                        {{--<td>Region / State Code:</td>--}}
                                        {{--<td>RO</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td>Country:</td>
                                        <td>{{$order->Country}}</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Method:</td>
                                        <td>Cash On Delivery</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <div class="tab-pane" id="tab-shipping">
                                <table class="table table-bordered">
                                    <tbody><tr>
                                        <td>First Name:</td>
                                        <td>{{$order->FirstName}}</td>
                                    </tr>
                                    <tr>
                                        <td>Last Name:</td>
                                        <td>{{$order->LastName}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address 1:</td>
                                        <td>{{$order->Address1}}</td>
                                    </tr>
                                    <tr>
                                        <td>City:</td>
                                        <td>{{$order->City}}</td>
                                    </tr>
                                    <tr>
                                        <td>Postcode:</td>
                                        <td>{{$order->Postcode}}</td>
                                    </tr>
                                    <tr>
                                        <td>Region / State:</td>
                                        <td>{{$order->Region}}</td>
                                    </tr>
                                    {{--<tr>--}}
                                        {{--<td>Region / State Code:</td>--}}
                                        {{--<td>RO</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td>Country:</td>
                                        <td>{{$order->Country}}</td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Method:</td>
                                        <td>@if($order->Shipping == null)Free
                                            @else
                                                {{$order->Shipping}}
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody></table>
                            </div>
                            <div class="tab-pane" id="tab-product">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td class="text-left">Product</td>
                                        <td class="text-left">Model</td>
                                        <td class="text-right">Quantity</td>
                                        <td class="text-right">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($order_cart as $cart)
                                    <tr>
                                        <td class="text-left">
                                            <a href="{{$cart->product_id}}">{{$cart->product_title}}</a>
                                        </td>
                                        <td class="text-left">Product {{$cart->product_id}}</td>
                                        <td class="text-right">{{$cart->quantity}}</td>
                                        <td class="text-right">${{$cart->unit_price}}</td>
                                        <td class="text-right">${{$cart->unit_total_price}}</td>
                                    </tr>
                                   @endforeach
                                    <tr>
                                        <td colspan="4" class="text-right">Sub-Total:</td>
                                        <td class="text-right">${{$total['sub_total']}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Flat Shipping Rate:</td>
                                        <td class="text-right">
                                            @if($order->Shipping == null)Free @else ${{$order->Shipping}}@endif</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right">Total:</td>
                                        <td class="text-right">${{$total['total']}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="tab-history">
                                <div id="history"><table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <td class="text-left">Date Added</td>
                                            <td class="text-left">Comment</td>
                                            <td class="text-left">Status</td>
                                            <td class="text-left">Customer Notified</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-left">19/06/2018</td>
                                            <td class="text-left"></td>
                                            <td class="text-left">Pending</td>
                                            <td class="text-left">No</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-6 text-left"></div>
                                        <div class="col-sm-6 text-right">Showing 1 to 1 of 1 (1 Pages)</div>
                                    </div>
                                </div>
                                <br>
                                <fieldset>
                                    <legend>Add Order History</legend>
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-order-status">Order Status</label>
                                            <div class="col-sm-10">
                                                <select name="order_status_id" id="input-order-status" class="form-control">
                                                    <option value="7">Canceled</option>
                                                    <option value="9">Canceled Reversal</option>
                                                    <option value="13">Chargeback</option>
                                                    <option value="5">Complete</option>
                                                    <option value="8">Denied</option>
                                                    <option value="14">Expired</option>
                                                    <option value="10">Failed</option>
                                                    <option value="1" selected="selected">Pending</option>
                                                    <option value="15">Processed</option>
                                                    <option value="2">Processing</option>
                                                    <option value="11">Refunded</option>
                                                    <option value="12">Reversed</option>
                                                    <option value="3">Shipped</option>
                                                    <option value="16">Voided</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-notify">Notify Customer</label>
                                            <div class="col-sm-10">
                                                <input type="checkbox" name="notify" value="1" id="input-notify">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label" for="input-comment">Comment</label>
                                            <div class="col-sm-10">
                                                <textarea name="comment" rows="8" id="input-comment" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="text-right">
                                        <button id="button-history" data-loading-text="Loading..." class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add History</button>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@include('admin.layouts.footer')