<?php
include("connection.php");
if(isset($_POST["submit"])){
    $diname=$_POST["diname"];
    $diemail=$_POST["diemail"];
    $diphone=$_POST["diphone"];
    $dicountry=$_POST["dicountry"];
    $dniche=$_POST["diniche"];
    $difacebookl=$_POST["difacebookl"];
    $difacelookf=$_POST["difacebookf"];
    $diinstal=$_POST["diinstal"];
    $diinstaf=$_POST["diinstaf"];
    $ditiktokl=$_POST["ditiktokl"];
    $ditiktokf=$_POST["ditiktokf"];
    $diyoutubel=$_POST["diyoutubel"];
    $diyoutubef=$_POST["diyoutubef"];
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $path = "C:xampp/htdocs/Rising-Digitally-php/image/database/". $file_name;
    move_uploaded_file($file_tmp,$path);
    $query="INSERT INTO `database-influencer`(`id`, `diname`, `diemail`, `diphone`, `dicountry`, `diniche`, `dipicture`, `difacebookl`, `difacebookf`, `diinstal`, `diinstaf`, `ditiktokl`, `ditiktokf`, `diyoutubel`, `diyoutubef`) VALUES ('null','$diname','$diemail','$diphone','$dicountry','$dniche','$file_name','$difacebookl','$difacelookf','$diinstal','$diinstaf','$ditiktokl','$ditiktokf','$diyoutubel','$diyoutubef')";
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