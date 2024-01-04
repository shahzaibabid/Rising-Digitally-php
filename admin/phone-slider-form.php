<?php
include("connection.php");
if(isset($_POST["submit"])){
    $iname=$_POST["iname"];
    $iniche=$_POST["iniche"];
    $iinstal=$_POST["iinstal"];
    $query="INSERT INTO `phone-slider`(`id`, `iname`, `iniche`, `ipicture`, `iinstalink`) VALUES ('null','$iname','$iniche','null','$iinstal')";
    $result=mysqli_query($conn, $query);
    if($result){
        echo '<script>alert("New Influencer added to phone slider")
        window.location.href="phone-slider.php"
        </script>';
    }
    else{
        echo "Error" . mysqli_error($conn);
    }
}
?>