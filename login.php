

<!DOCTYPE html>
<html lang="en">

<head>
	<title>TRAVEL.IO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login/images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--===============================================================================================-->




	<style>
		body {
			width: 100%;
			background: #0F2027;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}

		.limiter {
			background: #0F2027;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #2C5364, #203A43, #0F2027);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
	</style>




</head>

</head>

<body>



	<!-------------HEADER----------->
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

	<!-------------HEADER----------->

	<div class="limiter" style="background-image: url('login/images/img-01.jpg');background-size: cover;">
		<div class="container-login100">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form class="login100-form validate-form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">


					<span class="login100-form-title p-t-20 p-b-45">
						WLECOME BACK !!
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn"  type="submit" name="submit">
							Login
						</button>
					</div>

					<div class="text-center w-full p-t-25 p-b-230">
						<a href="#" class="txt1">
							Forgot Username / Password?
						</a>
					</div>

					<div class="text-center w-full">
						<a class="txt1" href="signup.php" style="color:white;font-size: 20px;">
							Create new account
							<i class="fa fa-long-arrow-right"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

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
							<p>Email : <a href="mailto:info@travelio.site">info@travelio.site</a></p>
							<p>Office No : 0761-352576</p>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 footer-grid_section mt-sm-0 mt-4">
						<div class="footer-title">
							<h3>Social Handle</h3>
						</div>
						<div class="footer-text">
							<p>Check out or Social Handle Pages for More Travel Updates and Many Festive Offer's</p>

						</div>
						<ul class="social_section_1info">
							<li class="mb-2 facebook"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="mb-2 twitter"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="instagram"><a href="#"><span class="fa fa-instagram"></span></a></li>
							<li class="youtube"><a href="#"><span class="fa fa-youtube"></span></a></li>
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
							<p>By subscribing to our mailing list you will always get latest news and updates from us.</p>
							<form action="#" method="post">
								<input type="email" name="Email" placeholder="Enter your email..." required="">
								<button class="btn1"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
								<div class="clearfix"> </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</footer>
	<!-- //footer -->

	<!-- copyright -->
	<div class="copyright py-3 text-center">
		<p style="color: white; font-style: italic; font-size: medium;">
			© TRAVEL .IO | All Rights Reserved | Design by
			<a href="http://w3layouts.com/" target="=_blank"> W3layouts </a>
		</p>
	</div>
	<!-- //copyright -->


	<!-----------------------//footer ----->




	<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

</body>

</html>