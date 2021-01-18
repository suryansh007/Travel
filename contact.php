<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Travel .IO</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="utf-8" />

  <script>
    addEventListener(
      "load",
      function() {
        setTimeout(hideURLbar, 0);
      },
      false
    );

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- css files -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
  <!-- bootstrap css -->
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <!-- custom css -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- fontawesome css -->
   <link href="css/dark.css" rel="stylesheet" type="text/css" />
  <!-- //css files -->
  <!-----logo---->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet" />
  <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <!-- //google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>

  <script src="js/main.js" type="text/javascript"></script>

  <style>
    body {
      background-color: white;
    }

    select {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

     @media screen and (max-width: 800px) {
      .ban img {
        height: 300px;
      }
    }
  </style>
</head>

<body>

   <?php

  include 'databaseconnect.php';

if(isset($_POST['submit'])){
   
      $name = mysqli_real_escape_string($con, $_POST['name']) ;
      $email = mysqli_real_escape_string($con, $_POST['email']) ;
      $state = mysqli_real_escape_string($con, $_POST['state']) ;
      $city = mysqli_real_escape_string($con, $_POST['city']) ;
      $contact = mysqli_real_escape_string($con, $_POST['contact']) ;
      $message = mysqli_real_escape_string($con, $_POST['message']) ;
    




$s = "SELECT * FROM `contactus` WHERE  name ='$name' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1)

{


  ?>

            <script> alert("Form Already Submitted for This UserName Id !");</script>

          <?php


}

else{

  $reg = "INSERT INTO `contactus`(`name`, `email`, `state`, `city`, `contact`, `message`) VALUES ([$name],[$email],[$state],[$city],[$contact],[$message])";

  mysqli_query($con,$reg);



  ?>

            <script> alert("Form Submitted");</script>

          <?php


}
}

?>

  <!-- header -->
  <section class="navigation">
    <div class="nav-container">
      <div class="brand">
        <a href="index.php"><img src="https://img.icons8.com/color/48/000000/around-the-globe.png" />TRAVEL .IO</a>
      </div>
      <nav>
        <div class="nav-mobile">
          <a id="nav-toggle" href="#!"><span></span></a>
        </div>
        <ul class="nav-list">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="package.php">Packages</a>
          </li>
          <li>
            <a href="#!">Resources</a>
            <ul class="nav-dropdown">
              <li>
                <a href="blog.php">Blogs</a>
              </li>
              <li>
                <a href="webinar.php">Webinar</a>
              </li>
              <li>
                <a href="interview.php">Interview</a>
              </li>
              <li>
                <a href="casestudy.php">CaseStudy</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Activity</a>
            <ul class="nav-dropdown">
              <li>
                <a href="photography_tour.php">Photography Tour</a>
              </li>
              <li>
                <a href="luxury.php">Group Luxury Tour</a>
              </li>
              <li>
                <a href="backpack.php">Backpack Tour</a>
              </li>
              <li>
                <a href="query.php">Custom Tours</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="about.php">AboutUs</a>
          </li>
          <li>
            <a href="contact.php">ContactUs</a>
          </li>
          <li>
            <a href="login.php">LogIn</a>
          </li>
          <li>
            <a href="booking.php" style="
                  background-color: orange;
                  color: black;
                  font-family: sans-serif;
                ">BookNow</a>
          </li>
        </ul>
      </nav>
    </div>
  </section>
  <!-- //header -->

  <!-- banner -->
  <section class="ban" id="">
    <div class="">
      <img src="images/banner17.jpg" alt="Smiley face" width="100%" height="470" />
    </div>
  </section>
  <!-- //banner -->

  <!-- Contact -->
  <section class="contact py-5">
    <div class="container py-lg-5 py-sm-3">
      <h2 class="heading text-capitalize text-center mb-sm-5 mb-4">
        Get In Touch with us
      </h2>
      <ul class="list-unstyled row text-center mt-lg-5 mt-4 px-lg-5">
        <li class="col-md-4 col-sm-6 adress-w3pvt-info">
          <div class="adress-icon">
            <span class="fa fa-map-marker"></span>
          </div>

          <h6>Location</h6>
          <p>Travel .IO <br />Mumbai , Maharatshtra , INDIA</p>
        </li>

        <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-sm-0 mt-4">
          <div class="adress-icon">
            <span class="fa fa-envelope-open-o"></span>
          </div>
          <h6>Phone & Email</h6>
          <p>+91 8321965348</p>
          <a href="info@travelio.site" class="mail">info@travelio.site</a>
        </li>
        <li class="col-md-4 col-sm-6 adress-w3pvt-info mt-md-0 mt-4">
          <div class="adress-icon">
            <span class="fa fa-comments-o"></span>
          </div>

          <h6>Stay In Touch</h6>
          <ul class="social_section_1info mt-2">
            <li class="mb-2 facebook">
              <a href="#"><span class="fa fa-facebook"></span></a>
            </li>
            <li class="mb-2 twitter">
              <a href="#"><span class="fa fa-twitter"></span></a>
            </li>
            <li class="instagram">
              <a href="#"><span class="fa fa-instagram"></span></a>
            </li>
            <li class="youtube">
              <a href="#"><span class="fa fa-youtube"></span></a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="contact-grids mt-5">
        <div class="row">
          <div class="col-lg-6 col-md-6 contact-left-form" style="background-color: transparent;">
            <div class="adress-icon">
            <a href="https://www.linkedin.com/signup/cold-join?trk=guest_homepage-basic_nav-header-join"><span style="font-size: 12px;margin-left: 200px; ">Apply with Linked<img src="https://img.icons8.com/color/30/000000/linkedin.png"/></span></a>
          </div>
          <br>
          

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="POST">
              <div class="form-group contact-forms">
                
                <input type="text" class="form-control" name="name" placeholder="Name" required="" />
              </div>
              <div class="form-group contact-forms">
                <input type="email" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div class="form-group contact-forms">
                <select id="state" name="state">
                  <option option> Select State</option>
                  <option value ="Andhra Pradesh">Andhra Pradesh</option>
                  <option value ="Arunachal Pradesh">Arunachal Pradesh </option>
                  <option value ="Assam">Assam</option>
                  <option value ="Bihar">Bihar</option>
                  <option value ="Chhattisgarh">Chhattisgarh</option>
                  <option value ="Goa">Goa</option>
                  <option value ="Gujarat">Gujarat</option>
                  <option value ="Haryana">Haryana</option>
                  <option value ="HimachalPradesh">Himachal Pradesh </option>
                  <option value ="Jharkhand">Jharkhand</option>
                  <option value ="Karnataka">Karnataka</option>
                  <option value ="Kerala">Kerala</option>
                  <option value ="MadhyaPradesh">Madhya Pradesh </option>
                  <option value ="Maharashtra">Maharashtra</option>
                  <option value ="Manipur">Manipur</option>
                  <option value ="Meghalaya">Meghalaya</option>
                  <option value ="Mizoram">Mizoram</option>
                  <option value ="Nagaland">Nagaland</option>
                  <option value ="Odisha">Odisha</option>
                  <option value ="Punjab">Punjab</option>
                  <option value ="Rajasthan">Rajasthan</option>
                  <option value ="Sikkim">Sikkim</option>
                  <option value ="TamilNadu">Tamil Nadu</option>
                  <option value ="Tripura">Tripura</option>
                  <option value ="UttarPradesh">Uttar Pradesh </option>
                  <option value ="Uttarakhand">Uttarakhand</option>
                  <option value ="WestBengal">West Bengal</option>
                </select>
              </div>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" name="city" placeholder="City" required="" />
              </div>
              <div class="form-group contact-forms">
                <input type="number" class="form-control" id="input-number" name="contact" placeholder="Mobile" required="">
              </div>
              <div class="form-group contact-forms">
                <textarea class="form-control" name="message" placeholder="Message" rows="3" required=""></textarea>
              </div>
              <button class="btn btn-block sent-butnn" type="submit" name="submit" style="color: white;">
                Submit
              </button>
            </form>
          </div>
          <div class="col-lg-6 col-md-6 contact-right pl-lg-5">
            <h4 style="font-family: serif;text-align: center;">Do you have any questions about us? write to us.</h4>
            <p class="mt-md-4 mt-2" style="text-align: center;font-family: Mulish;font-size: 16px;">
              Duis nisi sapien, elementum finibus fermentum eget, aliquet et
              leo. Mauris hendrerit vel ex. Quisque vitae luctus massa. Phas
              ellus sed aliquam leo. Vestibulum ullamcorper massa eut sed
              fringilla. Integer ultrices finibus sed nisi. in convallis felis
              da bus sit amet aliquet et leo dolor sit amet aliquet.
            </p>
            <br>

            <h5 class="mt-lg-5 mt-3" style="font-family: serif;text-align: center;">Office Hours</h5>
            <p class="mt-3" style="text-align: center;font-family: Mulish;font-size: 16px;">Monday to Friday : 09 am to 06 pm</p>
            <p class="mt-3" style="text-align: center;font-family: Mulish;font-size: 16px;">Saturday and Sunday : 10 am to 04 pm</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //Contact -->

  <!-- map -->
  <div class="map p-2">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d666.1463024747917!2d72.94521327400373!3d19.182420861803315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1591341589627!5m2!1sen!2sin" width="800" height="600" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <!-- //map -->

  <!-- Dark -->
  <div class="toggle">
    <div class="mask">
      <div class="icon-wrap active">
        <div class="icon sun"></div>
      </div>
      <div class="icon-wrap">
        <svg copy="icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
          <path d="M187.73 151.4c0-55.24 29.34-104.19 76.27-129.72C242.21 9.81 216.56 3 188.15 3 99.15 3 36.2 70.46 36.2 151.4S98.3 299 187.33 299c28.26 0 53.87-6.82 75.69-18.69-46.48-25.31-75.29-73.8-75.29-128.91z" fill="#283445" /></svg>
      </div>
    </div>
    <div class="bar"></div>
  </div>
  <!-- Dark -->

  <!--footer -->
  <footer>
    <section class="footer footer_w3layouts_section_1its py-5">
      <div class="container py-lg-4 py-3">
        <div class="row footer-top">
          <div class="col-lg-3 col-sm-6 footer-grid_section_1its_w3">
            <div class="footer-title">
              <h3>Address</h3>
            </div>
            <div class="footer-text">
              <p>Location : 12 East Block , Mumbai, India</p>
              <p>Phone : +91 1053489436</p>
              <p>
                Email :
                <a href="mailto:info@travelio.site">info@travelio.site</a>
              </p>
              <p>Office No : 0761-352576</p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
            <div class="footer-title">
              <h3>Social Handle</h3>
            </div>
            <div class="footer-text">
              <p>
                Check out or Social Handle Pages for More Travel Updates and
                Many Festive Offer's
              </p>
            </div>
            <ul class="social_section_1info">
              <li class="mb-2 facebook">
                <a href="#"><span class="fa fa-facebook"></span></a>
              </li>
              <li class="mb-2 twitter">
                <a href="#"><span class="fa fa-twitter"></span></a>
              </li>
              <li class="instagram">
                <a href="#"><span class="fa fa-instagram"></span></a>
              </li>
              <li class="youtube">
                <a href="#"><span class="fa fa-youtube"></span></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
            <div class="footer-title">
              <h3>Company</h3>
            </div>
            <div class="row">
              <ul class="col-6 links">
                <li><a href="package.php" class="scroll">Packages</a></li>
                <li><a href="webinar.php" class="scroll">Webinar</a></li>
                <li><a href="interview.php" class="scroll">Interview</a></li>
                <li><a href="casestudy.php" class="scroll">CaseStudy</a></li>
                <li><a href="blog.php" class="scroll">Travel Blog</a></li>
                <li><a href="package.php" class="scroll">Package</a></li>
              </ul>
              <ul class="col-6 links">

                <li><a href="about.php" class="scroll">AboutUs</a></li>
                <li><a href="contact.php" class="scroll">ContactUs</a></li>
                <li><a href="policy.php" class="scroll">Privacy Policy</a></li>
                <li><a href="terms.php" class="scroll">Terms of Service</a></li>
                <li><a href="index.php" class="scroll">Home</a></li>
                <li><a href="faq.php" class="scroll">Faq</a></li>

              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4 footer-grid_section_1its_w3">
            <div class="footer-title">
              <h3>Newsletter</h3>
            </div>
            <div class="footer-text">
              <p>
                By subscribing to our mailing list you will always get latest
                news and updates from us.
              </p>
              <form action="#" method="post">
                <input type="email" name="Email" placeholder="Enter your email..." required="" />
                <button class="btn1">
                  <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </footer>
  <!------------------------- //footer -->

  <!-- copyright -->
  <div class="copyright py-3 text-center">
    <p style="color: white; font-style: italic; font-size: medium;">
      © TRAVEL .IO | All Rights Reserved | Design by
      <a href="http://w3layouts.com/" target="=_blank"> W3layouts </a>
    </p>
  </div>
  <!------------------------------------------ //copyright------------------ -->
  
  <script>
    $(".mask").click(function() {
      $(".icon-wrap").toggleClass('active');
      $('body, .bar').toggleClass('dark');
    });
  </script>
</body>

</html>