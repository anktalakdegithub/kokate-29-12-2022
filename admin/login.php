<?php
session_start();
include("config.php");
// $con=mysqli_connect('localhost','root','','maximusdb');
 $error="";


if(isset($_POST["login"]))
{
// Getting Post Vlaues
$email=mysqli_real_escape_string($con, $_POST['email']);
$password=mysqli_real_escape_string($con, md5($_POST['password'])); // MD5 password encryption

$res=mysqli_query($con,"Select * from user_data where email ='$email'");
// print_r($res);die();
if(mysqli_num_rows($res)>0){
$row = mysqli_fetch_assoc($res);
if($row){
	//    $_SESSION["id"]= $row["user_id"];
    //    $_SESSION["name"] = $row['user_name'];
    //    $_SESSION["email"] = $row['email'];
       $_SESSION['CRUD_LOGIN']=true;
       $_SESSION['email']=$row['email'];
    
	// if remember me clicked . Values will be stored in $_COOKIE  array
if(!empty($_POST["remember"])){
//COOKIES for username
setcookie ("email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
//COOKIES for password
setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));

} else {
if(isset($_COOKIE["email"])) {
setcookie ("email","");
if(isset($_COOKIE["password"])) {
setcookie ("password","");
				}
			}
          }
        //   $error="valid";
                header("Location:news.php");
	
}

  else {
		$error = "Invalid Login";
	}
} else {
    $error = "Invalid Login";
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>Kokate Classes</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
        selector: '.textarea'
    });
    </script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-8">
                                <div class="login-form">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                        <?php
                                                              if(!empty($_GET['message'])) {
                                            $msg= $_GET['message'];
                                            echo '<p class="message"> '.$msg.'</p>';
                                            }?>
                                    </div>
                                    <form class="user" action="" method="post" id="login">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>"
                                                aria-describedby="emailHelp" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password" name="password"
                                                value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div><input type="checkbox" name="remember" id="remember"
                                                    <?php if(isset($_COOKIE["email"])) { ?> checked <?php } ?> />
                                                <label for="remember-me">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary" name="login"
                                                value="Submit" /><br />

                                            <?php echo $error; ?>
                                        </div>
                                </div>


                                </form>
                                <hr>
                                <div class="text-center">
                                    <!-- <a class="font-weight-bold small" href="forgot _password.php">Forgot Password</a> -->
                                </div>
                                <div class="text-center">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    </div>
</body>

</html>