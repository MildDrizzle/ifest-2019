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

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    canvas {
  display: block;
  vertical-align: bottom;
}

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  background:black;
}

button:hover
{
    padding:20px;
    transition:0.2s;
}
</style>
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
            <section class="page-title" style="background-image:url(images/events.jpg);">
                <div class="parallax-scene parallax-scene-1 anim-icons">
                    <span data-depth="0.60" class="parallax-layer icon icon-dots-1"></span>
                    <span data-depth="0.70" class="parallax-layer icon twist-line-1"></span>
                    <span data-depth="0.80" class="parallax-layer icon icon-circle-7"></span>
                    <span data-depth="0.90" class="parallax-layer icon icon-triangles"></span>
                </div>
                <div class="auto-container">
                    <h1 style="color:#ff4d4d;">IFEST 2019 <br>Events</h1>
                </div>
            </section>
    <!--End Page Title-->
    
            <section class="shedule-section style-two">
                <div class="parallax-scene parallax-scene-2 anim-icons">
                    <span data-depth="0.50" class="parallax-layer icon-circle-5"></span>
                    <span data-depth="0.90" class="parallax-layer icon-circle-5"></span>
                </div>
                <div class="container ">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="codeigo" style="background:#FFC312;">Codeigo</button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="trytocatch" style="background:#C4E538">Try – To – Catch </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn-block btn  btn-lg mr-5" id="tourist" style="background:#12CBC4">Be a “Tourist” </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="procode" style="background:#FDA7DF">< Pro > Code </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="design" style="background:#ED4C67">I – Design </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="electrabuzz" style="background:#7efff5">Electrabuzz </button>
                        </div>
                    
            
                    
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="electrowords" style="background:#F79F1F">Electrowords</button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="duino" style="background:#A3CB38">Build - A – Duino </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="crosshunt" style="background:#1289A7">E – Crosshunt </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="chemosight" style="background:#D980FA">Chemosight</button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="chemoprobe" style="background:#B53471">Chemoprobe</button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="cadathon" style="background:#18dcff">CADATHON</button>
                        </div>
                    
                    
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="tall" style="background:#EE5A24">Tallest Bridge Making </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5 " id="take" style="background:#009432">Take it EG </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="line" style="background:#0652DD">Line following Robot </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="capture" style="background:#9980FA"> I – Capture </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="cricket" style="background:#833471"> I – Cricket </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="meme" style="background:#7d5fff">Meme Making</button>
                        </div>
                    
                    
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="pic" style="background:#EA2027">Pic - Taboo</button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="road" style="background:#006266">ROADIES</button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="quiz" style="background:#c56cf0">General Quiz </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="sell" style="background:#5758BB">Sell it your Way </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="tv" style="background:#6F1E51"> TV Nerds </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5 " id="mic" style="background:#7158e2">Open Mic </button>
                        </div>
                    
                    
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="debate" style="background:#FFC312">Debate </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="pubg" style="background:#7bed9f"> Tech War (PubG)</button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="fifa" style="background:#1e90ff">FIFA </button>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                            <button class="btn btn-block btn-lg mr-5" id="cs" style="padding:8px 16px; background:#ff4757"> CS 1.6 </button>
                        </div>
                        
                    </div>
                    
                    <div class="row d-flex justify-content-center mt-4">
                        <div class="col-lg-8 col-md-4 col-sm-6 mb-2">
                            <form action="https://docs.google.com/forms/d/e/1FAIpQLSesrUzHmIxhov8xxfIoB0sSWV6_COMW38yn9rquCtSSJzO8Tg/viewform?usp=sf_link">
                            <button class="btn btn-block btn-lg mr-5"style="background:#8105d8" type="submit">Register Here</button>
                            </form>
                        </div>
                        
                        
                    </div>
                </div>
            
        </section>
    <!--End Shedule Section -->

    <!-- Shedule Section -->
    <!--End Shedule Section -->

    <!-- Shedule Section -->
    <!--End Shedule Section -->

    <!-- Main Footer -->
    <?php include("includes/footer.php"); ?>
    <!-- End Footer -->

</div>
<!--End pagewrapper-->

<!--Search Popup-->
<?php include("includes/eventpopup.php"); ?>
<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<script src="js/jquery.js"></script>




<script src="js/eventpopup.js"></script>




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

</html>