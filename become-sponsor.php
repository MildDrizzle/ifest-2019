<!DOCTYPE html>
<html>

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

<body>

<div class="page-wrapper">
<div id="particles-js"></div>
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
    <?php include("includes/navbar.php"); ?>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/bcsponsor.PNG);">
        <div class="parallax-scene parallax-scene-1 anim-icons">
            <span data-depth="0.60" class="parallax-layer icon icon-dots-1"></span>
            <span data-depth="0.70" class="parallax-layer icon twist-line-1"></span>
            <span data-depth="0.80" class="parallax-layer icon icon-circle-7"></span>
            <span data-depth="0.90" class="parallax-layer icon icon-triangles"></span>
        </div>
        <div class="auto-container">
            <h1>Become Sponsor</h1>
            
        </div>
    </section>
    <!--End Page Title-->

    <!-- Become Sponsor -->
    <section class="become-sponsor">
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
            
                            <h2 style="color:white">Call For Sponsors</h2>
                        </div>
                        <p style="font-size:18px">We are inviting sponsorship from organizations, cafés, etc. Various levels of sponsorship are possible. Based on the sponsorship level, the sponsor will have access to opportunities for advertising and/or displaying their products. We are open to other suggestions from sponsors as well.
You are invited to be part of this exciting event and actively contribute to the success of iFest 2019.
Your support is very important to us.</p>
                        <p style="font-size:18px">This is a unique opportunity to address and connect with thousands of students from all over Gujarat. During the 3-day fest, you will have many opportunities to reach out to students of different backgrounds, taste and culture.</p>
                        <h3 style="color:white">EXPRESS YOUR INTEREST</h3>
                        <p style="font-size:18px">If you are interested to sponsor iFest'19, please submit your profile through the online form and we will contact you as soon as possible.
In case you have any further questions, please do not hesitate to contact us at <a style="color:white;">president.iste@nirmauni.ac.in</a></p>
                        
                        
                    </div>
                </div>

                <div class="rorm-column col-lg-4 col-md-12 col-sm-12">
                    <div class="application-form" style="background-image: url(images/background/20.jpg);">
                        <h4>Application Form</h4>

                        <form method="post" action="includes/sponsorinsert.php">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Contact name" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="brand" placeholder="Company name" required="">
                            </div>
                            
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone number" required="">
                            </div>

                            <div class="form-group">
                                <input type="text" name="website" placeholder="Website" >
                            </div>

                            
                            <div class="form-group">
                                <textarea name="message" placeholder="Question" required></textarea>
                            </div>

                            <div class="form-group btn-box">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now <span class="flaticon-arrow"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Become Sponsor -->

    <!-- Main Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

<!--Search Popup-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="js/jquery.js"></script>
<script src="js/particles.js"></script>
<script src="js/psconfig.js"></script>

<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>

<!-- Mirrored from t.commonsupport.com/weston/become-sponsor.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Sep 2019 18:17:25 GMT -->
</html>