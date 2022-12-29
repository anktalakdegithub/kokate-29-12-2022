<?php
    include('config.php');  
    $sql = "DELETE FROM news WHERE news_id  ='" . $_POST["news_id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>
