<!DOCTYPE html>
<?php include("includes/dbconnect.php"); ?>
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
 	
    <?php include("includes/navbar.php"); ?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/cabgpng.png); background-color:transparent;  background-size:contain;">
        <div class="parallax-scene parallax-scene-1 anim-icons">
            <span data-depth="0.60" class="parallax-layer icon icon-dots-1"></span>
            <span data-depth="0.70" class="parallax-layer icon twist-line-1"></span>
            <span data-depth="0.80" class="parallax-layer icon icon-circle-7"></span>
            <span data-depth="0.90" class="parallax-layer icon icon-triangles"></span>
        </div>
        <div class="auto-container" >
            <h1>Become College Ambassador</h1>
            
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Info Section -->
    <section class="contact-info-section" id="whycr" style="padding-top: 50px;">
        <div class="parallax-scene parallax-scene-3 anim-icons">
            <span data-depth="0.50" class="parallax-layer icon-circle-3"></span>
            <span data-depth="0.90" class="parallax-layer icon-circle-4"></span>
        </div>

        <div class="auto-container">
            <div class="sec-title text-center">
                
                <h2 style="color:white">Why become a College Ambassador?</h2>
                <h5 style="color:purple">
                        We will have Campus Ambassador's from different colleges for IFest 2019. Upon successful work done in the 
                        respective college, the person will be entitled to a Campus Ambassador Certificate and free participation
                        in specific alotted events.</h5>
                        <h5 style="color:purple"> To apply, the person has to fill up a form, which will be on the website.</h5><br>
                        <h2 style="color:white">What has to be done?</h2>
                        <h5 style="color:purple">The person has to publicise the fest in his/her college. Duties will include the Publicity of all events,
                             workshops and the Night Event. As mentioned earleir, there will be perks for 
                             these responsible CRs, but the top few will be entitled 
                             to exclusive free passes to the Night Event. Additional work will be helping ISTE
                              Representatives publicize IFest in their college as much as possible. 
                               Perks and rewards will be informed later</h5>
            </div>
            <div class="form-group btn-box text-center">
                <button class="theme-btn btn-style-one" type="submit" id="enableform" name="submit-form">Apply Now <span class="flaticon-arrow"></span></button>
            </div>
        </div>
        
    </section>
    <section class="contact-info-section" id="crform" style="display:flex; justify-content:center; align-items:center;">
    <div class="form-column col-lg-4 col-md-12 col-sm-12 ">
                    <div class="application-form wow fadeInRight " style="background-image: url(images/background/21.jpg);">
                        <h4 >Register Yourself as College Ambassador for your college</h4>




                        

                        <form method="post" action="includes/crsubmit.php">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name:" required="">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" placeholder="Email:" required="">
                            </div>

                            <div class="form-group">
                                <input type="tel" name="phone" placeholder="Phone:" required="" pattern="[0-9]{10}" title="Please Enter 10 Digit Number Only">
                            </div>

                            <div class="form-group">
                            <select name="collegeid" required>
                                                <option value="Select Your College" disabled selected hidden style="color:black;">Select Your College</option>
                                            <?php 
                                                $queryForDisplayingAllColleges="SELECT * FROM colleges;";
                                                $resultForDisplayingAllColleges=mysqli_query($connection,$queryForDisplayingAllColleges);
                                                while($row=mysqli_fetch_assoc($resultForDisplayingAllColleges))
                                                {?>
                                                    <option value="<?php echo $row['collegeid']; ?>" style="color:black"> <?php echo $row['name']; ?> </option>
                                                <?php
                                                }
                                             ?>
                            </select>
                            </div>

                            <div class="form-group btn-box">
                                <button class="theme-btn btn-style-one" type="submit" name="submit-form">Submit Now <span class="flaticon-arrow"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
    </section>
    <!--End Contact Info Section -->

    

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


<script>
$(document).ready(function(){
    $('#crform').hide();
    $('#enableform').click(function(){
                    
                        $('#crform').show();
                        $('#whycr').hide();
                    
                });
            });
</script>

</body>


</html>