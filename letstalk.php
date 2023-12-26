<?php
include("connection.php");
if(isset($_POST["submit"])){
   $name=$_POST["name"];
   $email=$_POST["email"];
   $representative=$_POST["representative"];
   $looking=$_POST["look"];
   $message=$_POST["message"];

   $query= "INSERT INTO `letstalk-leads`(`id`, `fullname`, `email`, `whoareyou`, `lookingfor`, `message`, `datetime`) VALUES (null,'$name','$email','$representative','$looking','$message', null)";
   $result = mysqli_query($conn, $query);
   if ($result) {
      // Query executed successfully
      echo '<script>alert("Form has been submited succesfully")</script>'; 
   } else {
      // Query failed
      echo "Error: " . mysqli_error($conn);
  }
  }

?> 
<!DOCTYPE html>
<html lang="en">

<head>
   <!--
    Basic Page Needs
    ==================================================
    -->
   <meta charset="utf-8">
   <title>  Rising Digitally | Contact Us</title>
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
</head>
<style>
   @media (max-width: 768px){
      .adjust img{
height: 350px;      }
  }
  section {
   margin: 50px auto;
   padding: 20px;
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
<body>
<hr class="hr-3">
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
                           <li class="nav-item dropdown">
                                 <a href="about.html">About Us</a>
                           </li>

                               <li class="nav-item dropdown">
                              <a class="nav-link" href="#" data-toggle="dropdown">
                        Services
                         <i class="fa fa-angle-down"></i>
                       </a>
                           <ul class="dropdown-menu" role="menu">
                              <li><a href="service.html">All Services</a></li>
                              <li><a href="influencer-marketing.html">Influencer Marketing</a></li>
                              <li><a href="socialmediamanagement.html">Social Media Management</a></li>
                              <li><a href="graphicdesigning.html">Graphic Designining</a></li>
                              <li><a href="videoediting.html">Video Editing</a></li>
                              <li><a href="facebookads.html">Facebook Ads</a></li>
                              <li><a href="websitedevelopment.html">Website Development</a></li>
                           </ul>
                      </li>
                           <!-- li end-->

                   

                         <!-- li end-->
                         <li class="nav-item dropdown">
                           <a href="casestudies.html">casestudies</a>

                           
                         </li>

                         <li class="nav-item dropdown active">
                           <a href="letstalk.html">Lets Talk</a>

                           
                         </li>
                         <li class="nav-item dropdown">
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
<!-- navbar end -->
      <div class="banner-area" id="banner-area" style="background-image:url(images/banner/4-43.webp);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <h1 class="banner-title">Lets Talk </h1>
                    
                  </div>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container end-->
      </div>
      <!-- Banner area end-->
<br>
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h2 class="section-title"><span style="color: #58BDB3;"></span>Contact Us</h2> 
            </div> 
           <div class="col-sm-4 col-lg-4">
             <img src="./images/pages/Untitled_design__5_-removebg-preview (1).webp" width="100%" height="500px;" alt="">
           </div>
           <div class="col-sm-2 col-lg-2">
          <!-- column         -->
          </div>
           <div class="col-sm-6 col-lg-6"  style="background-color: #58BDB3; border-radius: 20px; border-color: black;">
                  
            <section>
               <form action="letstalk.php"  method="POST">
                 <h2 style="color: #000;"><center>We'd Love To Hear From You!</center></h2>
             <input type="text" placeholder="Enter full name" name="name" id="name">
             <input type="email" placeholder="Enter email" name="email" id="email">
             <select name="representative" id="representative">
               <option value="brand">i am a brand</option>
               <option value="agency">i am a agency</option>
               <option value="influencer">i am a influencer</option>
             
             
             </select>
             <input type="text" placeholder="What are u looking for?" name="look" id="look">
             <textarea name="message" placeholder="Enter mesage" id="message" cols="30" rows="6"></textarea>
             <button type="submit" name="submit" id ="submit">submit</button>
             
               </form>
             </section>    
         </div>
          
         </div>
       </div>
        <br>
         <!-- contact trying -->
       <section class="quote-area solid-bg" id="quote-area">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h2 class="section-title"><span style="color: #58BDB3;"></span>Reach Us Today</h2> 
               </div> 
               <div class="col-lg-5">
                  <div class="quote_form"> <br> 
                     <p class="contact-content">Feel free to reach out to us anytime! Whether you have questions, feedback, or just want to connect, <br> our team is here to assist you. Contact us today, and let's start a conversation. Your input matters to us, and we look forward to hearing from you.</p>
                     <br>
                     <div class="contact-info">
                        <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i style="color: #58BDB3;" class="icon icon-map-marker2"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Find Us</h3>
                              <p>Office 201,plot 15C khayaban-e-rizwan phase 7, karachi</p>
                              <p>128 City Road, London, UK</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                        <div class="ts-contact-info"><span class="ts-contact-icon float-left"><i style="color: #58BDB3;" class="icon icon-phone3"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Contact Us</h3>
                              <p>+44 7456 44098</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                        <div class="ts-contact-info last"><span class="ts-contact-icon float-left"><i style="color: #58BDB3;" class="icon icon-envelope"></i></span>
                           <div class="ts-contact-content">
                              <h3 class="ts-contact-title">Email Us</h3>
                              <p>info@risingdigitally.com</p>
                           </div>
                           <!-- Contact content end-->
                        </div>
                     </div>

                     <!-- <div class="quote-img">

                        <img class="img-fluid" src="images/alltransport.png" alt="img">
                     </div> -->
                  </div><br> <br> <br>
                  <!-- Quote form end-->
               </div> <br>
               <div class="col-sm-6 col-lg-6 adjust">
                  <img src="./images/pages/right_picxture.webp" width="100%" height="500px;" alt="">
                </div>
               <!-- Col end-->
               <!-- <div class="col-lg-6" style="background-color: #58BDB3; border-radius: 20px; border-color: black;">
                  
                 <div class="contact-submit-box contact-box form-box">
                    <form class="contact-form" id="contact-form" action="contact-form.php" method="POST">
                       <div class="error-container"></div><br> <br>
                       <div class="row"> 
                        <center> <h3 style="color: #000; font-family:Cursive;">&nbsp;&nbsp;&nbsp;&nbsp;We'd Love To Hear From You!</h3></center>
                          <div class="col-lg-12">
                             <div class="form-group">
                                <input style="border-color: black; background-color:#fff;" class="form-control form-name" id="name" name="name" placeholder="Full Name" type="text" required="">
                             </div>
                          </div>
                          <!- Col end-->
                          <!-- <div class="col-lg-12">
                             <div class="form-group">
                                <input style="border-color: black; background-color:#fff;" class="form-control form-website" id="url" name="url" placeholder="Representative" type="url" required="">
                             </div>
                             
                          </div> -->
                          <!-- <div class="col-lg-12">
                          <div class="form-group"> -->
                           <!-- <input style="border-color: black; background-color:#fff;" class="form-control form-website" id="url" name="url" placeholder="Representative" type="url" required=""> -->
                           
                           <!-- <select  style="border-color: black; background-color:#fff;" class="form-control" id="representativeType" name="representativeType" required>
                             <option value="brand">I am a brand</option>
                             <option value="agency">I am an agency</option>
                             <option value="influencer">I am an influencer</option>
                           </select>
                         </div>
                        </div>

                          <div class="col-lg-12">
                             <div class="form-group">
                                <input style="border-color: black; background-color:#fff;" class="form-control form-email" id="email" name="email" placeholder="Email" type="email" required="">
                             </div>
                          </div>
                          <div class="col-lg-12">
                             <div class="form-group" >
                                <textarea style="border-color: black; background-color:#fff;" class="form-control form-message required-field" id="message" placeholder="Message" rows="8"></textarea>
                             </div>
                          </div> -->

           
                          <!-- Col 12 end-->
                       <!-- </div> -->
                       <!-- Form row end-->
                          <!-- <button class="btn btn-primary tw-mt-30 " type="submit"><i style="color: #000;" class="fa fa-paper-plane-o"></i>&NonBreakingSpace; Send Message</button>
                    </form> -->
                    <!-- Form end-->
                 <!-- </div>
              </div>  -->
              <!-- Contact form end -->
            </div>
            <!-- Content row end-->
         </div> 
         <!-- Container end-->
      </section>
      <!-- Quote area end-->

     
        <div class="container text-center">
         <h2 class="section-title"><span style="color: #58BDB3;"></span>Our Locations</h2> 
         <div class="row">
           <div class=" responsive-map col-lg-5 col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.3184977623478!2d67.07224128186553!3d24.81877939010558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33c640fe96175%3A0xec36e275ff1c21b0!2s201%2C%20Plot%2C%2015%20Khayaban-e-Rizwan%2C%20Phase%207%20Ext%20Defence%20Housing%20Authority%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e0!3m2!1sen!2s!4v1696341073549!5m2!1sen!2s" ></iframe>  </div>
           <div class="col-lg-2">
           <br>
          </div>
           <div class=" responsive-map col-lg-5 col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.2355692951674!2d-0.09123532351249009!3d51.52723900925393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761ca671a6cfb7%3A0x9320c88f0a927f3f!2s128%20City%20Rd%2C%20London%20EC1V%202NX%2C%20UK!5e0!3m2!1sen!2s!4v1696337707614!5m2!1sen!2s" ></iframe>
           </div>
         
         </div>
       </div>

  <!-- map  --> <br><br>

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
       
        
      <!-- Google Map API Key-->
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
      <!-- Google Map Plugin-->
      <script type="text/javascript" src="js/gmap3.js"></script>
      <!-- Template custom-->
      <script type="text/javascript" src="js/custom.js"></script>
   </div>
   <!--Body Inner end-->
</body>

</html>