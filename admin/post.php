<?php 
session_start();
if(!isset( $_SESSION['CRUD_LOGIN'])){
    header('location:login.php');
   
}
include('header.php');?>


<div class="row">
            <div class="col-lg-9" style="margin-left:80px;">
              <!-- Form Basic -->
              <div class="card mb-4" >
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">News And Events Form</h6>
                </div>

                <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>

                <div class="card-body">
                  <form id="addsid" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Title:</label>
                      <input type="email" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                        placeholder="Enter  Title">
                      
                    </div>
                   
                    <div class="form-group">
                      <div class="custom-file">
                        <label  for="customFile">Choose file</label>
                        <input type="file" class="form-control" id="image" name="image">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Description</label>
                      <textarea  class="form-control textarea" id="description" name="description" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Date:</label>
                      <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp">
                      
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Slug:</label>
                      <input type="text" class="form-control" id="slug" name="slug" aria-describedby="emailHelp"  placeholder="Enter slug">
                      
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Meta Title:</label>
                      <input type="text" class="form-control" id="meta_title" name="meta_title" aria-describedby="emailHelp"  placeholder="Enter meta_title">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Meta Description:</label>
                      <textarea class="form-control" id="meta_description" name="meta_description" rows="3"></textarea>
                    </div>



                    <button type="button" class="btn btn-primary" id="butaddpost">Submit</button>
                    <div id="msg"></div>

                  </form>
                </div>
              </div>
</div></div>



<?php include('footer.php');?>

<script>
$(document).ready(function() {
	$('#butaddpost').on('click', function() {
		
		var title = $('#title').val();
        // alert(slider_title);
        var description=tinyMCE.editors[$('#description').attr('id')].getContent();
		var date = $('#date').val();
        var slug = $('#slug').val();
		var meta_title = $('#meta_title').val();
        var meta_description = $('#meta_description').val();

        var image=$('#image').get(0).files[0];

        var formData = new FormData();
        formData.append('title', title);
        formData.append('description', description);
        formData.append('date', date);
        formData.append('slug', slug);
        formData.append('meta_title', meta_title);
        formData.append('meta_description', meta_description);
        formData.append('image', image);
       
		
			$.ajax({
                
				url: "savepost.php",
				type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
				success: function(data){

          if(data.code=="404"){
                    $('#msg').html('<p class="text-danger">'+data.msg+'</p>');
                }
                else{
                    $('#msg').html('<p class="text-success">'+data.msg+'</p>');
                    // purchase_product();
                   window.location.href="news.php";				
                }


                	
				
				
				}
			});
		
		
	});
});
</script>