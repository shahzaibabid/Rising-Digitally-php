<?php
include("connection.php");
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $representative=$_POST["representative"];
    $looking=$_POST["look"];
    $message=$_POST["message"];

    $query= "INSERT INTO `letstalk-leads`(`id`, `fullname`, `email`, `whoareyou`, `lookingfor`, `message`, `datetime`) VALUES ('null','$name','$email','$representative','$looking','$message', null)";
    $result= mysqli_query($conn, $query);
    if($result){
        echo '<script> alert("Form has been submitted successfuly")
        window.location.href="index.php"
        </script>';
    } 
    else{
        echo "error:" . mysqli_error ($conn);
    }
}
?>