<?php
$page_title="Kokate Commerce Classes";
$page_description="Kokate Coaching Classes is a leading Coaching class in
Thane offering coaching for students for all levels mainly for CBSE SSC ICSE Science
Commerce";
$page_keywords='Coaching, Commerce,Classes, Kokate, students, CBSE, SSC, ICSE,Science, 24/7 assistance, learning,Classroom,Recorded Lecture, Online Classes';
$page_ogtype='Kokate Commerce Classes';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
  <title><?php echo htmlspecialchars($page_title); ?> </title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <?php 
      $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
    <link rel="canonical" href="<?=$actual_link;?>" />


  <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta property="og:type" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($page_title); ?>"/>
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:url" content="<?=$actual_link;?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <meta property="og:image" content="images/flogoe.png" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">

    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">




    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->
    <link rel="icon" type="image/x-icon" href="img/c.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


    <!-- 404 Start -->
    <!-- <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" style="display: grid;min-height: 100vh; align-items: center;"> -->
    <div class="container-fluid py-5 wow fadeInUp kokatebg" data-wow-delay="0.1s" style="">
        <div class="container text-center">
            <div class="row justify-content-center">
                <!-- <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Page Not Found</h1>
                    <p class="mb-4">We’re sorry, the page you have looked for does not exist in our website! Maybe go to our home page or try to use a search?</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Go Back To Home</a>
                </div> -->
                <div class="col-md-6 mt-5 px-3">
                    <center class="py-2">
                        <img src="img/klogoo.png" alt="kokate">
                    </center>
                <h1 class="my-4">Kokate Classes</h1>
                <div class="mx-2">
                <span class="badge bg-primary">Classroom Coaching </span>
                <span class="badge bg-primary">V-XII CBSE SSC ICSE</span>
                <span class="badge bg-primary">XI XII Commerce</span>
                <span class="badge bg-primary">CAFC/CMAF/CSEET</span>
                <span class="badge bg-primary">XI XII  Science</span>
                <!-- <span class="badge bg-primary">JEE main | NEET | CET</span> -->
                <span class="badge bg-primary">JEE main /main MHCET</span>
                </div>
                <p class="mb-4 text-dark fw-bold py-md-5">Best Classroom Education with the Most Innovative Learning formats that prepare you for 
a Successful Future for School as well as College Section, ICSE Board, CBSE Board, State 
Board, 5th class to 10th  Commerce /Science 11th 12th. </p>
                <a href="https://kokateclasses.com/home.php" class="btn btn-dark btn-bg">Know More</a>
                <!-- <a href="home.php" class="btn btn-dark btn-bg">Know More</a> -->
                </div>
                <div class="col-md-6 mt-5 px-3">
                <center class="py-2">
                        <img src="img/ark.png" alt="arkdes">
                    </center>
                <h1 class="my-4">Arkdes</h1>
                <div class="mx-2">
                <span class="badge bgdark">E-Learning Platform</span>
                <span class="badge bgdark">XI XII Commerce</span>
                <span class="badge bgdark">CAFC/CMAF/CSEET</span>
                <span class="badge bgdark">F.Y.B.com/BAF</span>
                <span class="badge bgdark">S.Y.B.com/BAF</span>
                <span class="badge bgdark">T.Y.B.com/BAF</span>
                </div>
                <p class="mb-4 text-dark fw-bold py-md-5">
                A new educational concept offering powerful, Well executed pattern of modular education for CBSE, ICSE, SSC.</p>
                <a href="https://www.arkdes.in/" class="btn btn-dark btn-bg">Know More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
        

  

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>