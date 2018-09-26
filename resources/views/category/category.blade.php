@include('layouts.head')
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
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="/category">Search</a></li>
            </ul><!-- Breadcrumb End-->

            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-sm-12">
                    @if(isset($searchString))
                    <h1 class="title">Search - {{$searchString}}</h1>
                    @endif
                    <label>Search Criteria</label>
                    <div class="row">
                        <form method="GET">
                        <div class="col-sm-4">
                            <input type="text" class="form-control"
                                   placeholder="Keywords"
                                   name="search">
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control" name="categoryUrl">
                                <option value="0">All Categories</option>
                                @foreach($categories_all as $category)
                                <option value="{{$category->categoryUrl}}">
                                    {{$category->categoryTitle}}</option>

                                    @foreach($category->subCategory as $subCategory)
                                        <option value="{{$subCategory->categoryUrl}}">
                                            &nbsp; {{$subCategory->categoryTitle}}</option>

                                        @foreach($subCategory->subCategory as $subSubCategory)
                                            <option value="{{$subSubCategory->categoryUrl}}">
                                                &nbsp; &nbsp; {{$subSubCategory->categoryTitle}}</option>
                                        @endforeach
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="button"
                                   class="btn btn-primary"
                                   id="button-search" value="Search">
                        </div>
                        </form>
                    </div>
                    <br>
                    <div class="product-filter">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="btn-group">
                                    <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip"
                                            title="List"><i class="fa fa-th-list"></i></button>
                                    <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip"
                                            title="Grid"><i class="fa fa-th"></i></button>
                                </div>
                                <a href="compare.html" id="compare-total">Product Compare (0)</a></div>
                            <div class="col-md-4 col-xs-6">
                                <div class="form-group input-group input-group-sm">
                                    <label class="input-group-addon" for="input-sort">Sort By:</label>
                                    <select id="input-sort" class="form-control">
                                        <option value="" selected="selected">Default</option>
                                        <option value="">Name (A - Z)</option>
                                        <option value="">Name (Z - A)</option>
                                        <option value="">Price (Low &gt; High)</option>
                                        <option value="">Price (High &gt; Low)</option>
                                        <option value="">Rating (Highest)</option>
                                        <option value="">Rating (Lowest)</option>
                                        <option value="">Model (A - Z)</option>
                                        <option value="">Model (Z - A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-xs-6">
                                <div class="form-group input-group input-group-sm">
                                    <label class="input-group-addon" for="input-sort">Show:</label>
                                    <select id="input-limit" class="form-control">
                                        <option value="" selected="selected">20</option>
                                        <option value="">25</option>
                                        <option value="">50</option>
                                        <option value="">75</option>
                                        <option value="">100</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <br/>
                    <div class="row products-category">
                        @foreach($products as $product)
                            <div class="product-layout product-list col-xs-12">
                                <div class="product-thumb">
                                    <div class="image"><a href="{{'/product/'.$product->id.'-'.$product->title}}">
                                            @foreach($product->images->take(1) as $images)
                                                <img src="{{asset('uploads/products/'.$images->ImagePath)}}"
                                                     @endforeach
                                                     alt=" Strategies for Acquiring Your Own Laptop "
                                                     title=" Strategies for Acquiring Your Own Laptop "
                                                     class="img-responsive"/></a></div>
                                    <div>
                                        <div class="caption">
                                            <h4><a href="{{'/product/'.$product->id.'-'.$product->title}}">{{$product->title}} </a></h4>
                                            <p class="description">{{$product->description}}</p>
                                            <p class="price">
                                                @if($product->sale != null)
                                                <span class="price-new">{{$product->price - $product->sale}}</span>
                                                <span class="price-old">{{$product->price}}</span>
                                                <span class="saving">-{{$product->discount}}%</span>
                                                {{--<span class="price-tax">Ex Tax: $1,400.00</span></p>--}}
                                            @else
                                                <span class="price-new">{{$product->price}}</span>
                                            @endif
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary add-to-cart" type="button"
                                                    data-id="{{$product->id}}"><span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to Wish List"
                                                        onClick=""><i class="fa fa-heart"></i>
                                                    <span>Add to Wish List</span></button>
                                                <button type="button" data-toggle="tooltip" title="Compare this Product"
                                                        onClick=""><i class="fa fa-exchange"></i> <span>Compare this Product</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">&gt;</a></li>
                                <li><a href="#">&gt;|</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 text-right">Showing 1 to 12 of 15 (2 Pages)</div>
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

</div><!-- Custom Side Block End -->
@include('layouts.footer')