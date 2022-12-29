<?php 
$page_title="News- Kokate Commerce Classes";
$page_description="Kokate Classes was started by Prof. Mr. Ravindra Kokate in 1996. He has been teaching and guiding students for more than 25 years. He is commonly referred to as Kokate Sir.";
$page_keywords='Coaching, Commerce,Classes, Kokate, students, CBSE, SSC, ICSE,Science, Institution,,EducationTeaching,Guiding, learning,Classroom,Recorded Lecture, Online Classes';
$page_ogtype='News- Kokate Commerce Classes';

include_once 'config.php';
include('header.php');
$limit = 6;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  
$result1 = mysqli_query($con,"SELECT * FROM `news` ORDER BY news_id DESC LIMIT $start_from, $limit");

?>
<!-- Navbar End -->


<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-headers2">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">News</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">News</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->



<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-3">
            <?php 
        $i=0;
        while($row=mysqli_fetch_array($result1)) {
          // print_r($row);die();
        
    ?>
            <div class="col-md-4">
                <div class="card">
                  
                    <img src="admin/News/<?php echo $row['image']; ?>" class="" height="200px" alt="<?php echo $row["title"]; ?>">
                    <div class="card-body">
                        <h4><?php echo $row['title']; ?></h4>
                        <p> <?php
                                $string=$row["description"];
                                if (strlen($string) > 10) {
                                    $trimstring = substr($string, 0, 100). '...';
                                    } else {
                                    $trimstring = $string;
                                    }
                                    echo $trimstring;
   
                                                  ?>    </p>

<a href="single_page.php?news_id=<?php echo $row['news_id']; ?>"
                                    class="text-primary">Read More</a>
                        
                    </div>
                </div>
            </div>
            <?php $i++;} ?>
        </div>
        <?php  

$result_db = mysqli_query($con,"SELECT COUNT(news_id) FROM news"); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 

?>
        <?php if (ceil($total_records / $limit) > 0): ?>
        <ul class="pagination ">
            <?php if ($page > 1): ?>
            <li class="prev mx-1 btn btn-primary text-white"><a class="text-light"
                    href="news.php?page=<?php echo $page-1 ?>">Prev</a></li>
            <?php endif; ?>

            <?php if ($page > 3): ?>
            <li class="start mx-1 btn btn-light"><a href="news.php?page=1">1</a></li>
            <li class="dots">...</li>
            <?php endif; ?>

            <?php if ($page-2 > 0): ?><li class="page mx-1 btn btn-light"><a
                    href="news.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
            <?php if ($page-1 > 0): ?><li class="page mx-1 btn btn-light"><a
                    href="news.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

            <li class="currentpage mx-1 btn btn-primary"><a class="text-light"
                    href="news.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

            <?php if ($page+1 < ceil($total_records / $limit)+1): ?><li class="page mx-1 btn btn-light"><a
                    href="news.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
            <?php if ($page+2 < ceil($total_records / $limit)+1): ?><li class="page mx-1 btn btn-light"><a
                    href="news.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

            <?php if ($page < ceil($total_records / $limit)-2): ?>
            <li class="dots">...</li>
            <li class="end  mx-1 btn btn-light"><a
                    href="news.php?page=<?php echo ceil($total_records / $limit) ?>"><?php echo ceil($total_records / $limit) ?></a>
            </li>
            <?php endif; ?>

            <?php if ($page < ceil($total_records / $limit)): ?>
            <li class="next mx-1 btn btn-primary "><a class="text-light"
                    href="news.php?page=<?php echo $page+1 ?>">Next</a></li>
            <?php endif; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<!-- About End -->


<!-- Footer Start -->
<?php include('footer.php');?>