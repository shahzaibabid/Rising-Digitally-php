<?php
include("connection.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $representative=$_POST["representative"];
    $looking=$_POST["looking"];
    $message=$_POST["message"];
    $query="INSERT INTO `letstalk-uk`(`id`, `name`, `email`, `representative`, `looking`, `message`) VALUES ('null','$name','$email','$representative','$looking','$message')";
    $result=mysqli_query($conn, $query);
    if($result){
        echo '<script>alert("Hurray! Form Submitted Successfully 🤩"); window.location.href="uk.php";</script>';

    }
    else{
       echo "error" . mysqli_error($conn);
    }
}
?>