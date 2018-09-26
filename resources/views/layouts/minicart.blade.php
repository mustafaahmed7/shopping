{{--@extends('layouts.header')
@section('minicart')--}}
<div class="col-md-9 pull-right col-sm-4 col-xs-12 inner">
    <div id="cart">
        <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
            <span class="cart-icon pull-left flip"></span>
            <span id="cart-total">
                @if($mini_cart != null)
                    {{$products_all}} item(s)
                    - $ {{$total_price + $shipping_all->price}}
                @else
                    0 item(s)
                    - $ 0
                @endif
            </span>
            <i class="fa fa-caret-down"></i></button>
        <ul class="dropdown-menu">

            @if($mini_cart != null)
            <li>
                <table class="table">
                    <tbody>
                    @foreach($mini_cart as $cart)
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
                            <a href="product.html">{{$cart['item']['title']}}</a>
                        </td>
                        <td class="text-right">x {{$cart['quantity']}}</td>
                        <td class="text-right">${{$cart['item']->price}}</td>
                        <td class="text-center">
                            <button class="btn btn-danger btn-xs remove remove-cart"
                                    title="Remove" type="button" data-id="{{$cart['id']}}">
                                <i class="fa fa-times"></i>
                            </button>
                        </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </li>
            <li>
                <div>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td class="text-right"><strong>Sub-Total</strong></td>
                            <td class="text-right">${{$total_price}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Shipping</strong></td>
                            <td class="text-right">${{$shipping_all->price}}</td>
                        </tr>
                        <tr>
                            <td class="text-right"><strong>Total</strong></td>


                                <td class="text-right">
                                    ${{$total_price+$shipping_all->price}}</td>

                        </tr>
                        </tbody>
                    </table>
                    <p class="checkout"><a href="/cart" class="btn btn-primary">
                            <i class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;
                        <a href="/cart/checkout" class="btn btn-primary">
                            <i class="fa fa-share"></i> Checkout</a>
                    </p>
                </div>
            </li>
            @else
                No Items
            @endif
        </ul>
    </div>
</div>
{{--@endsection--}}