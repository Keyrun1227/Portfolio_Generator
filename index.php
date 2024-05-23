<?php
include 'config.php';
session_start();   
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <title>Portfolio Generator</title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-abc123"
      crossorigin="anonymous"
    />

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/templatemo-style.css">

</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="index.php" class="navbar-brand">Portfolio <span>-</span>Generator</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#menu" class="smoothScroll">Types</a></li>
                         <li><a href="#contact" class="smoothScroll">Contact</a></li>
                         <li><a href="https://github.com/Keyrun1227" target="blank"class="smoothScroll">Get_Source_Code</a></li>
                         <?php if(isset($_SESSION['user_id'])) { ?>
                         <li><a href="form.php"  class="smoothScroll">Get portfolio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <a href="logout.php" class="section-btn">Logout</a>
                        <?php } 
                        else 
                        { ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        <a href="login.php" class="section-btn">Login</a>
                        <?php } ?>
                    </ul>
                    
               </div>

          </div>
     </section>

     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="row">
                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-8 col-sm-12">
                                             <h3>Keyrun PortfolioForge</h3>
                                             <h1>Create a Stunning Portfolio for users in Minutes</h1>
                                             <a href="#about" class="section-btn btn btn-default smoothScroll">Know more</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

               <div class="col-md-6 col-sm-12">
               <div class="about-info">
                    <div class="section-title wow fadeInUp" data-wow-delay="0.2s">
                         <h2>Create a Stunning Portfolio in Minutes</h2>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.4s">
                         <p>At Portfolio Generator, we believe that showcasing your skills and accomplishments should be easy and stress-free. That's why we've created a powerful and user-friendly platform that helps professionals, freelancers, and creatives create a stunning portfolio in just a few clicks. </p>
                         <p>Our platform is designed to save you time and hassle. With no technical or design skills required, you can select a template, upload your content, and customize the design to your liking. It's that simple!</p>
                         <p>So whether you're looking to land your dream job, attract new clients, or simply showcase your work to the world, Portfolio Generator is the perfect tool to help you achieve your goals. Sign up today and start creating a portfolio that truly reflects your unique skills and talents.</p>
                    </div>
               </div>
               </div>
                    <div class="col-md-6 col-sm-12">
                         <div class="wow fadeInUp about-image" data-wow-delay="0.6s">
                              <img src="images/kiran.jpeg" class="img-responsive" alt="Portfolio Generator">
                         </div>
                    </div>
                    
              </div>
               <a href="https://www.linkedin.com/in/durga-satya-sai-kiran-chitturi-69abba220/" target="blank" class="section-btn btn btn-default smoothScroll">Know More</a>
          </div>
     </section>


     <!-- MENU-->
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Portfolio Types</h2>
                              <h4>Currently 3</h4>
                         </div>
                    </div>
                    <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Portfolio-1</h2>
                         </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/template-1.png"  class="image-popup" title="Home Section">
                              <img src="images/template-1.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Dark Theme  Portfolio</h3>
                                             <p>Home Section / Typer.js  </p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>50/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/template-13.png"  class="image-popup"title="Skills Section"> 
                                   <img src="images/template-13.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Responsive Portfolio</h3>
                                             <p>Skills Section/ Selector Progress Bars</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>50/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                                   <a href="images/template-12.png"  class="image-popup" title="Service Section">
                                   <img src="images/template-12.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Personal Portfolio</h3>
                                             <p>Service Section / Hover Effect</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>50/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    </div>
          </div>
     </section>
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">  
               <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Portfolio-2</h2>
                         </div>    
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/template-2.png"  class="image-popup" title="Responsive">
                              <img src="images/template-2.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Educational Portfolio</h3>
                                             <p>Responsive / Simple </p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>60/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                                   <a href="images/template-23.png"  class="image-popup" title="Fast loading ">
                                   <img src="images/template-23.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Adaptive Portfolio</h3>
                                             <p>Fast loading / Flexible / About Section</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>60/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>           
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/template-22.png"  class="image-popup" title="Services Section ">
                                   <img src="images/template-22.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>MultiMode Portfolio</h3>
                                             <p>Services Section / Dark Theme</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>60/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
               <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Portfolio-3</h2>
                         </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/template-3.png"  class="image-popup" title="Landing Page">
                              <img src="images/template-3.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Multi-Mode Portfolio</h3>
                                             <p>Landing Page/ Dark/Light mode</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>50/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/template-32.png"  class="image-popup" title="About Section">
                                   <img src="images/template-32.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Sleek Portfolio</h3>
                                             <p> About Section / Light Mode</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>50/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                                   <a href="images/template-33.png"  class="image-popup" title="Dark mode">
                                   <img src="images/template-33.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Responsive Portfolio</h3>
                                             <p>Dark mode / Flexible and adaptable</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>60/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>  
                    </div>
               </div>
          </div>
     </section>
     <section id="menu" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">  
               <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                              <h2>Portfolio-4</h2>
                         </div>    
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/template-4.png"  class="image-popup" title="Home Section">
                              <img src="images/template-4.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3> Personal Portfolio</h3>
                                             <p>Home Section / Dark Mode</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>50/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                              <a href="images/template-42.png"  class="image-popup" title="Contact Section">
                                   <img src="images/template-42.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>MultiMode Portfolio</h3>
                                             <p>Contact Section / Simple</p>
                                        </div>
                                        <div class="menu-price">
                                             <span>50/-</span>
                                        </div>
                                   </div>
                              </a>
                         </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                         <!-- MENU THUMB -->
                         <div class="menu-thumb">
                                   <a href="images/template-43.png"  class="image-popup" title="Fast loading">
                                   <img src="images/template-43.png" class="img-responsive" alt="">

                                   <div class="menu-info">
                                        <div class="menu-item">
                                             <h3>Adaptive Portfolio</h3>
                                             <p>Fast loading/ Skills Section</p>
                                        </div>
                                        <div class="menu-price">
                                             <!-- <span>60/-</span> -->
                                        </div>
                                   </div>
                              </a>
                         </div>           
                    </div>
               </div>
          </div>
     </section>
     <!-- CONTACT -->

     <section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7568.723081840527!2d83.66371210000001!3d18.46727570000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3c772724754cc9%3A0xcf876cd74c2b6b01!2sGMR%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1678004426694!5m2!1sen!2sin"  allowfullscreen></iframe>
                         </div>
                    </div>    
                   

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="send-email.php" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">


                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">

                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>          
     <a href="https://www.freecounterstat.com" title="hits counter"><img src="https://counter4.optistats.ovh/private/freecounterstat.php?c=e7lns5a3s9s8emfqeznur466g7y8l3kd" border="0" title="hits counter" alt="hits counter"></a>

     <!-- FOOTER -->
     <footer>
        <span>Created By <a href="https://github.com/Keyrun1227/KiranPortfolio.github.io">Kiran</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>


     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery.stellar.min.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>