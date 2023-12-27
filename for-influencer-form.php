<?php
include("connection.php");
if(isset($_POST["submit"])){
  $iname=$_POST["iname"];
  $iemail=$_POST["iemail"];
  $iphone=$_POST["iphone"];
  $niche=$_POST["iniche"];
  $icountry=$_POST["icountry"];
  $iinstal=$_POST["iinstal"];
  $ifacebookl=$_POST["ifacebookl"];
  $itiktokl=$_POST["itiktokl"];
  $iyoutubel=$_POST["iyoutubel"];

  $query = "INSERT INTO `for-influencer`(`id`, `iname`, `iemail`, `iphone`, `iniche`, `icountry`, `iinstal`, `ifacebookl`, `itiktokl`, `youtubel`) VALUES ('null','$iname','$iemail','$iphone','$niche','$icountry','$iinstal','$ifacebookl','$itiktokl','$iyoutubel')";
  $result=mysqli_query($conn, $query);
  if($result){
    echo '<script> alert("Influencer! Your Data has been submited successfuly") 
    window.location.href="index.php"
    </script>';
  }
  else{
    echo "Error" . mysqli_error($conn);
  }
}
?>