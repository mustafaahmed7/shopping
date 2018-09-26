@include('admin.layouts.head')

<div id="wrapper">
    <!-- Navigation -->
    @include('admin.layouts.navbar')

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1></h1>
                <div class="container-fluid">
                    <div class="pull-right">
                        <a href="/admin/coupon"
                           data-toggle="tooltip" title="" class="btn btn-default"
                           data-original-title="Cancel"><i class="fa fa-reply"></i>
                        </a>
                    </div>
                    <h1>Coupons</h1>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-pencil"></i> Add Coupon</h3>
                    </div>
                    <div class="panel-body">
                        <form action="/admin/coupon/update" method="POST" enctype="multipart/form-data" id="form-coupon"
                              class="form-horizontal">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-general" data-toggle="tab">General</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-general">
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-name">Coupon Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value="{{$coupon->name}}"
                                                   placeholder="Coupon Name"
                                                   id="input-name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label class="col-sm-2 control-label" for="input-code"><span
                                                    data-toggle="tooltip" title=""
                                                    data-original-title="The code the customer enters to get the discount.">Code</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="code" value="{{$coupon->code}}" placeholder="Code"
                                                   id="input-code"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-type"><span
                                                    data-toggle="tooltip" title=""
                                                    data-original-title="Percentage or Fixed Amount.">Type</span></label>
                                        <div class="col-sm-10">
                                            <select name="type" id="input-type" class="form-control">
                                                @if($coupon->type == 'P')
                                                    <option value="P" selected>Percentage</option>
                                                    <option value="F">Fixed Amount</option>
                                                @else
                                                    <option value="P">Percentage</option>
                                                    <option value="F" selected>Fixed Amount</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-discount">Discount</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="discount" value="{{$coupon->discount}}"
                                                   placeholder="Discount"
                                                   id="input-discount" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-total"><span
                                                    data-toggle="tooltip" title=""
                                                    data-original-title="The total amount that must be reached before the coupon is valid.">Total Amount</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="total" value="{{$coupon->total}}"
                                                   placeholder="Total Amount"
                                                   id="input-total" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Free Shipping</label>
                                        <div class="col-sm-10">
                                            @if($coupon->shipping == true)
                                                <label class="radio-inline">
                                                    <input type="radio" name="shipping" value="1" checked>
                                                    Yes </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="shipping" value="0">
                                                    No </label>
                                            @else
                                                <label class="radio-inline">
                                                    <input type="radio" name="shipping" value="1">
                                                    Yes </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="shipping" value="0" checked>
                                                    No </label>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-product"><span
                                                    data-toggle="tooltip" title=""
                                                    data-original-title="Choose specific products the coupon will apply to. Select no products to apply coupon to entire cart.">Products</span></label>
                                        <div class="col-sm-10">
                                            <select multiple class="form-control" name="product_id[]"
                                                    id="exampleFormControlSelect2">
                                                @if(isset($coupon))
                                                    @foreach($coupon->product as $product)
                                                        <option value="{{$product->id}}"
                                                                selected>{{$product->title}}</option>
                                                    @endforeach
                                                @endif
                                                @foreach($products as $product)
                                                    <option value="{{$product->id}}">{{$product->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-category"><span
                                                    data-toggle="tooltip" title=""
                                                    data-original-title="Choose all products under selected category.">Category</span></label>
                                        <div class="col-sm-10">
                                            <select multiple class="form-control" name="category_id[]"
                                                    id="exampleFormControlSelect2">
                                                @foreach($categories as $category)
                                                    @if( isset($coupon))
                                                        @foreach($coupon->category as $coupon_category )
                                                            @if( isset($coupon_category))
                                                                @if($category->id == $coupon_category->id )
                                                                    <option value="{{$category->id}}"
                                                                            selected>{{$category->categoryTitle}}</option>
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                    @if( isset($coupon_category))
                                                        @if($category->id != $coupon_category->id )
                                                            <option value="{{$category->id}}">
                                                                {{$category->categoryTitle}}</option>
                                                        @endif
                                                    @endif
                                                    @if(!isset($coupon_category))
                                                        <option value="{{$category->id}}">
                                                            {{$category->categoryTitle}}</option>
                                                    @endif
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-date-start">Date Start</label>
                                        <div class="col-sm-3">
                                            <div class="input-group date">
                                                <input type="date" name="date_start" value="{{$coupon->date_start}}"
                                                       placeholder="Date Start" data-date-format="YYYY-MM-DD"
                                                       id="input-date-start" class="form-control">
                                                <span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                    </span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-date-end">Date End</label>
                                        <div class="col-sm-3">
                                            <div class="input-group date">
                                                <input type="date" name="date_end" value="{{$coupon->date_end}}"
                                                       placeholder="Date End" data-date-format="YYYY-MM-DD"
                                                       id="input-date-end" class="form-control">
                                                <span class="input-group-btn">
                    <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                    </span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-uses-total"><span
                                                    data-toggle="tooltip" title=""
                                                    data-original-title="The maximum number of times the coupon can be used by any customer. Leave blank for unlimited">Uses Per Coupon</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="uses_total" value="1" placeholder="Uses Per Coupon"
                                                   id="input-uses-total" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-uses-customer"><span
                                                    data-toggle="tooltip" title=""
                                                    data-original-title="The maximum number of times the coupon can be used by a single customer. Leave blank for unlimited">Uses Per Customer</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="uses_customer" value="1"
                                                   placeholder="Uses Per Customer" id="input-uses-customer"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="input-status">Status</label>
                                        <div class="col-sm-10">
                                            <select name="status" id="input-status" class="form-control">
                                                <option value="1" selected="selected">Enabled</option>
                                                <option value="0">Disabled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{$coupon->id}}">
                            <button type="submit" form="form-coupon"
                                    data-toggle="tooltip" title=""
                                    class="btn btn-primary" data-original-title="Save">
                                <i class="fa fa-save"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /#wrapper -->
</div>
@include('admin.layouts.footer')