<?php
include("connection.php");
if(isset[$_POST["submit"]]){
    $dinamme=$_POST["diname"];
    $diemail=$_POST["diemail"];
    $diphone=$_POST[""];
    $dniche=$_POST[""];
    $dipicture=$_POST[""];
    $dipicture=$_POST[""];
    $difacebookl=$_POST[""];
    $difacelookf=$_POST[""];
    $diinstal=$_POST[""];
    $diinstaf=$_POST[""];
    $ditiktokl=$_POST[""];
    $ditiktokf=$_POST[""];
    $diyoutubel=$_POST[""];
    $diyoutubef=$_POST[];
    $query="INSERT INTO `database-influencer`(`id`, `diname`, `diemail`, `diphone`, `dicountry`, `diniche`, `dipicture`, `difacebookl`, `difacebookf`, `diinstal`, `diinstaf`, `ditiktokl`, `ditiktokf`, `diyoutubel`, `diyoutubef`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]')";
    $result=mysqli_query($conn, $query);
    

}
?>