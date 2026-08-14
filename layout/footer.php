<!-- Footer Starts -->
<footer class="footer">
    <!-- Footer Top Area Starts -->
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Starts -->
                <div class="col-sm-4 col-md-2">
                    <h4>Our Company</h4>
                    <div class="menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="packages.php">Packages</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-4 col-md-2">
                    <h4>Help & Support</h4>
                    <div class="menu">
                        <ul>
                            <li><a href="faq.php">FAQ</a></li>
                            <li><a href="terms.php">Terms of Services</a></li>
                            <li><a href="user/signup">Register</a></li>
                            <li><a href="https://users.primecrownholdinginc.com/login">Login</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-4 col-md-3">
                    <h4>Contact Us </h4>
                    <div class="contacts">
                        <div>
                            <span class="color-yellow">United States of America:</span><br>
                            <span>New York</span><br>
                        </div>
                        <div>
                            <span>support@primecrownholdinginc.com</span>
                        </div>
                        <div>
                            <span>Mon-Sun, 24/7</span>
                        </div>
                    </div>
                    <!-- Social Media Profiles Starts -->
                    <div class="social-footer">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fa fa-telegram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Social Media Profiles Ends -->
                </div>
                <!-- Footer Widget Ends -->
                <!-- Footer Widget Starts -->
                <div class="col-sm-12 col-md-5">
                    <!-- Facts Starts -->
                    <div class="facts-footer">
                        <div>
                            <h5>$390M+</h5>
                            <span>Market cap</span>
                        </div>
                        <div>
                            <h5>$6.9M+</h5>
                            <span>daily transactions</span>
                        </div>
                        <div>
                            <h5>230K+</h5>
                            <span>active accounts</span>
                        </div>
                        <div>
                            <h5>worldwide</h5>
                            <span>supported countries</span>
                        </div>
                    </div>
                    <!-- Facts Ends -->
                    <hr>
                    <!-- Supported Payment Cards Logo Starts -->
                    <div class="payment-logos">
                        <h4 class="payment-title">supported payment methods</h4>
                        <img src="assets/images/icons/payment/american-express.png" alt="american-express">
                        <img src="assets/images/icons/payment/mastercard.png" alt="mastercard">
                        <img src="assets/images/icons/payment/visa.png" alt="visa">
                        <img src="assets/images/icons/payment/paypal.png" alt="paypal">
                        <img class="last" src="assets/images/icons/payment/maestro.png" alt="maestro">
                        <i class="fa fa-bitcoin color-gold"></i>
                    </div>
                    <!-- Supported Payment Cards Logo Ends -->
                    <div id="google_translate_element" style="margin-top:30px;"></div>

                </div>
                <!-- Footer Widget Ends -->
            </div>
        </div>
    </div>
    <!-- Footer Top Area Ends -->
    <!-- Footer Bottom Area Starts -->
    <div class="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Copyright Text Starts -->
                    <p class="text-center" id="copyright"></p>

                    <script>
                      document.getElementById("copyright").innerHTML =
                        `PRIME-CROWN HOLDING INC.  &copy; ${new Date().getFullYear()} All Rights Reserved`;
                    </script>
                    <!-- Copyright Text Ends -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Area Ends -->
</footer>
<!-- Footer Ends -->
<!-- Back To Top Starts  -->

<!-- Back To Top Ends  -->

<!-- Template JS Files -->
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/custom.js"></script>

<script src="service-worker.js"></script>
<script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('service-worker.js')
                .then(registration => {
                    console.log('Service Worker is registered', registration);
                })
                .catch(err => {
                    console.error('Registration failed:', err);
                });
        });
    }
</script>

<!-- Live Style Switcher JS File - only demo -->

<style>
    .mgm {
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        top: 50%;
        right: 40%;
        background: #e8b90e;
        padding: 20px 27px;
        box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
    }

    .mgm a {
        font-weight: 700;
        display: block;
        color: #fff;
    }

    .mgm a,
    .mgm a:active {
        transition: all .2s ease;
        color: #fff;
    }
</style>
<div class="mgm" style="display: none;">
    <div class="txt" style="color:#eeeeee;">Investor from <b></b> just earned <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
</div>
<script type="text/javascript">
    // var listCountries = ['United Kingdom', 'India', 'Philippine', 'USA', 'Germany', 'France', 'Italy', 'South Korea', 'Australia', 'Norway', 'Canada', 'Argentina', 'Saudi Arabia', 'Mexico', 'Spain', 'Austria', 'Venezuela', 'South Africa', 'Sweden', 'Botswana', 'South Korea', 'China', 'Italy', 'Germany', 'United Kingdom', 'Bahrain', 'Greece', 'Cuba', 'Bulgaria', 'Portugal', 'Austria', 'Cyprus', 'Panama', 'Asia', 'Norway', 'Netherlands', 'Switzerland', 'Belgium', 'Israel', 'Cyprus','Spain','Norway'];
    // var listPlans = ['$2000','$1000','$50000','$15000','$10000','$100000','$20000','$1500','$30000','$40000','$1200','$60000','$3400', '$7000', '$25000', '$25000', '$35000', '$5000','$7000','$45000','$3500','$5000','$12500','$9500'];
    // interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    // var run = setInterval(request, interval);

    // function request() {
    //     clearInterval(run);
    //     interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    //     var country = listCountries[Math.floor(Math.random() * listCountries.length)];
    //     var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
    //     var msg = 'Someone from <b>' + country + '</b> just earned  <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
    //     $(".mgm .txt").html(msg);
    //     $(".mgm").stop(true).fadeIn(300);
    //     window.setTimeout(function() {
    //         $(".mgm").stop(true).fadeOut(300);
    //     }, 6000);
    //     run = setInterval(request, interval);
    // }
</script>
<!-- Wrapper Ends -->

<script src="assets/js/styleswitcher.js"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en'
        }, 'google_translate_element');
    }
</script>

<script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.js?cb=googleTranslateElementInit"></script>

</body>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '77527bcf7808b15a219eb1e231d86ef839a7bc62';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript>Powered by <a href="https://www.smartsupp.com" target="_blank">Smartsupp</a></noscript>




<!-- Mirrored from priortradeoption.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Jun 2023 06:52:54 GMT -->

</html>