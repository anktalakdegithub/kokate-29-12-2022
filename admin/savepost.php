<?php      
 
    include('config.php');  

    $title = $_POST['title'];
    $description = $_POST['description'];
    $date =$_POST['date'];

    $slug = $_POST['slug'];
    $meta_title = $_POST['meta_title'];
    $meta_description =$_POST['meta_description'];

	$img_name = $_FILES['image']['name'];
	$img_size = $_FILES['image']['size'];
	$tmp_name = $_FILES['image']['tmp_name'];
	$error = $_FILES['image']['error'];

	
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'News/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);



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

				// Insert into Database
				$sql = "INSERT INTO `news`( `title`, `description`, `date`, `image`, `slug`, `meta_title`, `meta_description`) 
				        VALUES ('$title','$description','$date','$new_img_name','$slug','$meta_title','$meta_description')";
						// echo($sql);
						$data['code']="200";
						$data['msg']="Thank you! data Saved.";

				}
				// mysqli_query($con, $sql);
				echo json_encode($data);
				mysqli_query($con,$sql);
			}
		
	