<?php      
 
    include('config.php');  
    $news_id= $_POST['news_id'];

    $title = $_POST['title'];
    $description = $_POST['description'];
    $date =$_POST['date'];

    $slug = $_POST['slug'];
    $meta_title = $_POST['meta_title'];
    $meta_description =$_POST['meta_description'];
     $img =$_POST['eimage'];

	 if(!empty($_FILES["image"]["name"])){
		 
    move_uploaded_file($_FILES["image"]["tmp_name"],"News/" . $_FILES["image"]["name"]);			
    $img=$_FILES["image"]["name"];


}
	$data=array();


				if(empty($title)){
					$data['code']="404";
				$data['msg']="Please enter  Title.";
				}
			 else if(empty($description)){
					$data['code']="404";
				$data['msg']="Please enter  Description.";
				}
				else if(empty($date)){
					$data['code']="404";
				$data['msg']="Please enter Date .";
				}
				else if(empty($slug)){
					$data['code']="404";
				$data['msg']="Please enter  Slug.";
				}
				else if(empty($meta_title)){
					$data['code']="404";
				$data['msg']="Please enter Meta Title .";
				}
				else if(empty($meta_description)){
					$data['code']="404";
				$data['msg']="Please enter Meta Description .";
				}
				
                else{
    $sql = "UPDATE news SET title ='$title',description ='$description',date ='$date',image ='$img',slug ='$slug',meta_title ='$meta_title',meta_description ='$meta_description' WHERE news_id   = '$news_id' ";
	mysqli_query($con,$sql);
	$data['code']="200";
						$data['msg']="Thank you! data Updated.";            
}	
echo json_encode($data);
				
			
		
	