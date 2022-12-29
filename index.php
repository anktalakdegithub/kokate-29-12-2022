<?php 
$page_title="Kokate Commerce Classes";
$page_description="Kokate Coaching Classes is a leading Coaching class in
Thane offering coaching for students for all levels mainly for CBSE SSC ICSE Science
Commerce";
$page_keywords='Coaching, Commerce,Classes, Kokate, students, CBSE, SSC, ICSE,Science, 24/7 assistance, learning,Classroom,Recorded Lecture, Online Classes';
$page_ogtype='Kokate Commerce Classes';
include('header.php');
include_once 'config.php';
$limit=3;
// $result = mysqli_query($con,"select * from news ORDER BY news_id ASC LIMIT $limit");
$result = mysqli_query($con,"SELECT * FROM `news` ORDER BY news_id DESC LIMIT $limit");

// $result = mysqli_query($con,"select * from news");
// die($result);

?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" style="height:550px;" src="img/Medlibrarya.png" alt="Indian Student">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center bannercls">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                        <img src="img/kokatewhiteicon.png" class="kokaimg">
                        <h2 class="display-3 text-white animated slideInDown"> Kokate Classes</h2>
                            <!-- <div class="row mb-2">
                                <div class="col-2 col-md-1 my-md-auto">
                                <img src="img/kokatewhiteicon.png" style="width: 50px;height: 55px;">
                                </div>
                                <div class="col-10 col-md-11">
                                <h2 class="display-3 text-white animated slideInDown"> Kokate Classes</h2>
                                </div>
                            </div> -->
                    
                    
                            <!-- <p class="fs-5 text-white mb-4 pb-2">Kokate Coaching Classes is a leading Coaching class in
                                Thane offering coaching for students for all levels mainly for CBSE SSC ICSE Science
                                Commerce</p> -->
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">KCC</h5>
                            <p class="fs-5 text-white mb-4 pb-2">Kokate classes is a leading Coaching classes in thane offering 
                            coaching for students for all level mainly for Commerce & Science 
                            as well as for CBSE SSC and ICSE Board Students </p>
                            <a href="about.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Know
                                More</a>
                            <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" style="height:550px;" src="img/about.png" alt="Indian Student">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center bannercls">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                                
                                <img src="img/VKiconwhite.png" class="vkimg" >
                             
                                <h2 class="display-3 text-white animated slideInDown">VK’s Tutorial’s</h2>
                             
                        <!-- <div class="row mb-2">
                                <div class="col-2 col-md-1 my-md-auto">
                                <img src="img/VKiconwhite.png" style="width: 50px;height: 55px;">
                                </div>
                                <div class="col-10 col-md-11">
                                <h2 class="display-3 text-white animated slideInDown">VK’s Tutorial’s</h2>
                                </div>
                            </div> -->
                           <!-- <img src="img/vkslogo.png" class="mb-3" style="width: 350px;height: 65px;"> -->
                            <h5 class="clrvk text-uppercase mb-3 animated slideInDown">Sign Of Success </h5>
                            <p class="fs-5 text-white mb-4 pb-2">A new educational concept offering powerful, Well
                                executed pattern of modular education for CBSE, ICSE, SSC.</p>
                            <a href="https://www.vktutorials.com/" class="btn clrbgvk py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" style="height:550px;" src="img/slide2.jpg" alt="ARKDES">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center bannercls">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                        <!-- <div class="row mb-2">
                                <div class="col-2 col-md-1 my-md-auto">
                                <img src="img/akicon-white.png" style="width: 50px;height: 55px;">
                                </div>
                                <div class="col-10 col-md-11">
                                <h2 class="display-3 text-white animated slideInDown">ARKDES</h2>
                                </div>
                            </div> -->
                            <img src="img/akicon-white.png" class="akimg">
                            <h2 class="display-3 text-white animated slideInDown">ARKDES</h2>
                            <h5 class="clea text-uppercase mb-3 animated slideInDown">We Do Accounts Learning
                                Better</h5>
                            <!-- <img src="img/arkdes.png" alt="arkdes" class=" ak animated slideInDown">
                    <br> -->
                            <p class="fs-5 text-white mb-4 pb-2">We are mainly focused on enhancing the learning &
                                teaching quality via animated and interactive PPTs</p>
                            <a href="https://www.arkdes.in/"
                                class="btn clrbga py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            <!-- <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Service Start -->
<div class="container-xxl py-2">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center h-100 pt-3">
                    <div class="p-3">
                        <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                        <h5 class="mb-3">Classroom Coaching</h5>
                        <p class="text-justify">Coaching has been defined as a “one-to-one conversation focused on the 
enhancement of learning and development through increasing self-awareness and a 
sense of personal responsibility where the coach facilitates the self-directed learning of the coaches through questioning, active 
listening and appropriate challenge in a supportive and encouraging climate.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center h-100 pt-3">
                    <div class="p-3">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5 class="mb-3">Online Classes</h5>
                        <p>Online coaching is an innovative method of learning that has gained vehement 
popularity after covid. It is computer-based learning where students can 
attend/study according to their convenience, and in the comfort of their homes. 
Here, students don’t have to travel to sit inside a classroom.                         </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center h-100 pt-3">
                    <div class="p-3">
                        <i class="fa fa-3x fa-microphone text-primary mb-4"></i>
                        <h5 class="mb-3">Recorded Lecture</h5>
                        <p>Want to learn as and when u fill confirmable then  prefer our Recorded lecture 
Courses no tension of visiting classes room on time or attending online lecture on 
time but the quality of the is not compromised. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center h-100 pt-3">
                    <div class="p-3">
                        <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                        <h5 class="mb-3">Test Series</h5>
                        <p>Practice make a man perfect. A highly Disciplined and thorough test series by 
kokate classes to provide rehearsals and to ensure success in your exam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp aboutheight" data-wow-delay="0.1s" >
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100 abouttheight" src="img/about.png" alt="Welcome to Kokate">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                <h1 class="mb-4">Welcome to Kokate Classes</h1>
                <p class="mb-4">Kokate Coaching Classes is a leading Coaching class in Thane offering coaching for
                    students for all levels mainly for CBSE SSC ICSE Science Commerce</p>
                <p class="mb-4">Kokate Classes was started by Prof. Mr. Ravindra Kokate in 1996. He has been teaching
                    and guiding students for more than 25 years. He is commonly referred to as Kokate Sir.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Finest Teaching </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Finest Test</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Finest Reporting </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Finest  Growth</p>
                    </div>

                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="about.php">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Feature</h6>
            <h2 class="mb-5 display-6">Our Feature</h2>
        </div>
        <div class="row g-3">
            <div class="col-md-3">
                <center>
                    <img src="img/fac/qa.png" height="80px" alt="Daily Question Writing">
                </center>
                <h5 class="text-center mt-3">Daily Question Writing</h5>
            </div>
            <div class="col-md-3">
                <center> 
                    <img src="img/fac/teacher.png" alt="Digital Classroom" height="80px">
                </center>
                <h5 class="text-center mt-3">Digital Classroom</h5>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="img/fac/tests.png" alt="99 Paper Test Series." height="80px">
                </center>
                <h5 class="text-center mt-3">99 Paper Test Series. (Board)</h5>
            </div>
            <div class="col-md-3">
                <center>
                    <img src="img/fac/education.png" alt="Best Quality Education At Affordable Fees." height="80px">
                </center>
                <h5 class="text-center mt-3">Best Quality Education At Affordable Fees.</h5>
            </div>
        </div>
        <div class="row">
        <center>
             <a class="btn btn-primary py-3 px-5 mt-5 text-center" href="aminities.php">Know More</a>
        </center>
        </div>
    </div>
</div>

<!-- Categories Start --
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Feature</h6>
            <h2 class="mb-5 display-6">Our Feature</h2>
        </div>
        <div class="row g-3">
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden">
                            <img class="img-fluid" src="img/cat-1.jpg" alt="Daily Question Writing">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 featurem">
                                <h5 class="m-0">Daily Question Writing</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden">
                            <img class="img-fluid" src="img/cat-2.jpg" alt="Digital Classroom">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 featurem">
                                <h5 class="m-0">Digital Classroom</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden">
                            <img class="img-fluid" src="img/cat-3.jpg" alt="99 Paper Test Series">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 featurem">
                                <h5 class="m-0">99 Paper Test Series. (Board)</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow zoomIn bestquality" data-wow-delay="0.7s">
                <a class="position-relative d-block h-100 overflow-hidden">
                    <img class="img-fluid position-absolute w-100 h-100 imgfeature" src="img/cat-4.jpg" alt="Best Quality Education">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3 bestqualit">
                        <h5 class="m-0">Best Quality Education At Affordable Fees.</h5>
                    </div>
                </a>
            </div>
        </div>
        <center>
             <a class="btn btn-primary py-3 px-5 mt-5 text-center" href="aminities.php">Know More</a>
        </center>
    </div>
</div>
-- Categories Start -->


<!-- Courses Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
            <h2 class="mb-5 display-6">Popular Courses</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light h-100">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/18.png" alt="Popular Courses">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                          
                            <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;"></a> -->
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <!-- <h3 class="mb-0">$149.00</h3> -->
                        <!-- <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            
                        </div> -->
                        <!-- <h5 class="mb-4">XI / XII th Science (All Subject Including IT)</h5> -->
                        <h5 class="mb-2">ICSC</h5>
                        <a href="icsc.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 mb-4  icess">Read More</a>
                    </div>
                    <!-- <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light h-100">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/16.png" alt="Popular Courses">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;"></a> -->
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <!-- <h3 class="mb-0">$149.00</h3> -->
                        <!-- <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                           
                        </div> -->
                        <!-- <h5 class="mb-4">V-X SSC/CBSE/ICSE All subject</h5> -->
                        <h5 class="mb-2">CBSC</h5>
                        <a href="cbsc.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 mb-4 icess">Read More</a>
                         
                    </div>
                    <!-- <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light h-100">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="img/17.png" alt="Popular Courses">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <!-- <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;"></a> -->
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <!-- <h3 class="mb-0">$149.00</h3> -->
                        <!-- <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div> -->
                        <!-- <h5 class="mb-4">JEE Main/ Advance</h5> -->
                        <h5 class="mb-2">SCC</h5>
                        <a href="ssc.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 mb-4 icess">Read More</a>
                           
                    </div>
                    <!-- <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i>John Doe</small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
                        </div> -->
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Courses End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Amenities</h6>
                <h2 class="mb-4 display-6">Our Amenities</h2>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-12">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Daily Question Writing</p>
                    </div>
                    <div class="col-sm-12">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Learning</p>
                    </div>
                    <div class="col-sm-12">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Team of Deducted Professors</p>
                    </div>
                    <div class="col-sm-12">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Biometrics</p>
                    </div>
                    <div class="col-sm-12">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Team of Deducted Professors</p>
                    </div>
                  

                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="aminities.php">Read More</a>
            </div>
            <div class="col-lg-8 wow fadeInUp aboutheight" data-wow-delay="0.1s" >
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100 abouttheight" src="img/aminities.png" alt="Amenities">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Team Start --
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Instructors</h6>
            <h2 class="mb-5 display-6">Expert Instructors</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-1.jpg" alt="Instructors">
                    </div>
                    <div class="position-relative d-flex justify-content-center experts">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-2.jpg" alt="Instructors">
                    </div>
                    <div class="position-relative d-flex justify-content-center experts" >
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-3.jpg" alt="Instructors">
                    </div>
                    <div class="position-relative d-flex justify-content-center experts">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="img/team-4.jpg" alt="Instructors">
                    </div>
                    <div class="position-relative d-flex justify-content-center experts">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Instructor Name</h5>
                        <small>Designation</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-- Team End -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">News</h6>
            <h1 class="mb-5">Our News</h1>
        </div>
        <div class="row g-4">
            <?php

        
            $i=0;
            while($row = mysqli_fetch_array($result)) {
                // print_r("<pre>");
                // print_r($row);
            ?>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="admin/News/<?php echo $row['image']; ?>" class="img-fluid rounded-start" height="250px" alt="<?php echo $row["title"]; ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["title"]; ?></h5>
                                <p class="card-text">
                                <?php
                                $string=$row["description"];
                                if (strlen($string) > 10) {
                                    $trimstring = substr($string, 0, 100). '...';
                                    } else {
                                    $trimstring = $string;
                                    }
                                    echo $trimstring;
   
                                                  ?>    
                               </p>
                                <a href="single_page.php?news_id=<?php echo $row['news_id']; ?>"
                                    class="text-primary">Read More</a>
                                <p class="card-text mt-2"><small class="text-muted">Posted On
                                        <?php echo $row["date"]; ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php
            $i++;
            }
            ?>
                    

        </div>
        <div class="row">
          
            <div class="col-12 text-center">
            <a href="news.php" class="btn btn-primary">Read More</a>
            </div>
          
           
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h2 class="mb-5 display-6">Our Students Say!</h2>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3 ourstud" style="width:130px" src="img/stud/bhavna-jain.png" alt="BHAVNA JAIN">
                <h5 class="mb-2">BHAVNA JAIN</h5>
                <!-- <p>Profession</p> -->
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The faculty provided to us for our subjects had a epitone of knowledge in the
                        subject that he has taught us </p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3 ourstud" style="width:130px" src="img/stud/Dhiraj-more.png" alt="DHIRAJ MORE">
                <h5 class="mb-2">DHIRAJ MORE</h5>
                <!-- <p>Profession</p> -->
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">We have recieved up to date knowledge of our curriculum in sylabus by our faculty at
                        kokate classes.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3 ourstud" style="width:130px" src="img/stud/siddesh-pawar.png" alt="SIDDESH PAWAR">
                <h5 class="mb-2">SIDDESH PAWAR</h5>
                <!-- <p>Profession</p> -->
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The online tutorial facility help us in distant learning of our courses equivalent
                        to attending classes personally.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3 ourstud" style="width:130px" src="img/stud/omkar-patil.png" alt="OMKAR PATIL">
                <h5 class="mb-2">OMKAR PATIL</h5>
                <!-- <p>Profession</p> -->
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The main usp of kokate classes is that they help us to understand the subject matter
                        rather than mugging it up</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3 ourstud" style="width:130px" src="img/stud/shruti-Shirke.png" alt="SHRUTI SHIRKE">
                <h5 class="mb-2">SHRUTI SHIRKE</h5>
                <!-- <p>Profession</p> -->
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">By understanding the curriclum we gain the knowledge which will enable our younger
                        grasping power to understand this fast changing economic environment accross the globe.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3 ourstud" style="width:130px" src="img/stud/omkar-doke.png" alt="OMKAR DOKE">
                <h5 class="mb-2">OMKAR DOKE</h5>
                <!-- <p>Profession</p> -->
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Better and deep understanding of subjects taught to us enable us to understand the
                        questionaire asked in exams so that we can answer them precisely with out wasting time.</p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3 ourstud" style="width:130px" src="img/stud/tejal-ugale.png" alt="TEJAL UGALE">
                <h5 class="mb-2">TEJAL UGALE</h5>
                <!-- <p>Profession</p> -->
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">The faculty online ensures us that all our doubts and queries relating to the
                        subject taught are answered and solved with proper explanation.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<?php include('footer.php');?>