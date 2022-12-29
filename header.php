<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
    <title><?php echo htmlspecialchars($page_title); ?> </title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <?php 
      $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    ?>
    <link rel="icon" type="image/x-icon" href="img/c.png">
    <link rel="canonical" href="<?=$actual_link;?>"  />


    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <meta property="og:type" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:site_name" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>" />
    <meta property="og:url" content="<?=$actual_link;?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>" />
    <meta property="og:image" content="img/c.png" alt="kotate logo" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">

    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">



    <!-- Favicon -->
    <!-- <link href="img/favicon.ico" rel="icon"> -->

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

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
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
    <!-- Top Header Start -->
    <header class="top-header top-header-bg bg-dark">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="top-head-left">
                        <div class="top-contact d-md-flex my-md-auto">
                            <a href="mailTo:kokateclasses@gmail.com">
                            <h6 class="text-white mb-0">
                                <i class="fa fa-envelope me-2 text-primary"></i> kokateclasses@gmail.com
                            </h6></a>
                            
                            <h6 class="text-white mb-0">
                                <i class="fa fa-phone-alt ms-md-2 me-2 text-primary"></i><a class="text-white" href="tel:+91 9821729729">+91 9821729729</a> /<a class="text-white" href="tel:+91 9867202299"> 9867202299</a>
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6">
                    <div class="top-header-right">
                        <div class="d-flex pt-2 justify-content-end py-1">
                            <h6 class="my-auto text-white me-2">Follow Us</h6>
                            <a class="btn text-white btn-social" target="_blank"
                                href="https://www.facebook.com/kokatecclasses/"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn text-white btn-social" target="_blank" href="https://twitter.com/kokateclasses"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn text-white btn-social" target="_blank"
                                href="https://www.youtube.com/@kokateclasses8016/featured"><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn text-white btn-social" target="_blank"
                                href="https://www.linkedin.com/in/kokate-classes-a16914161/?original_referer=https%3A%2F%2Fkokateclasses.com%2F"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn text-white btn-social" target="_blank"
                                href="https://www.instagram.com/kokateclass/"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Top Header End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <!-- <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>eLEARNING</h2> -->
            <img src="img/kokate.png" alt="kotate logo">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'about.php'){echo 'active'; }else { echo ''; } ?>">About</a>
                <a href="gallery.php" class="nav-item nav-link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'gallery.php'){echo 'active'; }else { echo ''; } ?>">Gallery</a>
                <a href="careers.php" class="nav-item nav-link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'careers.php'){echo 'active'; }else { echo ''; } ?>">Careers</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Course</a>
                    <!-- <div class="dropdown-menu fade-down m-0">
                        <a href="courses.php" class="dropdown-item">CBSC</a>
                        <a href="courses_single.php" class="dropdown-item">ICSC</a>
                        <a href="#" class="dropdown-item">SSC</a>
                    </div> -->
                    <div class="dropdown-menu fade-down m-0">
                        <a href="cbsc.php" class="dropdown-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'cbsc.php'){echo 'active'; }else { echo ''; } ?>">CBSC</a>
                        <a href="icsc.php" class="dropdown-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'icsc.php'){echo 'active'; }else { echo ''; } ?>">ICSC</a>
                        <a href="ssc.php" class="dropdown-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'ssc.php'){echo 'active'; }else { echo ''; } ?>">SSC</a>
                        <a href="science.php" class="dropdown-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'science.php'){echo 'active'; }else { echo ''; } ?>">Science</a>
                        <a class="dropdown-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'commerce.php'){echo 'active'; }else { echo ''; } ?>" href="commerce.php"> Junior College</a>

                        <a href="professional.php" class="dropdown-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'professional.php'){echo 'active'; }else { echo ''; } ?>">Professional Courses</a>
                        <a class="dropdown-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'scommerce.php'){echo 'active'; }else { echo ''; } ?>" href="scommerce.php"> Senior College </a>
                        <a href="postgrad.php" class="dropdown-item <?php if(basename($_SERVER['SCRIPT_NAME']) == 'postgrad.php'){echo 'active'; }else { echo ''; } ?>">Post Graduation </a>
                        <!-- <div>
                            <a class="dropdown-item" href="#" data-bs-toggle="dropdown">Commerce </a>
                            <ul class="submenu dropdown-menu">
                                <li><a class="dropdown-item" href="commerce.php"> Junior College</a></li>
                                <li><a class="dropdown-item" href="scommerce.php"> Senior College </a></li>
                            </ul>
                        </div> -->
                        <!-- <div class="dropdown-item dropdown">
                            <a class=" dropdown-toggle" href="#" data-bs-toggle="dropdown">Commerce </a>
                            <ul class="dropdown-submenu">
                                <li><a class="dropdown-item" href="commerce.php"> Junior College</a></li>
                                <li><a class="dropdown-item" href="scommerce.php"> Senior College </a></li>
                            </ul>
                        </div> -->

                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link <?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'active'; }else { echo ''; } ?>">Contact</a>
            </div>
            <a href="register.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Enquire Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->