<?php
include("connection.php");
if(isset($_POST["submit"])){
  $iname=$_POST["iname"];
  $iemail=$_POST["iemail"];
  $iphone=$_POST["iphone"];
  $icountry=$_POST["icountry"];
  $iniche=$_POST["iniche"];
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
  $file_name = $_FILES["file"]["name"];
  $file_tmp = $_FILES["file"]["tmp_name"];
  $path = "C:xampp/htdocs/Rising-Digitally-php/image/collabrated-influencers/". $file_name;
  move_uploaded_file($file_tmp,$path);

  $query="INSERT INTO `collaborated-influencer`(`id`, `ciname`, `ciemail`, `ciphone`, `cicountry`, `ciniche`, `cipicture`, `cifacebookl`, `cifacebookf`, `ciinstal`, `ciinstaf`, `citiktokl`, `citiktokf`, `ciyoutubel`, `ciyoutubef`, `cirproject`, `collablink`, `report`) VALUES ('null','$iname','$iemail','$iphone','$icountry','$iniche','$file_name','$ifacebookl','$ifacebookf','$iinstal','$iinstaf','$itiktokl','$itiktokf', '$iyoutubel','$iyoutubef','$irecent','$icollabl','$ireportl')";
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