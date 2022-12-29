<?php
$page_title="News-Kokate Commerce Classes";
$page_description="Kokate Coaching Classes is a leading Coaching class in
Thane offering coaching for students for all levels mainly for CBSE SSC ICSE Science
Commerce";
$page_keywords='Coaching, Commerce,Classes, Kokate, students, CBSE, SSC, ICSE,Science, 24/7 assistance, learning,Classroom,Recorded Lecture, Online Classes';
$page_ogtype='News-Kokate Commerce Classes';

include('header.php');
include_once 'config.php';
$result = mysqli_query($con,"SELECT * FROM news  WHERE news_id ='" . $_GET['news_id'] . "'");
$row= mysqli_fetch_array($result);
$list_new=mysqli_query($con,"SELECT * FROM news ORDER BY news_id DESC LIMIT 6");
// $rows= mysqli_fetch_array($list_new);
?>     
  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-headers">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">News Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">News Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
          
          
<section class="my-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <input type="hidden" name="news_id" id="news_id" value="<?php echo $row['news_id']; ?>">
                
                <h3 class="fw-bold clgname"><?php echo $row['title']; ?></h3>
                <img src="admin/News/<?php echo $row['image'];?>"  alt="News Image" class="responsive py-4" height="400px" width="500px">
              <p class="mt-1"><small>Posted On <?php echo $row['date']; ?></small></p>
                    <p class="mt-4"><?php echo $row['description']; ?></p>
                 

                    
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled mt-5">
                    <h5 class="card-title fw-bold mb-4">List Details</h5>
                    <?php $i=0; while($rows = mysqli_fetch_array($list_new)) {?>
                    <li><img src="admin/News/<?php echo $rows['image']; ?>" height="30px" width="65px" alt=""
                            style="float:left;margin-right:10px;margin-top:5px;">
                      <a href="single_page.php?news_id=<?php echo $rows['news_id'];?>">
                            <p class="fw-bold"> <?php echo $rows["title"]; ?></p></a>
                    </li>
                    <hr>
                    <?php $i++;}?>
                 
                </ul>
              
            </div>
        </div>
    </div>
</section>

<?php include('footer.php');?>
</body>



</html>