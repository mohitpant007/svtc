<?php
include_once 'includes/header.php';
?>

<body class="index-page">

    <main class="main">

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-7 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
                    <span class="section-subtitle" data-aos="fade-up">Welcome to</span>
                        <h1 class="mb-4" data-aos="fade-up">
                        Sri Vasudevamurthy Tulasi Charitable Trust (R)
                        </h1>
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                {
                                    "loop": true,
                                    "speed": 600,
                                    "autoplay": {
                                        "delay": 5000
                                    },
                                    "slidesPerView": "auto",
                                    "pagination": {
                                        "el": ".swiper-pagination",
                                        "type": "bullets",
                                        "clickable": true
                                    },
                                    "breakpoints": {
                                        "320": {
                                            "slidesPerView": 1,
                                            "spaceBetween": 40
                                        },
                                        "1200": {
                                            "slidesPerView": 1,
                                            "spaceBetween": 1
                                        }
                                    }
                                }
                            </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="assets/img/img_h_6.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/img_h_7.jpg" alt="Image" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="assets/img/img_h_8.jpg" alt="Image" class="img-fluid">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1">

                        <?php 
                        if(isset($_SESSION['svtc_user_login']) && $_SESSION['svtc_user_login'] == 1){
                            include_once 'includes/schollership_form.php';
                          
                        }else{
                            include_once 'includes/registration_form.php';
                        }
                        
                        ?>
                    </div>
                </div>
            </div>
        </section><!-- /About Section -->

        <!-- About 2 Section -->
        <section id="about-2" class="about-2 section light-background">

            <div class="container">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-4  offset-xl-1 mb-4">
                            <div class="img-wrap text-center text-md-left" data-aos="fade-up" data-aos-delay="100">
                                <div class="img">
                                    <img src="assets/img/image2.jpg" alt="circle image" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-5 col-lg-5 col-xl-6" data-aos="fade-up">
                            <div class="px-1">
                               
                                <h2 class="content-title text-start">
                                Welcome to Sri Vasudevamurthy Tulasi Charitable Trust (R)
                                </h2>
                                <span class="content-subtitle">About SVTC</span>
                                <p class="lead">
                                We support economically poor students ,but not students who are academically POOR. Educational scholarship is only given to students who are hardworking, diligent, meticulous, consistent and have a purpose of performance in life. Preference for this offer is for BRAHMINS – Madhwa’s / Smartha’s / Vyshnav’s. We also honour poor students who have secured 90% & above in any Board Exam,with a PRATHIBA PURASKARA AWARD
                                </p>
                               
                                
                            </div>
                        </div>
                        <div class="offset-md-0 offset-lg-1 col-sm-12 col-md-12 col-lg-12 col-xl-10" data-aos="fade-up">
                            <div class="px-1">
                               
                                <span class="content-subtitle">Objectives of the Trust</span>
                                <p >
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i> To establish, maintain, run, develop, improve, extend, grant, donate for and to aid in the establishment, maintenance, improvement and extension of schools, colleges, polytechnics and other educational institutions including vocational training centre’s, research centres and audio-visual educational centre’s and hostels for students pursuing their studies.
                                </p>
                                <p>
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i> To give donations to educational institutions.
                                </p>
                                <p >
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>  To constitute scholarships to poor and deserving students to enable them to continue their studies and to give grants for fees and other charges or re-imbursement for costs of books, instruments and other educational aids for educational purpose.
                                </p>
                                <p >
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>  To help establishments of student’s hostel and to give other assistances for poor and deserving students to find in-expensive living accommodation to enable them to prosecute higher studies.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /About 2 Section -->

        <!-- Services Section -->
        

        <!-- Stats Section -->
       

        <!-- Blog Posts Section -->
        <section id="blog-posts" class="blog-posts section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <!-- <p>Recent Posts</p> -->
                <h2>Trustees</h2>
            </div><!-- End Section Title -->
            <div class="container">

                <div class="row gy-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
                            <a href="#" class="thumb d-block"><img src="assets/img/trustee_1.jpg" alt="Image" class="img-fluid rounded trustee-img trustee-img-size"></a>

                            <div class="post-content text-center">
                                
                                <h3>Late L V. Tulasi & Late L S Vasudeva Murthy</h3>
                                <p>
                                Founder Trustee
                                </p>

                                
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
                            <a href="#" class="thumb d-block"><img src="assets/img/trustee_2.jpg" alt="Image" class="img-fluid rounded trustee-img"></a>

                            <div class="post-content text-center">
                                
                                <h3>L V Ravi</h3>
                                <p>
                                Managing Trustee
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
                            <a href="#" class="thumb d-block"><img src="assets/img/trustee_3.jpg" alt="Image" class="img-fluid rounded trustee-img"></a>

                            <div class="post-content text-center">
                               
                                <h3>Mamatha Ravi</h3>
                                <p>
                                Trustee
                                </p>

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
                            <a href="#" class="thumb d-block"><img src="assets/img/trustee_4.jpg" alt="Image" class="img-fluid rounded trustee-img"></a>

                            <div class="post-content text-center">
                               
                                <h3>Monisha Ravi</h3>
                                <p>
                                Trustee
                                </p>

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
                            <a href="#" class="thumb d-block"><img src="assets/img/trustee_5.jpg" alt="Image" class="img-fluid rounded trustee-img"></a>

                            <div class="post-content text-center">
                               
                                <h3>Nalini Ramdas</h3>
                                <p>
                                Trustee
                                </p>

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
                            <a href="#" class="thumb d-block"><img src="assets/img/trustee_6.jpg" alt="Image" class="img-fluid rounded trustee-img"></a>

                            <div class="post-content text-center">
                               
                                <h3>Nandini Jai</h3>
                                <p>
                                Trustee
                                </p>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Blog Posts Section -->

        <!-- Tabs Section -->
        

        <!-- Services 2 Section -->
       

        <!-- Pricing Section -->
       

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Plans</p>
                <h2>Frequently Asked Questions</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-12">
                        <div class="custom-accordion" id="accordion-faq">
                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                                        How to download and register?
                                    </button>
                                </h2>

                                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        Far far away, behind the word mountains, far from the countries
                                        Vokalia and Consonantia, there live the blind texts. Separated
                                        they live in Bookmarksgrove right at the coast of the Semantics,
                                        a large language ocean.
                                    </div>
                                </div>
                            </div>
                            <!-- .accordion-item -->

                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2" "="">
                How to create your paypal account?
              </button>
            </h2>
            <div id=" collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                                        <div class="accordion-body">
                                            A small river named Duden flows by their place and supplies it
                                            with the necessary regelialia. It is a paradisematic country, in
                                            which roasted parts of sentences fly into your mouth.
                                        </div>
                            </div>
                        </div>
                        <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                                    How to link your paypal and bank account?
                                </button>
                            </h2>

                            <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                                <div class="accordion-body">
                                    When she reached the first hills of the Italic Mountains, she
                                    had a last view back on the skyline of her hometown
                                    Bookmarksgrove, the headline of Alphabet Village and the subline
                                    of her own road, the Line Lane. Pityful a rethoric question ran
                                    over her cheek, then she continued her way.
                                </div>
                            </div>
                        </div>
                        <!-- .accordion-item -->

                    </div>
                </div>
            </div>
            </div>
        </section><!-- /Faq Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <p>Happy Customers</p>
                <h2>Testimonials</h2>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                {
                                    "loop": true,
                                    "speed": 600,
                                    "autoplay": {
                                        "delay": 5000
                                    },
                                    "slidesPerView": "auto",
                                    "pagination": {
                                        "el": ".swiper-pagination",
                                        "type": "bullets",
                                        "clickable": true
                                    },
                                    "breakpoints": {
                                        "320": {
                                            "slidesPerView": 1,
                                            "spaceBetween": 40
                                        },
                                        "1200": {
                                            "slidesPerView": 1,
                                            "spaceBetween": 1
                                        }
                                    }
                                }
                            </script>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial mx-auto">
                                        <figure class="img-wrap">
                                            <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                                        </figure>
                                        <h3 class="name">Adam Aderson</h3>
                                        <blockquote>
                                            <p>
                                                “There live the blind texts. Separated they live in
                                                Bookmarksgrove right at the coast of the Semantics, a large
                                                language ocean.”
                                            </p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial mx-auto">
                                        <figure class="img-wrap">
                                            <img src="assets/img/testimonials/testimonials-2.jpg" alt="Image" class="img-fluid">
                                        </figure>
                                        <h3 class="name">Lukas Devlin</h3>
                                        <blockquote>
                                            <p>
                                                “There live the blind texts. Separated they live in
                                                Bookmarksgrove right at the coast of the Semantics, a large
                                                language ocean.”
                                            </p>
                                        </blockquote>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial mx-auto">
                                        <figure class="img-wrap">
                                            <img src="assets/img/testimonials/testimonials-3.jpg" alt="Image" class="img-fluid">
                                        </figure>
                                        <h3 class="name">Kayla Bryant</h3>
                                        <blockquote>
                                            <p>
                                                “There live the blind texts. Separated they live in
                                                Bookmarksgrove right at the coast of the Semantics, a large
                                                language ocean.”
                                            </p>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /Testimonials Section -->

    </main>

    <?php
    include_once 'includes/footer.php';
    ?>