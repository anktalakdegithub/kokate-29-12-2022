<?php 

session_start();
if(!isset( $_SESSION['CRUD_LOGIN'])){
    header('location:login.php');
   
}
include('header.php');

include_once 'config.php';
$result = mysqli_query($con,"SELECT * FROM news");
?>



<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">

    <div class="col-lg-12 col-sm-11 col-md-11 col-xs-12">
        <div class="d-md-flex pull-right">
            <!-- <a class="btn btn-danger" href="post.php"
                style="margin-left:890px;margin-top:11px;font-size:14px;width:130px;border-radius:22px;color:white;">Add
                News</a> -->
                    <a href="post.php"  class="btn btn-danger">Add News</a>
        </div>
    </div>
    <br><br>










    <div class="row">
        <div class="col-lg-12 mb-4">
            <!-- Simple Tables -->
            <div class="card">
                <?php
if (mysqli_num_rows($result) > 0) {
?>
              
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                 
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTableHover">
                        <thead class="thead-light">
                            <tr>
                                <th>News ID</th>
                                <th>Title</th>
                               
                                <th>Date</th>
                                <th>Image</th>
                              
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            </tr>
                            <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
                            <tr>
                                <td><?php echo $row["news_id"]; ?></td>
                                <td><?php echo $row["title"]; ?></td>
                              
                                <td><?php echo $row["date"]; ?></td>

                                <td><img src="News/<?php echo $row['image']; ?>" width="70" height="40"></td>
                               

                                <td>
                                    <a href="#" style="font-size:12px;" class="text-danger" data-toggle="modal"
                                        data-target="#deletepostModal_<?php echo $row["news_id"]; ?>">
                                        <i class="fas fa-trash-alt"
                                            style="font-size:22px;color:#f57a64;padding-right:6px;"></i>

                                    </a>

                                    <a href="Editpost.php?news_id=<?php echo $row["news_id"]; ?>"><i class="fa fa-edit"
                                            style="font-size:24px;color:green;"></i></a>&nbsp;&nbsp;
                                    <!-- <a href="deleteslider.php?slider_id=<?php echo $row["slider_id"]; ?>"><i class="fa fa-trash-o" style="font-size:24px;color:red;"></i></a> -->
                                </td>


                            </tr>
                            <!-- Modal -->
                            <div id="deletepostModal_<?php echo $row["news_id"]; ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <h4>Are you sure you want to delete this?</h4>
                                            <button type="button" class="delete_slider btn btn-danger"
                                                value="<?php echo $row["news_id"]; ?>">Yes</button>
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">No</button>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!--End Modal -->
                            <?php
$i++;
}
?>
                        </tbody>
                    </table>

                    <?php
}
else{
    echo "No result found";
}
?>

                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <?php include('footer.php');?>




    <script>
    $('body').on('click', '.delete_slider', function() {
        var news_id = $(this).val();
        $.ajax({
            url: "deletepost.php",
            data: {
                'news_id': news_id
            },
            //dataType: "json",
            type: "post",
            success: function(response) {

                location.reload();

            }
        });
    });
    </script>


    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable(); // ID From dataTable 
        $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
    </script>