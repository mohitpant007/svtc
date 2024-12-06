<?php
include_once 'includes/header.php';
require_once 'includes/Instances.php';
require_once 'includes/dbconfig.php';
$db = Instances::get('DB');
$table = 'tbl_schollarship_part_1';
if(isset($_SESSION['svtc_user_detais']['id'])){
  $applicationId = $_SESSION['svtc_user_detais']['id'];
  $getApplicantDetails = $db->query("SELECT * FROM $table where application_id='{$applicationId}'");
}

?>

<body class="about-page">

  

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Scholarship</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index">Home</a></li>
            <li class="current">Scholarship</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 2 Section -->
    <section id="about" class="about section contact">

<div class="container">
    <div class="row align-items-center justify-content-between">
       
        <div class="col-lg-12 order-lg-1">
        <h2 class="content-title text-center">
        Apply For Scholarship 
            </h2>
            <?php 
            if(isset($_SESSION['svtc_user_login']) && $_SESSION['svtc_user_login'] == 1){
                include_once 'includes/common_function.php';
                include_once 'includes/scholarship_apply_form_4.php';
            }else{
              include_once 'includes/registration_form.php';
            }
            
            ?>
        </div>
    </div>
</div>
</section><!-- /About Section -->

    <!-- Services Section -->
  

  

  </main>

  <?php
    include_once 'includes/footer.php';
    ?>
   <script>
      const single_parent = "<?php echo getFilledDetails($getApplicantDetails[0], 'single_parent');?>";

      </script>