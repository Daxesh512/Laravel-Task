 <!-- Footer Section -->
 <footer>
    <div class="footer">
        <div class="container">
            <!-- Prefooter Section -->
            <div class="row pre-footer">
                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">HEAD OFFICE</h4>
                            <p>PO Box 16122, Collins Street West,
                                <br> Victoria 8007 Australia </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">CALL US</h4>
                            <p>SUPPORT: 1800 425 4646
                                <br> OFFICE: +1 (253) 2587 220</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-box">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="contact-details">
                            <h4 class="pre-footer-title">EMAIL US</h4>
                            <p>hello@offshoreindustry.com
                                <br> sales@offshoreindustry.com </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Prefooter Section -->

            <!-- Footer widgets -->
            <div class="row widgets">
                <div class="col-md-4 col-sm-6">
                    <div class="about-txt widget">
                        <img src="{{url('frontend/images/footer-logo.png')}}" alt="logo" />

                        <p>Collaboratively deliver partnerships progressive alignments. Assertively premier supply chains before emerging solutions. Monetize high-payoff action items before wireless internal or "organic" sources exceptional action items. </p>

                        <div class="widgets-social">
                            <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                            <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6">
                    <div class="quick-links widget">
                        <h2 class="widget-title">QUICK LINKS</h2>
                        <ul>
                            <li> <a href="#"> Careers </a> </li>
                            <li> <a href="#"> Contact </a> </li>
                            <li> <a href="#"> Market Info </a> </li>
                            <li> <a href="#"> Technology </a> </li>
                            <li> <a href="#"> Latest News </a> </li>
                        </ul>
                    </div>
                </div>

                <div class="spacer-50 visible-sm"></div>

                <div class="col-md-3 col-sm-6">
                    <div class="our-services widget">
                        <h2 class="widget-title">OUR SERVICES</h2>
                        <ul>
                            <li> <a href="#"> Chemicals &amp; Commercial Fuels </a> </li>
                            <li> <a href="#"> Aviation Fuels &amp; Marine Fuels </a> </li>
                            <li> <a href="#"> Lubricants Services </a> </li>
                            <li> <a href="#"> Liquified Petrolium Gas </a> </li>
                            <li> <a href="#"> Shell Sulphur, Trading &amp; Supply </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="newsletter widget">
                        <h2 class="widget-title">Newsletter</h2>
                        <p>Subscribe to our newsletters to receive latest news and updates.</p>
                        <!-- ============= Mailchimp Subscribe Form ============= -->

                        <form action="php/subscribe.php" id="subscribeform" method="post">
                            <div class="form-group">
                                <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" title="Please enter your email" data-msg-email="Please enter a valid email">
                            </div>
                            <button type="submit" class="btn btn-block" id="js-subscribe-btn"> Subscribe Now! </button>

                            <div id="js-subscribe-result" data-success-msg="Done. Subscribed" data-error-msg="Oops. Error!"></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Footer widgets -->
        </div>
    </div>
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row copyright-bar">
                <div class="col-md-6">
                    <p>Copyright © 2016 Offshore Industries. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-right">
                    <p> <a href="#"> Terms of use</a> <a href="#">Privacy Policy</a> <span> | </span> Made with <i class="fa fa-heart" aria-hidden="true"></i> by Surjith S M </p>

                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer Section -->

<!-- back-to-top link -->
<a href="#0" class="cd-top"> Top </a>

</div>

<!-- Page Wrapper
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- Javascripts
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

<!-- Jquery Library -->
<script src="{{url('frontend/js/jquery.min.js')}}"></script>

<!-- Bootstrap core JavaScript -->
<script src="{{url('frontend/js/bootstrap.min.js')}}"></script>

<!-- jQuery Flex Slider -->
<script src="{{url('frontend/js/jquery.flexslider-min.js')}}"></script>

<!-- Owl Carousel -->
<script src="{{url('frontend/js/owl.carousel.min.js')}}"></script>

<!-- Counter JS -->
<script src="{{url('frontend/js/waypoints.min.js')}}"></script>
<script src="{{url('frontend/js/jquery.counterup.min.js')}}"></script>

<!-- Back to top -->
<script src="{{url('frontend/js/back-to-top.js')}}"></script>

<!-- Form Validation -->
<script src="{{url('frontend/js/validate.js')}}"></script>

<!-- Subscribe Form JS -->
<script src="{{url('frontend/js/subscribe.js')}}"></script>

<!-- Main JS -->
<script src="{{url('frontend/js/main.js')}}"></script>

</body>

</html>
