<?php
include("connection.php");
  if (isset($_POST["submit2"])) {
    $delete_id = $_POST["delete_id"];
    $del_query = "DELETE FROM `letstalk-leads` WHERE `id` = $delete_id";
    $del_result = mysqli_query($conn, $del_query);
    if ($del_result) {
        // Deletion successful, redirect to the same page
   echo '<script> alert("data deleted successfully")
    window.location.href="lets-talk.php"  
    </script>';
       exit();
    } else {
        // Handle deletion error
        echo "Error: " . mysqli_error($conn);
    }
}
?>