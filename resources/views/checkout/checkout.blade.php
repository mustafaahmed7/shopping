
@include('layouts.head')
<!-- Document Wrapper
============================================= -->
<div class="wrapper-box">

    <!-- Header
    ============================================= -->
    @include('layouts.header')

    <!-- Content
    ============================================= -->
    <div id="container">
        <div class="container">

            <!-- Breadcrumb
            ============================================= -->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="cart.html">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout</a></li>
            </ul><!-- Breadcrumb End-->

            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">Checkout</h1>
                    <div class="row">

                        <div class="col-sm-4">
                            @guest
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-sign-in"></i> Create an Account or Login</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" value="register" name="account">
                                            Register Account</label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="checked" value="guest" name="account">
                                            Guest Checkout</label>
                                    </div>
                                </div>
                            </div>
                                @else
                                    @endguest
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-user"></i> Your Personal Details</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="account">
                                        <div class="form-group required">
                                            <label for="input-payment-firstname" class="control-label">First Name</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-firstname" placeholder="First Name"
                                                   value="" name="FirstName">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-lastname" class="control-label">Last Name</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-lastname"
                                                   placeholder="Last Name" value="" name="LastName">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-email" class="control-label">E-Mail</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-email" placeholder="E-Mail" value="" name="Email">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-telephone" class="control-label">Telephone</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-telephone" placeholder="Telephone"
                                                   value="" name="Telephone">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-payment-fax" class="control-label">Fax</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-fax" placeholder="Fax" value="" name="Fax">
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-book"></i> Your Address</h4>
                                </div>
                                <div class="panel-body">
                                    <fieldset id="address" class="required">
                                        <div class="form-group">
                                            <label for="input-payment-company" class="control-label">Company</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-company" placeholder="Company"
                                                   value="" name="Company">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-address-1" class="control-label">Address 1</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-address-1" placeholder="Address 1"
                                                   value="" name="Address1">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-payment-address-2" class="control-label">Address 2</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-address-2"
                                                   placeholder="Address 2" value="" name="Address2">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-city" class="control-label">City</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-city" placeholder="City" value="" name="City">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-postcode" class="control-label">Post Code</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-postcode" placeholder="Post Code" value=""
                                                   name="Postcode">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-country" class="control-label">Country</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-postcode" placeholder="Country" value=""
                                                   name="Country">
                                        </div>
                                        <div class="form-group required">
                                            <label for="input-payment-zone" class="control-label">Region / State</label>
                                            <input type="text" class="form-control"
                                                   id="input-payment-postcode" placeholder="Region" value=""
                                                   name="Region">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" checked="checked" value="1" name="shipping_address">
                                                My delivery and billing addresses are the same.</label>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-credit-card"></i> Payment Method</h4>
                                        </div>
                                        <div class="panel-body">
                                            <p>Please select the preferred payment method to use on this order.</p>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="cash" name="payment" checked>
                                                    Cash On Delivery</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="bank" name="payment">
                                                    Bank Transfer</label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="paypal" name="payment">
                                                    Paypal</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-ticket"></i> Use Coupon Code</h4>
                                        </div>
                                        <div class="panel-body">
                                            <label for="input-coupon" class="col-sm-3 control-label">Enter coupon code</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
                                                <span class="input-group-btn">
                          <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
                          </span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-shopping-cart"></i> Shopping cart</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <td class="text-center">Image</td>
                                                        <td class="text-left">Product Name</td>
                                                        <td class="text-left">Quantity</td>
                                                        <td class="text-right">Unit Price</td>
                                                        <td class="text-right">Total</td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @php $total_price = null; @endphp
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

                                                        <td class="text-left"><a href="">
                                                                {{$cart['item']->title}}</a>
                                                        </td>
                                                        <td class="text-left">
                                                            <div class="input-group btn-block" style="max-width: 200px;">
                                                            <input type="text" name="quantity" value="{{$cart['quantity']}}" size="1" class="form-control">
                                                            <span class="input-group-btn">
                                                            <button type="submit" data-toggle="tooltip" title="Update"
                                                                    class="btn btn-primary update-cart"
                                                                    data-id="{{$cart['id']}}">
                                                                <i class="fa fa-refresh"></i>
                                                            </button>
                                                            <button type="button" data-toggle="tooltip" title="Remove"
                                                                    class="btn btn-danger remove-cart"
                                                                    data-id="{{$cart['id']}}">
                                                                <i class="fa fa-times-circle"></i>
                                                            </button>
                                                            </span>
                                                            </div>
                                                        </td>
                                                        @if(isset($cart['item']->sale))
                                                            <td class="text-right">${{$cart['item']->price-$cart['item']->sale}}</td>
                                                            <td class="text-right">${{($cart['item']->price-$cart['item']->sale)*$cart['quantity']}}</td>
                                                        @else
                                                            <td class="text-right">${{$cart['item']->price}}</td>
                                                            <td class="text-right">${{$cart['item']->price*$cart['quantity']}}</td>
                                                        @endif

                                                    </tr>
                                                    @php $total_price += ($cart['item']->price - $cart['item']->sale)*$cart['quantity']; @endphp
                                                    @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>

                                                            <td class="text-right">${{$total_price }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>Flat Shipping Rate:</strong></td>
                                                        <td class="text-right">${{$shipping->price}}</td>
                                                    </tr>
                                                    <!--<tr>
                                                        <td class="text-right" colspan="4"><strong>Eco Tax (-2.00):</strong></td>
                                                        <td class="text-right">$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>VAT (20%):</strong></td>
                                                        <td class="text-right">$151.00</td>
                                                    </tr>-->
                                                    <tr>
                                                        <td class="text-right" colspan="4"><strong>Total:</strong></td>

                                                            <td class="text-right">${{$total_price+$shipping->price}}</td>

                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title"><i class="fa fa-pencil"></i> Add Comments About Your Order</h4>
                                        </div>
                                        <div class="panel-body">
                                            <textarea rows="4" class="form-control" id="confirm_comment" name="Comments"></textarea>
                                            <br>
                                            <label class="control-label" for="confirm_agree">
                                                <input type="checkbox" checked="checked" value="1" required="" class="validate required" id="confirm_agree" name="confirm agree">
                                                <span>I have read and agree to the <a class="agree" href="#"><b>Terms &amp; Conditions</b></a></span> </label>
                                            <div class="buttons">
                                                <div class="pull-right">
                                                    <meta name="_token" content="{{ csrf_token() }}">
                                                    @guest
                                                        <input type="hidden" name="UserId" value="0">
                                                        @else
                                                        <input type="hidden" name="UserId" value="{{Auth::user()->id }}">
                                                    @endguest
                                                    <input type="button" class="btn btn-primary confirm-order"
                                                           id="button-confirm"
                                                           value="Confirm Order">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

    <!-- Footer
    ============================================= -->
</div>
@include('layouts.footer')