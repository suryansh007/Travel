<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>TRAVEL.IO</title>
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
  <link href="css/query.css" rel="stylesheet" type="text/css" />
  <!-- custom css -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- fontawesome css -->
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

  <script src="js/main.js" type="text/javascript"></script>

  <style>
    body {
      background-image: url(images/query2.jpg);
      background-size: cover;
      height: 100%;
    }

    .footer {
      background-color: transparent;
    }
  </style>
</head>

<body>

  <?php

  include 'databaseconnect.php';

if(isset($_POST['submit'])){
   
      $name = mysqli_real_escape_string($con, $_POST['name']) ;
      $city = mysqli_real_escape_string($con, $_POST['city']) ;
      $contact = mysqli_real_escape_string($con, $_POST['contact']) ;
      $email = mysqli_real_escape_string($con, $_POST['email']) ;
      $destination = mysqli_real_escape_string($con, $_POST['destination']) ;
      $departdate = mysqli_real_escape_string($con, $_POST['departdate']) ;
      $returndate = mysqli_real_escape_string($con, $_POST['returndate']) ;
      $adult = mysqli_real_escape_string($con, $_POST['adult']) ;
      $child = mysqli_real_escape_string($con, $_POST['child']) ;
      $type = mysqli_real_escape_string($con, $_POST['type']) ;




$s = "select * from query where name ='$name' ";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num == 1)

{


  ?>

            <script> alert("Enquiry Not Send");</script>

          <?php


}

else{

  $reg = "INSERT INTO query (name,city,contact,email,destination,departdate,returndate,adult,child,type) VALUES ('$name','$city','$contact','$email','$destination','$departdate','$returndate','$adult','$child','$type')";

  mysqli_query($con,$reg);



  ?>

            <script> alert("Enquiry  Send ");</script>

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

  <br />
  <br />
  <br />
  <br />
  <br />
  <br />

  <!-- Booking -->
  <section class="contact py-5">
    <div class="container py-lg-5 py-sm-4">
      <h2 class="heading text-capitalize text-center mb-lg-5 mb-4" style="color: white;">
        Get the Best Holiday Planned by Experts !
      </h2>
    </div>
  </section>

  <!--  Get Querry -->
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="POST">
  

  <div class="query-form-box" style="padding-right: 50px;padding-left: 50px;">
  

    <div class="booking-form">
      <label>Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name" data-validate="Name is required" required="" />

      <label>City</label>
      <input type="text" class="form-control" name="city" placeholder="Enter City" data-validate="City is required" required="" />

      <label>Contact</label>
      <input type="number" class="form-control" name="contact" placeholder="Enter Contact" data-validate="Contact is required" required="" />

      <label>Email</label>
      <input type="email" class="form-control"  name="email" placeholder="Enter Email" data-validate="Email is required" required="" />

      <label>Destination</label>

      <select class="custom-select" name="destination" style="background: transparent;" required="" >
        <option value="1">Select Destination</option>
        <option value="2">Agra</option>
        <option value="3">Jaipur</option>
        <option value="4">Delhi</option>
        <option value="5">Varansai</option>
        <option value="6">New Delhi</option>
        <option value="7">Goa</option>
        <option value="8">Udaipur</option>
        <option value="9">Mumbai</option>
        <option value="10">Jodhpur</option>
        <option value="11">Jaisalmer</option>
        <option value="12">Kochi</option>
        <option value="13">Alappuzha</option>
        <option value="14">Ranthambore</option>
        <option value="15">Bengaluru</option>
        <option value="16">Fatehpur Sikri</option>
        <option value="17">Khajuraho</option>
        <option value="18">Chennai</option>
        <option value="19">Kolkata</option>
        <option value="20">Hampi</option>
        <option value="21">Amritsar</option>
        <option value="22">Pushkar</option>
        <option value="23">Haridwar</option>
        <option value="24">Mysuru</option>
        <option value="25">Mahabalipuram</option>
        <option value="26">Madurai</option>
        <option value="27">Puducherry</option>
        <option value="28">Thiruvananthapuram</option>
        <option value="29">Jim Corbett</option>
        <option value="30">Bikaner</option>
        <option value="31">Hyderabad</option>
        <option value="32">Chandigarh</option>
        <option value="33">Kovalam</option>
        <option value="34">Kanyakumari</option>
        <option value="35">Ellora Caves</option>
        <option value="36">Manali</option>
        <option value="37">Munnar</option>
        <option value="38">Rishikesh</option>
        <option value="39">Shimla</option>
        <option value="40">Dharamshala</option>
        <option value="41">Darjelling</option>
        <option value="42">Nainital</option>
        <option value="43">Gangtok</option>
        <option value="44">Mussoorie</option>
        <option value="45">Pangong Tso</option>
      </select>

      <div class="input-grp">
        <label>Departing</label>
        <input type="date" class="form-control select-date" name="departdate" style="background-color: orange;color:white;" required="" />
      </div>

      <div class="input-grp">
        <label>Returining</label>
        <input type="date" class="form-control select-date" name="returndate" style="background-color: orange;color:white;" required="" />
      </div>

      <div class="input-grp">
        <label>Adults</label>
        <select class="custom-select" name="adult" required="">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6+</option>
        </select>
      </div>

      <div class="input-grp">
        <label>Children</label>
        <select class="custom-select" name="child" required="">
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6+</option>
        </select>
      </div>
      <div class="input-grp">
        <label>Tarvel Type</label>
        <select class="custom-select" name="type" required="">
          <option value="Family">Family</option>
          <option value="Group Trip">Group Trip</option>
          <option value="Solo">Solo</option>
          <option value="Friends">Friends</option>
        </select>
      </div>

      <div class="input-grp">
        <button type="submit" name="submit" class="btn btn-primary flight"  >
          Get Query
        </button>
      </div>
    </div>
  </div>
</form>
  <!-- //Booking -->

  <br />
  <br />
  <br />
  <!--footer -->
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
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-5270e4bf-91dd-485e-b5aa-d56c7bcfea5a"></div>

  <script src="main.js"></script>

  <script>
    $("#datepicker").datepicker({
      iconsLibrary: "fontawesome",
      icons: {
        rightIcon: '<span class="fa fa-caret-down"></span>',
      },
    });
  </script>
</body>

</html>