<?php
include("connection.php");
if(isset($_POST["submit"])){
  $iname=$_POST["iname"];
  $iemail=$_POST["iemail"];
  $iphone=$_POST["iphone"];
  $icountry=$_POST["icountry"];
  $iniche=$_POST["iniche"];
//   $iprofile=$_POST["iprofile"];
  $ifacebookl=$_POST["ifacebookl"];
  $ifacebookf=$_POST["ifacebookf"];
  $iinstal=$_POST["iinstal"];
  $iinstaf=$_POST["iinstaf"];
  $itiktokl=$_POST["itiktokl"];
  $itiktokf=$_POST["itiktokf"];
  $iyoutubel=$_POST["iyoutubel"];
  $iyoutubef=$_POST["iyoutubef"];
  $irecent=$_POST["irecent"];
  $icollabl=$_POST["icollabl"];
  $ireportl=$_POST["ireportl"];
  $query="INSERT INTO `collaborated-influencer`(`id`, `ciname`, `ciemail`, `ciphone`, `cicountry`, `ciniche`, `cipicture`, `cifacebookl`, `cifacebookf`, `ciinstal`, `ciinstaf`, `citiktokl`, `citiktokf`, `ciyoutubel`, `ciyoutubef`, `cirproject`, `collablink`, `report`) VALUES ('null','$iname','$iemail','$iphone','$icountry','$iniche','null','$ifacebookl','$ifacebookf','$iinstal','$iinstaf','$itiktokl','$itiktokf', '$iyoutubel','$iyoutubef','$irecent','$icollabl','$ireportl')";
  $result=mysqli_query($conn, $query);
  if($result){
    echo '<script>alert("new collaborated influencer inserted")
    window.location.href="addinfluencer.php"
    </script>';
  }
  else{
    echo 'error' . mysqli_error($conn);
  }

}
?>