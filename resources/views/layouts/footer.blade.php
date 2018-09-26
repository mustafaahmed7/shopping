<!-- Footer
   ============================================= -->
<footer id="footer">

    <!-- Footer Part 1
    ============================================= -->
    <div class="fpart-first">
        <div class="container">
            <div class="row">

                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <h5>Information</h5>
                    <ul>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="about-us.html">Delivery Information</a></li>
                        <li><a href="about-us.html">Privacy Policy</a></li>
                        <li><a href="about-us.html">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <h5>Customer Service</h5>
                    <ul>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li><a href="returns.html">Returns</a></li>
                        <li><a href="sitemap.html">Site Map</a></li>
                    </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <h5>Extras</h5>
                    <ul>
                        <li><a href="manufacturer.html">Brands</a></li>
                        <li><a href="gift-voucher.html">Gift Vouchers</a></li>
                        <li><a href="#">Affiliates</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
                <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <h5>My Account</h5>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Wish List</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">Newsletter</a></li>
                    </ul>
                </div>

                <div class="contact col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h5>Contact Details</h5>
                    <ul>
                        <li class="address"><i class="fa fa-map-marker"></i>Bigshop Plaza, 22 Hoi Wing Road, Delhi,
                            India.
                        </li>
                        <li class="mobile"><i class="fa fa-phone"></i>+91 9898989898</li>
                        <li class="email"><i class="fa fa-envelope"></i><a href="mailto:info@bigshop.com">info@bigshop.com</a>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--Footer Part 1 End-->

    <!-- Footer Part 2
    ============================================= -->
    <div class="fpart-second">
        <div class="container">
            <div id="powered">
                <div class="row">

                    <!-- Payments Types
                    ============================================= -->
                    <div class="col-md-4">
                        <div class="payments_types">
                            <a href="#" target="_blank">
                                <img data-toggle="tooltip" src="/image/payment/payment_paypal.png" alt="paypal"
                                     title="PayPal"></a>
                            <a href="#" target="_blank">
                                <img data-toggle="tooltip" src="/image/payment/payment_maestro.png" alt="maestro"
                                     title="Maestro"></a>
                        </div>
                    </div><!--Payments Types End-->

                    <!-- Payments Types
                    ============================================= -->
                    <div class="powered_text pull-left flip col-md-4">Bigshop © 2018</div>

                    <!-- Social Icon
                    ============================================= -->
                    <div class="col-md-4">
                        <div class="social pull-right flip">
                            <a href="https://www.facebook.com/" target="_blank">
                                <img data-toggle="tooltip" src="/image/socialicons/facebook.png" alt="Facebook"
                                     title="Facebook"></a>
                            <a href="#" target="_blank">
                                <img data-toggle="tooltip" src="/image/socialicons/twitter.png" alt="Twitter"
                                     title="Twitter"> </a>
                            <a href="#" target="_blank">
                                <img data-toggle="tooltip" src="/image/socialicons/pinterest.png" alt="Pinterest"
                                     title="Pinterest"> </a>
                        </div>
                    </div><!--Payments Types End-->
                </div>
            </div>

            <!-- Custom Block
            ============================================= -->
            <div class="custom-text">
                <p></p>
            </div><!--Custom Block End-->

        </div>
    </div><!--Footer Part 2 End-->

    <!-- Back to Top
    ============================================= -->
    <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)" class="backtotop"><i
                    class="fa fa-chevron-up"></i></a></div>

</footer><!--Footer End-->


<!-- JavaScripts
  ============================================= -->
<script type="text/javascript" src="{{ asset('js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing-1.3.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.dcjqaccordion.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/ajax/cart.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.elevateZoom-3.0.8.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/swipebox/lib/ios-orientationchange-fix.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/swipebox/src/js/jquery.swipebox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/ajax/checkout.js')}}"></script>
<script type="text/javascript">
    // Elevate Zoom for Product Page image
    $("#zoom_01").elevateZoom({
        gallery: 'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        lensFadeIn: 500,
        lensFadeOut: 500,
        loadingIcon: 'image/progress.gif'
    });
    //pass the images to Swipebox
    $("#zoom_01").bind("click", function (e) {
        var ez = $('#zoom_01').data('elevateZoom');
        $.swipebox(ez.getGalleryList());
        return false;
    });
</script>
<!-- JavaScripts End-->
</body>
</html>