
<?php
error_reporting(0);
$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
  echo 'not connected to server';
}
if(!mysqli_select_db($con,'count'))
{
  echo 'darabase not selected';
}
$query="SELECT * FROM visitors";
$run=mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($run))
{
  $no=$row['count'];
$no1 = $no + 1;
$update = mysqli_query($con,"UPDATE 'visitors' SET 'count'=$no1 where 1");
echo $no;
}
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.0.17, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.0.17, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Home</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<link rel="stylesheet" href="team.css" type="text/css">
<link rel="stylesheet" type="text/css" href="team1.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js2/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js2/jssor.slider-26.9.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $Cols: 1,
              $Align: 0,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Cols: 1,
                $Orientation: 2,
                $Align: 0,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}
    </style>
  <style>
  <!-- our team css file -->
.heading-title {
    margin-bottom: 100px;
}
.text-center {
    text-align: center;
}
.heading-title h3 {
    margin-bottom: 0;
    letter-spacing: 2px;
    font-weight: normal;
}
.p-top-30 {
    padding-top: 30px;
}
.half-txt {
    width: 60%;
    margin: 0 auto;
    display: inline-block;
    line-height: 25px;
    color: #7e7e7e;
}
.text-uppercase {
    text-transform: uppercase;
}

.team-member, .team-member .team-img {
    position: relative;
}
.team-member {
    overflow: hidden;
}
.team-member, .team-member .team-img {
    position: relative;
}

.team-hover {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: 0;
    border: 20px solid rgba(0, 0, 0, 0.1);
    background-color: rgba(255, 255, 255, 0.90);
    opacity: 0;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
}
.team-member:hover .team-hover .desk {
    top: 35%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .desk {
    position: absolute;
    top: 0%;
    width: 100%;
    opacity: 0;
    -webkit-transform: translateY(-55%);
    -ms-transform: translateY(-55%);
    transform: translateY(-55%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    padding: 0 20px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.team-member:hover .team-hover .s-link {
    bottom: 10%;
}
.team-member:hover .team-hover, .team-member:hover .team-hover .desk, .team-member:hover .team-hover .s-link {
    opacity: 1;
}
.team-hover .s-link {
    position: absolute;
    bottom: 0;
    width: 100%;
    opacity: 0;
    text-align: center;
    -webkit-transform: translateY(45%);
    -ms-transform: translateY(45%);
    transform: translateY(45%);
    -webkit-transition: all 0.3s 0.2s;
    transition: all 0.3s 0.2s;
    font-size: 35px;
}
.desk, .desk h4, .team-hover .s-link a {
    text-align: center;
    color: #222;
}
.service-box {
  max-width: 400px;
  margin: 50px auto 0; }
  @media (min-width: 992px) {
    .service-box {
      margin: 20px auto 0; } }
  .service-box p {
    margin-bottom: 0; }

.team-member .s-link a {
    margin: 0 10px;
    color: #333;
    font-size: 16px;
}
.team-title {
    position: static;
    padding: 20px 0;
    display: inline-block;
    letter-spacing: 2px;
    width: 100%;
}
.team-title h5 {
    margin-bottom: 0px;
    display: block;
    text-transform: uppercase;
}
.team-title span {
    font-size: 12px;
    text-transform: uppercase;
    color: #a5a5a5;
    letter-spacing: 1px;
}
hr {
  max-width: 50px;
  border-width: 3px;
  border-color: #F05F40; }

hr.light {
  border-color: white; }
.bg-primary {
  background-color: #F05F40 !important; }
.section-heading {
  margin-top: 0; }
  @import url(https://fonts.googleapis.com/css?family=Montserrat:700);
.xyz{
  margin:100;
  padding: 10%;
  width:100%; 
  height:100%;
  overflow:hidden;
}
svg{
  width:100%;
}
i {
    font-size : 12px;
    padding-right: 10px;
    color: #aece61;
}


/* Footer */
.footer {
    position: relative;
    background-color: #092746;
    color: #7d7975;
    padding: 95px 0 50px;
    font-size:16px;
}
.footer p {
    line-height:26px;
    color : #fff;
}
.footer h5 {
    font-size: 22px;
    font-weight: 700;
    color: #aece61  ;
    position: relative;
    padding-bottom: 16px;
}
.footer h5:after {
    content: '';
    display: block;
    margin: 5px 0 0;
    width: 40%;
    height: 1px;
    background-color: #1e1d22 ;
}

.footer ul {
    list-style: none;
    line-height:35px;
    margin: 0px;
    color:#fff;
    
}
.footer a {
    color:# ;
   
}
.footer a:hover {
    color: #aece61 ;
}

/* Footer Logo */
.foot-logo {
    margin: 0px 0px 18px 0px;
    padding: 0;
}

/*footer bottom */
.footer-bottom {
    padding-top: 10px;
    padding-bottom: 25px;
    border-top: 1px solid #2f2f33 ;
    background: #1e1d22  ;
    
}
.copyright-text p {
    color: #7d7975;
    margin-top: 18px;
    margin-bottom: 0;
    font-size:15px;
}

.copyright-text a {
    color: #7d7975;
    margin: 0px 10px 0px 10px;
    
}
.copyright-text a:hover {
    color: #aece61  ;
    
    
}
/* Social Icons */

.social-icons{
    
    margin: 0;
    padding: 0;
    font-size : 10px;
}

.social {
    margin:7px 7px 7px 0px;
    color:#fff;
}


#social-fb:hover {
     color: #3B5998;
     transition:all .25s;
 }
 #social-tw:hover {
     color: #4099FF;
     transition:all .25s;
 }
 #social-gp:hover {
     color: #d34836;
     transition:all .25s;
 }
 #social-em:hover {
     color: #f39c12;
     transition:all .25s;
 }
 
 .footer-four > img {
     width:80%;
 }

</style>
  
</head>
<body>
<section class="menu cid-qr8XABgap9" once="menu" id="menu1-g" data-rv-view="17">

    
 
    <nav class="navbar navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="index.php">
                        <h4>Libx an Automated Bibliotheca</h4>
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="index.php">
                        
                       <h4> Home</h4>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="login.php">
                       
                        <h4>Books</h4>
                    </a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="pages.php">
                        
                        <h4>Papers</h4>
                    </a>
                </li>
            </ul>
            <div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-danger display-4" href="login.php">
                    
                   <h5> LOGIN!</h5>
                </a>
            </div>
<div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-danger display-4" href="register.php">
                    
                    <h5>REGISTER!</h5>
                </a>
            </div>
<div class="navbar-buttons mbr-section-btn">
                <a class="btn btn-sm btn-primary display-4" href="admin.php">
                    
                    <h5>ADMIN</h5>
                </a>
            </div>
        </div>
    </nav>
</section>

<section class="engine"><a href="https://mobirise.co/d">web software</a></section><section class="cid-qr8XAEHM0K mbr-fullscreen" id="header2-e" data-bg-video="https://www.youtube.com/watch?v=RMic5gyKzbs" data-rv-view="19">

    

    

    <div class="container align-center">
        <div class="media-container-column mbr-white col-md-10 offset-md-1">
            <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
              <div class="xyz">
<svg width="100%" height="100%" viewBox="20 -50 600 500" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
 <path id="path">
    <animate attributeName="d" from="m0,110 h0" to="m0,110 h1100" dur="5s" begin="0s" fill="freeze" repeatCount="definite"/>
  </path>
  <text font-size="27" font-family="Montserrat" fill='hsl(0, 100%, 0%)'>
    <textPath xlink:href="#path"> hWelcome to Libx- An Automated Bibliotheca
    </textPath>
  </text>
</svg>
</div>
            </h1>
            
           </div>    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>
<br>
<section class="bg-default" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
          
           <h2 class="section-heading">How it Works/Description</h2>
            
          </div>
        </div>
      </div>
   


<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div data-p="170.00">
                <img data-u="image" src="img/100.png" />
                <div u="thumb"><b>STEP 1</b>:This in the home page, to get access to books ,you need to register.if Registered please login .</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/101.png" />
                <div u="thumb"><b>STEP 2</b>:This is the register page ,once register you can login and gain access to book page .</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/102.png" />
                <div u="thumb"><b>STEP 3</b>:This is the login page ,enter the user id and password to get access to books. </div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/103.png" />
                <div u="thumb"><b>STEP 4</b>:Enter the user id and password and press login button .</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/130.png" />
                <div u="thumb"><b>STEP 5</b>:This is the book page.</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/131.png" />
                <div u="thumb"><b>STEP 5</b>:This is the book page,click on the search bar to search for the book name.</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/132.png" />
                <div u="thumb"><b>STEP 6</b>:Select the book you want to issue.The book is preferenced according to more weight and recommendation .</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/133.png" />
                <div u="thumb"><b>STEP 7</b>:once you issue the book ,book id will be displayed and system will take the issue date.</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/134.png" />
                <div u="thumb"><b>STEP 8</b>:Return the book by typing the book id you see in the list of book you issued .</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/135.png" />
                <div u="thumb"><b>STEP 9</b>:once book is returned ,provide feedback with rating.</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/136.png" />
                <div u="thumb"><b>STEP 10</b>:User can also visit the page section to download IEEE paper ,vit paper ,video lecture .</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/137.png" />
                <div u="thumb"><b>STEP 10</b>:user can download vit paper.</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/138.png" />
                <div u="thumb"><b>STEP 10</b>:User can download IEEE paper.</div>
            </div>
            <div data-p="170.00">
                <img data-u="image" src="img/139.png" />
                <div u="thumb"><b>STEP 10</b>:User can visit the video lecture page.</div>
            </div>
        </div>
        <br>
        <!-- Thumbnail Navigator -->
        <div u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div u="slides">
                <div u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                    <div u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:arial,helvetica,verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
      

        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
            </svg>
        </div>
    </div>
</section>
    <br>
<section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Our History</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
              <h3>30000+ books</h3>
              <p class="text-muted">Our books are updated regularly.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
              <h3>Hard Copy Journals</h3>
              <p class="text-muted">53 Hard copy Journals</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
              <h3>Up to Date</h3>
              <p class="text-muted">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
              <h3>Made with Love from VIT Students</h3>
              <p class="text-muted">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>


<br>




<div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h2 class="section-heading">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOur Guide</h2>
                            
 <div class="col-md-4 col-sm-4">
 </div>
 <div class="col-md-4 col-sm-4">

                            <div class="team-member">
                                <div class="team-img">
                                  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <img src="dv.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4></h4>
                                        <p></p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPROF DEEPALI VORA</h5>
                                <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGuide</span>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  








<div class="container">
                    <div class="row">
                        <div class="heading-title text-center">
                            <h2 class="section-heading">Our Team</h2>
                            

                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="90.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4></h4>
                                        <p></p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>YASH TRIVEDI</h5>
                                <span>Team Leader</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="92.png" alt="team leader" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4></h4>
                                        <p>.</p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>KARTIK KANSARIA</h5>
                                <span>Team Member</span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="125.jpg" alt="team member" class="img-responsive">
                                </div>
                                <div class="team-hover">
                                    <div class="desk">
                                        <h4></h4>
                                        <p></p>
                                    </div>
                                    <div class="s-link">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="team-title">
                                <h5>SAURABH JOSHI</h5>
                                <span>Team Member</span>
                            </div>
                        </div>

                    </div>

                </div></div>
  </div>

<div class="footer-section">
    <div class="footer">
  <div class="container">
        <div class="col-md-4 footer-one">
          <div class="foot-logo">
             <h5> libx- An Automated Bibliotheca</h5>
          </div> 
           
           <p>Providing an Automated solution for library in one step.
                </p>
            <div class="social-icons"> 
               <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
               <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
          </div>
        </div>
        <div class="col-md-2 footer-two">
           <h5>Quick Links</h5>
              <ul>
                    <li><a href="index.html"> home</a> </li>
                    <li><a href="book.php"> books</a> </li>
                    <li><a href="pages.html"> papers</a> </li>
                    
                  </ul>
                  
        </div>
        
        <div class="col-md-4 footer-four">
           <h5>Contact Us</h5>
             <img src="http://iacademy.mikado-themes.com/wp-content/uploads/2017/05/footer-img-1.png">  
                  
        </div>
        
    
    
    
    
    
    <div class="clearfix"></div>
  </div>
</div>

</div>
<div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 ">
              <div class="copyright-text">
                <p>CopyRight © 2018 All Rights Reserved</p>
              </div>
            </div> <!-- End Col -->
            <div class="col-sm-6  ">
                <div class="copyright-text pull-right">
                <p> <a href="index.html">Home</a> Website design by<a href="kartikkansaria.net16.net">kartik kansaria</a>
              </div>          
                          
            </div> <!-- End Col -->
          </div>
        </div>
    </div>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/jquery-mb-ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/jquery-mb-vimeo_player/jquery.mb.vimeo_player.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
</body>
</html>