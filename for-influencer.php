<?php
   include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!--
    Basic Page Needs
    ==================================================
    -->
   <meta charset="utf-8">
   <title>  Rising Digitally | For Influencers</title>
   <!--
    Mobile Specific Metas
    ==================================================
    -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
   <!--
    CSS
    ==================================================
    -->
     <!--Fav Icon-->
     <link rel="icon" type="image/x-icon" href="/images/icon/Fav-icon.png">
   <!-- Bootstrap-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

   <!-- Animation-->
   <link rel="stylesheet" href="css/animate.css">
   <!-- Morris CSS -->
   <link rel="stylesheet" href="css/morris.css">
   <!-- FontAwesome-->
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <!-- Icon font-->
   <link rel="stylesheet" href="css/icon-font.css">
   <!-- Owl Carousel-->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <!-- Owl Theme -->
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <!-- Colorbox-->
   <link rel="stylesheet" href="css/colorbox.css">
   <!-- Template styles-->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive styles-->
   <link rel="stylesheet" href="css/responsive.css">

   <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file.-->
   <!--if lt IE 9
    script(src='js/html5shiv.js')
    script(src='js/respond.min.js')
    -->
    <style>
      img{
   width:100%; 
  }
  .logos-slider {
    position: relative;
    width: 100%;
    height: 100px;
    overflow: hidden;
  }
  
  .logos-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    display: flex;
    transition: transform 0.5s ease-in-out;
  }
  
  .logo {
    margin-right: 20px;
  }
  
  .logo img {
    width: 100px;
    height: auto;
  }
  
  .elementor-image-box-wrapper-1{
    background-color: whitesmoke;
    color: #000;
    height: 350px;
    border-radius: 20px;
    border-bottom: 12px solid #5CD6B3;
    margin-bottom: 20px;
    
  }
  .elementor-image-box-wrapper-2{
    background-color: whitesmoke;
    color: #000;
    height: 350px;
    border-radius: 20px;
    border-bottom: 12px solid #FFC951;
    margin-bottom: 20px;

  }

  .elementor-image-box-wrapper-3{
    background-color: whitesmoke;
    color: #000;
    height: 350px;
    border-radius: 20px;
    border-bottom: 12px solid #EB5569;
    
  }

  .elementor-image-box-wrapper-4{
    background-color: whitesmoke;
    color: #000;
    height: 350px;
    border-radius: 20px;
    border-bottom: 12px solid #2F7CCB;
    margin-bottom: 20px;

  }

  .elementor-image-box-wrapper-5{
    background-color: whitesmoke;
    color: #000;
    height: 350px;
    border-radius: 20px;
    border-bottom: 12px solid #A886DA;
    margin-bottom: 20px;

  }

  .elementor-image-box-wrapper-6{
    background-color: whitesmoke;
    color: #000;
    height: 350px;
    border-radius: 20px;
    border-bottom: 12px solid #57B058;
    
  }

  
  .elementor-image-box-wrapper-1 img{
margin-left: 20px;    
  }

  .elementor-image-box-wrapper-2 img{
    margin-left: 20px;    
    }

  .elementor-image-box-wrapper-3 img{
      margin-left: 20px;    
    } 
  
  .elementor-image-box-wrapper-4 img{
      margin-left: 20px;    
    
    }
    
  .elementor-image-box-wrapper-5 img{
      margin-left: 20px;    
    }  

  .elementor-image-box-wrapper-6 img{
      margin-left: 20px;    
    }  

  
    .elementor-image-box-content{
padding: 20px;
  }

  .elementor-image-box-wrapper-right-1{
    background-color: whitesmoke;
    color: hsl(0, 0%, 0%);
    height: auto;
    border-radius: 20px;
    border-left: 12px solid #57B058;
    
  }
  .elementor-image-box-wrapper-right-1 img{
    margin-left: 20px;    
    margin-top: -30px;
  }  

  .elementor-image-box-wrapper-right-2{
    background-color: whitesmoke;
    color: hsl(0, 0%, 0%);
    height: auto;
    border-radius: 20px;
    border-left: 12px solid #5AB2F7;
    
  }
  .elementor-image-box-wrapper-right-2 img{
    margin-left: 20px;    
    margin-top: -30px;
  }  

  .elementor-image-box-wrapper-right-3{
    background-color: whitesmoke;
    color: hsl(0, 0%, 0%);
    height: auto;
    border-radius: 20px;
    border-left: 12px solid #FAC247;
    
  }
  .elementor-image-box-wrapper-right-3 img{
    margin-left: 20px;    
    margin-top: -30px;
  }  
  .round img{
border-radius: 20px;
height: 320px;
border-right: 10px solid #ee4e27;
border-bottom: 10px solid #ee4e27;


  }
  .container {
    margin: 0 auto;
    width: 90%;
  }
  
  .row {
    display: flex;
    justify-content: space-between;
  }
  
  .col-lg-3 {
    position: relative;
    
  }
  
  .round {
    border-radius: 10%;
    overflow: hidden;

    
  }
  
  .image-overlay {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 35%;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;
    display: flex;
    flex-direction: column;
    padding: 20px;
    opacity: 0; /* Initially hide the overlay */
    transition: opacity 0.5s ease-in-out; /* Smoothly fade in on hover */
    
  }
  
  .col-lg-3:hover .image-overlay {
    opacity: 1; /* Show the overlay on hover */
  }
  
  
  .image-overlay h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .category {
    font-size: 16px;
    margin-bottom: 10px;
    
  }
  
  .social-icon {
    font-size: 25px;
    color: white;
  }
  
.radius img{
border-radius: 20px;
}
.adjust{
  margin-top: 200px;
}
@media (max-width: 768px){
  .adjust {
      margin-top: 30px;
  }
  .adjusted img{
    height: 450px;
  }
}
 
/* Default styles for larger screens */
.col-lg-3 {
  flex: 0 0 25%;
  max-width: 25%;
}

/* Media query for smaller screens */
@media (max-width: 768px) {
  .col-lg-3 {
      flex: 0 0 100%;
      max-width: 100%;
  }
}
 /* Custom styles for responsive slider */
 .carousel-inner {
  display: flex;
  flex-wrap: nowrap;
}

.carousel-item {
  width: 100%; /* Each item takes 100% width initially */
}

@media (min-width: 768px) {
  .carousel-item {
      width: 100%; /* On desktop, each item still takes 100% width */
  }

  .carousel-control-prev,
  .carousel-control-next {
      display: none; /* Hide controls on desktop */
  }
}
    </style>
</head>

<body>

   <div class="body-inner">

      <div class="site-top-2"> 
         <header class="header nav-down" id="header-2"> 
            <!-- <div class="container">
               <div class="row"> -->
                  <!-- <div class="logo-area clearfix">
                     <div class="logo col-lg-3 col-md-12">
                        <a href="index.html">
                           <img src="images/rd_logo.png" alt="">
                        </a>
                     </div>
                     <!- logo end-->
                     <!-- <div class="col-lg-9 col-md-12 pull-right">
                        <ul class="top-info unstyled">
                           <!- <li><span class="info-icon"><i class="icon icon-phone3"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title">24/7 Response Time</p>
                                 <p class="info-subtitle">(+44) 7456 44098</p>
                              </div>
                           </li> -->
                           <!-- <li><span class="info-icon"><i class="icon icon-envelope"></i></span>
                              <div class="info-wrapper">
                                 <p class="info-title">Send Your Query</p>
                                 <p class="info-subtitle">info@risingdigitally.com</p>
                              </div>
                           </li> -->
                          
                        <!-- </ul>
                     </div>  -->
                     <!-- Col End-->
                  <!-- </div>  -->
                 
                  <!-- Logo Area End-->
               <!-- </div> 
            </div> -->
             <!-- <hr> -->
           
            <!-- Container end-->
            <div class="site-nav-inner site-navigation navigation navdown">
               <div class="container">
                  <nav class="navbar navbar-expand-lg ">
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span></button>
                     <!-- End of Navbar toggler-->

                     <a href="index.html">
                        <img src="images/rd_logo.png" alt="">
                     </a>

                    
                     <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                           <li class="nav-item dropdown "><a class="nav-link" href="index.html">Home</a>
                             
                          
                              
                  
                           <!-- li end-->
                           <li class="nav-item dropdown ">
                                 <a href="about.html">About Us</a>
                           </li>

                               <li class="nav-item dropdown">
                              <a class="nav-link " href="" data-toggle="dropdown">
                       Services
                         <i class="fa fa-angle-down"></i>
                       </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="service.html">All Services</a></li>
                                    <li><a href="influencer-marketing.html">Influencer Marketing</a></li>
                                    <li><a href="socialmediamanagement.html">Social Media Management</a></li>
                                    <li><a href="graphicdesigning.html">Graphic Designining</a></li>
                                    <li><a href="videoediting.html">Video Editing</a></li>
                                    <li ><a href="facebookads.html">Facebook Ads</a></li>
                                    <li><a href="websitedevelopment.html">Website Development</a></li>
                                </ul>
                           </li>
                           <!-- li end-->

                   

                         <!-- li end-->
                         <li class="nav-item dropdown ">
                           <a href="casestudies.html">casestudies</a>

                           
                         </li>

                         <li class="nav-item dropdown">
                           <a href="letstalk.html">Lets Talk</a>

                           
                         </li>
                         
                         <li class="nav-item dropdown active">
                            <a href="./for-influencer.html">For Influencers</a>
 
                          </li>
                        </ul>
                        <!--Nav ul end-->
                     </div>
                     <!-- <a href="contact.html" class="top-right-btn btn btn-primary">Let's Talk</a> -->
                     <!-- Top bar btn -->
                  </nav>
                  <!-- Collapse end-->

                  
                  
               </div>
            </div>
            <!-- Site nav inner end-->
         </header>
         <!-- Header end-->
      </div>

<br><br>
<div style="background-image: url(./images/banner/Group-2167.png); background-size:cover;">
<div class="container" >
    <div class="row">
      <div class="col-lg-6 adjust">
        <h2 style="font-family: pacifico,Sans-serif;">Creator Management</h2>
        <h4>you create, we connect</h4>
        <p>We understand that creating compelling content is only half the battle. It’s just as essential to connect with the right brands and audiences to maximize your potential. We take the hassle of brand collaborations, negotiating deals, and managing contracts, leaving you free to do what you love and do best – create content.</p>
      </div>
      <div class="col-lg-6"  style="background-color: #58BDB3; border-radius: 20px; border-color: black;">
        <div class="contact-submit-box contact-box form-box">
            <form action="for-influencer-form.php" method="POST">
               <div class="error-container"></div><br> <br>
               <div class="row"> 
                <center> <h3 style="color: #000; font-family:Cursive;">&nbsp;&nbsp;&nbsp;&nbsp;We'd Love To Hear From Influencer!</h3></center>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="iname" name="iname" placeholder="Enter Influencer Name" type="text" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="iemail" name="iemail" placeholder=" Enter Influencer Email" type="email" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="iphone" name="iphone" placeholder=" Enter Influencer Phone" type="text" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="iniche" name="iniche" placeholder=" Enter Influencer Niche" type="text" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="icountry" name="icountry" placeholder=" Enter Influencer Country" type="text" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="iinstal" name="iinstal" placeholder=" Enter Influencer Instagram Link" type="url">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="ifacebookl" name="ifacebookl" placeholder=" Enter Influencer Facebook Link" type="url">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="itiktokl" name="itiktokl" placeholder=" Enter Influencer TikTok Link" type="url">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="iyoutubel" name="iyoutubel" placeholder=" Enter Influencer Youtube Link" type="url">
                     </div>
                  </div>
   
                  <!-- Col 12 end-->
               </div>
               <!-- Form row end-->
                  <button class="btn btn-primary tw-mt-30 " type="submit" name="submit"><i style="color: #000;" class="fa fa-paper-plane-o"></i>&NonBreakingSpace; Send Data</button>
                </form>
            <!-- Form end-->
         </div> <br>
      </div>
    
    </div>
  </div>
</div>
<br>
<h2 style="text-align: center;">Brands we have worked with</h2>
<br>
<section class="logos-slider">
    <div class="logos-wrapper">
      <div class="logo">
        <img src="./images/clients/1-52-1.png" alt="Logo 1">
      </div>
      <div class="logo">
        <img src="./images/clients/2-125.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/3-43.png" alt="Logo 1">
      </div>
      <div class="logo">
        <img src="./images/clients/4-37.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/5-41.png" alt="Logo 1">
      </div>
      <div class="logo">
        <img src="./images/clients/6-35.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/7-22.png" alt="Logo 1">
      </div>
      <div class="logo">
        <img src="./images/clients/8-34.png" alt="Logo 1">
      </div>
      <div class="logo">
        <img src="./images/clients/9-25.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/10-28.png" alt="Logo 1">
      </div>
      <div class="logo">
        <img src="./images/clients/11-11.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/12-17.png" alt="Logo 1">
      </div>
      <div class="logo">
        <img src="./images/clients/13-19.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/14-21.png" alt="Logo 1">
      </div>
      <div class="logo">
        <img src="./images/clients/15-16.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/16-10.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/17-10.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/18-8.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/19-7.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/20-6.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/21-4.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/22-5.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/23-7.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/24-7.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/25-5.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/26-5.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/27-5.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/28-4.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/29-4.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/30-4.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/31-3.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/32-2.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/34-2.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/35-2.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/36-2.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/37-2.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/miracle-gel.png" alt="Logo 2">
      </div>
      <div class="logo">
        <img src="./images/clients/paltu-pet.png" alt="Logo 2">
      </div>
      

    </div>
  </section>
<br>
<h2 style="text-align: center;">How We Help You?</h2>
<br>

<div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-12">
        <div class="elementor-image-box-wrapper-1">
          <br>
            <img src="./images/services/Group-2162.png" style="width: 60px;" height="60px;" alt="">
            <div class="elementor-image-box-content">
              <h3 style="color: #000;">Access To Our 500+ Brand Network</h3>
              <p style="color: #000;">Unlock exclusive access to our 500+ brand network and amplify your reach with our website and social media handles. Increase your visibility and potential for collaborations..</p>
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="elementor-image-box-wrapper-2">
          <br>
            <img src="./images/services/email.png" style="width: 60px;" height="60px;" alt="">
            <div class="elementor-image-box-content">
              <h3 style="color: #000;">Email Inbox Management</h3><br>
              <p style="color: #000;">Maximize your brand collaborations with our hassle-free email inbox management. Our team of experts will handle all your brand leads professionally (removed coma) so you never miss a chance to grow.

              </p>
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="elementor-image-box-wrapper-3">
          <br>
            <img src="./images/services/reaching.png" style="width: 60px;" height="60px;" alt="">
            <div class="elementor-image-box-content">
              <h3 style="color: #000;">Reaching Out Potential Brands For You</h3>
              <p style="color: #000;">Let us handle the legwork of reaching out to the best brand leads for you. Our sales specialists will work tirelessly to connect you with the best brands while you focus on creating your best content.</p>
            </div>
          </div>     
         </div>
    </div>
  </div>
<br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-sm-12">
        <div class="elementor-image-box-wrapper-4">
          <br>
            <img src="./images/services/leads.png" style="width: 60px;" height="60px;" alt="">
            <div class="elementor-image-box-content">
              <h3 style="color: #000;">Leads Management And Negotiation</h3>
              <p style="color: #000;">From lead acquisition to signing the contract, we streamline your business by handling all aspects of your brand deals; expert negotiators from our team are sure to crack the best deals for you.</p>
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="elementor-image-box-wrapper-5">
          <br>
            <img src="./images/services/rate.png" style="width: 60px;" height="60px;" alt="">
            <div class="elementor-image-box-content">
              <h3 style="color: #000;">Rate Cards And Content Strategy</h3>
              <p style="color: #000;">Our team has the expertise to help you create a winning content strategy that elevates your brand by working directly with brands to understand the latest trends and pricing models.</p>
            </div>
          </div>
      </div>
      <div class="col-lg-4 col-sm-12">
        <div class="elementor-image-box-wrapper-6">
          <br>
            <img src="./images/services/media.png" style="width: 60px;" height="60px;" alt="">
            <div class="elementor-image-box-content">
              <h3 style="color: #000;">Media-Kit Creation And Representation</h3>
              <p style="color: #000;">With our experience in curating high-converting media kits, we'll update and enhance yours to ensure you're always presented professionally. We'll also share your media kit with relevant brands.</p>
            </div>
          </div>      
        </div>
    </div>
  </div>
  <br>

  <h2 style="text-align: center;">But, Why Rising Digitally?</h2>
<br><br>
<div class="container">
  <div class="row">
    <div class="col-lg-6 adjusted"> <br>
      <img src="./images/services/left-img-influencer.png" height="700px;" alt="">
    </div>
   
    <div class="col-lg-6">
      <div class="elementor-image-box-wrapper-right-1">
        
          <img src="./images/services/Group-2161.svg" style="width: 60px;" height="60px;" alt="">
          <div class="elementor-image-box-content">
            <h3 style="color: #000;">500+ Partnered Brands</h3>
            <p style="color: #000;">With over 500 partnered brands since 2018, including leading MNCs and fast-growing startups, we’ve helped Influencers unlock new avenues of visibility via influencer marketing. We work across 20+ brand categories and engage in an average of 200 brand conversations monthly. </p>
          </div>
        </div>
        <br><br>
        <div class="elementor-image-box-wrapper-right-2">
        
          <img src="./images/services/Group-2109-1.svg" style="width: 60px;" height="60px;" alt="">
          <div class="elementor-image-box-content">
            <h3 style="color: #000;">100% Transparency</h3>
            <p style="color: #000;">At Rising Digitally, we believe in 100% transparency. We provide you with real-time updates on the progress of your deals and weekly reports that include detailed data and analytics. Stay informed and in control every step of the way.</p>
          </div>
        </div>
        <br><br>
        <div class="elementor-image-box-wrapper-right-3">
        
          <img src="./images/services/Group-2109.svg" style="width: 60px;" height="60px;" alt="">
          <div class="elementor-image-box-content">
            <h3 style="color: #000;">Support From A Experienced Team</h3>
            <p style="color: #000;">You will have access to a team of experts in all domains dedicated to your success. Our sales and business team secure the best deals for you while our finance team handles the contract details.</p>
          </div>
        </div>
        <br> 

    </div>
  </div>
</div>
<br>


<h2 style="text-align: center;">Influencers worked With Us</h2>
<br>
<div class="container d-none d-md-block">
  <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row">
          
          <div class="col-lg-3 col-sm-3 round">
            <img src="./images/services/trupti-sagar.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">Trupti-Sagar</h4>
              <h6 class="category"  style="color: #fff;">Lifestyle Blogger</h6>
              <a href="https://www.instagram.com/trupti_sagar/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3  col-sm-3 round">
            <img src="./images/services/mike.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">Mike Tyson</h4>
              <h6 class="category"  style="color: #fff;">Boxer, Lifestyle Influencer</h6>
              <a href="https://www.instagram.com/miketyson/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3 round">
            <img src="./images/services/diariesofcodegirl.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">Diaries of a code girl</h4>
              <h6 class="category"  style="color: #fff;">Coding, Lifestyle, Career Ca</h6>
              <a href="https://www.instagram.com/diariesofacodegirl/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-sm-3 round">
            <img src="./images/services/nain-sukh.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">Nain Sukh</h4>
              <h6 class="category"  style="color: #fff;"> Lifestyle, Actress</h6>
              <a href="https://www.instagram.com/nain_.sukh/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 round">
            <img src="./images/services/5.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">sarahkiran14</h4>
              <h6 class="category"  style="color: #fff;">Content Creator</h6>
              <a href="https://www.instagram.com/sarahkiran14/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/6.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">fatemahxxo_</h4>
              <h6 class="category"  style="color: #fff;">Content Creator</h6>
              <a href="https://www.instagram.com/fatemahxxo_/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/7.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">Amnah</h4>
              <h6 class="category"  style="color: #fff;">Fashion Model</h6>
              <a href="https://www.instagram.com/amnxhhhh/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/8.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">Sheraz Malik</h4>
              <h6 class="category"  style="color: #fff;">Blogger</h6>
              <a href="https://www.instagram.com/sherazxm/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <!-- Add the next set of three images here -->
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 round">
            <img src="./images/services/9.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">aadilsgram</h4>
              <h6 class="category"  style="color: #fff;">Personal Blog</h6>
              <a href="https://www.instagram.com/aadilsgram/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/10.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">Ajay Mohanlal</h4>
              <h6 class="category"  style="color: #fff;">Personal Blog</h6>
              <a href="https://www.instagram.com/dubaibloguae/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/11.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">angie.wp</h4>
              <h6 class="category"  style="color: #fff;">Travel, Fashion, Foodie</h6>
              <a href="https://www.instagram.com/angie.wp/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/12 (2).jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;">moniquecesd</h4>
              <h6 class="category"  style="color: #fff;">Lifestyle, Fashion</h6>
              <a href="https://www.instagram.com/moniquecesd//" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
      
          
          <!-- Add the next set of three images here -->
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 round">
            <img src="./images/services/terisha.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Life with Terisha</h4>
              <h6 class="category"  style="color: #fff;">Video Creator</h6>
              <a href="https://www.instagram.com/lifewithterisha/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/elfie.PNG"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">simplyeffie</h4>
              <h6 class="category"  style="color: #fff;">personal blog</h6>
              <a href="https://www.instagram.com/simplyeffie_/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/nazeela.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">nazeela.rashith</h4>
              <h6 class="category"  style="color: #fff;">Travel, Food</h6>
              <a href="https://www.instagram.com/nazeela.rashith/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/twinkle.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">twinklish_arabia</h4>
              <h6 class="category"  style="color: #fff;">Lifestyle, Fashion</h6>
              <a href="https://www.instagram.com/twinklish_arabia/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
         
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 round">
            <img src="./images/services/sanam.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">sanam arsalan</h4>
              <h6 class="category"  style="color: #fff;">Makeup, Fashion</h6>
              <a href="https://www.instagram.com/sanam.arsalan/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/muhammad.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">muhammad yusuf</h4>
              <h6 class="category"  style="color: #fff;">Media PR Professional</h6>
              <a href="https://www.instagram.com/_._muhammadyusuf/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/atqa.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Atqa</h4>
              <h6 class="category"  style="color: #fff;">Personal Blog</h6>
              <a href="https://www.instagram.com/atqa_98/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/nadsmarkiz.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">nadsmarkiz</h4>
              <h6 class="category"  style="color: #fff;">Digital Creator</h6>
              <a href="https://www.instagram.com/nadsmarkiz/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 round">
            <img src="./images/services/shikha.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Shikha Mehta</h4>
              <h6 class="category"  style="color: #fff;">Lifestyle, Fashion</h6>
              <a href="https://www.instagram.com/livewithshikha/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/arsala.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">arsalaishaq</h4>
              <h6 class="category"  style="color: #fff;">Blogger</h6>
              <a href="https://www.instagram.com/arsalaishaq/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/umair.jpg" class="d-block w-80" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">umairorkz</h4>
              <h6 class="category"  style="color: #fff;">Crypto</h6>
              <a href="https://www.instagram.com/umairorkz/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/makhddom.PNG" class="d-block w-80" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Mirzad Makhdoom</h4>
              <h6 class="category"  style="color: #fff;">Crypto, startups</h6>
              <a href="https://www.instagram.com/cryptotribe.in/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
       
          <div class="col-lg-3 round">
            <img src="./images/services/pamela.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">out numbered mama    </h4>
              <h6 class="category"  style="color: #fff;">Home Cook</h6>
              <a href="https://www.instagram.com/outnumberedmama/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/snjuis.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">saijus cooking cave</h4>
              <h6 class="category"  style="color: #fff;">Personal Blog</h6>
              <a href="https://www.instagram.com/saijus_cookingcave/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 round">
            <img src="./images/services/kitchxenera.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">kitchxenera</h4>
              <h6 class="category"  style="color: #fff;">Personal Blog</h6>
              <a href="https://www.instagram.com/kitchxenera/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/cooking.andlife.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">cooking.andlife</h4>
              <h6 class="category"  style="color: #fff;">Food blogger, Cook </h6>
              <a href="https://www.instagram.com/cooking.andlife/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
       
       
          <div class="col-lg-3 round">
            <img src="./images/services/hungrydanz.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">hungrydanz</h4>
              <h6 class="category"  style="color: #fff;">Create x social media marketing</h6>
              <a href="https://www.instagram.com/hungrydanz/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/spice_n_traditions.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">spice_n_traditions</h4>
              <h6 class="category"  style="color: #fff;">Personal Blog</h6>
              <a href="https://www.instagram.com/saijus_cookingcave/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/platingwithperel.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Home Cook</h4>
              <h6 class="category"  style="color: #fff;">Cooking, Food blogging</h6>
              <a href="https://www.instagram.com/platingwithperel/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/cory_in_the_kitchen.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">cory_in_the_kitchen</h4>
              <h6 class="category"  style="color: #fff;">BBQ</h6>
              <a href="https://www.instagram.com/cory_in_the_kitchen/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
  
          <div class="col-lg-3 round">
            <img src="./images/services/wendy.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">wendy.eats</h4>
              <h6 class="category"  style="color: #fff;">Wendy | NYC Foodie</h6>
              <a href="https://www.instagram.com/wendy.eats/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 round">
            <img src="./images/services/cook-creature.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Annu Sharma</h4>
              <h6 class="category"  style="color: #fff;">Kitchen/Cooking</h6>
              <a href="https://www.instagram.com/cook_create_capture_explore/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 round">
            <img src="./images/services/duri.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Duri Hussain</h4>
              <h6 class="category"  style="color: #fff;">Kitchen/Cooking</h6>
              <a href="https://www.instagram.com/imakeitspicy/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/food_love_wine_.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Jessica Leigh</h4>
              <h6 class="category"  style="color: #fff;">Home Cook</h6>
              <a href="https://www.instagram.com/food_love_wine_/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
               
          
        </div>
      </div>
      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 round">
            <img src="./images/services/maria.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Maria Fernanda</h4>
              <h6 class="category"  style="color: #fff;">Foodie/Cooking</h6>
              <a href="https://www.instagram.com/purely_healthy_living/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/cupsofrice.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Karissa Carline</h4>
              <h6 class="category"  style="color: #fff;">Kitchen/Cooking</h6>
              <a href="https://www.instagram.com/cupsofrice/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/iros.jpg" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Iromi Maduwanthi</h4>
              <h6 class="category"  style="color: #fff;">Home Chef</h6>
              <a href="https://www.instagram.com/iros_kitchen/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/tabassum.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Tabassum Sakrani </h4>
              <h6 class="category"  style="color: #fff;">Fashio, Lifestyle</h6>
              <a href="https://www.instagram.com/blogging_with_tabassumsakrani/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 round">
            <img src="./images/services/waqas.jpg" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">bloggers life ansarii </h4>
              <h6 class="category"  style="color: #fff;">Video Creator</h6>
              <a href="https://www.instagram.com/bloggerslifeansarii/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/aman.jpg" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Amman Haider </h4>
              <h6 class="category"  style="color: #fff;">Blogger, Model</h6>
              <a href="https://www.instagram.com/amaanhaiderofficial/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/missblack.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Melissa Khan </h4>
              <h6 class="category"  style="color: #fff;">Project management</h6>
              <a href="https://www.instagram.com/melissakblackmore/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/glowdaily.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Nazia Islam</h4>
              <h6 class="category"  style="color: #fff;">Beauty</h6>
              <a href="https://www.instagram.com/glowdaily__/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        
        </div>
      </div>

      <div class="carousel-item">
        <div class="row">
      
          <div class="col-lg-3 round">
            <img src="./images/services/thatgirl.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Ashley</h4>
              <h6 class="category"  style="color: #fff;">Digital Creator</h6>
              <a href="https://www.instagram.com/thatgirlangel87/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/connie.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">conniekiatipis</h4>
              <h6 class="category"  style="color: #fff;">Beauty, Lifestyle</h6>
              <a href="https://www.instagram.com/conniekiatipis_2/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/glowdaily.jpg" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Nazia Islam</h4>
              <h6 class="category"  style="color: #fff;">Beauty</h6>
              <a href="https://www.instagram.com/glowdaily__/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/sahaj.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Sahaj Kaur</h4>
              <h6 class="category"  style="color: #fff;">Fashion, Lifestyle</h6>
              <a href="https://www.instagram.com/lifeofsahaj/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row">
          <div class="col-lg-3 round">
            <img src="./images/services/sonia.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Sonia</h4>
              <h6 class="category"  style="color: #fff;">Makeup, Beauty</h6>
              <a href="https://www.instagram.com/sonia_beautycontentcreator/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/becksample.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Rebecca Sheppard</h4>
              <h6 class="category"  style="color: #fff;">Beauty Creator</h6>
              <a href="https://www.instagram.com/becksamples101/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/analisatejeda.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Analisa</h4>
              <h6 class="category"  style="color: #fff;">public figure</h6>
              <a href="https://www.instagram.com/analisatejeda/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/bonita.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Clara Bonner</h4>
              <h6 class="category"  style="color: #fff;">Beauty, Lifestyle</h6>
              <a href="https://www.instagram.com/bonita6485/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        
        </div>
      </div>

      <div class="carousel-item">
        <div class="row">
      
          <div class="col-lg-3 round">
            <img src="./images/services/velentica.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Princess Valentina</h4>
              <h6 class="category"  style="color: #fff;">Beauty, Fashion</h6>
              <a href="https://www.instagram.com/princessvalentina88/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/briaana.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Brianna Lynn</h4>
              <h6 class="category"  style="color: #fff;">UGC, Makeup</h6>
              <a href="https://www.instagram.com/brianna_m165/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/iam_simplyjamille.jpg" class="d-block w-80" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Jamille</h4>
              <h6 class="category"  style="color: #fff;">Beauty, Fashion</h6>
              <a href="https://www.instagram.com/iam_simplyjamille/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/misskaren.jpg" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">miss karen</h4>
              <h6 class="category"  style="color: #fff;">Content Creator</h6>
              <a href="https://www.instagram.com/misskaren._/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="row">
      
          <div class="col-lg-3 round">
            <img src="./images/services/shazia-rams.jpg" alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">shazia ramz</h4>
              <h6 class="category"  style="color: #fff;">Video Creator</h6>
              <a href="https://www.instagram.com/shazia_ramz/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/hustle-rule.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">Hustle Rule</h4>
              <h6 class="category"  style="color: #fff;">motivation, business</h6>
              <a href="https://www.instagram.com/hustlersrule/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/beginner-side-hustle.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">beginner side hustle</h4>
              <h6 class="category"  style="color: #fff;">motivation, business</h6>
              <a href="https://www.instagram.com/beginner.sidehustle/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-lg-3 round">
            <img src="./images/services/moneygenerated.jpg"  alt="Image 12">
            <div class="image-overlay">
              <h4 style="color: #fff;">money generated</h4>
              <h6 class="category"  style="color: #fff;">money, business</h6>
              <a href="https://www.instagram.com/moneygenerated/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>        
        </div>
      </div>

     

      
    </div>
    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>


<div class="container mt-2 d-md-none">
  <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
      <div class="carousel-inner">
          <!-- Add your images here -->
<div class="carousel-item active round">
    <img src="./images/services/trupti-sagar.jpg" class="d-block w-80" alt="Image 1">
    <div class="image-overlay">
      <h4 style="color: #fff;">Trupti-Sagar</h4>
      <h6 class="category"  style="color: #fff;">Lifestyle Blogger</h6>
      <a href="https://www.instagram.com/trupti_sagar/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
    </div>
</div>
<div class="carousel-item round">
    <img src="./images/services/mike.jpg" class="d-block w-80" alt="Image 2">
    <div class="image-overlay">
      <h4 style="color: #fff;">Mike Tyson</h4>
      <h6 class="category"  style="color: #fff;">Boxer, Lifestyle Influencer</h6>
      <a href="https://www.instagram.com/miketyson/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
    </div>
</div>
<div class="carousel-item round">
    <img src="./images/services/diariesofcodegirl.jpg" class="d-block w-80" alt="Image 3">
    <div class="image-overlay">
      <h4 style="color: #fff;">Diaries of a code girl</h4>
      <h6 class="category"  style="color: #fff;">Coding, Lifestyle, Career Ca</h6>
      <a href="https://www.instagram.com/diariesofacodegirl/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
    </div>
</div>
<div class="carousel-item round">
    <img src="./images/services/nain-sukh.jpg" class="d-block w-80" alt="Image 4">
    <div class="image-overlay">
      <h4 style="color: #fff;">Nain Sukh</h4>
      <h6 class="category"  style="color: #fff;"> Lifestyle, Actress</h6>
      <a href="https://www.instagram.com/nain_.sukh/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
    </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/5.jpg" class="d-block w-80" alt="Image 4">
  <div class="image-overlay">
    <h4 style="color: #fff;">sarahkiran14</h4>
    <h6 class="category"  style="color: #fff;">Content Creator</h6>
    <a href="https://www.instagram.com/sarahkiran14/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
<img src="./images/services/6.jpg" class="d-block w-80" alt="Image 4">
<div class="image-overlay">
  <h4 style="color: #fff;">fatemahxxo_</h4>
  <h6 class="category"  style="color: #fff;">Content Creator</h6>
  <a href="https://www.instagram.com/fatemahxxo_/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
</div>
</div>
<div class="carousel-item round">
<img src="./images/services/7.jpg" class="d-block w-80" alt="Image 4">
<div class="image-overlay">
<h4 style="color: #fff;">Amnah</h4>
<h6 class="category"  style="color: #fff;">Fashion Model</h6>
<a href="https://www.instagram.com/amnxhhhh/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
</div>
</div>
<div class="carousel-item round">
<img src="./images/services/8.jpg" class="d-block w-80" alt="Image 4">
<div class="image-overlay">
<h4 style="color: #fff;">Sheraz Malik</h4>
<h6 class="category"  style="color: #fff;">Blogger</h6>
<a href="https://www.instagram.com/sherazxm/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
</div>
</div>
<div class="carousel-item round">
<img src="./images/services/9.jpg" class="d-block w-80" alt="Image 9">
<div class="image-overlay">
<h4 style="color: #fff;">aadilsgram</h4>
<h6 class="category"  style="color: #fff;">Personal Blog</h6>
<a href="https://www.instagram.com/aadilsgram/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
</div>
</div>
<div class="carousel-item round">
  <img src="./images/services/10.jpg" class="d-block w-80" alt="Image 10">
  <div class="image-overlay">
    <h4 style="color: #fff;">Ajay Mohanlal</h4>
    <h6 class="category"  style="color: #fff;">Personal Blog</h6>
    <a href="https://www.instagram.com/dubaibloguae/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/11.jpg" class="d-block w-80" alt="Image 11">
  <div class="image-overlay">
    <h4 style="color: #fff;">angie</h4>
    <h6 class="category"  style="color: #fff;">Travel, Fashion, Foodie</h6>
    <a href="https://www.instagram.com/angie.wp/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/12 (2).jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">moniquecesd</h4>
    <h6 class="category"  style="color: #fff;">Lifestyle, Fashion</h6>
    <a href="https://www.instagram.com/moniquecesd//" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/terisha.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Life with Terisha</h4>
    <h6 class="category"  style="color: #fff;">Video Creator</h6>
    <a href="https://www.instagram.com/lifewithterisha/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/elfie.PNG" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">simplyeffie</h4>
    <h6 class="category"  style="color: #fff;">personal blog</h6>
    <a href="https://www.instagram.com/simplyeffie_/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/nazeela.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">nazeela.rashith</h4>
    <h6 class="category"  style="color: #fff;">Travel, Food</h6>
    <a href="https://www.instagram.com/nazeela.rashith/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/twinkle.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">twinklish_arabia</h4>
    <h6 class="category"  style="color: #fff;">Lifestyle, Fashion</h6>
    <a href="https://www.instagram.com/twinklish_arabia/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/sanam.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">sanam arsalan</h4>
    <h6 class="category"  style="color: #fff;">Makeup, Fashion</h6>
    <a href="https://www.instagram.com/sanam.arsalan/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/muhammad.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">muhammad yusuf</h4>
    <h6 class="category"  style="color: #fff;">Media PR Professional</h6>
    <a href="https://www.instagram.com/_._muhammadyusuf/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
</div>
</div>
<div class="carousel-item round">
  <img src="./images/services/atqa.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Atqa</h4>
    <h6 class="category"  style="color: #fff;">Personal Blog</h6>
    <a href="https://www.instagram.com/atqa_98/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/nadsmarkiz.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">nadsmarkiz</h4>
    <h6 class="category"  style="color: #fff;">Digital Creator</h6>
    <a href="https://www.instagram.com/nadsmarkiz/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/shikha.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Shikha Mehta</h4>
    <h6 class="category"  style="color: #fff;">Lifestyle, Fashion</h6>
    <a href="https://www.instagram.com/livewithshikha/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/arsala.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">arsalaishaq</h4>
    <h6 class="category"  style="color: #fff;">Blogger</h6>
    <a href="https://www.instagram.com/arsalaishaq/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/umair.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">umairorkz</h4>
    <h6 class="category"  style="color: #fff;">Crypto</h6>
    <a href="https://www.instagram.com/umairorkz/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/makhddom.PNG" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Mirzad Makhdoom</h4>
    <h6 class="category"  style="color: #fff;">Crypto, startups</h6>
    <a href="https://www.instagram.com/cryptotribe.in/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/pamela.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">out numbered mama    </h4>
    <h6 class="category"  style="color: #fff;">Home Cook</h6>
    <a href="https://www.instagram.com/outnumberedmama/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/snjuis.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">saijus cooking cave</h4>
    <h6 class="category"  style="color: #fff;">Personal Blog</h6>
    <a href="https://www.instagram.com/saijus_cookingcave/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/kitchxenera.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">kitchxenera</h4>
    <h6 class="category"  style="color: #fff;">Personal Blog</h6>
    <a href="https://www.instagram.com/kitchxenera/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/cooking.andlife.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">cooking.andlife</h4>
    <h6 class="category"  style="color: #fff;">Food blogger, Cook </h6>
    <a href="https://www.instagram.com/cooking.andlife/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/hungrydanz.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">hungrydanz</h4>
    <h6 class="category"  style="color: #fff;">Create x social media marketing</h6>
    <a href="https://www.instagram.com/hungrydanz/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/spice_n_traditions.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">spice_n_traditions</h4>
    <h6 class="category"  style="color: #fff;">Personal Blog</h6>
    <a href="https://www.instagram.com/saijus_cookingcave/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/platingwithperel.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Home Cook</h4>
    <h6 class="category"  style="color: #fff;">Cooking, Food blogging</h6>
    <a href="https://www.instagram.com/platingwithperel/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/cory_in_the_kitchen.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">cory_in_the_kitchen</h4>
    <h6 class="category"  style="color: #fff;">BBQ</h6>
    <a href="https://www.instagram.com/cory_in_the_kitchen/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/wendy.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">wendy.eats</h4>
    <h6 class="category"  style="color: #fff;">Wendy | NYC Foodie</h6>
    <a href="https://www.instagram.com/wendy.eats/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/cook-creature.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Annu Sharma</h4>
    <h6 class="category"  style="color: #fff;">Kitchen/Cooking</h6>
    <a href="https://www.instagram.com/cook_create_capture_explore/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/duri.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Duri Hussain</h4>
    <h6 class="category"  style="color: #fff;">Kitchen/Cooking</h6>
    <a href="https://www.instagram.com/imakeitspicy/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/food_love_wine_.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Jessica Leigh</h4>
    <h6 class="category"  style="color: #fff;">Home Cook</h6>
    <a href="https://www.instagram.com/food_love_wine_/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/maria.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Maria Fernanda</h4>
    <h6 class="category"  style="color: #fff;">Foodie/Cooking</h6>
    <a href="https://www.instagram.com/purely_healthy_living/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/cupsofrice.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Karissa Carline</h4>
    <h6 class="category"  style="color: #fff;">Kitchen/Cooking</h6>
    <a href="https://www.instagram.com/cupsofrice/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/iros.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Iromi Maduwanthi</h4>
    <h6 class="category"  style="color: #fff;">Home Chef</h6>
    <a href="https://www.instagram.com/iros_kitchen/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/tabassum.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Tabassum Sakrani </h4>
    <h6 class="category"  style="color: #fff;">Fashion, Lifestyle</h6>
    <a href="https://www.instagram.com/blogging_with_tabassumsakrani/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/waqas.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">bloggers life ansarii </h4>
    <h6 class="category"  style="color: #fff;">Video Creator</h6>
    <a href="https://www.instagram.com/bloggerslifeansarii/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/aman.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Amman Haider </h4>
    <h6 class="category"  style="color: #fff;">Blogger, Model</h6>
    <a href="https://www.instagram.com/amaanhaiderofficial/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/missblack.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Melissa Khan </h4>
    <h6 class="category"  style="color: #fff;">Project management</h6>
    <a href="https://www.instagram.com/melissakblackmore/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/glowdaily.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Nazia Islam</h4>
    <h6 class="category"  style="color: #fff;">Beauty</h6>
    <a href="https://www.instagram.com/glowdaily__/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/thatgirl.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Ashley</h4>
    <h6 class="category"  style="color: #fff;">Digital Creator</h6>
    <a href="https://www.instagram.com/thatgirlangel87/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/connie.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">conniekiatipis</h4>
    <h6 class="category"  style="color: #fff;">Beauty, Lifestyle</h6>
    <a href="https://www.instagram.com/conniekiatipis_2/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/glowdaily.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Nazia Islam</h4>
    <h6 class="category"  style="color: #fff;">Beauty</h6>
    <a href="https://www.instagram.com/glowdaily__/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/sahaj.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Sahaj Kaur</h4>
    <h6 class="category"  style="color: #fff;">Fashion, Lifestyle</h6>
    <a href="https://www.instagram.com/lifeofsahaj/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/sonia.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Sonia</h4>
    <h6 class="category"  style="color: #fff;">Makeup, Beauty</h6>
    <a href="https://www.instagram.com/sonia_beautycontentcreator/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/becksample.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Rebecca Sheppard</h4>
    <h6 class="category"  style="color: #fff;">Beauty Creator</h6>
    <a href="https://www.instagram.com/becksamples101/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/analisatejeda.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Analisa</h4>
    <h6 class="category"  style="color: #fff;">public figure</h6>
    <a href="https://www.instagram.com/analisatejeda/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/bonita.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Clara Bonner</h4>
    <h6 class="category"  style="color: #fff;">Beauty, Lifestyle</h6>
    <a href="https://www.instagram.com/bonita6485/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/velentica.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Princess Valentina</h4>
    <h6 class="category"  style="color: #fff;">Beauty, Fashion</h6>
    <a href="https://www.instagram.com/princessvalentina88/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/briaana.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Brianna Lynn</h4>
    <h6 class="category"  style="color: #fff;">UGC, Makeup</h6>
    <a href="https://www.instagram.com/brianna_m165/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/iam_simplyjamille.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Jamille</h4>
    <h6 class="category"  style="color: #fff;">Beauty, Fashion</h6>
    <a href="https://www.instagram.com/iam_simplyjamille/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/misskaren.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">miss karen</h4>
    <h6 class="category"  style="color: #fff;">Content Creator</h6>
    <a href="https://www.instagram.com/misskaren._/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/shazia-rams.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">shazia ramz</h4>
    <h6 class="category"  style="color: #fff;">Video Creator</h6>
    <a href="https://www.instagram.com/shazia_ramz/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/hustle-rule.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">Hustle Rule</h4>
    <h6 class="category"  style="color: #fff;">motivation, business</h6>
    <a href="https://www.instagram.com/hustlersrule/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/beginner-side-hustle.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">beginner side hustle</h4>
    <h6 class="category"  style="color: #fff;">motivation, business</h6>
    <a href="https://www.instagram.com/beginner.sidehustle/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/moneygenerated.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">money generated</h4>
    <h6 class="category"  style="color: #fff;">money, business</h6>
    <a href="https://www.instagram.com/moneygenerated/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

<div class="carousel-item round">
  <img src="./images/services/tipsandhustles.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">tips and hustles</h4>
    <h6 class="category"  style="color: #fff;">motivation, success</h6>
    <a href="https://www.instagram.com/tipsandhustles/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>
<div class="carousel-item round">
  <img src="./images/services/incomeinspire.jpg" class="d-block w-80" alt="Image 12">
  <div class="image-overlay">
    <h4 style="color: #fff;">income inspire</h4>
    <h6 class="category"  style="color: #fff;">income, mindset</h6>
    <a href="https://www.instagram.com/incomeinspire/" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
  </div>
</div>

  <!-- Add more carousel items for additional images -->
      </div>
  </div>
</div>
<br><br>
<section id="call-to-action" class="call-to-action-bg ">
  <div class="container">
     <div class="row">
        <div class="col-lg-8 align-self-center">
           <h3 class="call-to-action-title">Transform your brand's story into a legacy – </h3>
           <!-- <p>
              Connecting your brand with the right Influencers at the right time
           </p> -->
        </div>
        <div class="col-lg-4">
          <center>
           <a class="btn btn-box link-more" href="https://calendly.com/risingdigitally">Start your journey to success!<i class="icon icon-right-arrow2"></i></a>
          </center>
          </div>
     </div>
  </div>
</section>

<!-- while loop in desktop slider -->
<h2 style="text-align: center;">Influencers worked With Us</h2>
<br>
<div class="container d-none d-md-block">
  <div id="imageCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
    <div class="carousel-inner">
      <div class="carousel-item active">
   
           
        <div class="row">
        <?php   
      $query="SELECT iname, iniche, iinstalink FROM `desktop-slider`";

      $result=mysqli_query($conn, $query);
      
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
          <div class="col-lg-3 col-sm-3 round">
            <img src="./images/services/5.jpg" alt="">
            <div class="image-overlay">
              <h4 style="color: #fff;"><?php echo $row["iname"]?></h4>
              <h6 class="category"  style="color: #fff;"><?php echo $row["iniche"]?></h6>
              <a href="<?php echo $row["iinstalink"]?>" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
            </div>
          </div>
          <?php
            }
          ?>
     
        </div>
        
      </div>
  
     
      
    
  
    


    
      
    </div>
    <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>

<!-- while loop in dektop slider -->

<!-- Call to action end -->
         <!-- Footer start-->
         <footer class="footer" id="footer">
            <div class="footer-main bg-overlay">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-4 col-md-12 footer-widget footer-about">
                        <div class="footer-logo">
                           <img src="images/rd_logo.png" alt="">
                        </div>
                        <p>Rising Digitally is a UK-based influencer marketing agency that specializes in harnessing the power of online platforms to connect brands with their target audiences. <br><span style="font-family: 'Courier New', Courier, monospace; font-size: 18px;">This is where we Excel...</span></p>
                        
                        <!-- <h3 class="widget-title">Subscribe Newsletter!</h3> -->
                        <!-- <form class="newsletter-form" id="newsletter-form" action="#" method="post">
                           <div class="form-group">
                              <input class="form-control form-control-lg" id="newsletter-form-email" type="email" name="email" placeholder="Email "
                                 autocomplete="off">
                              <button class="btn btn-primary"><i class="fa fa-paper-plane"></i></button>
                           </div>
                        </form> -->
                     </div>
                     <!-- About us end-->
                     <div class="col-lg-4 col-md-6 footer-widget">
                        <h3 class="widget-title">Quick Links</h3>
                        <ul class="list-dash">
                         <li><a href="about.html">About Us</a></li>
                         <li><a href="influencer-marketing.html">Influencer Marketing</a></li>
                         <li><a href="casestudies.html">CaseStudies</a></li>
                         <li><a href="facebookads.html">Facebook Ads</a></li>
                         <li><a href="https://calendly.com/risingdigitally"> Free Consultation</a></li>
                         <li><a href="websitedevelopment.html">Website Development</a></li>
                         <li><a href="socialmediamanagement.html">SMM</a></li>
                         <li><a href="graphicdesigning.html">Graphic Designing</a></li>
                         <li><a href="videoediting.html">Video Editing</a></li>
                        <li><a href="letstalk.html">Contact Us</a></li>
                       </ul>
                     </div>
                     <div class="col-lg-4 col-md-6 footer-widget">
                        <h3 class="widget-title">Company Locations</h3>
                        <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i style="color: #EBAF41;" class="icon icon-map-marker2"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Address</h3>
                              <p>128 City Road, London, UK</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                        
                        <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i style="color: #EBAF41;" class="icon icon-envelope"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Email Address</h3>
                              <p>info@risingdigitally.com</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                        <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i style="color: #EBAF41;" class="icon icon-phone3"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Phone Number</h3>
                              <p>+44 7456 44098</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                     </div>
                  </div>
                  <!-- Content row end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Footer Main-->
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-6 col-md-12">
                        <div class="copyright-info"><span>Copyright © 2023 by Rising Digitally</span></div>
                     </div>
                     <div class="col-lg-6 col-md-12">
                       <div class="footer-social text-right">
                        <ul>
                           <li><a href="https://www.facebook.com/Risingdigitally"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://www.linkedin.com/company/rising-digitally/"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="https://www.instagram.com/rising_digitally/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        </div>
                     </div>
                  </div>
                  <!-- Row end-->
               </div>
               <!-- Container end-->
            </div>
            <!-- Copyright end-->
         </footer>
         <!-- Footer end-->
   
         <div class="back-to-top affix" id="back-to-top" data-spy="affix" data-offset-top="10">
            <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i>
               <!-- icon end-->
            </button>
            <!-- button end-->
         </div>
         <!-- End Back to Top-->
  <script>
    const caseStudyWrapper = document.querySelector('.case-study-wrapper');
const caseStudies = document.querySelectorAll('.case-study');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentSlide = 0;

function slideTo(index) {
  if (index < 0 || index >= caseStudies.length) {
    return; // Prevent out-of-bounds sliding
  }

  caseStudyWrapper.style.transform = `translateX(-${index * 100}%)`;
  currentSlide = index;
  updateButtons();
}

function updateButtons() {
  prevBtn.disabled = currentSlide === 0;
  nextBtn.disabled = currentSlide === caseStudies.length - 1;
}

prevBtn.addEventListener('click', () => slideTo(currentSlide - 1));
nextBtn.addEventListener('click', () => slideTo(currentSlide + 1));

// Autoplay if there are more than 3 case studies
if (caseStudies.length > 3) {
  setInterval(() => slideTo(currentSlide + 1), 5000);
}

  </script>
         <!--
         Javascript Files
         ==================================================
         -->
         <!-- initialize jQuery Library-->
         <script type="text/javascript" src="js/jquery.js"></script>
          
          
         <!-- Bootstrap jQuery-->
         <script type="text/javascript" src="js/bootstrap.min.js"></script>
         <!-- Owl Carousel-->
         <script type="text/javascript" src="js/owl.carousel.min.js"></script>
         <!-- Counter-->
         <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
         <!-- Waypoints-->
         <script type="text/javascript" src="js/waypoints.min.js"></script>
         <!-- Color box-->
         <script type="text/javascript" src="js/jquery.colorbox.js"></script>
          
           
         <!-- Template custom-->
         <script type="text/javascript" src="js/custom.js"></script>
         <script>
            const logosWrapper = document.querySelector('.logos-wrapper');
const logos = logosWrapper.querySelectorAll('.logo');

let currentLogo = 0;

setInterval(() => {
  logosWrapper.style.transform = `translateX(-${currentLogo * 100}px)`;
  currentLogo++;

  if (currentLogo >= logos.length) {
    currentLogo = 0;
  }
}, 2000);

         </script>
         <script>
            var morousels = document.querySelectorAll(".morousel");
   var mots = document.querySelectorAll(".mot");
   var index = 0;
   
   
   function prevmorousel(n){
     index+=n;
     console.log("prevmorousel is called");
     changemorousel();
   }
   
   function nextmorousel(n){
     index+=n;
     changemorousel();
   }
   
   changemorousel();
   
   function changemorousel(){
       
     if(index>morousels.length-1)
       index=0;
     
     if(index<0)
       index=morousels.length-1;
     
     
     
       for(let i=0;i<morousels.length;i++){
         morousels[i].style.display = "none";
         
         mots[i].classList.remove("active");
         
         
       }
       
       morousels[index].style.display = "block";
       mots[index].classList.add("active");
   
     
   
   }
   
   
   
         </script>
      </div>
      <!--Body Inner end-->
   </body>
   
   </html>