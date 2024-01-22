<?php
include("connection.php");
if(isset($_POST["submit"])){
    $iname=$_POST["iname"];
    $iniche=$_POST["iniche"];
    $iinstal=$_POST["iinstal"];
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $path = "C:xampp/htdocs/Rising-Digitally-php/image/desktop-slider/". $file_name;
    move_uploaded_file($file_tmp,$path);
    $query="INSERT INTO `desktop-slider`(`id`, `iname`, `iniche`, `ipicture`, `iinstalink`) VALUES ('null','$iname','$iniche','$file_name','$iinstal')";
    $result=mysqli_query($conn, $query);
    if($result){
        echo '<script>alert("New Influencer Added to slider")
        window.location.href="desktop-slider.php"
        </script>';
    }
    else{
        echo "error" . mysqli_error($conn);
    }
}


?>