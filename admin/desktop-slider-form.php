<?php
include("connection.php");
if(isset($_POST["submit"])){
    $iname=$_POST["iname"];
    $iniche=$_POST["iniche"];
    $iinstal=$_POST["iinstal"];
    $query="INSERT INTO `desktop-slider`(`id`, `iname`, `iniche`, `ipicture`, `iinstalink`) VALUES ('null','$iname','$iniche','null','$iinstal')";
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