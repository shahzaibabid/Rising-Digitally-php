<!doctype html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Document Title, Description, and Author -->
  <title>Rising Digitally</title>
  <meta name="description" content="Wave is a Bootstrap 5 One Page Template.">
  <meta name="author" content="BootstrapBrain">

  <!-- Favicon and Touch Icons -->
  <link rel="icon" type="image/png" sizes="512x512" href=".//images/icon/Fav-icon.png">

  <!-- Google Fonts Files -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Satisfy&display=swap" rel="stylesheet">

  <!-- CSS Files -->
  <link rel="stylesheet" href="./assets/css/wave-bsb.css">

  <!-- BSB Head -->
  <style>
    .main-section {
      display: flex;
      flex-direction: column;
      background-color: #000;
      color: #fff;
      padding-left: 500px;
    }
    
    .left-section,
    .right-section {
      flex: 1;
      padding: 10px;
    }
    
    .right-section {
      background-color: #000; /* Example color for the right section */
      
    }
    
    .mid-section {
      text-align: center;
      padding: 10px;
    }
    
    ul {
      list-style: none;
      padding: 0;
    }
    
    .bullet {
      margin-right: 5px;
    }
    
    .consult{
      color: #000; 
      background-color:#EEB143; 
      width:auto;
      height:100px;
      padding:20px;
      text-decoration:none;
      font-size:30px;
      border: 2px solid black;
      border-radius:10px;
    }
    .plan{
      color: #000; 
      background-color:#EEB143; 
      width:auto;
      height:60px;
      padding:10px;
      text-decoration:none;
      font-size:30px;
      border: 2px solid black;
      border-radius:5px;
      text-shadow: 2px 2px 2px #F04F28;
    }
    .border-primary{
     border-color: #51AFA6;
     border-style: dashed;
     border-width: 20px;
    }
    .border-box {
      border: 3px solid #f04f28;
      padding: 10px; 
    }
    .casestudy img{
      border: 5px solid #f04f28;
      border-radius: 12px;

    }
    .mcasestudy{
    justify-content: center;
    align-items: center;
    }

    form {
      display: grid;
      gap: 15px;
    }
    
    input,
    select,
    textarea {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    button {
      background-color: #FFBD10;
      color: #000;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }
    
    button:hover {
      background-color: #EE4F27;
    }
  </style>
</head>

<body data-bs-spy="scroll" data-bs-target="#bsb-tpl-navbar" data-bs-smooth-scroll="true" tabindex="0">
  <!-- Header -->
  <header id="header" class="sticky-top bsb-tpl-header-sticky bsb-tpl-header-sticky-animationX">

    <!-- Navbar -->
    <nav id="scrollspyNav" class="navbar navbar-expand-lg bsb-tpl-bg-blue bsb-navbar bsb-navbar-hover bsb-navbar-caret bsb-tpl-navbar-sticky" data-bsb-sticky-target="#header">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="./assets/img/rd_logo.png" class="bsb-tpl-logo" alt="">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul id="bsb-tpl-navbar" class="navbar-nav justify-content-end flex-grow-1">
              <li class="nav-item">
                <a class="nav-link active" href="#scrollspyHero" aria-current="page" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyWhyus" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Why Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyServices" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyPricing" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyCasestudies" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Casestudies</a>
              </li>
             
              <!-- <li class="nav-item">
                <a class="nav-link" href="#scrollspyTeam" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Team</a>
              </li> -->
              
              <!-- <li class="nav-item">
                <a class="nav-link" href="#scrollspyBlog" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Blog</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="#scrollspyContact" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasNavbar">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

  </header>

  <!-- Hero Main Landing Section -->
  <section id="scrollspyHero" class="bsb-hero-2 bsb-tpl-bg-blue py-5 py-xl-8 py-xxl-10">
    <div class="container overflow-hidden">
      <div class="row gy-3 gy-lg-0 align-items-lg-center justify-content-lg-between">
        <div class="col-12 col-lg-8 order-1 order-lg-0">
          <h2 class="display-3 fw-bolder mb-4" style="color: #51AFA6;">Freedom <br><mark class="bsb-tpl-highlight bsb-tpl-highlight-yellow"><span class="bsb-tpl-font-hw display-1 text-accent fw-normal">Ecommerce</span></mark>  Business Owner</h2>

          <p class="fs-4 mb-5" style="color: #fff; text-transform:uppercase;font-family:monospace">WE HELP YOU BREAK FREE OF YOUR 14H/DAY SELF-EMPLOYMENT <br> SO YOU CAN BECOME A REAL</p>
          <div class="d-grid gap-2 d-sm-flex">
           <a href="https://calendly.com/risingdigitally/001"><button type="button" class="btn btn-primary bsb-btn-3xl rounded-pill" style="color: #000;">Free Consultation</button></a>
           <a href="./casestudies.html"> <button type="button" class="btn btn-outline-primary bsb-btn-3xl rounded-pill" style="color: #fff;">Success Stories</button></a>
          </div>
        </div>
        <div class="col-12 col-lg-4 text-center" style="margin-top: -50px;">
          <img class="img-fluid" loading="lazy" src="./images/hero-right.png" >
        </div>
      </div>
    </div>
  </section>

  <!-- Main -->
<main id="main">

  <!-- Why Us -->
  <section id="scrollspyWhyus" class="py-5 py-xl-8 bsb-section-py-xxl-1" style="background-color: #000; margin-top:-80px;">
    <div class="container mb-5 mb-md-6 mb-xl-10">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
          <h2 class="display-3 fw-bolder mb-4" style="color: #51AFA6;">Fed up with risky agencies <br>Running away with your <mark class="bsb-tpl-highlight bsb-tpl-highlight-yellow"><span class="bsb-tpl-font-hw display-1 text-accent fw-normal">Money?</span></mark>  </h2>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <div class="row" style="color: #fff;">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="left-section" >
            <h1 style="color: #F04F28;text-align:justify;" >Traditional Agencies</h1>
            <ul style="text-align: left;font-size:30px;">
              <li><span class="bullet">❌</span>You take all the risk.</li>
              <li><span class="bullet">❌</span> They get paid either way, with or without profitable results for you.</li>
              <li><span class="bullet">❌</span> Pay upfront, now you're locked in.</li>
              <li><span class="bullet">❌</span> Communication is all over the place.</li>
              <li><span class="bullet">❌</span> Monday-Friday limitation (wait, do customers disappear *poof* on weekends??)</li>

            </ul>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="right-section">
            <h1 style="color: #51AFA6;text-align:justify;">Growing with Rising Digitally</h1>
            <ul style="text-align: left;font-size:30px;" >
              <li><span class="bullet">✔️</span>We share the risk.</li>
              <li><span class="bullet">✔️</span> We only get paid if your advertising is profitable.</li>
              <li><span class="bullet">✔️</span> Results first, pay after.</li>
              <li><span class="bullet">✔️</span> Easy daily communication in Slack.</li>
              <li><span class="bullet">✔️</span> We're online every day of the week.</li>

            </ul>
          </div>      
          </div>
       
      </div>
      <a href="https://calendly.com/risingdigitally/001"><button class="button" style="font-size:20px;">Book 1:1 Free Consultation</button></a>
    </div>
  
  </section>

      <!-- Services we offer -->
      <section id="scrollspyServices" class="py-5 py-xl-8 bsb-section-py-xxl-1" style="background-color: #000;">
        <div class="container mb-5 mb-md-6 mb-xl-10">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-9 col-xl-8 col-xxl-7 text-center">
              <h2 class="display-3 fw-bolder mb-4" style="color: #51AFA6;">Our <mark class="bsb-tpl-highlight bsb-tpl-highlight-yellow"><span class="bsb-tpl-font-hw display-1 text-accent fw-normal">Services</span></mark> </h2>
              <p class="fs-4 mb-4 mb-xl-5" style="text-align: center;">Explore our affordable services to find an excellent fit to run your business.</p>

            </div>
          </div>
        </div>
  
        <div class="container overflow-hidden">
          <div class="row gy-5 gx-md-4 gy-lg-0 gx-xxl-5 justify-content-center">
            <div class="col-11 col-sm-6 col-lg-4">
              <!-- <div class="badge bsb-tpl-bg-yellow text-primary p-3 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 16 16">
                  <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                </svg>
              </div> -->
              <h4 class="mb-3" style="color: #ffbd10;">Influencer Marketing</h4>
              <p class="mb-3" style="color: #fff;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi provident facilis nisi nam quisquam illo quos blanditiis voluptas eum magnam.</p>
              <a href="influencer-marketing.html" class="fw-bold text-decoration-none" style="color: #ffbd10;">
                Learn More
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg> -->
              </a>
            </div>
            <div class="col-11 col-sm-6 col-lg-4">
              <!-- <div class="badge bsb-tpl-bg-green text-primary p-3 mb-4">
                <img src="images/influencericonlanding.png" width="26" height="26" alt="">             

              </div> -->
              <h4 class="mb-3" style="color: #ffbd10;">Website Development</h4>
              <p class="mb-3" style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi provident facilis nisi nam quisquam illo quos blanditiis voluptas eum magnam.</p>
              <a href="websitedevelopment.html" class="fw-bold text-decoration-none" style="color: #ffbd10;">
                Learn More
            
              </a>
            </div>
            <div class="col-11 col-sm-6 col-lg-4 mb-4">
              <!-- <div class="badge bsb-tpl-bg-pink text-primary p-3 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-airplane-engines" viewBox="0 0 16 16">
                  <path d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0ZM7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1c.213 0 .458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7V3Z" />
                </svg>
              </div> -->
              <h4 class="mb-3" style="color: #ffbd10;">Social Media Management</h4>
              <p class="mb-3" style="color: #fff;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi provident facilis nisi nam quisquam illo quos blanditiis voluptas eum magnam.</p>
              <a href="socialmediamanagement.html" class="fw-bold text-decoration-none" style="color: #ffbd10;">
                Learn More
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg> -->
              </a>
            </div>
            <br><br><br><br><br>
            <div class="col-11 col-sm-6 col-lg-4">
              <!-- <div class="badge bsb-tpl-bg-cyan text-primary p-3 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                </svg>
              </div> -->
              <h4 class="mb-3" style="color: #ffbd10;">Graphic Designing</h4>
              <p class="mb-3" style="color: #fff;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur architecto esse vel recusandae quidem quasi magnam? Ullam aut nesciunt corrupti.</p>
              <a href="graphicdesigning.html" class="fw-bold text-decoration-none" style="color: #ffbd10;">
                Learn More
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg> -->
              </a>
            </div>
            <div class="col-11 col-sm-6 col-lg-4">
              <!-- <div class="badge bsb-tpl-bg-cyan text-primary p-3 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                </svg>
              </div> -->
              <h4 class="mb-3" style="color: #ffbd10;">Video Editing</h4>
              <p class="mb-3" style="color: #fff;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur architecto esse vel recusandae quidem quasi magnam? Ullam aut nesciunt corrupti.</p>
              <a href="videoediting.html" class="fw-bold text-decoration-none " style="color: #ffbd10;">
                Learn More
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg> -->
              </a>
            </div>
            <div class="col-11 col-sm-6 col-lg-4">
              <!-- <div class="badge bsb-tpl-bg-cyan text-primary p-3 mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
                  <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
                  <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
                </svg>
              </div> -->
              <h4 class="mb-3" style="color: #ffbd10;">Meta Ads</h4>
              <p class="mb-3" style="color: #fff;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur architecto esse vel recusandae quidem quasi magnam? Ullam aut nesciunt corrupti.</p>
              <a href="facebookads.html" class="fw-bold text-decoration-none" style="color: #ffbd10;">
                Learn More
                <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                </svg> -->
              </a>
            </div>
          </div>
        </div>
      </section>
 
        <!-- Pricing bundles-->
    <section id="scrollspyPricing" class="bsb-pricing-1 bsb-tpl-bg-sea-shell py-5 py-xl-8 bsb-section-py-xxl-1" style="background-color: #000;">
      <div class="container">
        <div class="row gy-5 gy-lg-0 align-items-center" style="color: #fff;">
          <h2 class="display-3 fw-bolder mb-4" style="text-align: center; color:#51AFA6">Our <mark class="bsb-tpl-highlight bsb-tpl-highlight-yellow"><span class="bsb-tpl-font-hw display-1 text-accent fw-normal">Pricing</span></mark></h2>
          <p class="fs-4 mb-4 mb-xl-5" style="text-align: center;">Explore our flexible pricing to find an excellent fit to run your business.</p>

          <div class="border-box">

          <div class="col-12 col-lg-12">
            <div class="row justify-content-xl-end">
              <div class="col-12 col-xl-11">
                <div class="row gy-4 gy-md-0 gx-xxl-5" style="color: #fff;">
                  <div class="col-12 col-md-4" >
                    <div class="card border-0 border-bottom border-primary shadow-sm" >
                      <div class="card-body p-4 p-xxl-5">
                        <h2 class="h4 mb-2">Mini</h2>
                        <h4 class="display-3 fw-bold text-primary mb-0">$999</h4>
                        <p class="text-secondary mb-4">USD / Month</p>
                        <ul class="list-group list-group-flush mb-4">
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>2</strong> Influencer promotion</span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>5 posts</strong> Monthly</span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>2 smm</strong> Account Management</span>
                          </li>
                          <!-- <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x text-danger" viewBox="0 0 16 16">
                              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            <span>Website <strong>Management</strong></span>
                          </li> -->
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span>Website <strong>Management</strong></span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span>Free <strong>Monthly Reporting</strong></span>
                          </li>
                        </ul>
                        <a href="#"><button type="submit">Purchase Plan</button></a>

                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                      <div class="card-body p-4 p-xxl-5">
                        <h2 class="h4 mb-2">Micro</h2>
                        <h4 class="display-3 fw-bold text-primary mb-0">$1599</h4>
                        <p class="text-secondary mb-4">USD / Month</p>
                        <ul class="list-group list-group-flush mb-4">
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>2</strong> Influencer promotion</span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>5 posts</strong> Monthly</span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>2 smm</strong> Account Management</span>
                          </li>
                          <!-- <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x text-danger" viewBox="0 0 16 16">
                              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            <span>Website <strong>Management</strong></span>
                          </li> -->
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span>Website <strong>Management</strong></span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span>Free <strong>Monthly Reporting</strong></span>
                          </li>
                        </ul>
                        <a href="#"><button type="submit">Purchase Plan</button></a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-4">
                    <div class="card border-0 border-bottom border-primary shadow-sm">
                      <div class="card-body p-4 p-xxl-5">
                        <h2 class="h4 mb-2">Macro</h2>
                        <h4 class="display-3 fw-bold text-primary mb-0 ">$3999</h4>
                        <p class="text-secondary mb-4">USD / Month</p>
                        <ul class="list-group list-group-flush mb-4 " style="text-align:initial;">
                       
                        <li  style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>2</strong> Influencer promotion</span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>5 posts</strong> Monthly</span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span><strong>2 smm</strong> Account Management</span>
                          </li>
                          <!-- <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x text-danger" viewBox="0 0 16 16">
                              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                            </svg>
                            <span>Website <strong>Management</strong></span>
                          </li> -->
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span>Website <strong>Management</strong></span>
                          </li>
                          <li style="line-height:2.5;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                              <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                            </svg>
                            <span>Free <strong>Monthly Reporting</strong></span>
                          </li>
                        </ul>
                        <a href="#"><button type="submit">Purchase Plan</button></a>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>


         <!-- Casestudies-->
    <section id="scrollspyCasestudies" class="bsb-pricing-1 bsb-tpl-bg-sea-shell py-5 py-xl-8 bsb-section-py-xxl-1" style="background-color: #000;">
      <div class="container">
        <div class="row gy-5 gy-lg-0 align-items-center" style="color: #fff;">
          <h2 class="display-3 fw-bolder mb-4" style="text-align: center; color:#51AFA6">Our <mark class="bsb-tpl-highlight bsb-tpl-highlight-yellow"><span class="bsb-tpl-font-hw display-1 text-accent fw-normal">Casestudies</span></mark></h2>
          <p class="fs-4 mb-4 mb-xl-5" style="text-align: center;">Explore our casestudies to find an excellent fit to run your business.</p>


          <div class="col-12 col-lg-12">
            <div class="row justify-content-xl-end">
              <div class="col-12 col-xl-12">
                <div class="row gy-4 gy-md-0 gx-xxl-5" style="color: #fff;">
                  <div class="col-12 col-md-4 casestudy" >
                   <img src="./images/clients/1-112.webp" alt="casestudy01">
                  </div>
                  <div class="col-12 col-md-4 casestudy">
                    <img src="./images/clients/24-8.webp" alt="casestudy02">

                  </div>
                  <div class="col-12 col-md-4 casestudy">
                    <img src="./images/clients/25-6.webp" alt="casestudy03">

                  </div>

                </div>
           
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>

  <!-- Contact -->
  <section id="scrollspyContact" class="py-5 py-xl-8 bsb-section-py-xxl-1" style="background-color: #000;">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center" style="color: #fff;">
        <h2 class="display-3 fw-bolder mb-4" style="text-align: center; color:#51AFA6">Get <mark class="bsb-tpl-highlight bsb-tpl-highlight-yellow"><span class="bsb-tpl-font-hw display-1 text-accent fw-normal">Connected</span></mark></h2>
          <p class="fs-4 mb-4 mb-xl-5" style="text-align: center;">We are open 24/7 for you.. Feel free to ask any query!</p>

      
          <div class="col-12 col-lg-5"  style="background-color: #58BDB3; border-radius: 20px; border-color: black;">
                  
            <section style="padding: 20px;">
               <form action="uk-form.php"  method="POST">
                 <h2 style="color: #000;"><center>We'd Love To Hear From You!</center></h2>
             <input type="text" placeholder="Enter full name" name="name" id="name">
             <input type="email" placeholder="Enter email" name="email" id="email">
             <select name="representative" id="representative">
               <option value="brand">i am a brand</option>
               <option value="agency">i am an agency</option>  
             </select>
             <input type="text" placeholder="What are u looking for?" name="looking" id="looking">
             <textarea name="message" placeholder="Enter mesage" id="message" cols="30" rows="6"></textarea>
             <button type="submit" name="submit" id ="submit">submit</button>
             
               </form>
             </section>    
         </div>       
         <div class="col-12 col-lg-1">

         </div>
        <div class="col-12 col-lg-6">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
              <h2 class="h1 mb-3" style="color: #51AFA6;">Get in touch</h2>
              <p class="lead fs-4 text-secondary mb-5">We're always here to help you!. Get in touch in one of the following ways.</p>
              <div class="d-flex mb-4">
                <div class="me-4 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-geo" viewBox="0 0 16 16">
                    <path style="color: #51AFA6;" fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z" />
                  </svg>
                </div>
                <div>
                  <h4 class="mb-3">Address</h4>
                  <address class="mb-0 text-secondary">128 City Road, London, UK</address>
                </div>
              </div>
              <div class="d-flex mb-4">
                <div class="me-4 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-telephone-outbound" viewBox="0 0 16 16">
                    <path style="color: #51AFA6;" d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5z" />
                  </svg>
                </div>
                <div>
                  <h4 class="mb-3">Phone</h4>
                  <p class="mb-0">
                    <a class="link-secondary text-decoration-none" href="tel:+15057922430">+44 7456 44098</a>
                  </p>
                </div>
              </div>
              <div class="d-flex">
                <div class="me-4 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                    <path style="color: #51AFA6;" d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                    <path style="color: #51AFA6;" d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                  </svg>
                </div>
                <div>
                  <h4 class="mb-3">E-Mail</h4>
                  <p>
                    <a class="link-secondary text-decoration-none" href="mailto:demo@yourdomain.com">info@risingdigitally.com</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
        </main>
      
   <!-- Footer -->
   
   <div class="py-4 py-md-5 py-xl-8 border-top border-light-subtle" style="background-color: #000;">
    <div class="container overflow-hidden">
      <div class="row gy-4 gy-md-0">
        <div class="col-xs-12 col-md-7 order-1 order-md-0">
          <div class="copyright text-center text-md-start" style="color:#fff">
            &copy; 2023. All Rights Reserved.
          </div>
          <div class="credits text-center text-md-start mt-2 fs-7" style="color:#fff">
            by <a href="https://risingdigitally.com/" class="text-decoration-none" style="color:#fff">Rising Digitally</a> with <span class="" style="color:#fff">&#9829;</span>
          </div>
        </div>

        <div class="col-xs-12 col-md-5 order-0 order-md-1">
          <ul class="nav justify-content-center justify-content-md-end">
            <li class="nav-item">
              <a class="nav-link" style="color: #fff;" href="https://www.facebook.com/Risingdigitally">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #fff;" href="https://www.instagram.com/rising_digitally/">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                  <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
              </a>
            </li>
           
            <!-- <li class="nav-item">
              <a class="nav-link link-dark" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                  <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
              </a>
            </li> -->
           
          </ul>
        </div>
      </div>
    </div>
  </div>

</footer>
 
  <!-- Javascript Files: Vendors -->
  <script src="https://unpkg.com/jquery@3.6.1/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/isotope-packery@2.0.1/packery-mode.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@5.0.0/imagesloaded.pkgd.min.js"></script>
  <script src="https://unpkg.com/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Javascript Files: Controllers -->
  <script src="./assets/controller/project-2.js"></script>
  <script src="./assets/controller/wave-bsb.js"></script>

  <!-- BSB Body End -->
</body>

</html>
