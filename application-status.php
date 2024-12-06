<?php
include_once 'includes/header.php';
?>

<body class="about-page">

  

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Application Status</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index">Home</a></li>
            <li class="current">Application Status</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 2 Section -->
    <section id="about" class="about section contact">

<div class="container">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
        <!-- <span class="section-subtitle" data-aos="fade-up">Welcome to</span> -->
            <!-- <h1 class="mb-4" data-aos="fade-up">
            Sri Vasudevamurthy Tulasi Charitable Trust (R)
            </h1> -->
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
        <div class="col-lg-6 order-lg-1">
        <h2 class="content-title text-center">
        Check Application Status
            </h2>
            <?php include_once 'includes/application_status.php';?>
        </div>
    </div>
</div>
</section><!-- /About Section -->

    <!-- Services Section -->
  

  

  </main>

  <?php
    include_once 'includes/footer.php';
    ?>