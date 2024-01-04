<?php
include("connection.php");
$query="SELECT id, iname, iemail, iphone, iniche, icountry, iinstal, ifacebookl, itiktokl, youtubel FROM `for-influencer`";
$result=mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../images/icon/Fav-icon.png">
  <title>
   For Influencers Leads
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
  table, th, tr, td {
  border: 2px solid black;
  
}
table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 12px;
    text-align: center;
  }

  th {
    background-color: #EBAF41;
    color: #333;
  }

  tr:nth-child(even) {
    background-color: #EBAF41;
  }

  tr:nth-child(odd) {
    background-color: #EE4F27;
  }

  tr:hover {
    background-color: #58BBB1;
  }

  .btn-danger {
    background-color: #dc3545;
    color: #fff;
    border: none;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
  }

</style>
</head>

<body class="g-sidenav-show">
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
          <a class="nav-link text-white" href="../admin/addinfluencer.php">
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
          <a class="nav-link text-white active" href="../admin/for-influencer.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10"> people </i>  
            </div>
            <span class="nav-link-text ms-1">For-Influencer</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../admin/signout.php">
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
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li> -->
           
            <li class="nav-item d-flex align-items-center" style="color:#fff;">
                <i class="fa fa-user me-sm-1"></i>&nbsp;
                <span class="d-sm-inline d-none">Admin</span>
            
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
      
   <br>
      <div class="row mb-4">
        <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h3 style="font-family:cursive;color:#000">For-Influencer Leads</h3>
                
                </div>
                <!-- <div class="col-lg-6 col-5 my-auto text-end">
                <a href="./addinfluencer.php"><button class="btn btn-success">Add New Influencer </button></a>
                 
                </div> -->
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0" style="font-family:cursive;color:#000; padding:20px;">
                  <thead>
                    <tr>
                    <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Influencer ID</th>

                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Influencer Name</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Email</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Phone</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Niche</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Country</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Instagram Link</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Facebook Link</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">TikTok Link</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Youtube Link</th>
                      <th class="text-center text-uppercase text-xxs font-weight-bolder" style="background-color:#EBAF41;color:#000;">Delete Lead</th>

                    </tr>
                  </thead>
                  <tbody>
                  
                   <?php
                   while($row=mysqli_fetch_assoc($result)){
                  
                   ?>
                    <tr>
                    <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"><?php echo $row["id"]?></span>
                      </td>
                    <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"><?php echo $row["iname"]?></span>
                      </td>
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"> <a href="mailto: <?php $row["iemail"]; ?>"><?php echo $row["iemail"] ?></a></span>
                      </td>
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"><?php echo $row["iphone"] ?></span>
                      </td>
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"><?php echo $row["iniche"]?></span>
                      </td>
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"><?php echo $row["icountry"] ?></span>
                      </td>
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"><?php echo $row["iinstal"] ?></span>
                      </td>
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"><?php echo $row["ifacebookl"] ?></span>
                      </td>
                     
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"><?php echo $row["itiktokl"] ?></span>
                      </td>
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                        <span class="text-xs font-weight-bold"> <?php echo $row["youtubel"] ?></span>
                      </td>
                      <td class="align-middle text-center text-sm" style="border: 2px solid black;">
                      <button class="btn btn-danger">Delete Lead</button>    
                    </td>
                    </tr>
            <?php
          }
          ?>
          <br>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      
      </div>
  
      <!-- testing table -->

      <!-- testing table -->
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