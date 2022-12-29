<?php 
$page_title="Careers- Kokate Commerce Classes";
$page_description="Kokate Classes also has a strong team of about 20 full time and part time faculties to teach various subjects. All the faculty members are well qualified teachers.";
$page_keywords='Coaching, Commerce,Classes, Kokate, students, CBSE, SSC, ICSE,Science, Institution,,Careers, Online Classes';
$page_ogtype='Careers- Kokate Commerce Classes';
include('header.php');?>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header2">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h2 class="display-3 text-white animated slideInDown">Careers </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Careers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Careers</h6>
            <h1 class="mb-5">Careers</h1>
        </div>
        <div class="row g-4">

            <div class="col-lg-8 offset-2 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
                                <label for="name">Enter Your Full Name</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="mobile" placeholder="Enter Your Mobile Number">
                                <label for="name">Enter Your Mobile Number</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Enter Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="address" placeholder="Enter Your Address">
                                <label for="name">Enter Your Address</label>
                            </div>
                        </div>
                     
                        <div class="col-12">
                            <div class="form-floating">
                                <select class="form-select" id="category"
                                    aria-label="Floating label select example">
                                    <option selected="">Category</option>
                                    <option value="category">Category 1</option>
                                    <option value="category">Category</option>
                                    <option value="category">Category</option>
                                
                                </select>
                                <label for="floatingSelect">Select Category</label>
                            </div>
                        </div>
                        <div class="col-12">
                        <div class="form-floating">
                                <input type="file" class="form-control" id="file" >
                                <label for="file">Upload Resume</label>
                            </div>
                        </div>
                       
                        <div class="col-12">
                            <button class="btn btn-outline-primary w-100 py-3" type="button" id="sendmsg">Send Message</button>
                        </div>
                    </div>
                    
                </form>
                <div id="msg" class="mt-2"></div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



<?php include('footer.php');?>

<script>
     $(document).ready(function() {
        $("#mobile").on("blur", function() {
            var mobNum = $('#mobile').val();
            var filter = /[1-9]{1}[0-9]{9}/;
    
            if (filter.test(mobNum)) {
                if (mobNum.length == 10) {
                    $('#msg').html(
                        '<div class="alert alert-success" role="alert">Valid Contact Number.</div>');
    
                } else {
                    $('#msg').html(
                        '<div class="alert alert-danger" role="alert">Please put 10  digit mobile number.</div>'
                        );
    
                    return false;
                }
            } else {
    
                $('#msg').html('<div class="alert alert-danger" role="alert">Not a valid number.</div>');
    
    
                return false;
            }
    
        });
    
    });
    $(document).ready(function () {        
            
            $("#email").on("blur", function() {  
            var inputvalues = $("#email").val();    
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;    
            if(!regex.test(inputvalues)){    
                $('#msg').html('<div class="alert alert-danger" role="alert">Email Id is not a valid.</div>'); 
            }else{
                $('#msg').html('<div class="alert alert-success" role="alert">Email is a valid.</div>'); 
            }    
            });    
                
             }); 
</script>

<script>
$('#sendmsg').on('click', function()
{
    //  alert();
  var name = $('#name').val();
		var mobile = $('#mobile').val();
		var address = $('#address').val();
		var email = $('#email').val();
		var file = $('#file').val();

    $.ajax({
        url:"savecareer.php",
        data: {'name': name,'email':email,'mobile':mobile,'address':address,'file':file},
        dataType: "json",
        type: "post",
        success: function(data) {
           
               debugger;
          if(data.code=="404"){
                    $('#msg').html('<div class="alert alert-danger mt-3" role="alert">'+data.msg+'</div>');
                }
                else{
                    $('#msg').html('<div class="alert alert-success mt-3" role="alert">'+data.msg+'</div>');
                
                }
          
        }
    });
});

</script>