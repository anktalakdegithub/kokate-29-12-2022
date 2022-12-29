<?php include('header.php');?>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-headers">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Enquire </h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Enquire Now</li>
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
            <h6 class="section-title bg-white text-center text-primary px-3">Enquire Now</h6>
            <h1 class="mb-5">Enquire Now</h1>
        </div>
        <div class="row g-4">

            <div class="col-lg-8 offset-2 wow fadeInUp" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                     
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="board"
                                    aria-label="Floating label select example">
                                    <option selected="">Select a Board</option>
                                    <option value="CBSE">CBSE</option>
                                    <option value="SSC">SSC</option>
                                    <option value="ICSE">ICSE</option>
                                
                                </select>
                                <label for="floatingSelect">Select a Board</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <select class="form-select" id="grade"
                                    aria-label="Floating label select example">
                                    <option selected="">Select Grade</option>
                                    <option value="v">v</option>
                                    <option value="VI">VI</option>
                                    <option value="VII">VII</option>
                                    <option value="VIII">VIII</option>
                                    <option value="IX">IX</option>
                                    <option value="X">X</option>
                                    <option value="XI (Commerce)">XI (Commerce)</option>
                                    <option value="XII (Commerce)">XII (Commerce)</option>
                                </select>
                               
                                <label for="floatingSelect">Select Grade</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-outline-primary w-100 py-3" type="button" id="sendmsg">Send Message</button>
                        </div>
                    </div>
                </form>
                <div id="msg"></div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



<?php include('footer.php');?>


<script>
$('#sendmsg').on('click', function()
{
    // alert();
  var name = $('#name').val();
		var board = $('#board').val();
		var grade = $('#grade').val();
		var email = $('#email').val();

    $.ajax({
        url:"savereg.php",
        data: {'name': name,'email':email,'board':board,'grade':grade},
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