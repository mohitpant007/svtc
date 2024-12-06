
<footer id="footer" class="footer light-background">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                <div class="widget">
                    <!-- <h3 class="widget-heading">About Us</h3> -->
                    <p class="text-center footer-text">
                        Sri Vasudevamurthy Tulasi
                    </p>
                    <p class="text-center">
                        Charitable Trust ( R)
                    </p>

                </div>
            </div>
            <div class="col-md-6 col-lg-3 ps-lg-5 mb-3 mb-md-0">
                <div class="widget">
                    <h3 class="widget-heading">Address</h3>
                    <ul class="list-unstyled float-start me-5">
                        <li><a href="#">L V RAVI - Managing Trustee</a></li>
                        <li><a href="#"># 60, 4TH CROSS,</a></li>
                        <li><a href="#">MALLESWARAM,</a></li>
                        <li><a href="#">BANGALORE 560 003</a></li>
                        <li><a href="#">Karnataka State, INDIA</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5">
                <div class="widget">
                    <h3 class="widget-heading">Useful Links</h3>
                    <ul class="list-unstyled footer-blog-entry">
                        <li>

                            <a href="#">Home</a>
                        </li>
                        <li>

                            <a href="#"><a href="/status">Application Status</a></a>
                        </li>
                        <li>

                            <a href="#">Services</a>
                        </li>
                        <li>

                            <a href="#"><a href="/status">Contact</a></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 pl-lg-5">
                <div class="widget">
                    <h3 class="widget-heading">Connect</h3>
                    <ul class="list-unstyled social-icons light mb-3">
                        <li>
                            <a href="#"><span class="bi bi-facebook"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-twitter-x"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-linkedin"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-google"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="bi bi-google-play"></span></a>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <div class="footer-subscribe">
                        <h3 class="widget-heading">Subscribe</h3>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="mb-2">
                                <input type="text" class="form-control" name="email" placeholder="Enter your email">

                                <button type="submit" class="btn btn-link">
                                    <span class="bi bi-arrow-right"></span>
                                </button>
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your subscription request has been sent. Thank you!
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright d-flex flex-column flex-md-row align-items-center justify-content-md-between">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Active.</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                
            </div>
        </div>
    </div>
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<?php
include_once 'includes/login_popup.php';
?>
<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/custom.js"></script>

<script src="assets/js/form-submit.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script src="assets/js/scholarship-submit.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>


<script>
$(document).ready(function(){
  $(".loginBtn").click(function(){
    
    $("#registrationModal").modal();
  });
  $('#closeModal').click(function() {
                $('#registrationModal').modal('hide'); // Use Bootstrap's modal method
            });
});
</script>

</body>

</html>