<?php
include("connection.php");
if(isset($_POST["submit"])){
  $iname=$_POST["iname"];
  $iemail=$_POST["iemail"];
  $iphone=$_POST["iphone"];
  $icountry=$_POST["icountry"];
  $iniche=$_POST["iniche"];
  // $iprofile=$_POST["iprofile"];
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
  $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["iprofile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["iprofile"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}
  $query="INSERT INTO `collaborated-influencer`(`id`, `ciname`, `ciemail`, `ciphone`, `cicountry`, `ciniche`, `cipicture`, `cifacebookl`, `cifacebookf`, `ciinstal`, `ciinstaf`, `citiktokl`, `citiktokf`, `ciyoutubel`, `ciyoutubef`, `cirproject`, `collablink`, `report`) VALUES ('null','$iname','$iemail','$iphone','$icountry','$iniche','$iprofile','$ifacebookl','$ifacebookf','$iinstal','$iinstaf','$itiktokl','$itiktokf', '$iyoutubel','$iyoutubef','$irecent','$icollabl','$ireportl')";
  $result=mysqli_query($conn, $query);
  if($result){
    echo '<script>alert("new collaborated influencer inserted")</script>';
  }
  else{
    echo 'error' . mysqli_error($conn);
  }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../images/icon/Fav-icon.png">
  <title>
    Add New Collaborated Influencer
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../admin/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../admin/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../admin/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
<style>
  
body{
  background-color:#000;
}

.container {
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  border-radius:20px;
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #EBAF41;
  color: #000;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
  border-radius:5px;

}

#contact button[type="submit"]:hover {
  background: #EE4F27;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
</style>
</head>

<body class="g-sidenav-show ">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="..//images/icon/Fav-icon.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Rising Digitally</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="../admin/influencer-collab.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons">face_2 </i>
            </div>
            <span class="nav-link-text ms-1">Influencer Collabs</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active" href="../admin/addinfluencer.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">list</i>
          </div>
            <span class="nav-link-text ms-1">Add Influencer List</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/database.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">note </i>
            </div>
            <span class="nav-link-text ms-1">Influencers Database</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/add-influencer-in-database.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons">note_add </i>
            </div>
            <span class="nav-link-text ms-1">New Database Entry</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/desktop-slider.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             
            <i class="material-icons">computer</i>
          </div>
            <span class="nav-link-text ms-1">Desktop Slider Entry</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/phone-slider.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
             
            <i class="material-icons">phone_android</i>
          </div>
            <span class="nav-link-text ms-1">phone Slider Entry</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/lets-talk.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons">question_answer</i>
            </div>
            <span class="nav-link-text ms-1">Lets Talk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/for-influencer.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10"> people </i>  
            </div>
            <span class="nav-link-text ms-1">For-Influencer</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../admin/signout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign Out</span>
          </a>
        </li>
  
      </ul>
    </div>
   
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
        
          <h6 class="font-weight-bolder mb-0" style="color:#fff;">Admin Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <!-- <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div> -->
          </div>
          <ul class="navbar-nav  justify-content-end">
        
          
            <!-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li> -->
            <!-- <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li> -->
           
            <li class="nav-item d-flex align-items-center" style="color:#fff;">
                <i class="fa fa-user me-sm-1"></i>&nbsp;
                <span class="d-sm-inline d-none" >Admin</span>
            
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
 
      <div class="container">  
  <form id="contact" action="addinfluencer.php" enctype="multipart/form-data" method="POST" style="background-color:#58BDB3;color:#000;font-family:cursive;">
    <h3 style="font-family:Cursive;color:#000;"><b><center>Add New Collaborated Influencer</center></b></h3>
    <!-- <h4>Contact us for custom quote</h4> -->
    <fieldset>
      <input placeholder="Enter Influencer Name" type="text" tabindex="1" name="iname" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Email" type="email" tabindex="2" name="iemail"  required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Phone Number" type="tel" tabindex="3" name="iphone" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Country" type="text" tabindex="3" name="icountry" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Niche" type="text" tabindex="3" name="iniche" required>
    </fieldset>
    <fieldset>
    <label for="fileInput" style="color:#000;">Upload Profile:</label>
      <input placeholder="Enter Profile" type="file" tabindex="3" name="iprofile">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Facebook Link" type="url" name="ifacebookl" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Facebook Followers" type="text" name="ifacebookf" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Instagram Link" type="url" name="iinstal" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Instagram Followers" type="text" name="iinstaf" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer TikTok Link" type="url" name="itiktokl" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer TikTok Followers" type="text" name="itiktokf" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Youtube Link" type="url" name="iyoutubel" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Influencer Youtube Followers" type="text" name="iyoutubef" tabindex="4">
    </fieldset>
    <fieldset>
      <input placeholder="Enter Recent project" type="text" name="irecent" tabindex="4" required>
    </fieldset>
    <fieldset>
      <input placeholder="Enter collaboration Link" type="url" name="icollabl" tabindex="4" required>
    </fieldset>
    <fieldset>
    <fieldset>
      <input placeholder="Enter Report Link" type="url" name="ireportl" tabindex="4" required>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit">Add Influencer Data</button>
    </fieldset>
  </form>
</div>
  <!--   Core JS Files   -->
  <script src="../admin/assets/js/core/popper.min.js"></script>
  <script src="../admin/assets/js/core/bootstrap.min.js"></script>
  <script src="../admin/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../admin/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../admin/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../admin/assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>