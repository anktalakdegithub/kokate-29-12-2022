<?php      
 
    // include('config.php');  
    include('smtp/PHPMailerAutoload.php');
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $file=$_POST['file'];
    $message="Thanks You for Contact Us";
    $admin_message="Thank You";


				$data=array();
		if(empty($name)){
			$data['code']="404";
		$data['msg']="Please Enter  name.";
		}
	 else if(empty($email)){
			$data['code']="404";
		$data['msg']="Please Enter email.";
		}
		else if(empty($file)){
			$data['code']="404";
		$data['msg']="Please Upload Resume.";
		}

		else{

				// Insert into Database
                // $sql = "INSERT INTO `special_contact_form`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$admin_message')";
                // mysqli_query($con,$sql);
                $amsg="Name: $name<br/> Email: $email<br/>Mobile: $mobile<br/>Address: $address<br/>Upload File: $file<br/>";
                blastEmail($email,"Welcome to Kokate Classes",$message);
                blastEmail("testmailcomp0@gmail.com",'Kokate Classes',$amsg);
						$data['code']="200";
						$data['msg']="Thank you! Data submitted Succefully.";
		}			
        function blastEmail($to,$subject,$message){
	
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = "smtp.gmail.com";
            $mail->Port = "587";
            $mail->IsHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Username = "testmailcomp0@gmail.com";
            $mail->Password = 'vyqxuzjpoyyukuir';
            $mail->SetFrom("kokateclasses@gmail.com","Kokate Classes");
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->AddAddress($to);
            $mail->SMTPOptions = array('ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => false
            ));
            if (!$mail->Send()) {
                echo $mail->ErrorInfo;
            } else {
            
               $emailmsg="Your message has been sent. Thank you!";
            }
            }
            

		echo json_encode($data);	

        