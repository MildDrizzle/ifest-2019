<!DOCTYPE html>
<html>

<!-- Mirrored from t.commonsupport.com/weston/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 18:19:16 GMT -->
<head>
<meta charset="utf-8">
<title>ISTE | IFEST</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<style>
    #particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  background:black;
}
</style>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<style>
    .flexabc
    {
        display:flex;
        justify-content:center;
        align-items:center;
    }
</style>

<body>

<div class="page-wrapper">
<div id="particles-js"></div>
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php include("includes/navbar.php"); ?>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/contactus.jpg);">
        <div class="parallax-scene parallax-scene-1 anim-icons">
            <span data-depth="0.60" class="parallax-layer icon icon-dots-1"></span>
            <span data-depth="0.70" class="parallax-layer icon twist-line-1"></span>
            <span data-depth="0.80" class="parallax-layer icon icon-circle-7"></span>
            <span data-depth="0.90" class="parallax-layer icon icon-triangles"></span>
        </div>
        <div class="auto-container">
            <h1 >Contact Us</h1>
            
        </div>
    </section>
    <!--End Page Title-->

    
    <!-- Map Section -->
    <section class="contact-info-section">
        
        <div class="">
            <div class="auto-container clearfix">
                <div class="form-box wow fadeInRight">
                    <div class="sec-title">
                        
                        <h2 style="color:white">Drop Us A Line</h2>
                    </div>

                    <div class="contact-form">
                        <form method="post" action="includes/contactforminsert.php" id="contact-form">
                            <div class="row">
                                <div class="form-group">
                                    <input style="color:white" type="text" name="name" placeholder="Your name" required="">
                                </div>
                                
                                <div class="form-group">
                                    <input type="email" style="color:white" name="email" placeholder="Your email" required="">
                                </div>

                                <div class="form-group">
                                    <textarea name="message" style="color:white" placeholder="Your Message"></textarea>
                                </div>
                                
                                <div class="form-group ">
                                    <button class="theme-btn btn-style-four" type="submit" name="Submit">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>


        
    </section>
    <!-- End Map Section -->


    <!-- Main Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

<!--Search Popup-->
<div id="search-popup" class="search-popup">
    <div class="close-search theme-btn"><span class="fa fa-times"></span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            <form method="post" action="http://t.commonsupport.com/weston/index.html">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search Now!" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="#">Business</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">SEO</a></li>
                <li><a href="#">Logistics</a></li>
                <li><a href="#">Freedom</a></li>
            </ul>
        </div>        
    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/particles.js"></script>
<script src="js/psconfig.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/validate.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>

<!-- Mirrored from t.commonsupport.com/weston/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 18:19:18 GMT -->
</html>