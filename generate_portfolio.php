<?php
session_start();
if(!isset($_SESSION['user_id'])) {
    header('location:index.php');
}
if(isset($_SESSION['user_id'])) {
    if(!isset($_SESSION['template'])) {
        header('location:form.php');
    }
}
$Pname = $_SESSION['Portfolio_title'];
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$picture = $_SESSION['picture'];
$picture_name = $_SESSION['pname'];
$picture_tmp_name = $_SESSION['tmp_name'];
$picture_type = $_SESSION['type'];
$picture_size = $_SESSION['size'];
$address = $_SESSION['address'];
$linkedin=$_SESSION['linkedin'];
$github=$_SESSION['github'];
$about=$_SESSION['about'];
$template = $_SESSION['template'];
$skill1=$_SESSION['skill1'];
$skill2=$_SESSION['skill2'];
$skill3=$_SESSION['skill3'];
$service1=$_SESSION['service1'];
$s1des=$_SESSION['service1_description'];
$service2=$_SESSION['service2'];
$s2des=$_SESSION['service2_description'];
$service3=$_SESSION['service3'];
$s3des=$_SESSION['service3_description'];
$t1=$_SESSION['ts1'];
$t1percen=$_SESSION['ts1%'];
$t2=$_SESSION['ts2'];
$t2percen=$_SESSION['ts2%'];
$t3=$_SESSION['ts3'];
$t3percen=$_SESSION['ts3%'];
$t4=$_SESSION['ts4'];
$t4percen=$_SESSION['ts4%'];
$t5=$_SESSION['ts5'];
$t5percen=$_SESSION['ts5%'];
$t6=$_SESSION['ts6'];
$t6percen=$_SESSION['ts6%'];
$resume_target_file=$_SESSION['resume_target_file']; 
$target_file=$_SESSION['target_file'] ;

// Generate the portfolio
if ($template == 'template1') {
   // Generate portfolio using template 1
   $portfolio = '
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>' . $name . ' Portfolio</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
       <script>
       $(document).ready(function(){
           $(window).scroll(function(){
               // sticky navbar on scroll script
               if(this.scrollY > 20){
                   $(".navbar").addClass("sticky");
               }else{
                   $(".navbar").removeClass("sticky");
               }
               
               // scroll-up button show/hide script
               if(this.scrollY > 500){
                   $(".scroll-up-btn").addClass("show");
               }else{
                   $(".scroll-up-btn").removeClass("show");
               }
           });
       
           // slide-up script
           $(".scroll-up-btn").click(function(){
               $("html").animate({scrollTop: 0});
               // removing smooth scroll on slide-up button click
               $("html").css("scrollBehavior", "auto");
           });
       
           $(".navbar .menu li a").click(function(){
               // applying again smooth scroll on menu items click
               $("html").css("scrollBehavior", "smooth");
           });
       
           // toggle menu/navbar script
           $(".menu-btn").click(function(){
               $(".navbar .menu").toggleClass("active");
               $(".menu-btn i").toggleClass("active");
           });
       
           // typing text animation script
           var typed = new Typed(".typing", {
               strings: ["'.$skill1.'","'.$skill2.'","'.$skill3.'"],
               typeSpeed: 100,
               backSpeed: 60,
               loop: true
           });
       
           var typed = new Typed(".typing-2", {
               strings: ["'.$skill1.'","'.$skill2.'","'.$skill3.'"],
               typeSpeed: 100,
               backSpeed: 60,
               loop: true
           });
       
    
        // owl carousel script
        $(".carousel").owlCarousel({
            margin: 20,
            loop: true,
            autoplay: true,
            autoplayTimeOut: 2000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    nav: false
                },
                600:{
                    items: 2,
                    nav: false
                },
                1000:{
                    items: 3,
                    nav: false
                }
            }
        });
    });
   </script>
   <style>
        /*  import google fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap");

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }
        html{
            scroll-behavior: smooth;
        }

        /* custom scroll bar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        /* all similar content styling codes */
        section{
            padding: 100px 0;
        }
        .max-width{
            max-width: 1300px;
            padding: 0 80px;
            margin: auto;
        }
        .about, .services, .skills,  .contact, footer{
            font-family: "Poppins", sans-serif;
        }
        .about .about-content,
        .services .serv-content,
        .skills .skills-content,
        .contact .contact-content{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }
        section .title{
            position: relative;
            text-align: center;
            font-size: 40px;
            font-weight: 500;
            margin-bottom: 60px;
            padding-bottom: 20px;
            font-family: sans-serif;
        }
        section .title::before{
            content: "";
            position: absolute;
            bottom: 0px;
            left: 50%;
            width: 180px;
            height: 3px;
            background: #111;
            transform: translateX(-50%);
        }
        section .title::after{
            position: absolute;
            bottom: -8px;
            left: 50%;
            font-size: 20px;
            color: rgb(18, 60, 228);
            padding: 0 5px;
            background: #fff;
            transform: translateX(-50%);
        }

        /* navbar styling */
        .navbar{
            position: fixed;
            width: 100%;
            z-index: 999;
            padding: 30px 0;
            font-family:  sans-serif;
            transition: all 0.3s ease;
        }
        .navbar.sticky{
            padding: 15px 0;
            background: rgb(18, 60, 228);
        }
        .navbar .max-width{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .navbar .logo a{
            color: #fff;
            font-size: 35px;
            font-weight: 600;
        }
        .navbar .logo a span{
            color:  rgb(228, 137, 18);
            transition: all 0.3s ease;
        }
        .navbar.sticky .logo a span{
            color: #fff;
        }
        .navbar .menu li{
            list-style: none;
            display: inline-block;
        }
        .navbar .menu li a{
            display: block;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            margin-left: 25px;
            transition: color 0.3s ease;
        }
        .navbar .menu li a:hover{
            color: rgb(228, 137, 18);
        }
        .navbar.sticky .menu li a:hover{
            color: #fff;
        }

        /* menu btn styling */
        .menu-btn{
            color: #fff;
            font-size: 23px;
            cursor: pointer;
            display: none;
        }
        .scroll-up-btn{
            position: fixed;
            height: 45px;
            width: 42px;
            background: rgb(18, 60, 228);
            right: 30px;
            bottom: 10px;
            text-align: center;
            line-height: 45px;
            color: #fff;
            z-index: 9999;
            font-size: 30px;
            border-radius: 6px;
            border-bottom-width: 2px;
            cursor: pointer;
            opacity: 0;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .scroll-up-btn.show{
            bottom: 30px;
            opacity: 1;
            pointer-events: auto;
        }
        .scroll-up-btn:hover{
            filter: brightness(90%);
        }
        li.dropdown {
            display: inline-block;

        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        
        .dropdown-content a:hover {
            background-color:black;}
        
        .dropdown:hover .dropdown-content {
            display: block;
        }


        /* home section styling */
        .home{
            display: flex;
            background: url("/static/images/banner.jpg") no-repeat center; 
            height: 100vh;
            color: #fff; 
            min-height: 500px;
            background-size: cover;
            background-attachment: fixed;
            font-family: "Ubuntu", sans-serif;
        }
        .home .max-width{
        width: 100%;
        display: flex;
        }
        .home .max-width .row{
        margin-right: 0;
        }
        .home .home-content .text-1{
            font-size: 27px;
        }
        .home .home-content .text-2{
            font-size: 75px;
            font-weight: 600;
            margin-left: -3px;
        }
        .home .home-content .text-3{
            font-size: 40px;
            margin: 5px 0;
        }
        .home .home-content .text-3 span{
            color: rgb(228, 137, 18);
            font-weight: 500;
        }
        .home .home-content a{
            display: inline-block;
            background: rgb(18, 60, 228);;
            color: #fff;
            font-size: 25px;
            padding: 12px 36px;
            margin-top: 20px;
            font-weight: 400;
            border-radius: 6px;
            border: 2px solid rgb(18, 60, 228);
            transition: all 0.3s ease;
        }
        .home .home-content a:hover{
            color: rgb(18, 60, 228);;
            background: none;
        }

        /* about section styling */
        .about .title::after{
            content: "who i am";
        }
        .about .about-content .left{
            width: 45%;
        }
        .about .about-content .left img{
            height: 400px;
            width: 490px;
            object-fit: cover;
            border-radius: 6px;
        }
        .about .about-content .right{
            width: 55%;
        }
        .about .about-content .right .text{
            font-size: 25px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .about .about-content .right .text span{
            color: rgb(228, 137, 18);
        }
        .about .about-content .right p{
            text-align: justify;
        }
        .about .about-content .right a{
            display: inline-block;
            background: rgb(18, 60, 228);;
            color: #fff;
            font-size: 20px;
            font-weight: 500;
            padding: 10px 30px;
            margin-top: 20px;
            border-radius: 6px;
            border: 2px solid rgb(18, 60, 228);;
            transition: all 0.3s ease;
        }
        .about .about-content .right a:hover{
            color: rgb(18, 60, 228);;
            background: none;
        }

        /* services section styling */
        .services{
            color:#fff;
            background: #111;
        }
        .services .title::before,
        .title::before{
            background: #fff;
        }
        .services .title::after,
        .title::after{
            background: #111;
            content: "what i provide";
        }
        .services .serv-content .card{
            width: calc(33% - 20px);
            background: #222;
            text-align: center;
            border-radius: 6px;
            padding: 50px 25px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .services .serv-content .card:hover{
            background: rgb(18, 60, 228);;
        }
        .services .serv-content .card .box{
            transition: all 0.3s ease;
        }
        .services .serv-content .card:hover .box{
            transform: scale(1.05);
        }
        .services .serv-content .card i{
            font-size: 50px;
            color: rgb(18, 60, 228);;
            transition: color 0.3s ease;
        }
        .services .serv-content .card:hover i{
            color: #fff;
        }
        .services .serv-content .card:hover p{
            color: red;
        }
        .services .serv-content .card .text{
            font-size: 25px;
            font-weight: 500;
            margin: 10px 0 7px 0;
        }

        /* skills section styling */

        .skill{
        
            background:rgb(192, 190, 190);
        }

        .skills .title::after{
            content: "what i know";
        }
        .skills .skills-content .column{
            width: calc(50% - 30px);
        }
        .skills .skills-content .left .text{
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .skills .skills-content .left p{
            text-align: justify;
        }
        .skills .skills-content .left a{
            display: inline-block;
            background: rgb(77, 173, 225);
            color: rgb(10, 15, 15);
            font-size: 18px;
            font-weight: 500;
            padding: 8px 16px;
            margin-top: 20px;
            border-radius: 6px;
            border: 2px solid rgb(20, 43, 220);
            transition: all 0.3s ease;
        }
        .skills .skills-content .left a:hover{
            color: rgb(20, 57, 220);
            background: none;
        }
        .skills .skills-content .right .bars{
            margin-bottom: 15px;
        }
        .skills .skills-content .right .info{
            display: flex;
            margin-bottom: 5px;
            align-items: center;
            justify-content: space-between;
        }
        .skills .skills-content .right span{
            font-weight: 500;
            font-size: 18px;
        }
        .skills .skills-content .right .line{
            height: 5px;
            width: 100%;
            background: rgb(129, 235, 237);
            position: relative;
        }
        .skills .skills-content .right .line::before{
            content: "";
            position: absolute;
            height: 100%;
            left: 0;
            top: 0;
            background: rgb(7, 56, 235);
        }
        .skills-content .right .'.$t1.'::before{
            width: '.$t1percen.'%;
        }
        .skills-content .right .'.$t2.'::before{
            width: '.$t2percen.'%;
        }
        .skills-content .right .'.$t3.'::before{
            width: '.$t3percen.'%;
        }
        .skills-content .right .'.$t4.'::before{
            width: '.$t4percen.'%;
        }
        .skills-content .right .'.$t5.'::before{
            width: '.$t5percen.'%;
        }
        .skills-content .right .'.$t6.'::before{
            width: '.$t6percen.'%;
        }
        
        /* contact section styling */
        .contact .title::after{
            content: "get in touch";
        }
        .contact .contact-content .column{
            width: calc(50% - 30px);
        }
        .contact .contact-content .text{
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 10px;
        }
        .contact .contact-content .left p{
            text-align: justify;
        }
        .contact .contact-content .left .icons{
            margin: 10px 0;
        }
        .contact .contact-content .row{
            display: flex;
            height: 65px;
            align-items: center;
        }
        .contact .contact-content .row .info{
            margin-left: 30px;
        }
        .contact .contact-content .row i{
            font-size: 25px;
            color: rgb(18, 60, 228);;
        }
        .contact .contact-content .info .head{
            font-weight: 500;
        }
        .contact .contact-content .info .sub-title{
            color: #333;
        }
        .contact .right form .fields{
            display: flex;
        }
        .contact .right form .field,
        .contact .right form .fields .field{
            height: 45px;
            width: 100%;
            margin-bottom: 15px;
        }
        .contact .right form .textarea{
            height: 80px;
            width: 100%;
        }
        .contact .right form .name{
            margin-right: 10px;
        }
        .contact .right form .field input,
        .contact .right form .textarea textarea{
            height: 100%;
            width: 100%;
            border: 1px solid lightgrey;
            border-radius: 6px;
            outline: none;
            padding: 0 15px;
            font-size: 17px;
            font-family: "Poppins", sans-serif;
            transition: all 0.3s ease;
        }
        .contact .right form .field input:focus,
        .contact .right form .textarea textarea:focus{
            border-color: #b3b3b3;
        }
        .contact .right form .textarea textarea{
        padding-top: 10px;
        resize: none;
        }
        .contact .right form .button-area{
        display: flex;
        align-items: center;
        }
        .right form .button-area button{
        color: #fff;
        display: block;
        width: 160px!important;
        height: 45px;
        outline: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 6px;
        cursor: pointer;
        flex-wrap: nowrap;
        background: rgb(18, 60, 228);;
        border: 2px solid rgb(18, 60, 228);;
        transition: all 0.3s ease;
        }
        .right form .button-area button:hover{
        color: rgb(18, 60, 228);;
        background: none;
        }
        /* footer section styling */
        footer{
            background: #111;
            padding: 15px 23px;
            color: #fff;
            text-align: center;
        }
        footer span a{
            color:  rgb(228, 137, 18);
            text-decoration: none;
        }
        footer span a:hover{
            text-decoration: underline;
        }


        /* responsive media query start */
        @media (max-width: 1104px) {
            .about .about-content .left img{
                height: 350px;
                width: 350px;
            }
        }

        @media (max-width: 991px) {
            .max-width{
                padding: 0 50px;
            }
        }
        @media (max-width: 947px){
            .menu-btn{
                display: block;
                z-index: 999;
            }
            .menu-btn i.active:before{
                content: "\f00d";
            }
            .navbar .menu{
                position: fixed;
                height: 100vh;
                width: 100%;
                left: -100%;
                top: 0;
                background: #111;
                text-align: center;
                padding-top: 80px;
                transition: all 0.3s ease;
            }
            .navbar .menu.active{
                left: 0;
            }
            .navbar .menu li{
                display: block;
            }
            .navbar .menu li a{
                display: inline-block;
                margin: 20px 0;
                font-size: 25px;
            }
            .home .home-content .text-2{
                font-size: 70px;
            }
            .home .home-content .text-3{
                font-size: 35px;
            }
            .home .home-content a{
                font-size: 23px;
                padding: 10px 30px;
            }
            .max-width{
                max-width: 930px;
            }
            .about .about-content .column{
                width: 100%;
            }
            .about .about-content .left{
                display: flex;
                justify-content: center;
                margin: 0 auto 60px;
            }
            .about .about-content .right{
                flex: 100%;
            }
            .services .serv-content .card{
                width: calc(50% - 10px);
                margin-bottom: 20px;
            }
            .contact .contact-content .column{
                width: 100%;
                margin-bottom: 35px;
            }
        }

        @media (max-width: 690px) {
            .max-width{
                padding: 0 23px;
            }
            .home .home-content .text-2{
                font-size: 60px;
            }
            .home .home-content .text-3{
                font-size: 32px;
            }
            .home .home-content a{
                font-size: 20px;
            }
            .services .serv-content .card{
                width: 100%;
            }
        }

        @media (max-width: 500px) {
            .home .home-content .text-2{
                font-size: 50px;
            }
            .home .home-content .text-3{
                font-size: 27px;
            }
            .about .about-content .right .text{
                font-size: 19px;
            }
            .contact .right form .fields{
                flex-direction: column;
            }
            .contact .right form .name,
            .contact .right form .email{
                margin: 0;
            }
            .right form .error-box{
            width: 150px;
            }
            .scroll-up-btn{
                right: 15px;
                bottom: 15px;
                height: 38px;
                width: 35px;
                font-size: 23px;
                line-height: 38px;
            }
        }
       .home{
           display: flex;
           background: url("images/bg.jpg" ) no-repeat center;
           height: 100vh;
           color: hsl(180, 33%, 95%);
           min-height: 500px;
           background-size: cover;
           background-attachment: fixed;
           font-family: "Ubuntu", sans-serif;
       }
       #counter12 {
           font-size: 16px;
           color:black;
           margin-top: 20px;
       }
   </style>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">' . $Pname . '<span> Portfolio</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">' . $name . '</div>
                <div class="text-3">And I am good at <span class="typing"></span></div>
                <a href="#about">Know More</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                <img src="' . $target_file . '" alt="User Picture">
                </div>
                <div class="column right">
                    <div class="text">I am ' . $name . ' and I am good at <span class="typing-2"></span></div>
                    <p>'.$about.'</p>
                    <a href="'.$resume_target_file.'" download>Download Resume</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <div class="text">'.$service1.'</div>
                        <p>'.$s1des.'</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text">'.$service2.'</div>
                        <p>'.$s2des.'</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="text">'.$service3.'</div>
                        <p>'.$s3des.'</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>Some Of The Fields Where I have Knowledge Are</p>
                    <a href="#about">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>'.$t1.'</span>
                            <span>'.$t1percen.'</span>
                        </div>
                        <div class="line '.$t1.'"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>'.$t2.'</span>
                            <span>'.$t2percen.'</span>
                        </div>
                        <div class="line '.$t2.'"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>'.$t3.'</span>
                            <span>'.$t3percen.'</span>
                        </div>
                        <div class="line '.$t3.' "></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>'.$t4.'</span>
                            <span>'.$t4percen.'</span>
                        </div>
                        <div class="line '.$t4.'"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>'.$t5.'</span>
                            <span>'.$t5percen.'</span>
                        </div>
                        <div class="line '.$t5.' "></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>'.$t6.'</span>
                            <span>'.$t6percen.'</span>
                        </div>
                        <div class="line '.$t6.' "></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-phone"></i>
                            <div class="info">
                                <div class="head">Phone Number</div>
                                <div class="sub-title"><a href="tel:'.$phone.'">'.$phone.'</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-linkedin"></i>
                            <div class="info">
                                <div class="head">Linkedin</div>
                                <div class="sub-title"><a href="'.$linkedin.'" >'.$linkedin.'</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fa fa-github"></i>
                            <div class="info">
                                <div class="head">Github</div>
                                <div class="sub-title"> <a href="'.$github.'" target="_blank" >'.$github.'</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title"><a href="https://accounts.google.com/v3/signin/identifier?dsh=S839066171%3A1676833541999192&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&rip=1&sacu=1&service=mail&flowName=GlifWebSignIn&flowEntry=ServiceLogin&ifkv=AWnogHdeT_2FJaR7UTVtaBjS40KtOE1VuMkB-5HkOe-CjqAeO6DfSIG-cfXGrxTAbPrcNbpqCVs" target="_blank" >'.$email.'</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject"  placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" name="messages"  placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" >Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://github.com/Keyrun1227/KiranPortfolio.github.io">Kiran</a> | <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>';              
}



elseif ($template == 'template2') {
   // Generate portfolio using template 2
   $portfolio = '<!DOCTYPE html>
   <html lang="en">
   
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>' . $name . ' Portfolio </title>
       <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

       <style>
           @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
   
           * {
               margin: 0;
               padding: 0;
               box-sizing: border-box;
               list-style: none;
               text-decoration: none;
               scroll-behavior: smooth;
               scroll-padding-top: 2rem;
               font-family: "Poppins", sans-serif;
           }
   
           :root {
               --main-color: #033a80;
               --bg-color: #fff;
               --text-color: #0f0c27;
               --hover: hsl(260, 100%, 51%);
               --big-font: 3.2rem;
               --medium-font: 1.8rem;
               --p-font: 0.941rem;
           }
   
           section {
               padding: 50px 10%;
           }
   
           body.active {
               --text-color: #fff;
               --bg-color: #0f0c27;
           }
   
           body {
               background: var(--bg-color);
               color: var(--text-color);
           }
   
           *::selection {
               color: var(--bg-color);
               background: var(--main-color);
           }
   
           .heading {
               text-align: center;
           }
   
           .heading h2 {
               font-size: 30px;
           }
   
           .heading span {
               font-size: var(--p-font);
               color: rgb(2, 166, 70);
           }
   
           header {
               position: fixed;
               width: 100%;
               top: 0;
               right: 0;
               z-index: 1000;
               display: flex;
               align-items: center;
               justify-content: space-between;
               background: var(--bg-color);
               padding: 13px 10%;
               transition: 0.2s;
               box-shadow: -3px -3px 7px #ffffff73,
                   2px 2px 5px rgba(94, 104, 121, 0.288);
           }
   
           header.shadow {
               box-shadow: 0 0 4px rgb(14 55 54 / 15%);
           }
   
           .logo {
               font-size: 1.61rem;
               font-weight: 600;
               color: var(--text-color);
           }
   
           .logo span {
               font-size: 1.61rem;
               font-weight: 600;
               color: crimson;
           }
   
           .navbar {
               display: flex;
           }
   
           .navbar a {
               font-size: 1rem;
               padding: 10px 20px;
               color: var(--text-color);
               font-weight: 500;
           }
   
           .navbar a:hover {
               color: var(--hover);
           }
   
           #menu-icon {
               font-size: 24px;
               cursor: pointer;
               z-index: 10001;
               display: none;
           }
   
           #darkmode {
               font-size: 22px;
               cursor: pointer;
           }
   
           .home {
               position: relative;
               width: 100%;
               min-height: 100vh;
               display: grid;
               grid-template-columns: 0.2fr 1fr 1fr;
               align-items: center;
               gap: 1rem;
           }
   
           .home-img {
               order: 3;
           }
   
           .home-img img {
               width: 100%;
           }
   
           .home-text span {
               font-size: var(--medium-font);
               font-weight: 500;
           }
   
           .home-text h1 {
            font-size: 27px;
           }
   
           .home-text h2 {
            font-size: 75px;
            font-weight: 600;
            margin-left: -3px;
            color:navy;
           }
   
           .home-text p {
            font-size: 30px;
            margin: 5px 0;
           }

           .home .home-text span{
            color: rgb(228, 137, 18);
            font-weight: 500;
        }
   
           .social {
               display: flex;
               flex-direction: column;
           }
   
           .social a {
               margin-bottom: 1rem;
               font-size: 22px;
               color: var(--text-color);
           }
   
           .social a:hover {
               color: var(--hover);
           }
   
           .btn {
               display: inline-block;
               background: var(--main-color);
               color: #fff;
               padding: 0.7rem 1.3rem;
               border-radius: 0.5rem;
           }
   
           .btn:hover {
               background: var(--hover);
           }
   
   
           .about-container {
               display: grid;
               grid-template-columns: repeat(2, 1fr);
               gap: 1rem;
               margin-top: 2rem;
           }
   
           .about-img img {
               width: 80%;
               border-radius: 0.5rem;
           }
   
           .about-text p {
               font-size: var(--p-font);
               font-weight: 400;
               text-align: justify;
           }
   
           .information {
               margin: 1rem 0 1.4rem;
           }
   
           .information .info-box {
               display: flex;
               align-items: center;
               margin-bottom: 1.4rem;
           }
   
           .information .info-box .bx {
               font-size: 22px;
           }
   
           .information .info-box span {
               font-weight: 400;
               margin-left: 1rem;
           }
   
           .skills-container {
               display: grid;
               grid-template-columns: repeat(2, 1fr);
               align-items: center;
               gap: 2rem;
               margin-top: 4rem;
           }
   
           .skills-text {
               width: 80%;
               padding-left: 4rem;
               object-position: center;
           }
   
           .bars-box {
               position: relative;
               display: flex;
               justify-content: space-between;
               align-items: center;
               padding: 1rem 0;
               margin-bottom: 1rem;
           }
   
           .bars-box h3,
           span {
               font-size: 1.1rem;
               font-weight: 500;
           }
   
           .light-bar {
               position: absolute;
               bottom: 0;
               left: 0;
               width: 100%;
               height: 0.5rem;
               background: hsla(260, 100%, 44%, 0.4);
               border-radius: 0.5rem;
           }
   
           .percent-bar {
               position: absolute;
               bottom: 0;
               left: 0;
               height: 0.5rem;
               background: var(--main-color);
               border-radius: 0.5rem;
           }
   
           .'.$t1.'-bar {
               width: '.$t1percen.'%;
           }
   
           .'.$t2.'-bar {
                width: '.$t2percen.'%;
           }
   
           .'.$t3.'-bar {
               width: '.$t3percen.'%;
           }
   
           .'.$t4.'-bar {
              width: '.$t4percen.'%;
           }
           .'.$t5.'-bar {
              width: '.$t5percen.'%;
            }
            .'.$t6.'-bar {
               width: '.$t6percen.'%;
            }

   
           .services-content {
               display: grid;
               grid-template-columns: repeat(auto-fit, minmax(200px, auto));
               justify-content: center;
               gap: 1rem;
               margin-top: 2rem;
           }
   
           .services-box {
               padding: 20px;
               width: 260px;
               display: flex;
               flex-direction: column;
               align-items: center;
               text-align: center;
               border-radius: 0.5rem;
               border-bottom: 2px solid var(--main-color);
               box-shadow: 0 2px 7px rgb(14 55 54 / 15%);
           }
   
           .services-box:hover {
               background-color: #02225a;
           }
           .services-box:hover p{
            background-color: red;
        }

   
           .services-box h3 {
               font-size: 1rem;
               font-weight: 600;
               margin: 0.7rem 0 0.4rem;
           }
   
           .services-box:hover h3 {
               color: #fff;
           }
   
           .services-box .bx {
               padding-top: 2rem;
               font-size: 54px;
               color: var(--main-color);
           }
   
           .services-box:hover .bx {
               color: #22cf91;
           }
   
           .services-box a {
               color: var(--main-color);
               font-size: var(--p-font);
               font-weight: 500;
           }
   
           .services-box:hover a {
               color: #8b8a8f;
           }
   
           .contact-form {
               display: grid;
               place-items: center;
               margin-top: 2rem;
           }
   
           .contact-form form {
               display: flex;
               flex-direction: column;
               width: 650px;
           }
   
           form input,
           textarea {
               padding: 15px;
               border-radius: 0.5rem;
               width: 100%;
               border: none;
               outline: none;
               background: hsla(260, 100%, 44%, 0.1);
               margin-bottom: 1rem;
               color: var(--text-color);
           }
   
           form input::placeholder,
           textarea::placeholder {
               color: var(--text-color);
           }
   
           form textarea {
               resize: none;
               height: 200px;
           }
   
           .contact-button {
               width: 160px;
               cursor: pointer;
               background: #2768d9;
               color: #fff;
               justify-content: center;
               text-transform: uppercase;
               letter-spacing: 1px;
               margin-left: 35%;
           }
   
           .contact-button:hover {
               background: var(--hover);
           }
   
           .footer {
               display: grid;
               place-items: center;
               padding: 20px;
               color: #000;
           }
   
           .footer h2 {
               font-size: 1.5rem;
               margin-bottom: 1.6rem;
               color: var(--text-color)
           }
   
           .footer-social a i {
               color: rgb(10, 26, 208);
               font-size: 25px;
               margin-left: 10px;
               text-align: center;
               line-height: 40px;
               background-color: #fff;
               border-radius: 50%;
               width: 40px;
               height: 40px;
           }
   
           .copyright {
               padding: 20px;
               background: var(--main-color);
               text-align: center;
               color: #fff;
           }
   
           .copyright a {
               color: #22cf91;
           }
   
           /* For Mobile */
           @media (max-width: 991px) {
               header {
                   padding: 18px 4%;
               }
   
               section {
                   padding: 50px 4%;
               }
           }
   
           @media (max-width: 881px) {
               :root {
                   --big-font: 2.7rem;
                   --medium-font: 1.4rem;
               }
           }
   
           @media (max-width: 768px) {
               :root {
                   --big-font: 2.4rem;
                   --medium-font: 1.2rem;
               }
   
               header {
                   padding: 11px 4%;
               }
   
               #menu-icon {
                   display: initial;
                   color: var(--text-color);
               }
   
               header .navbar {
                   position: absolute;
                   top: -500px;
                   left: 0;
                   right: 0;
                   display: flex;
                   flex-direction: column;
                   background: var(--bg-color);
                   box-shadow: 0 4px 4px rgb(0 0 0 / 10%);
                   transition: 0.2s ease;
                   text-align: center;
               }
   
               .navbar.active {
                   top: 100%;
               }
   
               .navbar a {
                   padding: 1.5rem;
                   display: block;
                   background: var(--bg-color);
               }
   
               #darkmode {
                   position: absolute;
                   top: 1.4rem;
                   right: 2rem;
               }
   
               .scroll-down {
                   display: none;
               }
   
               .home {
                   grid-template-columns: 0.5fr 3fr;
               }
   
               .home-text {
                   grid-column: 1/3;
                   padding-left: 1.4rem;
               }
   
               .home-img {
                   order: initial;
               }
   
               .about-container {
                   grid-template-columns: 1fr;
               }
   
               .about-img {
                   display: flex;
                   justify-content: center;
               }
   
               .skills-container {
                   grid-template-columns: 1fr;
               }
   
               .skills-img img {
                   padding-left: 0;
               }
   
               .skills-img {
                   padding-top: 2rem;
                   display: flex;
                   justify-content: center;
               }
   
               .contact-form form {
                   width: 300px;
               }
   
               .contact-button {
                   margin-left: 25%;
               }
           }
   
           @media (max-width: 340px) {
               :root {
                   --big-font: 1.7rem;
                   --medium-font: 1.1rem;
               }
   
               .home-text span {
                   font-size: 1rem;
               }
   
               .home-text h2 {
                   font-size: 0.9rem;
                   font-weight: 500;
               }
   
               .information .info-box span {
                   font-size: 1rem;
               }
   
               .contact-form form {
                   width: 300px;
               }
   
               .contact-button {
                   margin-left: 25%;
               }
           }
       </style>
       <script>
       $(document).ready(function(){
       var typed = new Typed(".typing", {
           strings: ["'.$skill1.'","'.$skill2.'","'.$skill3.'"],
           typeSpeed: 100,
           backSpeed: 60,
           loop: true
       });
   });
</script>
   </head>
   
   <body>
       <!-- Navbar  Section Start -->
       <header>
           <a href="#" class="logo">' . $Pname . '<span> Portfolio</span>.</a>
   
           <div class="bx bx-menu" id="menu-icon"></div>
   
           <ul class="navbar">
               <li><a href="#home">Home</a></li>
               <li><a href="#about">About</a></li>
               <li><a href="#skills">Skills</a></li>
               <li><a href="#services">Services</a></li>
               <li><a href="#contact">Contact</a></li>
               <div class="bx bx-moon" id="darkmode"></div>
           </ul>
       </header>
       <!-- Navbar Section End -->
       <!-- Home Section Start -->
       <section class="home" id="home">
   <div class="social">
       <a href="'.$github.'" target="blank"><i class="bx bxl-github"></i></a>
       <a href="'.$linkedin.'" target="blank"><i class="bx bxl-linkedin"></i></a>
       <a href="'.$email.'" target="blank"><i class="bx bxs-envelope"></i></a>
       <a href="tel:'.$phone.'"><i class="bx bxs-phone"></i></a>
   </div>
   <div class="home-img">
       <img src="' . $target_file . '" alt="User Picture">
   </div>
   <div class="home-text">
       <h1>Hello, I am </h1>
       <h2>' . $name . '</h2>
       <p>I am good at <span class="typing"></span></p>
   </div>
</section>
       <!-- Home Section End -->
       <!-- About Section Start -->
   
       <section class="about" id="about">
           <div class="heading">
               <h2>About Me</h2>
               <span>Introduction</span>
           </div>
   
           <div class="about-container">
               <div class="about-img">
               <img src="' . $target_file . '" alt="User Picture">
               </div>
               <div class="about-text">
                   <p>'.$about.'</p>
                   <div class="information">
                       <div class="info-box">
                           <i class="bx bxs-user"></i>
                           <span>' . $name . '</span>
                       </div>
   
                       <div class="info-box">
                           <i class="bx bxs-phone"></i>
                           <span>' . $phone. '</span>
                       </div>
   
                       <div class="info-box">
                           <i class="bx bxs-envelope"></i>
                           <span>' . $email . '</span>
                       </div>
                   </div>
                   <a href="'.$resume_target_file.'" download class="btn">Download Cv</a>
               </div>
           </div>
       </section>
       <!-- About Section End -->
   
       <!-- Skills Section Start -->
   
       <section class="skills" id="skills">
           <div class="heading">
               <h2>Skills</h2>
               <span>My Skills</span>
           </div>
   
           <div class="skills-container">
               <div class="bars">
                   <div class="bars-box">
                       <h3>'.$t1.'</h3>
                       <span>'.$t1percen.'%</span>
                       <div class="light-bar"></div>
                       <div class="percent-bar '.$t1.'-bar"></div>
                   </div>
                   <div class="bars-box">
                    <h3>'.$t2.'</h3>
                    <span>'.$t2percen.'%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar '.$t2.'-bar"></div>
                  </div>
                  <div class="bars-box">
                    <h3>'.$t3.'</h3>
                    <span>'.$t3percen.'%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar '.$t3.'-bar"></div>
                  </div>
                  <div class="bars-box">
                    <h3>'.$t4.'</h3>
                    <span>'.$t4percen.'%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar '.$t4.'-bar"></div>
                  </div>
                  <div class="bars-box">
                    <h3>'.$t5.'</h3>
                    <span>'.$t5percen.'%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar '.$t5.'-bar"></div>
                  </div>
                  <div class="bars-box">
                    <h3>'.$t6.'</h3>
                    <span>'.$t6percen.'%</span>
                    <div class="light-bar"></div>
                    <div class="percent-bar '.$t6.'-bar"></div>
                  </div>
                </div>
                <div class="skills-text">
                    <h3>My creative skills & experiences.</h3>
                    <p>Some Of The Fields Where I have Knowledge Are</p>
                    <a href="#about"><span>Read more</span></a>
                </div>
            </div>
        </div>
       </section>
       <!-- Skills Section End -->
       <!-- Services Section Start -->
       <section class="services" id="services">
           <div class="heading">
               <h2>Services</h2>
               <span>Our Services</span>
           </div>
           <div class="services-content">
   
               <div class="services-box">
                   <i class="bx bx-code-alt"></i>
                   <h3>'.$service1.'</h3>
                   <p>'.$s1des.'</p>
               </div>
   
               <div class="services-box">
                   <i class="bx bx-server"></i>
                   <h3>'.$service2.'</h3>
                   <p>'.$s2des.'</p>
               </div>
               <div class="services-box">
                   <i class="bx bx-brush"></i>
                   <h3>'.$service3.'</h3>
                   <p>'.$s3des.'</p>
               </div>
   
               <div class="services-box">
                   <i class="bx bxl-android"></i>
                   <h3>App Development</h3>
                   <a href="#">Learn More</a>
               </div>
           </div>
       </section>
       <!-- Services Section End -->
   
       <!-- Contact Section Start -->
       <section class="contact" id="contact">
           <div class="heading">
               <h2>Contact</h2>
               <span>Connect With Me</span>
           </div>
           <div class="contact-form">
               <form action="">
                   <input type="text" placeholder="Your Name">
                   <input type="email" name="" id="" placeholder="Your Email">
                   <textarea name="" id="" cols="30" rows="10" placeholder="Write Message Here..."></textarea>
                   <input type="button" value="Send" class="contact-button">
               </form>
           </div>
       </section>

       <!-- Contact Section End -->
       <div class="copyright">
           <span>Created By <a href="https://github.com/Keyrun1227/KiranPortfolio.github.io">Kiran</a> | <span class="far fa-copyright"></span> 2023 All rights reserved.</span>
       </div>
       <!-- Javascript -->
   </body>
   <script>
       let header = document.querySelector("header");
       let menu = document.querySelector("#menu-icon");
       let navbar = document.querySelector(".navbar");
   
       window.addEventListener("scroll", () => {
           header.classList.toggle("shadow", window.scrollY > 0);
       });
   
       menu.onclick = () => {
           navbar.classList.toggle("active");
       };
       window.onscroll = () => {
           navbar.classList.remove("active");
       };
   
       // Dark Mode / light mode
       let darkmode = document.querySelector("#darkmode");
   
       darkmode.onclick = () => {
           if (darkmode.classList.contains("bx-moon")) {
               darkmode.classList.replace("bx-moon", "bx-sun");
               document.body.classList.add("active");
           } else {
               darkmode.classList.replace("bx-sun", "bx-moon");
               document.body.classList.remove("active");
           }
       };
   </script>
   </html>';
} 
elseif ($template == 'template3') {
    // Generate portfolio using template 3
    $portfolio = '<!DOCTYPE html>
    <body lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>' . $Pname . ' Portfolio</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap");
    
            :root {
                --main-color: crimson;
                --primary-bg-color: #fff;
                --secondary-bg-color: #eee;
                --primary-text-color: #222;
                --secondary-text-color: #666;
            }
    
            * {
                font-family: "Roboto", sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                text-transform: capitalize;
                outline: none;
                border: none;
                text-decoration: none;
                transition: all .3s cubic-bezier(.38, 1.15, .7, 1.12);
            }
    
            *::selection {
                background-color: var(--main-color);
                color: #fff;
            }
    
            html {
                font-size: 62.5%;
                overflow-x: hidden;
            }
    
            html::-webkit-scrollbar {
                width: 1.3rem;
            }
    
            html::-webkit-scrollbar-track {
                background-color: var(--secondary-bg-color);
            }
    
            html::-webkit-scrollbar-thumb {
                background-color: var(--main-color);
            }
    
            body {
                background: var(--secondary-bg-color);
            }
    
            body.dark-theme {
                --primary-bg-color: #252C48;
                --secondary-bg-color: #171C32;
                --primary-text-color: #fff;
                --secondary-text-color: #eee;
            }
    
            section {
                padding: 1rem 0;
                padding: 0 8%;
            }
    
            .btn {
                display: inline-block;
                padding: 0.9rem 3.5rem;
                font-size: 2rem;
                background: none;
                color: #fff;
                border-radius: 0.5rem;
                box-shadow: 0px 0px 10px 0px grey;
                margin-top: 1rem;
                z-index: 0;
                position: relative;
                overflow: hidden;
                border: 0.2rem solid var(--main-color);
            }
    
            .btn::before {
                content:"";
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                border-radius: 0.5rem;
                background: var(--main-color);
                height: 85%;
                width: 95%;
                z-index: -1;
                transition: 0.3s linear;
            }
    
            .btn:hover:before {
                top: 100%;
                transform: translate(-50%, 100%);
            }
    
            .btn:hover {
                color: var(--primary-text-color);
            }
    
            .heading {
                font-size: 5rem;
                color: var(--primary-text-color);
                text-align: center;
                padding: 1rem;
                text-transform: uppercase;
            }
    
            .heading span {
                color: var(--main-color);
                text-transform: uppercase;
            }
    
            #menu {
                font-size: 2rem;
                background: var(--main-color);
                color: #fff;
                border-radius: 5rem;
                height: 5rem;
                width: 5rem;
                text-align: center;
                line-height: 5rem;
                position: fixed;
                top: 2rem;
                right: 2rem;
                z-index: 1000;
                cursor: pointer;
                box-shadow: 0px 0px 5px 0px var(--main-color);
    
            }
    
            #theme-toggler {
                font-size: 2rem;
                background: var(--main-color);
                color: #fff;
                border-radius: 5rem;
                height: 5rem;
                width: 5rem;
                text-align: center;
                line-height: 5rem;
                position: fixed;
                top: 9rem;
                right: 2rem;
                z-index: 1000;
                cursor: pointer;
                box-shadow: 0px 0px 5px 0px var(--main-color);
    
            }
    
            #menu.fa-times {
                transform: rotate(-180deg);
            }
    
            .navbar {
                position: fixed;
                top: 2.0rem;
                right: 2.5rem;
                padding: 1.1rem 2rem;
                padding-right: 4rem;
                z-index: 999;
                border: 0.2rem solid var(--main-color);
                border-radius: 1000px;
                background: var(--primary-bg-color);
                opacity: 0;
                transform-origin: top right;
                transform: scale(0);
            }
    
            .navbar.nav-toggle {
                opacity: 1;
                transform: scale(1);
            }
    
            .navbar a {
    
                font-size: 2rem;
                padding: 0.3rem;
                padding-right: 1rem;
                color: var(--primary-text-color);
            }
    
            @media (max-width: 768px) {
                .navbar a {
                    display: block;
                    font-size: 2rem;
                    padding: 1rem;
                    padding-right: 7rem;
    
                }
            }
    
            .navbar a:hover {
                color: var(--main-color);
                transform: translateX(1rem);
            }
    
    
            .home {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
            }
    
            .home .image {
                flex: 1 1 40rem;
                padding: 1rem;
                text-align: center;
            }
    
            .home .image img {
                height: 60rem;
                box-shadow: 0px 0px 10px 0px rgb(56, 56, 56);
                border-top: 3rem solid #0984e3;
                border-right: 3rem solid #0984e3;
                border-bottom: 3rem solid var(--main-color);
                border-left: 3rem solid var(--main-color);
                border-radius: 0.7rem;
            }
    
            .home .content {
                flex: 1 1 40rem;
                padding: 1rem;
            }
    
            .home .content .hey {
                background: var(--main-color);
                color: #fff;
                font-size: 1.4rem;
                font-weight: 600;
                padding: 3px 10px;
                position: relative;
                border-radius: 3px;
                line-height: 1.8rem;
                box-shadow: 0px 0px 10px 0px grey;
    
    
            }
    
            .home .content .hey::after {
                position: absolute;
                content: "";
                bottom: -10px;
                left: 1px;
                border-top: 0px solid transparent;
                border-left: 10px solid #4c84ff;
                border-bottom: 10px solid transparent;
            }
    
            .home .content h3 {
                color: var(--primary-text-color);
                font-size: 5rem;
                margin-top: 20px;
            }
    
            .home .content h3 span {
                color: var(--main-color);
            }
    
            .text {
                font-size: 3rem;
                margin-top: 20px;
                margin-bottom: 20px;
                color: var(--primary-text-color);
            }
    
            .text .typing {
                font-weight: bold;
            }
    
            .home .content p {
                padding: 1rem 0;
                color: var(--secondary-text-color);
                font-size: 1.5rem;
                line-height: 1.5;
            }
    
            .about .row {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
            }
    
            .about .row .box {
                flex: 1 1 40rem;
                background: var(--primary-bg-color);
                box-shadow: 0 0 8px 0px rgb(0, 0, 0, .1);
                padding: 0.5rem 1.5rem;
                margin: 1.5rem;
            }
    
            .about .row .box .tittle {
                color: var(--primary-text-color);
                font-size: 2.5rem;
                padding: 1rem 0;
            }
    
            .about .row .box .progress {
                padding: 1rem 0;
            }
    
            .about .row .box .progress h3 {
                font-size: 1.7rem;
                color: var(--secondary-text-color);
                display: flex;
                justify-content: space-between;
            }
    
            .about .row .box .progress .bar {
                height: 2.5rem;
                border-radius: .5rem;
                border: 4px solid var(--main-color);
                padding: 0.5rem;
                margin: 1rem 0;
            }
    
            .about .row .box .progress .bar span {
                height: 100%;
                border-radius: 0.3rem;
                background: var(--main-color);
                display: block;
            }
    
            .about .row .box:nth-child(1) .progress:nth-child(2) .bar span {
                width:'.$t1percen.'%;
            }
    
            .about .row .box:nth-child(1) .progress:nth-child(3) .bar span {
                width:'.$t2percen.'%;
            }
    
            .about .row .box:nth-child(1) .progress:nth-child(4) .bar span {
                width:'.$t3percen.'%;
            }
    
            .about .row .box:nth-child(1) .progress:nth-child(5) .bar span {
                width: 50%;
            }
    
            .about .row .box:nth-child(2) .progress:nth-child(2) .bar span {
                width:'.$t4percen.'%;
            }
    
            .about .row .box:nth-child(2) .progress:nth-child(3) .bar span {
                width:'.$t5percen.'%;
            }
    
            .about .row .box:nth-child(2) .progress:nth-child(4) .bar span {
                width:'.$t6percen.'%;
            }
    
            .about .row .box:nth-child(2) .progress:nth-child(5) .bar span {
                width: 40%;
            }
    
            .about .row .box .exp-box {
                padding: 0 1.8rem;
                margin-top: 1rem;
                margin-bottom: 2rem;
                border-left: 0.2rem solid var(--main-color);
                position: relative;
            }
    
            .about .row .box .exp-box h3 {
                color: var(--main-color);
                font-size: 2rem;
    
            }
    
            .about .row .box .exp-box p {
                color: var(--secondary-text-color);
                font-size: 1.4rem;
                padding: 1rem 0;
            }
    
            .about .row .box .exp-box::before {
                position: absolute;
                top: 0;
                left: -1rem;
                border-radius: 50%;
                height: 2rem;
                width: 2rem;
                background: var(--main-color);
            }
            .services .box-container {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
    
            }
    
            .services .box-container .box {
                background-image: url("https://personal-portfolio-2-tutorial.netlify.app/images/img-1.png");
                background-size: cover;
                box-shadow: 0px 0px 20px 0px grey;
                margin: 1rem;
                padding: 1rem;
                width: 33rem;
                height: 35rem;
                text-align: center;
                position: relative;
                z-index: 1;
                overflow: hidden;
                border: 1px solid none;
                border-radius: 1rem;
                transition: all linear .5s;
            }
    
            .services .box-container .box:hover {
                transform: translate(0px, -3px);
                box-shadow: 0px 0px 10px 0px grey;
            }
    
            .services .box-container .box:after {
                content: "";
                position: absolute;
                left: 0;
                top: 0;
                height: 100%;
                width: 100%;
                background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
                opacity: 0.9;
                z-index: -1;
            }
    
            .services .box-container .box .content h3 {
                color: white;
                font-size: 3rem;
                margin-bottom: 1.5rem;
    
            }
    
            .services .box-container .box .content p {
                color: white;
    
                font-size: 1.6rem;
                margin-bottom: 1.5rem;
                font-family: fantasy;
            }
    
            .services .box-container .box .content button {
                width: 100px;
                height: 50px;
                border: 3px solid var(--main-color);
                border-radius: 0.7rem;
                background: none;
                color: white;
                transition: linear 0.5s;
                box-shadow: 0px 0px 10px 0px grey;
                cursor: pointer;
            }
    
            .services .box-container .box .content button:hover {
                background: var(--main-color);
                transform: translate(0px, 5px);
                box-shadow: 0px 0px 20px 0px grey;
    
            }
    
            .services .box-container .box .icon {
                font-size: 9rem;
                color: var(--main-color);
    
            }
            .contact .row {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
            }
            .contact .row form {
                flex: 1 1 40rem;
                background: var(--primary-bg-color);
                padding: 2rem;
                margin: 1rem;
                box-shadow: 0px 0px 7px 0px rgb(69, 69, 69);
            }
            .contact .row .map {
                flex: 1 1 40rem;
                margin: 1rem;
                box-shadow: 0px 0px 10px 0px rgb(69, 69, 69);
                border-radius: 0.5rem;
                border: 2rem solid var(--main-color);
                width: 100%;
            }
    
            .contact .row form .inputBox {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }
    
            .contact .row form input,
            .contact .row form textarea {
                padding: 1rem 0;
                margin: 1rem 0;
                font-size: 1.7rem;
                border-bottom: 0.2rem solid var(--secondary-text-color);
                text-transform: capitalize;
                background: none;
                color: var(--main-color);
                width: 100%;
            }
    
            .contact .row form input::placeholder,
            .contact .row form textarea::placeholder {
                color: var(--secondary-text-color);
            }
    
            .contact .row form input:focus,
            .contact .row form textarea:focus {
                border-color: var(--main-color);
            }
    
            .contact .row form .inputBox input {
                width: 45%;
            }
    
            .contact .row form .textarea {
                height: 15rem;
                resize: none;
            }
    
            .contact .row form .btn {
                cursor: pointer;
            }
    
            .contact .box-container {
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
                align-items: center;
            }
    
            .contact .box-container .box {
                flex: 1 1 30rem;
                margin: 1rem;
                padding: 3rem 1rem;
                background: var(--primary-bg-color);
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.);
                border-radius: 0.5rem;
                text-align: center;
            }
    
            .contact .box-container .box i {
                height: 6rem;
                width: 8rem;
                line-height: 6rem;
                border-radius: 50%;
                font-size: 3rem;
                background: var(--secondary-bg-color);
                color: var(--main-color);
            }
    
            .contact .box-container .box h3 {
                color: var(--primary-text-color);
                padding: 1rem 0;
                font-size: 2rem;
            }
    
            .contact .box-container .box p {
                font-size: 1.5rem;
                color: var(--secondary-text-color);
                text-transform: none;
            }
    
            .footer {
                padding: 2.5rem 1rem;
                text-align: center;
                font-size: 2rem;
                color: var(--primary-text-color);
                background: var(--primary-bg-color);
                margin-top: 1rem;
    
            }
    
            .footer span {
                color: var(--main-color);
            }
    
    
    
            /* Repsonsive  */
    
    
            @media (max-width:991px) {
                html {
                    font-size: 55%;
                }
    
                section {
                    padding: 1rem;
                    padding: 0 3%;
                }
    
            }
    
            @media (max-width:768px) {
                .home .image .img {
                    height: auto;
                    width: 100%;
                }
            }
    
            @media (max-width:400px) {
                html {
                    font-size: 50%;
                }
    
                .services .box-container .box {
                    width: 100%;
                }
    
                .contact .row form .inputBox input {
                    width: 100%;
                }
            }
        </style>
        <script>
        $(document).ready(function () {
            var typed = new Typed(".typing", {
                strings: [
                    "<span style=\"color:crimson;\">'.$skill1.'</span>",
                    "<span style=\"color:#00a8ff;\">'.$skill2.'</span>",
                    "<span style=\"color:#00b894;\">'.$skill3.'</span>",
                ],
                typeSpeed: 100,
                backSpeed: 60,
                loop: true,
            });
    
            $("#menu").click(function () {
                $(this).toggleClass("fa-times");
                $(".navbar").toggleClass("nav-toggle");
            });
    
            $(window).on("scroll load", function () {
                $("#menu").removeClass("fa-times");
                $(".navbar").removeClass("nav-toggle");
            });
    
            $(".portfolio .button-container .btn").click(function () {
                let filter = $(this).attr("data-filter");
    
                if (filter == "all") {
                    $(".portfolio .image-container .box").show("400")
                } else {
                    $(".portfolio .image-container .box").not("." + filter).hide("200");
                    $(".portfolio .image-container .box").filter("." + filter).show("400");
                }
            });
    
            $("#theme-toggler").click(function () {
                $(this).toggleClass("fa-sun");
                $("body").toggleClass("dark-theme");
            });
    
            // smooth scrolling 
            $("a[href*=\"#\"]").on("click", function (e) {
                e.preventDefault();
                $("html, body").animate({
                    scrollTop: $($(this).attr("href")).offset().top,
                },
                500,
                "linear"
                );
            });
        });
    </script>    
    </head>
    
    <body>
        <header>
            <div id="menu" class="uil uil-bars"></div>
            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#services">Services</a>
                <a href="#contact">Contact</a>
            </nav>
            <div id="theme-toggler" class="uil uil-moon"></div>
        </header>
        <section class="home" id="home">
            <div class="image">
            <img src="' . $target_file . '" alt="User Picture">
            </div>
            <div class="content">
                <span class="hey">Hey</span>
                <h3>I am <span>' . $name . '</span></h3>
                <div class="text">And I am good in <span class="typing"></span></div>
                <p>'.$about.'</p>
                <a href="'.$resume_target_file.'" download class="btn">Download Cv</a>
            </div>
        </section>
        <!-- Home Section End -->
        <!-- About Section Start -->
    
        <section class="about" id="about">
    
            <h1 class="heading"> about <span>me</span> </h1>
    
            <div class="row">
    
                <div class="box">
                    <h3 class="tittle">coding skills</h3>
                    <!-- Progress first child -->
                    <div class="progress">
                        <h3> '.$t1.'<span>'.$t1percen.'%</span> </h3>
                        <div class="bar"><span></span></div>
                    </div>

                    <!-- Progress second child -->
                    <div class="progress">
                        <h3> '.$t2.'<span>'.$t2percen.'%</span> </h3>
                        <div class="bar"><span></span></div>
                    </div>

                    <!-- Progress third child  -->
                    <!-- And so on so -->
                    <div class="progress">
                        <h3> '.$t3.'<span>'.$t3percen.'%</span> </h3>
                        <div class="bar"><span></span></div>
                    </div>
                    
                    <div class="progress">
                        <h3> Mern <span>50%</span> </h3>
                        <div class="bar"><span></span></div>
                    </div>
                </div>
    
                <div class="box">
                    <h3 class="tittle">professional skills</h3>
                    <div class="progress">
                        <h3> '.$t4.'<span>'.$t4percen.'%</span> </h3>
                        <div class="bar"><span></span></div>
                    </div>
                    <div class="progress">
                        <h3> '.$t5.'<span>'.$t5percen.'%</span> </h3>
                        <div class="bar"><span></span></div>
                    </div>
                    <div class="progress">
                        <h3> '.$t6.'<span>'.$t6percen.'%</span> </h3>
                        <div class="bar"><span></span></div>
                    </div>
                    <div class="progress">
                        <h3> App development <span>40%</span> </h3>
                        <div class="bar"><span></span></div>
                    </div>
                </div>
    
                <div class="box">
                    <h3 class="tittle">experience</h3>
                    <div class="exp-box">
                    <h3>'.$service1.'</h3>
                    <p>'.$s1des.'</p>
                    </div>
                    <div class="exp-box">
                    <h3>'.$service2.'</h3>
                    <p>'.$s2des.'</p>
                    </div>
                    <div class="exp-box">
                    <h3>'.$service3.'</h3>
                    <p>'.$s3des.'</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section End -->

        <!-- Services Section Start -->
        <section class="services" id="services">
            <h1 class="heading"> <span>My</span> Services</h1>
            <div class="box-container">
                <div class="box">
                    <div class="content">
                        <i class="uil uil-arrow icon"></i>
                         <h3>'.$service1.'</h3>
                         <p>'.$s1des.'</p>
                        <a href="#home"><button>Learn More</button></a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <i class="uil uil-brackets-curly icon"></i>
                        <h3>'.$service2.'</h3>
                        <p>'.$s2des.'</p>
                        <a href="#home"><button>Learn More</button></a>
                    </div>
                </div>
                <div class="box">
                    <div class="content">
                        <i class="uil uil-palette icon"></i>
                        <h3>'.$service3.'</h3>
                        <p>'.$s3des.'</p>
                        <a href="#home"><button>Learn More</button></a>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Services Section End -->
        <!-- Contact Section Start -->
    
        <section class="contact" id="contact">
    
            <h1 class="heading"> contact <span>me</span> </h1>
    
            <div class="box-container">
    
                <div class="box">
                    <i class="uil uil-phone"></i>
                    <h3>my number</h3>
                    <p>'.$phone.'</p>
                </div>
    
                <div class="box">
                    <i class="uil uil-envelopes"></i>
                    <h3>my email</h3>
                    <p>'.$email.'</p>
                </div>
    
                <div class="box">
                    <i class="uil uil-map-marker"></i>
                    <h3>my address</h3>
                    <p>'.$address.' </p>
                </div>
    
            </div>
    
            <div class="row">
    
                <form action="">
                    <div class="inputBox">
                        <input type="text" placeholder="name">
                        <input type="email" placeholder="email">
                    </div>
                    <input type="text" placeholder="subject">
                    <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>
                    <button class="btn"> send message </button>
                </form>
    
                <iframe class="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7568.723081840527!2d83.66371210000001!3d18.46727570000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3c772724754cc9%3A0xcf876cd74c2b6b01!2sGMR%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1678004426694!5m2!1sen!2sin"
                    allowfullscreen width="600" height="450" style="border:0;"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <!-- Contact Section End -->
        <!-- Footer Section start -->
        <div class="footer"><span>Created By <a href="https://github.com/Keyrun1227/KiranPortfolio.github.io">Kiran</a><span
                    class="far fa-copyright"></span> 2023 All rights reserved.</span></div>
</body>
</html>';
}
elseif ($template=='template4'){
    $portfolio=
    '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <script src="https://kit.fontawesome.com/ff25369e82.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <title>'.$Pname.' Portfolio</title>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

/*==================== VARIABLES CSS ====================*/
:root {
    
     --header-height: 3rem;
    /*========== Colors ==========*/
    /* Change favorite color */
    --hue-color: 250; /*Purple 250 - Green 142 - Blue 230 - Pink 340*/

    /* HSL color mode */
    --first-color: hsl(var(--hue-color), 69%, 61%);
    --first-color-second: hsl(var(--hue-color), 69%, 61%);
    --first-color-alt: hsl(var(--hue-color), 57%, 53%);
    --first-color-lighter: hsl(var(--hue-color), 92%, 85%);
    --title-color: hsl(var(--hue-color), 8%, 15%);
    --text-color: hsl(var(--hue-color), 8%, 45%);
    --text-color-light: hsl(var(--hue-color), 8%, 65%);
    --input-color: hsl(var(--hue-color), 70%, 96%);
    --body-color: hsl(var(--hue-color), 60%, 99%);
    --container-color: #fff;
    --scroll-bar-color: hsl(var(--hue-color), 12%, 90%);
    --scroll-thumb-color: hsl(var(--hue-color), 12%, 80%);

    /*========== Font and typography ==========*/
    --body-font: "Poppins", sans-serif;

    /* .5rem = 8px, 1rem = 16px, 1.5rem = 24px ... */
    --big-font-size: 2rem;
    --h1-font-size: 1.5rem;
    --h2-font-size: 1.25rem;
    --h3-font-size: 1.125rem;
    --normal-font-size: .938rem;
    --small-font-size: .813rem;
    --smaller-font-size: .75rem;

    /*========== Font weight ==========*/
    --font-medium: 500;
    --font-semi-bold: 600;

    /*========== Margenes Bottom ==========*/
    /* .25rem = 4px, .5rem = 8px, .75rem = 12px ... */
    --mb-0-25: .25rem;
    --mb-0-5: .5rem;
    --mb-0-75: .75rem;
    --mb-1: 1rem;
    --mb-1-5: 1.5rem;
    --mb-2: 2rem;
    --mb-2-5: 2.5rem;
    --mb-3: 3rem;

    /*========== z index ==========*/
    --z-tooltip: 10;
    --z-fixed: 100;
    --z-modal: 1000;
}

/* Font size for large devices */
@media screen and (min-width: 968px) {
    :root {
        --big-font-size: 3rem;
        --h1-font-size: 2.25rem;
        --h2-font-size: 1.5rem;
        --h3-font-size: 1.25rem;
        --normal-font-size: 1rem;
        --small-font-size: .875rem;
        --smaller-font-size: .813rem;
    }
}


/*========== Variables Dark theme ==========*/
body.dark-theme{
  --first-color-dark: hsl(var(--hue-color), 8%, 20%);
  --first-color-second: hsl(var(--hue-color), 30%, 8%);
  --title-color: hsl(var(--hue-color), 4%, 95%);
  --text-color: hsl(var(--hue-color), 4%, 75%);
  --body-color: hsl(var(--hue-color), 28%, 12%);
  --container-color: hsl(var(--hue-color), 8%, 6%);
  --scroll-bar-color: hsl(var(--hue-color), 12%, 48%);
  --scroll-thumb-color: hsl(var(--hue-color), 12%, 36%);
  --box-shadow: 2px 2px 18px rgb(hsl(var(--input-color)));
  --input-color: hsl(var(--hue-color), 29%, 16%);
  --first-color:#0ef;
  --first-hover:black;
}

/*========== Button Dark/Light ==========*/
.change_theme{
  color: var(--title-color);
  font-size: 1.15rem;
  cursor: pointer;
}

.nav_btns{
  display: inline-flex;
  align-items: center;
  column-gap: 1rem;
}

/*==================== BASE ====================*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

html {
  scroll-behavior: smooth;
}

body {
  margin: 0;
  font-family: var(--body-font);
  font-size: var(--normal-font-size);
  background-color: var(--body-color);
  color: var(--text-color);
}

h1, h2, h3, h4 {
  color: var(--title-color);
  font-weight: var(--font-semi-bold);
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
}

img {
  max-width: 100%;
  height: auto;
}

/*==================== REUSABLE CSS CLASSES ====================*/
.section {
  padding: 2rem 0 4rem;
}

.section__title {
  font-size: var(--h1-font-size);
  color: var(--title-color);
}

.section__subtitle {
  display: block;
  font-size: var(--small-font-size);
  margin-bottom: var(--mb-3);
}

.section__title, 
.section__subtitle {
  text-align: center;
}

/*==================== LAYOUT ====================*/
.container {
  max-width: 968px;
  margin-left: var(--mb-1-5);
  margin-right: var(--mb-1-5);
}

.grid {
  display: grid;
  gap: 1.5rem;
}

.header{
  width: 100%;
  background-color: var(--body-color);
  position: fixed;
  top: 0;
  left: 0;
  z-index: var(--z-fixed);
  transition: .4s; /*For animation dark mode*/
}
/*==================== NAV ====================*/
.nav{
  height: 3rem;
  display: flex;
  

  justify-content: space-between;
  align-items: center;
}

.nav_logo,
.nav_toggle,
.nav_close{
  color: var(--title-color);
}

.nav_logo{
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: -1px;
  display: inline-flex;
  align-items: center;
  column-gap: .5rem;
  transition: .3s;
}

.nav_logo:hover{
  color: var(--first-color);
}

.nav_toggle{
  display: inline-flex;
  font-size: 1.25rem;
  cursor: pointer;
}

@media screen and (max-width: 767px){
  .nav_menu{
    position: fixed;
    background-color: var(--container-color);
    width: 80%;
    height: 100%;
    top: 0;
    right: -100%;
    box-shadow: -2px 0 4px hsla(var(--hue-color), 24%, 15%, .1) ;
    padding: 4rem 0 0 3rem;
    border-radius: 1rem 0 0 1rem;
    transition: .3s;
    z-index: var(--z-fixed);
  }
}

.nav_close{
  font-size: 1.5rem;
  position: absolute;
  top: 1rem;
  right: 1.25rem;
  cursor: pointer;
}

.nav_list{
  display: flex;
  flex-direction: column;
  row-gap: 1.5rem;
}

.nav_link{
  color: var(--title-color);
  font-weight: var(--font-medium);
  transition: .3s;
  

}
.nav_menu a
{
  animation: slidetop .5s ease forwards;
 animation-delay: calc(.2s*var(--i));
 display:inline-block;
}

.nav_link:hover{
  color: var(--first-color);
}

/* show menu */
.show_menu{
  right: 0;
}



/*==================== HOME ====================*/
.home{
  padding: 6.5rem 0 2rem;
}

.home_container{
  position: relative;
  row-gap: 2rem;
}

.home_img{
  justify-self: center;
  background-color: var(--first-color);
  width: 200px;
  height: 200px;
  border-radius: 16%;
  padding: 3px;
  overflow: hidden;
  margin-bottom: var(--mb-1);
  animation: floatimage 4s ease-in-out infinite;
}

.home_title{
  font-size: var(--big-font-size);
  line-height: 104%;
  margin-bottom: var(--mb-0-75);
  animation: slidebottom 1s ease forwards;
  animation-delay: .7s;
}

.home_subtitle{
  font-size: var(--h3-font-size);
  color: var(--text-color);
  font-weight: var(--font-medium);
  margin-bottom: var(--mb-0-75);
  animation: slideright 1s ease forwards;
  animation-delay: .7s;
}

.home_description{
  margin-bottom: var(--mb-2);
  animation: slideleft 1s ease forwards;
  animation-delay: .7s;
}


.home_social{
 
 
  
  justify-items: center;
 
}
.home_social a {
  display: inline-flex;
 justify-content: center;
 align-items: center;
 width: 40px;
 height: 40px;
 background: transparent;
 border:2px solid var(--first-color); 
 border-radius: 50%;
 font-size: 20px;
 color: var(--first-color);
 text-decoration: none;
 margin:30px 15px 30px 0;
 animation: slideleft 1s ease forwards;
 animation-delay: calc(.2s*var(--i));
}
.home_social a:hover
{
  color:#1F242D;
  background-color: var(--first-color);
  box-shadow: 0 0 20px  var(--first-color) ;
}
/*==================== BUTTONS ====================*/
.button{
  display: inline-block;
  background-color: var(--first-color);
  color: #FFF;
  padding: 1rem;
  border-radius: .5rem;
  font-weight: var(--font-medium);
  cursor: pointer;
}

.button:hover{
  background-color: var(--first-color);
}

.button_icon{
  font-style: 1.25rem;
  margin-left: var(--mb-0-5);
  transition: .3s;
}

.button--white{
  background-color: #FFF;
  color: var(--first-color);
}

.button--white:hover{
  background-color: #FFF;
}

.button--flex{
  display: inline-flex;
  align-items: center;
}

.button--small{
  padding: .75rem 1rem;
}

.button--link{
  padding: 0;
  background-color: transparent;
  color: var(--first-color);
}

.button--link:hover{
  background-color: transparent;
  color: var(--first-color-alt);
}

/*==================== ABOUT ====================*/
.about_img{
  width: 500px;
  padding-right: 20px;
  border-radius: .5rem;
  justify-self: center;
  align-self: center;
}
.ptag
{
  visibility:hidden;
  opacity: 0.0;
  display: none;
}

.about_description{
  /* text-align: ; */
  margin-bottom: var(--mb-2-5);
}



/*==================== SKILLS ====================*/
.skills_container{
  row-gap: 0;
}

.skills_header{
  display: flex;
  align-items: center;
  margin-bottom: var(--mb-2-5);
  cursor: pointer;
}

.skills_icon,
.skills_arrow{
  font-size: 2rem;
  color: var(--first-color);
}

.skills_icon{
  margin-right: var(--mb-0-75);
}

.skills_title{
  font-size: var(--h3-font-size);
}

.skills_subtitle{
  font-size: var(--small-font-size);
  color: var(--text-color-light);
}

.skills_list{
  row-gap: 1.5rem;
  padding-left: 2.7rem;
}

.skills_arrow{
  margin-left: auto;
  transition: .4s;
}

.skills_titles{
  display: flex;
  justify-content: space-between;
  margin-bottom: var(--mb-0-5);
}

.skills_name{
  font-size: var(--normal-font-size);
  font-weight: var(--font-medium);
}

.skills_bar,
.skills_percentage{
  height: 5px;
  border-radius: .25rem;
}

.skills_bar{
  background-color: var(--first-color-lighter);
}

.skills_percentage{
  display: block;
  background-color: var(--first-color);
}
.skills_'.$t1.'{
width: '.$t1percen.'%;
}

.skills_'.$t2.'{
width: '.$t2percen.'%;
}

.skills_'.$t3.'{
width: '.$t3percen.'%;
}

.skills_'.$t4.'{
width: '.$t4percen.'%;
}

.skills_'.$t5.'{
width: '.$t5percen.'%;
}
.skills_'.$t6.'{
width: '.$t6percen.'%;
}
.skills_close .skills_list{
  height: 0;
  overflow: hidden;
}

.skills_open .skills_list{
  height: max-content;
  margin-bottom: var(--mb-2-5);
}

.skills_open .skills_arrow{
  transform: rotate(-180deg);
}
/*==================== SERVICES ====================*/
.section_head
{
  padding: 0px 10px;
  margin: -28px 0px 26px 0px;
}
.services_container{
  gap: 1.5rem;
  grid-template-columns: repeat(2, 1fr);
}

.services_content{
  position: relative;
  background-color: var(--container-color);
  padding: 3.5rem .5rem 1.25rem 1.5rem;
  border-radius: .25rem;
  box-shadow: 0 2px 4px rbba(0,0,0,.15);
  transition: .3s;
}

.services_content:hover{
  box-shadow: 0 4px 8px rgba(0,0,0,.15);
}

.services_icon{
  display: block;
  font-size: 1.5rem;
  color: var(--first-color);
  margin-bottom: var(--mb-1);
}

.services_title{
  font-size: var(--h3-font-size);
  margin-bottom: var(--mb-1);
  font-weight: var(--font-medium);
}

.services_button:hover .button_icon{
  transform: translateX(.25rem)
}

.services_modal{
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,.5);
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0 1rem;
  z-index: var(--z-modal);
  opacity: 0;
  visibility: hidden;
  transition: .3s;
}

.services_modal-content{
  position:relative;
  background-color: var(--container-color);
  padding: 1.5rem;
  border-radius: .5rem;
}

.services_modal-services{
  row-gap: 1rem;
}

.services_modal-service{
  display: flex;
}

.services_modal-title{
  font-size: var(--h3-font-size);
  font-weight: var(--font-medium);
  margin-bottom: var(--mb-1-5);
}

.services_modal-close{
  position: absolute;
  top: 1rem;
  right: 1rem;
  font-size: 1.5rem;
  color: var(--first-color);
  cursor: pointer;
}

.services_modal-icon{
  color: var(--first-color);
  margin-right: var(--mb-0-25);
}

.active_modal{
  opacity: 1;
  visibility: visible;
}
/*==================== CONTACT ME ====================*/
.contact_container{
  row-gap: 3rem;
}

.contact_information{
  display: flex;
  margin-bottom: var(--mb-2);
}

.contact_icon{
  font-size: 2rem;
  color: var(--first-color);
  margin-right: var(--mb-0-75);
}

.contact_title{
  font-size: var(--h3-font-size);
  font-weight: var(--font-medium);
}

.contact_subtitle{
  font-size: var(--small-font-size);
  color: var(--text-color-light);
}

.contact_content{
  background-color: var(--input-color);
  border-radius: .5rem;
  padding: .75rem 1rem .25rem;
}

.contact_label{
  font-size: var(--small-font-size);
  color: var(--title-color);
}

.contact_input{
  width: 100%;
  background-color: var(--input-color);
  color: var(--text-color);
  font-family: var(--body-color);
  font-size: var(--normal-font-size);
  border: none;
  outline: none;
  padding: .25rem .5rem .5rem 0;
}
.head {
  font-size: 2em!important;
  font-weight: 300;
  text-shadow: 1px 1px 1px white
}


/*==================== MEDIA QUERIES ====================*/
/* For small devices */
@media screen and (max-width: 350px){
  .container{
    margin-left: var(--mb-1);
    margin-right: var(--mb-1);
  }

  .nav_menu{
    padding: 2rem .25rem 4rem;
  }

  .nav_list{
    column-gap: 0;
  }

  .home_content{
    grid-template-columns: .25fr 3fr;
  }

  .home_scroll{
    visibility: hidden;
  }

  .home_blog{
    width: 180px;
  }

  .skills_title{
    font-size: var(--normal-font-size);
  }

  .services_container{
    grid-template-columns: max-content;
    justify-content: center;
  }

  .services_content{
    padding-right: 3.5rem;
  }

  .services_modal{
    padding: 0 .5rem;
  }

  
}

/* For medium devices */
@media screen and (max-width:568px){
  .home_scroll_social{
    visibility: hidden;
  }
.contact_form
{
  padding: 0px 61px 0px 1px;
}
.head{
  padding: 0px 39px 0px 0px
}
}

@media screen and (min-width:568px){
  .home_container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    padding-top: .5rem;
  }

  .home_data{
    justify-self: center;
    padding-top: 30px;
  }
  .home_img{
    justify-self: center;
    background-color: var(--first-color);
    width: 240px;
    height: 240px;
    border-radius: 16%;
    overflow: hidden;
    padding: 3px;
    order: 1;
  }
  .home_content{
    grid-template-columns: max-content 1fr 1fr;
  }

  .home_data{
    grid-column: initial;
  }

  .about_container,
  .skills_container,
  .contact_container,
  .footer_container{
    grid-template-columns: repeat(2, 1fr);
  }
}

@media screen and (min-width: 767px){
  body{
    margin: 0;
  }

  .nav{
    height: calc(var(--header-height) + 1.5rem);
    column-gap: 3rem;
  }
  .nav_toggle,
  .nav_close{
    display: none;
  }
  .nav_list{
    flex-direction: row;
    column-gap: 3rem;
  }
  .nav_menu{
    margin-left: auto;
  }

  .nav_toogle{
    visibility: hidden;
  }
}
/* For large devices */
@media screen and (min-width: 768px){
  .container{
    margin-left: auto;
    margin-right: auto;
  }

  body{
    margin: 0;
  }

  .section{
    padding: 6rem 0 2rem;
  }

  .section__subtitle{
    margin-bottom: 4rem;
  }

  .header{
    top: 0;
    bottom: initial;
  }

  .header,
  .main,
  .footer_container{
    padding: 0 1rem;
  }

  .nav{
    height: calc(var(--header-height) + 1.5rem);
    column-gap: 1rem;
  }

  .nav_icon,
  .nav_close,
  .nav_toggle{
    display: none;
  }

  .nav_list{
    display: flex;
    column-gap: 2rem
  }

  .nav_list{
    display:flex;
    column-gap: 2rem;
  }

  .nav_menu{
    margin-left: auto;
  }

  .nav_toogle{
    visibility: hidden;
  }

  .change_theme{
    margin: 0;
  }

  .home_container{
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
    padding-top: 3.5rem;
  }

  .home_data{
    justify-self: center;
    padding-top: 50px;
  }

  .home_img{
    justify-self: center;
    background-color: var(--first-color);
    width: 340px;
    height: 340px;
    border-radius: 16%;
    overflow: hidden;
    padding: 3px;
    order: 1;
  }
  .home_social{
    visibility: visible;
  }
  .home_scroll{
    visibility: hidden;
  }  
  .services_container{
    grid-template-columns: repeat(4,218px);
    justify-content: center;
  }

  .services_icon{
    font-size: 2rem;
  }
  
  .services_content{
    padding: 6rem 0 2rem 2.5rem;
  }

  .services_modal-content{
    width: 450%;
  }
  .footer_container{
    grid-template-columns: repeat(3,1fr);
  }

  .footer_bg{
    padding: 3rem 0 3.5rem;
  }

  .footer_links{
    flex-direction: row;
    column-gap: 2rem;
  }

  .footer_social{
    justify-self: flex-end;
  }

  .footer_copy{
    margin-top: 4.5rem;
  }

  /*For x-large devices */
  @media screen and (min-width: 1024px){
    body{
      font-size: var(--font-medium);
    }

    .header,
    .main,
    .footer_container{
      padding: 0;
    }

    .home_img{
      width: 440px;
      height: 440px;
    }

    .nav_toogle{
      visibility: hidden;
    }

    .services_container{
      grid-template-columns: repeat(4, 238px);
    }

  }


}
@keyframes floatimage {
  0%
  {
 transform: translatey(0);
  }
  50%
  {
    transform: translatey(-24px);
  }
  100%
  {
    transform: translatey(0);
  }
}
@keyframes slidebottom {
  0%
  {
 transform: translatey(-100px);
 opacity: 0;
  }
 
  100%
  {
    transform: translatey(0);
    opacity: 1;
  }
}
@keyframes slideright{
  0%
  {
 transform: translatex(-100px);
 opacity: 0;
  }
 
  100%
  {
    transform: translatex(0);
    opacity: 1;
  }
}
@keyframes slideleft{
  0%
  {
 transform: translatex(100px);
 opacity: 0;
  }
 
  100%
  {
    transform: translatex(0);
    opacity: 1;
  }
}
@keyframes slidetop{
  0%
  {
 transform: translatey(100px);
 opacity: 0;
  }
 
  100%
  {
    transform: translatey(0);
    opacity: 1;
  }
}
</style>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav_logo uil uil-moon change_theme" id="theme-button">
                '.$Pname.'
                </a>
                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav-item">
                            <a href="#home" style="--i:1;" class="nav_link active_link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" style="--i:2;"class="nav_link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skills" style="--i:3;"class="nav_link">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services"style="--i:4;" class="nav_link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" style="--i:6;" class="nav_link">Contact Me</a>
                        </li>
                    </ul>
                    <div class="nav_close" id="nav-close">
                        <i class="uil uil-times nav_close" id="nav-close"></i>
                    </div>
                </div>

                <div class="nav_btns">
                    <!--===== THEME CHANGE BUTTON =====-->
                    <div class="nav_toogle" id="nav-toggle">
                        <i class="uil uil-bars"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home_container container grid">
                    <div class="home_img">
                    <img src="' . $target_file . '" alt="User Picture">
                    </div>

                    <div class="home_data">
                        <h1 class="home_title">Hello, It is Me</h1>
                        <h2 class="home_title">' . $Pname . '</h2>
                        <h3 class="home_subtitle"> And I am good at <span id ="text"></span></h3>
                        <p class="home_description">
                          I am a frontend developer and have done many live projects

                        </p>
                        <a href="'.$resume_target_file.'"  download class="button button--flex" id="buts"  >
                            DownloadCV<i id ="icon" class="fa-solid fa-download"></i>
                        </a>
                         
                        <div class="home_social">
                                <a href="'.$linkedin.'"  style="--i:7;" target="_blank" class="home_social-icon">
                                    <i class="uil uil-linkedin-alt"></i>
                                </a>
                                <a href="'.$email.'"style="--i:8;" target="_blank" class="home_social-icon">
                                <i class="far fa-envelope"></i>
                                <a href="'.$github.'" style="--i:9;" target="_blank" class="home_social-icon">
                                    <i class="uil uil-github-alt"></i>
                                </a>
                                <a href="tel:'.$phone.'" style="--i:10;" target="_blank" class="home_social-icon">
                                <i class="fab fa-phone"></i>
                                </a>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
               <h2 class="section__title">My Intersts</h2>
               <span class="section__subtitle">Web Development</span>

               <div  class="about_container container grid"  >
                <div data-aos="fade-right" >
                <img src="' . $target_file . '" alt="User Picture">
                </div>

                 <div class="about_data"  data-aos="fade-left">
                 <p class="about_description pg" >
                    '.$about.'</p>
                 </div>
               </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
              <h2 class="section__title">Skills</h2>
              <span class="section__subtitle">My technical Skills</span>

              <div class="skills_container container grid">
                <div>
                    <!--=========== SKILL 1 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Frontend developer</h1>
                               
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                <h3 class="skills_name">'.$t1.'</h3>
                                    <span class="skills_number">'.$t1percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t1.'"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t2.'</h3>
                                    <span class="skills_number">'.$t2percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t2.'"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t3.'</h3>
                                    <span class="skills_number">'.$t3percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t3.'"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t4.'</h3>
                                    <span class="skills_number">'.$t4percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t4.'"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=========== SKILL 2 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Backend developer</h1>
                                
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t5.'</h3>
                                    <span class="skills_number">'.$t5percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t5.'"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t6.'</h3>
                                    <span class="skills_number">'.$t6percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t6.'"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t2.'</h3>
                                    <span class="skills_number">'.$t2percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t2.'"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t1.'</h3>
                                    <span class="skills_number">'.$t1percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t1.'"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!--=========== SKILL 3 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Programming</h1>
                              
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                        <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t2.'</h3>
                                    <span class="skills_number">'.$t2percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t2.'"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t3.'</h3>
                                    <span class="skills_number">'.$t3percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t3.'"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">'.$t4.'</h3>
                                    <span class="skills_number">'.$t4percen.'%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_'.$t4.'"></span>
                                </div>
                            </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </section>
            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
              <h2 class="section__title section_head">Services</h2> 
             
              
              <div class="services_container container grid">
                <!--============== SERVICES 1 =============-->
                <div class="services_content"  data-aos="fade-right" >
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">'.$service1.'</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal ">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">'.$service1.'</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>'.$s1des.'</p>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!--============== SERVICES 2 =============-->
                <div class="services_content"  data-aos="fade-up" >
                    <div>
                    
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">'.$service2.'</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">'.$service2.'</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>'.$s2des.'</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--============== SERVICES 3 =============-->
                <div class="services_content"  data-aos="fade-down" >
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">'.$service3.'</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">'.$service3.'</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>'.$s3des.'</p>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!--============== SERVICES 4 =============-->
                <div class="services_content"  data-aos="fade-down" >
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">'.$service1.'</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">'.$service1.'</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>'.$s1des.'</p>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
            </section>
            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
              <h2 class="section__title">Contact Me</h2>
              <span class="section__subtitle">Get in touch</span>

              <div class="contact_container container grid">
                <div>
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Call Me</h3>
                            <span class="contact_subtitle"><a href="tel:'.$phone.'">'.$phone.'</a></span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle"><a href="https://accounts.google.com/v3/signin/identifier?dsh=S839066171%3A1676833541999192&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;rip=1&amp;sacu=1&amp;service=mail&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin&amp;ifkv=AWnogHdeT_2FJaR7UTVtaBjS40KtOE1VuMkB-5HkOe-CjqAeO6DfSIG-cfXGrxTAbPrcNbpqCVs" target="_blank">'.$email.'</a></span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-map-marker contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle"><a href="https://www.google.com/maps"target="_blank">'.$address .'</a></span>
                        </div>
                    </div>
                </div>

                <form action="#home" method="Post" class="contact_form grid">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label for="name" class="contact_label">Name</label>
                            <input name ="name" type="text" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label for="email" class="contact_label">Email</label>
                            <input type="email" name="email" class="contact_input">
                        </div>
                    </div>
                    <div class="contact_content">
                        <label for="phone" class="contact_label">Contact</label>
                        <input type="tel"id="contact" name="contact" class="contact_input">
                    </div>
                    <div class="contact_content">
                        <label for="subject" class="contact_label">Subject</label>
                        <textarea name="messages" id="textarea" cols="0" rows="5" class="contact_input"></textarea>
                    </div>
                    <div>
                        <button id ="btn" class="button button--flex">
                            Send Message 
                            <i class="uil uil-message button_icon"></i>
                        </button>
                    </div>
                </form>
              </div>
            </section>
        </main>
        <a href="#" class="scrollup" id="scroll-up">
          <i class="uil uil-arrow-up scrollup_icon"></i>
        </a>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://smtpjs.com/v3/smtp.js"> </script>

        <script>
               /*==================== SERVICES MODAL ====================*/
               const modalViews = document.querySelectorAll(".services_modal"),
               modalBtns = document.querySelectorAll(".services_button"),
               modalCloses = document.querySelectorAll(".services_modal-close");
   
               let modal = function (modalClick) {
               modalViews[modalClick].classList.add("active_modal");
               };
   
               modalBtns.forEach((modalBtn, i) => {
               modalBtn.addEventListener("click", () => {
               modal(i);
               });
               });
   
               modalCloses.forEach((modalClose) => {
               modalClose.addEventListener("click", () => {
               modalViews.forEach((modalView) => {
                   modalView.classList.remove("active_modal");
               });
               });
               });
        </script>
        <script>
            const navMenu = document.getElementById("nav-menu"),
            navToggle = document.getElementById("nav-toggle"),
            navClose = document.getElementById("nav-close");
            /* Validate if constant exists */
            if (navToggle) {
            navToggle.addEventListener("click", () => {
            navMenu.classList.add("show_menu");
            });
            }
            /*==================== DARK LIGHT THEME ====================*/
            const themeButton = document.getElementById("theme-button");

            const darkTheme = "dark-theme";
            const iconTheme = "uil-sun";

            //Previously selected topic(if user selected)
            const selectedTheme = localStorage.getItem("selected-theme");
            const selectedIcon = localStorage.getItem("selected-icon");

            const getCurrentTheme = () =>
            document.body.classList.contains(darkTheme) ? "dark" : "light";
            const getCurrentIcon = () =>
            themeButton.classList.contains(iconTheme) ? "bx-moon" : "bx-sun";

            if (selectedTheme) {
            document.body.classList[selectedTheme === "dark" ? "add" : "remove"](
            darkTheme
            );
            themeButton.classList[selectedIcon === "uil-moon" ? "add" : "remove"](
            iconTheme
            );
            }

            themeButton.addEventListener("click", () => {
            document.body.classList.toggle(darkTheme);
            themeButton.classList.toggle(iconTheme);
            localStorage.setItem("selected-theme", getCurrentTheme());
            localStorage.setItem("selected-icon", getCurrentIcon());
            });
            /*===== MENU HIDDEN =====*/
            /* Validate if constant exists */
            if (navClose) {
            navClose.addEventListener("click", () => {
            navMenu.classList.remove("show_menu");
            });
            }
            const element = document.getElementById("text");

            const prases = ["Web Development", "Machine Learning", "Digital Marketing"];
            let letterindex = 0;
            let phraseindex = 0;
            function printletter(prase) {
            if (letterindex == prase.length) {
            clearletter();
            } else if (letterindex < prase.length) {
            element.textContent += prase.charAt(letterindex);
            letterindex += 1;

            setTimeout(function () {
                printletter(prase);
            }, 150);
            }
            }
            function clearletter() {
            if (letterindex == -1) {
            phraseindex = (phraseindex + 1) % prases.length;
            letterindex = 0;
            printletter(prases[phraseindex]);
            if (phraseindex == 0) {
                element.style.color = "blue";
            }
            if (phraseindex == 1) {
                element.style.color = "red";
            }
            if (phraseindex == 2) {
                element.style.color = "orange";
            }
            } else if (letterindex > -1) {
            let updatedprase = " ";

            for (let index = 0; index < letterindex; index++) {
                updatedprase += prases[phraseindex].charAt(index);
            }

            element.textContent = updatedprase;
            letterindex -= 1;

            setTimeout(clearletter, 100);
            }
            }
            printletter(prases[phraseindex]);
            element.style.color = "green";

            /*==================== REMOVE MENU MOBILE ====================*/
            const navLink = document.querySelectorAll(".nav_link");

            function linkAction() {
            const navMenu = document.getElementById(".nav_menu");
            navMenu.classList.remove(show_menu);
            }
            navLink.forEach((n) => n.addEventListener("click", linkAction));

            /*==================== ACCORDION SKILLS ====================*/
            const skillsContent = document.getElementsByClassName("skills_content"),
            skillsHeader = document.querySelectorAll(".skills_header");

            function toggleSkills() {
            let itemClass = this.parentNode.className;

            for (i = 0; i < skillsContent.length; i++) {
            skillsContent[i].className = "skills_content skills_close";
            }
            if (itemClass === "skills_content skills_close") {
            this.parentNode.className = "skills_content skills_open";
            }
            }

            // initialization of aos
            AOS.init({
            duration: 850,
            once: true,
            });

            skillsHeader.forEach((el) => {
            el.addEventListener("click", toggleSkills);
            });

            let heed = document.querySelector(".section__subtitle");
            let img = document.querySelector(".about_img");
            setInterval(inTimer, 7000);
            /*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
            const sections = document.querySelectorAll("section[id]");

            function scrollActive() {
            const scrollY = window.pageYOffset;

            sections.forEach((current) => {
            const sectionHeight = current.offsetHeight,
                sectionTop = current.offsetTop - 58,
                sectionId = current.getAttribute("id");

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                document
                .querySelector(".nav_menu a[href*=" + sectionId + "]")
                .classList.add("active_link");
            } else {
                document
                .querySelector(".nav_menu a[href*=" + sectionId + "]")
                .classList.remove("active_link");
            }
            });
            }
            window.addEventListener("scroll", scrollActive);

            /*==================== CHANGE BACKGROUND HEADER ====================*/
            function scrollHeader() {
            const nav = document.getElementById("header");
            if (this.scrollY >= 80) {
            nav.classList.add("scroll_header");
            } else {
            nav.classList.remove("scroll_header");
            }
            }
            window.addEventListener("scroll", scrollHeader);

        </script>
    </body>
    </html>';
}
// Display the portfolio
echo $portfolio;
?>
