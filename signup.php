<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>TRAVEL .IO</title>
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




</head>

</head>

<body>

	<?php

	include 'databaseconnect.php';


	if(isset($_POST['submit'])){

		$name = mysqli_real_escape_string($con, $_POST['name']) ;
		$contact = mysqli_real_escape_string($con, $_POST['contact']) ;
		$email = mysqli_real_escape_string($con, $_POST['email']) ;
		$password = mysqli_real_escape_string($con, $_POST['password']) ;
		$repassword = mysqli_real_escape_string($con, $_POST['repassword']) ;


		$pass = password_hash($password, PASSWORD_BCRYPT);
		$repass = password_hash($repassword, PASSWORD_BCRYPT);

		$emailquery  = " select * from registration where email='$email' " ;
		$query = mysqli_query($con,$emailquery);

		$emailcount = mysqli_num_rows($query);

		if($emailcount>0){
				?>

				<script> alert("Email Already Exist");</script>

				<?php
		}

		else{

			if($password === $repassword){

				$insertquery = "insert into registration( name,contact, email, password,repassword) values('$name','$contact','$email','$pass','$repass')";

				$iquery = mysqli_query($con,$insertquery);

				if ($iquery) {

					?>

						<script> alert("Registration Sucessfull");</script>

					<?php
				}else{

					?>

						<script> alert("Registration Unsucessfull");</script>

						<?php
				}


			}else{

				?>

				<script> alert("Password Does Not Match");</script>

				<?php
			}
		}
	}



	?>

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
	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);  ?>" method="POST" style="background-image: url('login/images/bg06.jpg');background-size: cover;">
		<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100 p-t-190 p-b-30">
					<form class="login100-form validate-form">


						<span class="login100-form-title p-t-20 p-b-45">
							Sign UP !!
						</span>

						<div class="wrap-input100 validate-input m-b-10" data-validate="Username is required">
							<input class="input100" type="text" name="name" placeholder="Full Name">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user"></i>
							</span>
						</div>

						

						<div class="wrap-input100 validate-input m-b-10" data-validate="PhoneNumber is required">
							<input class="input100" type="text" name="contact" placeholder="PhoneNumber">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-user"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate="email is required">
							<input class="input100" type="Email" name="email" placeholder="Email-id">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
							<input class="input100" type="password" name="password" placeholder="Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input m-b-10" data-validate="Password is required">
							<input class="input100" type="password" name="repassword" placeholder="Retype-Password">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock"></i>
							</span>
						</div>

						

						<div class="container-login100-form-btn p-t-10">
							<button class="login100-form-btn" type="submit" name="submit">
								Creat Account
							</button>
						</div>

						<div class="text-center w-full p-t-25 p-b-230">
							<a href="#" class="txt1">
								Forgot Username / Password?
							</a>
						</div>

						<div class="text-center w-full">
							<a class="txt1" href="login.php">
								Already Have account Login
								<i class="fa fa-long-arrow-right"></i>
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</form>
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

	<script src="js/main.js" type="text/javascript"></script>



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