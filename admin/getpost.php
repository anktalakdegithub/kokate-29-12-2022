<?php
if(isset($_POST["limit"], $_POST["start"]))
{
include('config.php');  


$sql = "SELECT * FROM news ORDER BY news_id  DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
	$result = $con->query($sql);
    // echo($result);
	if ($result->num_rows>0) {
		while($row = $result->fetch_assoc()) {
?>	
		 <div class="col-lg-11 col-md-12 col-sm-12">
                       
                                        <div class="d-flex align-items-center">
                                        
                                        <i class='fas fa-user-circle' style='font-size:65px;color:#525050;'></i>
                                            <div class="col-lg-10">
                                               <a href="userDetails.php?id=<?=$row['news_id '];?>"> <span class="" style="color:#5f77ba; text-transform: capitalize;font-size:22px; font-weight: 900;">&nbsp;&nbsp;&nbsp;<?=$row['title'];?></span></a><br>
                                                <h5 style="padding-top:9px;">&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope" style="font-size:15px;color:#8c8c8f;"></i>
                                                  <?=$row['description'];?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone" style="font-size:15px;color:#8c8c8f;"></i>
                                                  <?=$row['date'];?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-address-card" style="font-size:15px;color:#8c8c8f;"></i>
                                                  <?=$row['slug'];?></h5>
                                                  
                                            </div>
                                            
                                        </div>
                                   <hr>
                                                                  
                                  
                               
                         
                        </div>
                    </div>


			
		
<?php	
	}
	}
	else {
		// echo "0 results";
	}
	mysqli_close($con);


}
?>
  

