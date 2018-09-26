@include('layouts.head')

<!-- Document Wrapper
============================================= -->
<div class="wrapper-box">

    <!-- Header
    ============================================= -->
@include('layouts.header')<!-- Header End-->

    <!-- Content
    ============================================= -->
    <div id="container">
        <div class="container">

            <!-- Breadcrumb
            ============================================= -->
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                <li><a href="category.html">Electronics</a></li>
                <li><a href="#">iPhone</a></li>
            </ul><!-- Breadcrumb End-->

            <div class="row">
                <!-- Left Part
                ============================================= -->
            @include('layouts.sidebar')
            <!-- Custom Content End-->

                <!-- Middle Part
                ============================================= -->
                <div id="content" class="col-sm-9">

                    <!-- Heading
                    ============================================= -->
                    @foreach($products as $product)
                        <h1 class="title">{{$product->title}}</h1>

                        <div class="row product-info">
                            <div class="col-sm-6">
                                <div class="image">
                                    @foreach($product->images->take(1) as $images)
                                        <img class="img-responsive" style="width: 100%;"
                                             id="zoom_01" src="{{ asset('uploads/products/'
                                             .$images->ImagePath)}}"
                                             title="Laptop Silver black"
                                             alt="Laptop Silver black"
                                             data-zoom-image="{{ asset('uploads/products/'
                                            .$images->ImagePath)}}"/>
                                    @endforeach
                                </div>
                                <div class="center-block text-center">
                                    <span class="zoom-gallery">
                                        <i class="fa fa-search"></i>
                                        Click image for Gallery
                                    </span>
                                </div>
                                <div class="image-additional" id="gallery_01">
                                    @foreach($product->images as $images)
                                        <a class="thumbnail"
                                           href="#" data-zoom-image="{{ asset('uploads/products/'
                                            .$images->ImagePath)}}"
                                           data-image="{{ asset('uploads/products/'
                                            .$images->ImagePath)}}"
                                           title="Laptop Silver black">
                                            <img src="{{ asset('uploads/products/'
                                            .$images->ImagePath)}}"
                                                 title="Laptop Silver black"
                                                 alt="Laptop Silver black"/>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled description">
                                    {{--<li><b>Brand:</b> <a href="#">Apple</a></li>--}}
                                    <li><b>Product Code:</b> Product {{$product->id}}</li>
                                    {{--<li><b>Reward Points:</b> 700</li>--}}
                                    <li><b>Availability:</b>
                                        @if($product->instock == true)
                                            <span class="instock">In Stock</span>
                                        @else
                                            <span class="instock">Out Stock</span>
                                        @endif
                                    </li>
                                </ul>
                                <ul class="price-box">
                                    @if($product->sale != null)
                                    <li class="price"><span class="price-old">${{$product->price}}</span>
                                        <span class="real">{{$product->price - $product->sale}}</span></li>
                                    @endif
                                    <li></li>
                                    {{--<li>Ex Tax: $950.00</li>--}}
                                </ul>
                                <div id="product">
                                    <h3 class="subtitle"><span>Available Options</span></h3>
                                    <div class="form-group required">
                                        <label class="control-label">Color</label>
                                        <select class="form-control" id="input-option200" name="option[200]">
                                            <option value=""> --- Please Select ---</option>
                                            <option value="4">Black</option>
                                            <option value="3">Silver</option>
                                            <option value="1">Green</option>
                                            <option value="2">Blue</option>
                                        </select>
                                    </div>
                                    <div class="cart">
                                        <div>
                                            <div class="qty">
                                                <label class="control-label" for="input-quantity">Qty</label>
                                                <a class="qtyBtn mines" href="javascript:void(0);"><i
                                                            class="fa fa-minus"></i></a>
                                                <input type="text" name="quantity" value="1" size="2"
                                                       id="input-quantity" class="form-control"/>
                                                <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa fa-plus"></i></a><br/>

                                                <div class="clear"></div>
                                            </div>
                                            <button type="button" id="button-cart"
                                                    class="btn btn-primary btn-lg add-to-cart-with-qty"
                                                    data-id="{{$product['id']}}">Add to Cart
                                            </button>
                                        </div>
                                        <div>
                                            <button type="button" class="wishlist" onClick=""><i
                                                        class="fa fa-heart"></i> Add to Wish List
                                            </button>
                                            <br/>
                                            <button type="button" class="wishlist" onClick=""><i
                                                        class="fa fa-exchange"></i> Add to Compare
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="rating">
                                    <p><span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                    class="fa fa-star-o fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                    class="fa fa-star-o fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                    class="fa fa-star-o fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i
                                                    class="fa fa-star-o fa-stack-1x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <a
                                                onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;"
                                                href="">2 reviews</a> / <a
                                                onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;"
                                                href="">Write a review</a></p>
                                </div>
                                <hr>
                                <!-- AddThis Button BEGIN -->
                                <div class="addthis_toolbox addthis_default_style"><a
                                            class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a
                                            class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone"
                                                                                 g:plusone:size="medium"></a> <a
                                            class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal"
                                            pi:pinit:url="http://www.addthis.com/features/pinterest"
                                            pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a>
                                    <a class="addthis_counter addthis_pill_style"></a></div>
                                <script type="text/javascript"
                                        src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>
                                <!-- AddThis Button END -->
                            </div>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                            <li><a href="#tab-specification" data-toggle="tab">Specification</a></li>
                            <li><a href="#tab-review" data-toggle="tab">Reviews (2)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-description" class="tab-pane active">
                                <div>
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                            <div id="tab-specification" class="tab-pane">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td colspan="2"><strong>Memory</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>test 1</td>
                                        <td>8gb</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <td colspan="2"><strong>Processor</strong></td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>No. of Cores</td>
                                        <td>1</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="tab-review" class="tab-pane">
                                <form class="form-horizontal">
                                    <div id="review">
                                        <div>
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong><span>harvey</span></strong></td>
                                                    <td class="text-right"><span>28/03/2017</span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><p>Lorem Ipsum is simply dummy text of the printing
                                                            and typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s, when an
                                                            unknown printer took a galley of type and scrambled it to
                                                            make a type specimen book.</p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                <tr>
                                                    <td style="width: 50%;"><strong><span>Andrson</span></strong></td>
                                                    <td class="text-right"><span>20/01/2016</span></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"><p>Lorem Ipsum is simply dummy text of the printing
                                                            and typesetting industry. Lorem Ipsum has been the
                                                            industry's standard dummy text ever since the 1500s, when an
                                                            unknown printer took a galley of type and scrambled it to
                                                            make a type specimen book.</p>
                                                        <div class="rating"><span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star fa-stack-2x"></i><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="text-right"></div>
                                    </div>
                                    <h2>Write a review</h2>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label for="input-name" class="control-label">Your Name</label>
                                            <input type="text" class="form-control" id="input-name" value=""
                                                   name="name">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label for="input-review" class="control-label">Your Review</label>
                                            <textarea class="form-control" id="input-review" rows="5"
                                                      name="text"></textarea>
                                            <div class="help-block"><span class="text-danger">Note:</span> HTML is not
                                                translated!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <div class="col-sm-12">
                                            <label class="control-label">Rating</label>
                                            &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                            <input type="radio" value="1" name="rating">
                                            &nbsp;
                                            <input type="radio" value="2" name="rating">
                                            &nbsp;
                                            <input type="radio" value="3" name="rating">
                                            &nbsp;
                                            <input type="radio" value="4" name="rating">
                                            &nbsp;
                                            <input type="radio" value="5" name="rating">
                                            &nbsp;Good
                                        </div>
                                    </div>
                                    <div class="buttons">
                                        <div class="pull-right">
                                            <button class="btn btn-primary" id="button-review" type="button">Continue
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--<h3 class="subtitle"><span>Related Products</span></h3>
                        <div class="owl-carousel related_pro">
                            <div class="product-thumb">
                                <div class="image"><a href="product.html"><img
                                                src="image/product/samsung_tab_1-200x200.jpg"
                                                alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                                class="img-responsive"/></a></div>
                                <div class="caption">
                                    <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                    <p class="price"><span class="price-new">$230.00</span> <span class="price-old">$241.99</span>
                                        <span class="saving">-5%</span></p>
                                    <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                    </button>
                                    <div class="add-to-links">
                                        <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="">
                                            <i class="fa fa-heart"></i></button>
                                        <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i
                                                    class="fa fa-exchange"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    @endforeach
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
<!-- Footer
============================================= -->
<div class="zoomContainer" style="-webkit-transform: translateZ(0);position:absolute;left:426.375px;top:294px;height:350px;width:350px;"><div class="zoomLens" style="background-position: 0px 0px; float: right; overflow: hidden; z-index: 999; transform: translateZ(0px); opacity: 0.4; zoom: 1; width: 280px; height: 280px; background-color: white; cursor: pointer; border: 1px solid rgb(0, 0, 0); background-repeat: no-repeat; position: absolute; left: 0px; top: 26px; display: none;">&nbsp;</div><div class="zoomWindowContainer" style="width: 400px;"><div style="overflow: hidden; background-position: 0px -39.7143px; text-align: center; background-color: rgb(255, 255, 255); width: 400px; height: 400px; float: left; background-size: 500px 500px; z-index: 100; border: 4px solid rgb(136, 136, 136); background-repeat: no-repeat; position: absolute; background-image: url(&quot;image/product/iphone_6-500x500.jpg&quot;); top: 0px; left: 350px; display: none;" class="zoomWindow">&nbsp;</div></div></div>

@include('layouts.footer')