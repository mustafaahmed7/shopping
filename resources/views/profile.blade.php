
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
                <li><a href="/"><i class="fa fa-home"></i></a></li>
                <li><a href="/profile">My Account</a></li>
            </ul><!-- Breadcrumb End-->

            <div class="row">
                <!--Middle Part Start-->
                <div class="col-sm-9" id="content">
                    <h1 class="title">My Account</h1>
                    <p class="lead">Hello, <strong>{{Auth::user()->name}}!</strong> - To update your account information.</p>
                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <fieldset id="personal-details">
                                    <legend>Personal Details</legend>
                                    <div class="form-group required">
                                        <label for="input-firstname" class="control-label">First Name</label>
                                        <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-lastname" class="control-label">Last Name</label>
                                        <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-email" class="control-label">E-Mail</label>
                                        <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-telephone" class="control-label">Telephone</label>
                                        <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone">
                                    </div>
                                    <div class="form-group">
                                        <label for="input-fax" class="control-label">Fax</label>
                                        <input type="text" class="form-control" id="input-fax" placeholder="Fax" value="" name="fax">
                                    </div>
                                </fieldset><br>
                            </div>
                            <div class="col-sm-6">
                                <fieldset>
                                    <legend>Change Password</legend>
                                    <div class="form-group required">
                                        <label for="input-password" class="control-label">Old Password</label>
                                        <input type="password" class="form-control" id="input-password" placeholder="Old Password" value="" name="old-password">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-password" class="control-label">New Password</label>
                                        <input type="password" class="form-control" id="input-password" placeholder="New Password" value="" name="new-password">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-confirm" class="control-label">New Password Confirm</label>
                                        <input type="password" class="form-control" id="input-confirm" placeholder="New Password Confirm" value="" name="new-confirm">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>Newsletter</legend>
                                    <div class="form-group">
                                        <label class="col-md-2 col-sm-3 col-xs-3 control-label">Subscribe</label>
                                        <div class="col-md-10 col-sm-9 col-xs-9">
                                            <label class="radio-inline">
                                                <input type="radio" value="1" name="newsletter">
                                                Yes</label>
                                            <label class="radio-inline">
                                                <input type="radio" checked="checked" value="0" name="newsletter">
                                                No</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <fieldset id="address">
                                    <legend>Payment Address</legend>
                                    <div class="form-group">
                                        <label for="input-company" class="control-label">Company</label>

                                        <input type="text" class="form-control" id="input-company" placeholder="Company" value="" name="company">

                                    </div>
                                    <div class="form-group required">
                                        <label for="input-address-1" class="control-label">Address 1</label>
                                        <input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="address_1">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-city" class="control-label">City</label>
                                        <input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-postcode" class="control-label">Post Code</label>
                                        <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-country" class="control-label">Country</label>
                                        <input type="text" class="form-control" id="input-postcode" placeholder="Country" value="" name="country_id">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-zone" class="control-label">Region / State</label>
                                        <input type="text" class="form-control" id="input-postcode" placeholder="Region" value="" name="region_id">
                                    </div>
                                </fieldset>
                            </div>
                            <div class="col-sm-6">
                                <fieldset id="shipping-address">
                                    <legend>Shipping Address</legend>
                                    <div class="form-group">
                                        <label for="input-company" class="control-label">Company</label>
                                        <input type="text" class="form-control" id="input-company" placeholder="Company" value="" name="company">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-address-1" class="control-label">Address 1</label>
                                        <input type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="address_1">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-city" class="control-label">City</label>
                                        <input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-postcode" class="control-label">Post Code</label>
                                        <input type="text" class="form-control" id="input-postcode" placeholder="Post Code" value="" name="postcode">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-country" class="control-label">Country</label>
                                        <input type="text" class="form-control" id="input-postcode" placeholder="Country" value="" name="country_id">
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-zone" class="control-label">Region / State</label>
                                        <input type="text" class="form-control" id="input-postcode" placeholder="Region" value="" name="region_id">
                                    </div>
                                </fieldset>
                            </div>
                        </div>



                        <div class="buttons">
                            <div class="pull-right">
                                <input type="submit" class="btn btn-lg btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
                <!--Middle Part End -->
                <!--Right Part Start -->
                <aside id="column-right" class="col-sm-3 hidden-xs">
                    <h3 class="subtitle"><span>Account</span></h3>
                    <div class="list-group">
                        <ul class="list-item">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Address Books</a></li>
                            <li><a href="wishlist.html">Wish List</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Transactions</a></li>
                            <li><a href="#">Recurring payments</a></li>
                        </ul>
                    </div>
                </aside>
                <!--Right Part End -->
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
@include('layouts.footer')
