
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
                <li><a href="#">Account</a></li>
                <li><a href="wishlist.html">My Wish List</a></li>
            </ul><!-- Breadcrumb End-->

            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    <h1 class="title">My Wish List</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Model</td>
                                <td class="text-right">Stock</td>
                                <td class="text-right">Unit Price</td>
                                <td class="text-right">Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center"><a href="product.html"><img class="img-thumbnail" src="image/product/samsung_tab_1-60x60.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" /></a></td>
                                <td class="text-left"><a href="product.html">iPod Classic</a></td>
                                <td class="text-left">product 20</td>
                                <td class="text-right">In Stock</td>
                                <td class="text-right"><div class="price"> 109.21€ </div></td>
                                <td class="text-right"><button class="btn btn-primary" title="" data-toggle="tooltip" onClick="cart.add('48');" type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                    <a class="btn btn-danger" title="" data-toggle="tooltip" href="" data-original-title="Remove"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                                <td class="text-center"><a href="product.html"><img class="img-thumbnail" src="image/product/sony_vaio_1-60x60.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" /></a></td>
                                <td class="text-left"><a href="product.html">Samsung Galaxy Tab 10.1</a></td>
                                <td class="text-left">SAM1</td>
                                <td class="text-right">Pre-Order</td>
                                <td class="text-right"><div class="price"> 216.63€ </div></td>
                                <td class="text-right"><button class="btn btn-primary" title="" data-toggle="tooltip" onClick="" type="button" data-original-title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>
                                    <a class="btn btn-danger" title="" data-toggle="tooltip" href="" data-original-title="Remove"><i class="fa fa-times"></i></a></td>
                            </tr>
                            </tbody>
                        </table>
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