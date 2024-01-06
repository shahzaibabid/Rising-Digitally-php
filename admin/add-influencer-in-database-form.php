<?php
include("connection.php");
if(isset($_POST["submit"])){
    $diname=$_POST["diname"];
    $diemail=$_POST["diemail"];
    $diphone=$_POST["diphone"];
    $dicountry=$_POST["dicountry"];
    $dniche=$_POST["diniche"];
    $dipicture=$_POST["dipicture"];
    $difacebookl=$_POST["difacebookl"];
    $difacelookf=$_POST["difacebookf"];
    $diinstal=$_POST["diinstal"];
    $diinstaf=$_POST["diinstaf"];
    $ditiktokl=$_POST["ditiktokl"];
    $ditiktokf=$_POST["ditiktokf"];
    $diyoutubel=$_POST["diyoutubel"];
    $diyoutubef=$_POST["diyoutubef"];
    $query="INSERT INTO `database-influencer`(`id`, `diname`, `diemail`, `diphone`, `dicountry`, `diniche`, `dipicture`, `difacebookl`, `difacebookf`, `diinstal`, `diinstaf`, `ditiktokl`, `ditiktokf`, `diyoutubel`, `diyoutubef`) VALUES ('null','$diname','$diemail','$diphone','$dicountry','$dniche','null','$difacebookl','$difacelookf','$diinstal','$diinstaf','$ditiktokl','$ditiktokf','$diyoutubel','$diyoutubef')";
    $result=mysqli_query($conn, $query);
    if($result){
        echo '<script>alert("New Influencer Added in Database")
        window.location.href="add-influencer-in-database.php"
        </script>';
    }
    else{
            echo "Error" . mysqli_error($conn);
        }
      

}
?>