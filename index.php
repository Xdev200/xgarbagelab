<!doctype HTML>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>XGARBAGE LAB</title>
        <link rel="stylesheet" href="css/font.css">
        <link rel="stylesheet" href="css/materialize.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" >
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" href="images/favicon.png">
    </head>
    <body style="background: url(images/trash_bg.png)">
      <?php include "analyticstracking.php"; ?>
      <div class="page-wrap">  
        <div class="container-fluid navigation " id='navigation' style="display:none" >
            <div class="row black z-depth-2 ">
                <div class="col l12 m12 s12">
                    <div class="col l1 m2 s2 ">
                        <a href=''><img src="images/x_logo.png" width="80px"  class="responsive-img" style="margin:10% 0 0 0;visibility:"></a>
                    </div>
                    <div class="col l1 m2 s2 offset-l2">
                        <a id="about_btn"><img src="images/about3.png"  width="120" class="responsive-img" style="cursor:pointer;margin:10% 0 0 0"></a>
                    </div>
                    <div class="col l1 m2 s2">
                        <a id="vision_btn"><img src="images/vision3.png" width="120" class="responsive-img" style="cursor:pointer;margin:10% 0 0 0"></a>
                    </div>
                    <div class="col l1 m2 s2">
                        <a id="product_btn"><img src="images/product3.png" width="120" class="responsive-img" style="cursor:pointer;margin:10% 0 0 0"></a>
                    </div>
                     <div class="col l1 m2 s2">
                        <a id="team_btn"><img src="images/team3.png" width="120" class="responsive-img" style="cursor:pointer;margin:10% 0 0 0"></a>
                    </div>
                    <div class="col l1 m2 s2">
                        <a id="contact_btn"><img src="images/contact3.png" width="120" class="responsive-img" style="cursor:pointer;margin:10% 0 0 0"></a>
                    </div>
                </div>
            </div>
        </div>
            <div class="row" id="logo_landing ">
                <div class="col l12 m12  hide-on-small-only " >
                    <p class="hit-the-floor tlt black-text">XGARBAGE LAB</p>
                </div>
                <div class="col l12 m12 hide-on-small-only ">
                    <span class="tagline right black-text" data-in-effect="fadeInRight">WHERE X IS MORE </span>
                </div>
                <div class="col s12 hide-on-med-and-up " >
                    <p class="hit-the-floor-small tlt black-text">XGARBAGE LAB</p>
                </div>
                <div class="col s12 hide-on-med-and-up">
                    <span class="tagline-small right black-text" data-in-effect="fadeInRight" >WHERE X IS MORE </span>
                </div>
            </div>
         <div class="container-fluid hide-on-med-and-down  quotes_section" style="margin:0 0 0 0">
            <div class="row">
                <br><br>
                <div class="col l3">
                    <img src="images/q11_m.png" class="q_hide" id="q1_l" class="responsive-img">
                </div>
                <div class="col l3">
                    <img src="images/q21_m.png" class="q_hide" id="q2_l" class="responsive-img">
                </div>
                <div class="col l3">
                    <img src="images/q31_m.png" class="q_hide" id="q3_l" class="responsive-img">
                </div>

                <div class="col l3">
                    <img src="images/q41_m.png" class="q_hide" id="q4_l" class="responsive-img">
                </div>
            </div>
        </div>
        <div class="container-fluid hide-on-large-only hide-on-small-only  quotes_section" style="margin:0 0 0 0">
            <div class="row">
                <div class="col m6">
                    <img src="images/q11_m.png" class="q_hide" id="q1_m" class="responsive-img">
                </div>
                <div class="col m6">
                    <img src="images/q21_m.png" class="q_hide" id="q2_m" class="responsive-img">
                </div>
                <div class="col m6">
                    <img src="images/q31_m.png" class="q_hide" id="q3_m" class="responsive-img">
                </div>
                <div class="col m6">
                    <img src="images/q41_m.png" class="q_hide" id="q4_m" class="responsive-img">
                </div>
            </div>
        </div>
        <div class="container-fluid hide-on-med-and-up quotes_section" style="margin:0 0 0 15%">
            <div class="row">
                <div class="col s12 ">
                    <img src="images/q11_s.png" class="q_hide" id="q1_s" class="responsive-img">
                </div>
                <div class="col s12">
                    <img src="images/q21_s.png" class="q_hide" id="q2_s" class="responsive-img">
                </div>

                <div class="col s12">
                    <img src="images/q31_s.png" class="q_hide" id="q3_s" class="responsive-img">
                </div>
                <div class="col s12">
                    <img src="images/q41_s.png" class="q_hide" id="q4_s" class="responsive-img">
                </div>
            </div>
        </div>
        <div class="container-fluid" > 
            <div class="row" id="aboutus" style="display:none;">
                    <?php include "aboutus.php" ?>
            </div>  
            <div class="row " id="vision" style="display:none">
                    <?php include "vision.php" ?>
            </div>
            <div class="row " id="product" style="display:none">
                    <?php include "product.php" ?>
            </div>
            <div class="row " id="team" style="display:none">
                    <?php include "team.php" ?>
            </div>
        </div>
        <div class="container">
             <div class="row " id="contact" style="display:none">
                    <?php include "contactus.php" ?>
            </div>
        </div>
      </div>
       <footer class="site-footer black" style="display:none">
            <p class="center white-text" style="padding:1% 0 0 0">All rights reserved &copy; 2016 xgarbagelab.com</p>
       </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="js/materialize.js"></script>
      <script src="js/jquery.textillate.js"></script>
      <script src="js/jquery.lettering.js"></script>
      <script src="js/main.js"></script>
      <script src="js/contact.js"></script>
    </body>
</html>