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
            <div class="row">
                <!-- Left Part
                ============================================= -->
            @include('layouts.sidebar')
            <!-- Middle Part
                ============================================= -->
                <div id="content" class="col-sm-9">

                    <!-- Welcome Text
                    ============================================= -->
                    <p class="lead text-center">"The clean and modern look allows you to use the template for every kind
                        of eCommerce online shop. Great Looks on Desktops, Tablets and Mobiles."</p>
                    <!-- Welcome Text End-->
                    @if(isset($sliders) && $sliders!=null)
                    @foreach($sliders as $slider)
                    <!-- Slideshow
                    ============================================= -->
                    <div class="slideshow single-slider owl-carousel">
                        @foreach($slider->media as $media)
                        <div class="item">
                            <a href="/{{$slider->productUrl}}">
                                <img class="img-responsive" style="width: 100%;"
                                     src="{{asset('uploads/medias/'
                                            .$media->Path)}}"
                                     alt="{{$media->Alt}}"/>
                                {{--<div class="centered">{!! $slider->sliderContent !!}</div>--}}
                                <div class="jumbotron jumbotron-fluid"
                                     style="border-radius: 0;background-color: {{$slider->color}};">
                                    {!! $slider->sliderContent !!}
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div><!-- Slideshow End-->
                    @endforeach
                    @endif
                    <!-- Product Tab
                    ============================================= -->
                    <div id="product-tab" class="product-tab">
                        <ul id="tabs" class="tabs clearfix">
                            <li><a href="#tab-featured">Featured</a></li>
                            <li><a href="#tab-latest">Latest</a></li>
                            <!--<li><a href="#tab-bestseller">Bestseller</a></li>
                            <li><a href="#tab-special">Special</a></li>-->
                        </ul>
                        <div id="tab-featured" class="tab_content">
                            <div class="row products-category product_tab_grid">
                                @foreach($productsAll->take(12) as $product)
                                    <div class="product-layout">
                                        <div class="product-thumb">
                                            <div class="image"><a href="{{'/product/'.$product->id.'-'.$product->title}}">
                                                    @foreach($product->images->take(1) as $images)
                                                        <img src="{{asset('uploads/products/'
                                                        .$images->ImagePath)}}"
                                                             alt="Apple Cinema 30&quot;"
                                                             title="Apple Cinema 30&quot;"
                                                             class="img-responsive"/></a></div>
                                                    @endforeach
                                            <div class="caption">
                                                <h4><a href="{{'/product/'.$product->id .'-'.$product->title}}">{{$product->title}}</a></h4>
                                                @if(isset($product->sale))
                                                <p class="price"><span class="price-new">${{$product->price - $product->sale}}</span>
                                                    <span class="price-old">${{$product->price}}</span>
                                                    <span class="saving">-{{$product->discount}}%</span></p>
                                                    @else
                                                    <p class="price">
                                                        <span class="price">${{$product->price}}</span>
                                                        </p>
                                                @endif

                                            </div>
                                            <div class="button-group">
                                                <button class="btn-primary add-to-cart" type="button"
                                                        data-id="{{$product->id}}"><span>Add to Cart</span></button>
                                                <div class="add-to-links">
                                                    <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                            onClick=""><i class="fa fa-heart"></i></button>
                                                    <button type="button" data-toggle="tooltip"
                                                            title="Compare this Product" onClick=""><i
                                                                class="fa fa-exchange"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div id="tab-latest" class="tab_content">
                            <div class="row products-category product_tab_grid">
                                <div class="product-layout">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                        src="image/product/samsung_tab_1-200x200.jpg"
                                                        alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1"
                                                        class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Samsung Galaxy Tab 10.1</a></h4>
                                            <p class="price"><span class="price-new">$218.00</span> <span
                                                        class="price-old">$241.99</span> <span
                                                        class="saving">-10%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--<div id="tab-bestseller" class="tab_content">
                            <div class="row products-caproductroduct_tab_grid">
                                <div class="product-layout">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img src="image/product/htc_touch_hd_1-200x200.jpg" alt="HTC Touch HD" title="HTC Touch HD" class="img-responsive" /></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">HTC Touch HD</a></h4>
                                            <p class="price"> $122.00 </p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="tab-special" class="tab_content">
                            <div class="row products-caproductroduct_tab_grid">

                                <div class="product-layout">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img src="image/product/samsung_tab_1-200x200.jpg" alt="Samsung Galaxy Tab 10.1" title="Samsung Galaxy Tab 10.1" class="img-responsive" /></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Samsung Galaxy Tab 10.1</a></h4>
                                            <p class="price"> <span class="price-new">$218.00</span> <span class="price-old">$241.99</span> <span class="saving">-10%</span> </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Compare this Product" onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div><!-- Product End-->


                </div><!--Middle Part End-->

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