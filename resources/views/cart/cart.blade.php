@include('layouts.head')
<div class="wrapper-box">

    <!-- Header
    ============================================= -->
@include('layouts.header')
<!-- Header End-->

    <!-- Content
    ============================================= -->
    <div id="container">
        <div class="container">

            <!-- Breadcrumb
            ============================================= -->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="cart.html">Shopping Cart</a></li>
            </ul><!-- Breadcrumb End-->

            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">Shopping Cart</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            @if($carts != null)
                                <thead>
                                <tr>
                                    <td class="text-center">Image</td>
                                    <td class="text-left">Product Name</td>
                                    <td class="text-left">Model</td>
                                    <td class="text-left">Quantity</td>
                                    <td class="text-right">Unit Price</td>
                                    <td class="text-right">Total</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $cart)
                                    <tr>

                                        <td class="text-center">
                                            <a href="">
                                                @foreach($cart['item']->images->take(1) as $images)
                                                    <img class="img-thumbnail" src="{{ asset('uploads/products/'
                                                    .$images->ImagePath)}}" alt="" height="50" width="50">
                                                @endforeach
                                            </a>
                                        </td>

                                        <td class="text-left">
                                            <a href="">{{$cart['item']->title}}</a></td>

                                        <td class="text-left">Product</td>

                                        <td class="text-left">
                                            <div class="input-group btn-block quantity">
                                                <input type="number" name="quantity" value="{{$cart['quantity']}}"
                                                       size="1" class="form-control"/>
                                                <span class="input-group-btn">

                                <button type="submit" data-toggle="tooltip"
                                        title="Update" class="btn btn-primary update-cart"
                                        data-id="{{$cart['id']}}">
                                <i class="fa fa-refresh"></i></button>

                                <button type="button" data-toggle="tooltip"
                                        title="Remove" class="btn btn-danger remove-cart"
                                        data-id="{{$cart['id']}}">
                                <i class="fa fa-times-circle"></i></button>
                                </span>
                                            </div>
                                        </td>
                                        @if(isset($cart['item']->sale))
                                            <td class="text-right">${{$cart['item']->price - $cart['item']->sale}}</td>
                                            <td class="text-right">${{($cart['item']->price- $cart['item']->sale)*$cart['quantity']}}</td>
                                            @else
                                        <td class="text-right">${{$cart['item']->price}}</td>
                                        <td class="text-right">${{$cart['item']->price*$cart['quantity']}}</td>
                                            @endif
                                    </tr>
                                @endforeach
                                @else
                                    <tr>
                                        <td>
                                            No item in Cart
                                        </td>
                                    </tr>
                                @endif
                                </tbody>
                        </table>
                    </div>
                    <h2 class="subtitle"><span>What would you like to do next?</span></h2>
                    <p>Choose if you have a discount code or reward points you want to use or would like to estimate
                        your delivery cost.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- <div class="panel panel-default">
                                 <div class="panel-heading">
                                     <h4 class="panel-title">Use Gift Voucher</h4>
                                 </div>
                                 <div id="collapse-voucher" class="panel-collapse collapse in">
                                     <div class="panel-body">
                                         <label class="col-sm-4 control-label" for="input-voucher">Enter gift voucher code here</label>
                                         <div class="input-group">
                                             <input type="text" name="voucher" value="" placeholder="Enter gift voucher code here" id="input-voucher" class="form-control" />
                                             <span class="input-group-btn">
                       <input type="submit" value="Apply Voucher" id="button-voucher" data-loading-text="Loading..."  class="btn btn-primary" />
                       </span> </div>
                                     </div>
                                 </div>
                             </div>-->
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Use Coupon Code</h4>
                                </div>
                                <div id="collapse-coupon" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <label class="col-sm-4 control-label" for="input-coupon">Enter your coupon
                                            here</label>
                                        <div class="input-group">
                                            <input type="text" name="coupon" value=""
                                                   placeholder="Enter your coupon here" id="input-coupon"
                                                   class="form-control"/>
                                            <span class="input-group-btn">
                      <input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..."
                             class="btn btn-primary"/>
                      </span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table table-bordered">
                                @if($carts !=null)
                                    @php $total_price = null;@endphp
                                @foreach($carts as $cart)
                                        @php $total_price += ($cart['item']->price- $cart['item']->sale ) *$cart['quantity'] ;@endphp
                                    @endforeach
                                    <tr>
                                        <td class="text-right"><strong>Sub-Total:</strong></td>
                                        <td class="text-right">${{$total_price }}</td>

                                    </tr>
                                    {{--<tr>--}}
                                        {{--<td class="text-right"><strong>Eco Tax (-2.00):</strong></td>--}}
                                        {{--<td class="text-right">$4.00</td>--}}
                                    {{--</tr>--}}
                                    <tr>
                                        <td class="text-right"><strong>Flat Shipping Rate:</strong></td>
                                        <td class="text-right">${{$shipping->price}}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total:</strong></td>



                                            <td class="text-right">${{$total_price+$shipping->price}}</td>

                                    </tr>

                                    @endif
                            </table>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="pull-left"><a href="/category/all" class="btn btn-default">Continue Shopping</a>
                        </div>
                        <div class="pull-right"><a href="/cart/checkout" class="btn btn-primary">Checkout</a></div>
                    </div>
                </div>
                <!--Middle Part End -->
            </div>
        </div>
    </div><!--Content End-->

    <!-- Feature Box
    ============================================= -->
    <div class="container">
        <div class="custom-feature-box row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-box fbox_1">
                    <div class="title">Free & Easy Return</div>
                    <p>Free return in 7 Days after purchasing</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-box fbox_2">
                    <div class="title">Free Shipping</div>
                    <p>Free shipping on order over $1000</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="feature-box fbox_3">
                    <div class="title">Gift Cards</div>
                    <p>Give the special perfect gift</p>
                </div>
            </div>
        </div>
    </div><!-- Feature Box End-->
</div>
@include('layouts.footer')