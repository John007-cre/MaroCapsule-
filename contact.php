<!doctype html>
<html lang="en">

<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Abril+Fatface:400,700" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <meta name="description" content="Free Template by Free-Template.co" />
  <meta name="keywords" content="free template, free bootstrap, free website template" />
  <meta name="author" content="Free-Template.co" />
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/animsition.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



  <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in"
    data-animsition-out-class="fade-out">

    <!-- END menu-toggle -->

    <nav class="navbar navbar-expand-lg navbar-light text-capitalize"
      style="background-color: #594c4b;color: #b0a292;font-weight: 300;font-family: 'Galada', cursive;">
      <div class="container">
        <a class="navbar-brand" href="#">MaroCapsule</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#show-menu"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="show-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upload">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-user"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-heart"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </div>
  </div>
  </div>
  </header>
  <!-- END head -->


  <section class="section contact-section">

    <div class="container contact-form">
      <div class="contact-image">
        <img src="images/logo.png" alt="rocket_contact" />
      </div>
      <br>
      <div class="container">
        <br>
        <p class="text-center w-75 m-auto">Si vous avez des questions, des réclamations ou des demandes spéciales,
          n'hésitez pas à nous contactez en remplissant le formulaire ci-dessous. Votre confort est notre priorité !</p>
      </div>
      <br>
      <form method="post" enctype="multipart/form-data"
            onsubmit="return validateContactForm()" action="mail.php">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="userName-info" name="userName" class="form-control" placeholder="Your Name *" value="" />
            </div>
            <div class="form-group">
              <input type="text" name="userEmail"   id="userEmail-info" class="form-control" placeholder="Your Email *" value="" />
            </div>
            <div class="form-group">
              <input type="text" name="userPhone" id="userPhone-info" class="form-control" placeholder="Your Phone Number *" value="" />
            </div>
           
          </div>
          <div class="col-md-6">
            <div class="form-group"> <span id="userMessage-info"
                    class="info"></span><br />
              <textarea    name="content" id="content" class="form-control" placeholder="Your Message *"
                style="width: 100%; height: 150px;"></textarea>
            </div>
          </div>
          <div class="form-group">
              <input type="submit"  name="send"  class="btnSubmit btnContact" value="Send" />
            
            <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
        </div>
      </form>
    </div>
  </section>
  <div class="container animated fadeIn">
    <div class="container second-portion">
      <div class="row">
        <!-- Boxes de Acoes -->
        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
              <div class="info">
                <h3 class="title">MAIL & WEBSITE</h3>
                <p>
                  <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp gondhiyahardik6610@gmail.com
                  <br>
                  <br>
                  <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
                </p>

              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
              <div class="info">
                <h3 class="title">CONTACT</h3>
                <p>
                  <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
                  <br>
                  <br>
                  <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp ttttttttttttt
                </p>
              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="box">
            <div class="icon">
              <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
              <div class="info">
                <h3 class="title">ADDRESS</h3>
                <p>
                  <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot
                  "Shree Krishna Krupa", Rajkot - 360001.
                </p>
              </div>
            </div>
            <div class="space"></div>
          </div>
        </div>
        <!-- /Boxes de Acoes -->

        <!--My Portfolio  dont Copy this -->

      </div>
    </div>

  </div>

  <footer class="section footer-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-3 mb-5">
          <h3>Quick Link</h3>
          <ul class="list-unstyled link">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Terms &amp; Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Rooms</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-5">
          <h3>Support</h3>
          <ul class="list-unstyled link">
            <li><a href="#">Our Location</a></li>
            <li><a href="#">The Hosts</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>

          </ul>
        </div>
        <div class="col-md-3 mb-5 pr-md-5 contact-info">
          <h3>Contact Info</h3>
          <p><span class="d-block">Address:</span> <span> casablanca </span></p>
          <p><span class="d-block">Phone:</span> <span> +212603980808</span></p>
          <p><span class="d-block">Email:</span> <span> MaroCapsule@gmail.com</span></p>
        </div>
        <div class="col-md-3 mb-5">
          <h3>Subscribe</h3>
          <p>Sign up for our newsletter</p>
          <form action="#" class="footer-newsletter">
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your email...">
              <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
            </div>
          </form>
        </div>
      </div>
      <div class="row bordertop text-center pt-5">
        <p class="col-md-12">&copy; Copyright 2020. All Rights Reserved. <br> Developed by junior solution MaroCapsule<a
            href=></a> <br> <a href="">MaroCapsule</a></p>

        <p class="col-md-12 social">
          <a href="#"><span class="fa fa-facebook"></span></a>
          <a href="#"><span class="fa fa-twitter"></span></a>
          <a href="#"><span class="fa fa-instagram"></span></a>
          <a href="#"><span class="fa fa-linkedin"></span></a>
          <a href="#"><span class="fa fa-youtube"></span></a>

        </p>
      </div>
    </div>
  </footer>

  </div> <!-- .animsition -->

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/animsition.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/main.js"></script>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var phone = $("#userPhone").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (phone == "") {
                $("#userPhone-info").html("Required.");
                $("#userPhone").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>


</body>

</html>