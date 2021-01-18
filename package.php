
<!DOCTYPE html>
<html lang="en">
<head>
<title>TRAVEL.IO</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>  
<!-- css files -->
  			<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
  			<link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
  			<link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
			<link href="css/card.css" rel="stylesheet" type="text/css" />
			<link href="css/dark.css" rel="stylesheet" type="text/css" />
			<link href="css/newsletter.css" rel="stylesheet" type="text/css" />
<!-- //css files -->
<!-----logo---->
  			<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  			<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<!-- google fonts -->
  			<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  			<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- //google fonts -->
  			<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
			<link href='https://fonts.googleapis.com/css?family=Mulish' rel='stylesheet'>
<style>

 .img-fluid,.package-info{

-webkit-box-shadow: 10px 11px 37px -9px rgba(0,0,0,0.73);
-moz-box-shadow: 10px 11px 37px -9px rgba(0,0,0,0.73);
box-shadow: 10px 11px 37px -9px rgba(0,0,0,0.73);

}

.img-fluid {

border-radius: 30px 30px 0px 0px;
}

.package-info{

border-radius: 0px 0px 30px 30px;
}

@media screen and (max-width: 900px) {
   .btnf{
    
    margin-left: 40px;
   


  }
}
@media screen and (max-width: 800px) {
   .btnf{
    
    margin-left: 35px;
    margin-right: 0px;


  }
}

@media screen and (max-width: 700px) {
   .btnf{
    
    margin-left: 0px;
    margin-right: 0px;


  }
}
@media screen and (max-width: 800px) {
   .ban img{
    height: 300px;
  }
  .contain{
  	overflow: hidden;
  	margin-top: 0px;
  }


}

.mt-1,.mt-3{
	text-align: center;
}




</style>
	
</head>
<body>

<!-- header -->
<section class="navigation">
	<div class="nav-container">
	  <div class="brand">
		<a href="index.php"><img src="https://img.icons8.com/color/48/000000/around-the-globe.png"/>TRAVEL .IO</a>
	  </div>
	  <nav>
		<div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
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
			<a href="booking.php" style="background-color: orange;color: black;font-family: sans-serif;">BookNow</a>
		  </li>
		</ul>
	  </nav>
	</div>
</section>
<!-- //header -->


<!-- banner -->
<section class="contain" id="">
	<div class="ban">
	
	<img src="images/banner17.jpg" alt="package-img" width="100%" height="470">
	
	</div>
</section>
<!-- //banner -->





<!-- tour packages -->
<section class="packages pt-5">
	<div class="container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center" style="font-family: serif;"> Discover India tour packages</h2>
		<p class="text mt-2 mb-5 text-center" style="font-family: serif;">Check Our Variety of Packages Avilable to you For India.</p>

		<div id="BtnfContainer" style="font-family: Mulish;font-size: 13px">
		<button class="btnf active1" onclick="filterSelection('all')"> Show all</button>
		<button class="btnf " onclick="filterSelection('Architecture')">Architecture</button>
		<button class="btnf" onclick="filterSelection('Nature')">Nature</button>
		<button class="btnf" onclick="filterSelection('Beach')">Beach</button>
		<button class="btnf" onclick="filterSelection('Wildlife')">Wildlife</button>
		<button class="btnf" onclick="filterSelection('Hillstation')">HillStation</button>
	  </div>
	
		
<br>


		

<div class="row">



						<div class="filterDiv Architecture all col-lg-3 col-sm-6 mb-5 ">
							<div class="image-tour position-relative">
									<img src="images/india/tajmahal.jpg" alt="" class="img-fluid" />
					
							</div>
									<div class="package-info">
											<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Agra</h6>
											<ul class="listing mt-3" s>
													<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
													<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
													<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
													<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
											</ul>
											<br>
											<div class="container">
												<a href="agrapackage.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
											</div>
									</div>
						</div>

<!------------------Package------------------------>



						<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5 ">
							<div class="image-tour position-relative">
									<img src="images/india/jaipur.jpg" alt="" class="img-fluid" />
					
							</div>
									<div class="package-info">
											<h6 class="mt-1" ><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Jaipur</h6>
											<ul class="listing mt-3">
													<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
													<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
													<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
													<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
											</ul>
											<br>
											<div class="container">
												<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
											</div>
							</div>
						</div>

<!------------------Package------------------------>
			<div class="filterDiv Architecture all col-lg-3 col-sm-6 mb-5 ">
				<div class="image-tour position-relative">
					<img src="images/india/redfort.jpg" alt="" class="img-fluid" />
				
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Delhi</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
					</ul>
					<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>

<!------------------Package------------------------>			
			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5 ">
				<div class="image-tour position-relative">
					<img src="images/india/varanasi.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Varanasi</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
					</ul>
					<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
			
<!------------------Package------------------------>			
				
			<div class="filterDiv Architecture all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/newdelhi.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>New Delhi</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
					</ul>
					<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class="filterDiv Architecture Nature Beach all col-lg-3 col-sm-6 mb-5 ">
				<div class="image-tour position-relative">
					<img src="images/india/goa.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class=" package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Goa</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
					</ul>
					<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
				</div>
			</div>
			
<!------------------Package------------------------>			
			
			<div class="filterDiv Architecture all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/udaipurpalace.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Udaipur</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
					</ul>
					<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
				</div>
			</div>
			
<!------------------Package------------------------>


			<div class="filterDiv Architecture Nature Beach all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/gatewayindia.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Mumbai</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
					</ul>
					<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
				</div>
			</div>
			
<!------------------Package------------------------>			
			
		
			<div class="filterDiv Architecture all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
				
					<img src="images/india/umaidbhawan.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Jodhpur</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
				<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
				</div>
			</div>
			
<!------------------Package------------------------>			
				
			
			<div class="filterDiv Architecture all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/jaisalmerfort.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Jaisalmer</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
				<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class="filterDiv Architecture Nature Beach all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/kochi.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Kochi</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
				<br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
				</div>
			</div>

<!------------------Package------------------------>


			<div class="filterDiv Nature Beach all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/alappuzha.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Alappuzha</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
				</div>
			</div>

<!------------------Package------------------------>


			<div class="filterDiv Nature Wildlife all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/ranthambore.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Ranthambore </h6>
					
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class="filterDiv Architecture Nature Wildlife all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/bengaluru.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span> Bengaluru </h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/fatehpur.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Fatehpur Sikri</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/khajuraho.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Khajuraho</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>


			<div class="filterDiv Architecture Nature Beach all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/chennai.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Chennai</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>


			<div class="filterDiv Architecture Nature Wildlife all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/kolkata.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Kolkata</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>


			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/hampi.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Hampi</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>


			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/amritsar.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Amritsar</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>


<!------------------Package------------------------>


			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/pushkar.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Pushkar</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>


<!------------------Package------------------------>


			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/haridwar.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>haridwar</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class=" filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/mysorepalace.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Mysuru</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>			
			<div class=" filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/mahabalipuram.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Mahabalipuram</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>
<!------------------Package------------------------>

			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/madurai.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Madurai</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>			
			<div class=" filterDiv Architecture Nature all Beach col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/puducherry.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Puducherry</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/thiru.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Thiruvananthapuram</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>
<!------------------Package------------------------>

			<div class="filterDiv Nature all Wildlife col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/jimcorbett.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Jim Corbett</h6>
				
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>			
			<div class=" filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/bikaner.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Bikaner</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class="filterDiv Architecture all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/hyderabad.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Hyderabad</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class=" filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/chandi.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Chandigarh</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class=" filterDiv  Nature all Beach col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/kovalam.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>kovalam</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
								 
					</div>
				</div>
			</div>

<!------------------Package------------------------>

			<div class="filterDiv Architecture Nature all Beach col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/kanyakumari.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>kanyakumari</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
						
								 
					</div>
				</div>
			</div>
			
<!------------------Package------------------------>			
			<div class="filterDiv Architecture Nature all col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/elloracave.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Ellora Caves</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
					<div class="container">
								
						<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
						
								 
					</div>
				</div>
			</div>
<!------------------Package------------------------>			
			<div class="filterDiv  Nature all Hillstation container py-lg-4 py-sm-3">
		<h2 class="heading text-capitalize text-center" style="font-family: serif"> Discover India HillStattion tour packages</h2>
		<p class="text mt-2 mb-5 text-center" style="font-family: serif" >Check Our Variety of Packages Avilable to you For India.</p>
		<div class="row">
			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/manali.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Manali</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
					<br>
							<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
			
<!------------------Package------------------------>			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/munnar.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Munnar</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
						<br>	<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
<!------------------Package------------------------>			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/rishikesh.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Rishikesh</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul><br>
							<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
			
<!------------------Package------------------------>			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/shimla.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Shimla</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
					<br>
							<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
<!------------------Package------------------------>			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/dharamshala.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Dharamshala</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
					<br>
							<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
			
<!------------------Package------------------------>			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/darjelling.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Darjelling</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
					<br>
							<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
<!------------------Package------------------------>			
			
			<div class=" filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/nainital.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Nainital</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
					<br>		<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
			
<!------------------Package------------------------>			
			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/gangtok.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Gangtok</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
					<br>		<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
<!------------------Package------------------------>			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/mussoorie.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Mussoorie</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
					<br>
							<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
<!------------------Package------------------------>			
			
			<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
				<div class="image-tour position-relative">
					<img src="images/india/pangongtso.jpg" alt="" class="img-fluid" />
					
				</div>
				<div class="package-info">
					<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Pangong Tso</h6>
					<ul class="listing mt-3">
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
						<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
						<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
						<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
				</ul>
					<br>		<div class="container">
								
								<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
									
							</div>
					
				</div>
			</div>
			
<!------------------Package------------------------>

<div class="filterDiv  Nature all Hillstation col-lg-3 col-sm-6 mb-5">
	<div class="image-tour position-relative">
		<img src="images/india/chandrashila.jpg" alt="" class="img-fluid" />
		
	</div>
	<div class="package-info">
		<h6 class="mt-1"><span><img src="https://img.icons8.com/color/25/000000/place-marker.png"/></span>Chandrashila</h6>
		<ul class="listing mt-3">
			<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>9 Days</span></li>
			<li><span class="fa fa-clock-o mr-2"></span>Duration : <span>8 Night:9 Days</span></li><br>
			<li><span class="fa fa-inr"	>	</span>Starting At	 : 	<span>₹8,000-</span><span>₹2,00,000</span></li>
			<li><span class="fa fa-user-o"	>	 </span>	<span>Price Per Person</span></li>
	</ul>
		<br>		<div class="container">
					
					<a href="booking.php"><button type="button" class="btn btn-primary btn-sm btn-block"><span>View Package</span></button></a>
						
				</div>
		
	</div>
</div>

<!------------------Package------------------------>		
			
			
			
			

		</div>
	</div>
</section>
<!-- tour packages -->

<!-- destinations -->
<h3 class="heading text-capitalize text-center mb-lg-5 mb-4" style="font-family: serif">
          Check  Our Popular Destination !!
        </h3>
<div class="cards-list">
    
<div class="card 1">
  <div class="card_image"> <a href="booking.php"> <img src="images/banner19.jpg"/> </a></div>
  <div class="card_title title-white">
    <p style="color: white;margin-top:45px;font-family: Mulish">Jodhpur</p>
  </div>
</div>


  <div class="card 2">
  <div class="card_image">
    <a href="booking.php"><img src="images/banner18.jpg"/></a>
    </div>
  <div class="card_title title-white">
    <p style="color: white;margin-top:45px;font-family: Mulish">Agra</p>
  </div>
</div>

<div class="card 3">
  <div class="card_image">
    <a href="booking.php"> <img src="images/leh.jpg"/></a>
  </div>
  <div class="card_title">
    <p style="color: white;margin-top:45px;font-family: Mulish">Leh</p>
  </div>
</div>

<div class="card 3">
  <div class="card_image">
    <a href="booking.php"> <img src="images/kanyakumari.jpg"/></a>
  </div>
  <div class="card_title">
    <p style="color: white;margin-top:45px;font-family: Mulish">Kanyakumari</p>
  </div>
</div>
  

</div>
<!-- destinations -->
<!-- Dark -->
<div class="toggle">
  <div class="mask">
    <div class="icon-wrap active">
      <div class="icon sun"></div>
    </div>
    <div class="icon-wrap">
      <svg copy="icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path d="M187.73 151.4c0-55.24 29.34-104.19 76.27-129.72C242.21 9.81 216.56 3 188.15 3 99.15 3 36.2 70.46 36.2 151.4S98.3 299 187.33 299c28.26 0 53.87-6.82 75.69-18.69-46.48-25.31-75.29-73.8-75.29-128.91z" fill="#283445"/></svg>
    </div>
  </div>
  <div class="bar"></div>
</div>
<!-- Dark -->
<!-----NewsLtetterpop--->
  <div  class="newsletter-overlay">

  <div id="newsletter-popup">
    <a href="#" class="popup-close">X</a>
    <div class="newsletter-in">
    	<div class="ban">
	
			<img src="images/newsletter.jpg" alt="package-img" width="100%" height="300">
			
		</div>
		<br>
      <h3>Join our Newsletter!</h3>
      <form target="_blank" class="validate" method="post" action="#">
        <div class="frm-row">
          <input class="frm-name" type="text" placeholder="YOUR NAME" name="FNAME" required="">
        </div>
        <div class="frm-row">
          <input class="frm-email" type="text" placeholder="YOUR EMAIL" name="EMAIL" required="">             </div>
        <div class="frm-submit">
          <input type="submit" value="Submit" style="border-radius: 20px;">
        </div>
      </form>
    </div>
  </div>
</div>
  <!----NewsletterEnd--->

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
						<h3 >Social Handle</h3>
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
						<h3 </h3>
					</div>
					<div class="row" >
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
	
	<!---------------------------------------------------------------------------------------------- //footer ---------------------------------------------------------------------------->
	


<script>
	filterSelection("all")
	function filterSelection(c) {
	  var x, i;
	  x = document.getElementsByClassName("filterDiv");
	  if (c == "all") c = "";
	  for (i = 0; i < x.length; i++) {
		w3RemoveClass(x[i], "show");
		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
	  }
	}
	
	function w3AddClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
	  }
	}
	
	function w3RemoveClass(element, name) {
	  var i, arr1, arr2;
	  arr1 = element.className.split(" ");
	  arr2 = name.split(" ");
	  for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		  arr1.splice(arr1.indexOf(arr2[i]), 1);     
		}
	  }
	  element.className = arr1.join(" ");
	}
	
	// Add active class to the current button (highlight it)
	var header = document.getElementById("BtnfContainer");
var btns = header.getElementsByClassName("btnf");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active1");
  current[0].className = current[0].className.replace(" active1", "");
  this.className += " active1";
  });
}
	</script>



<script src="js/main.js" type="text/javascript"></script>
<script>
  $( ".mask" ).click(function() {
  $( ".icon-wrap" ).toggleClass('active');
  $('body, .bar').toggleClass('dark');
});
</script>
<script>
    var delay = 10000; //in milleseconds

jQuery(document).ready(function($){
  setTimeout(function(){ showNewsletterPopup(); }, delay);
  
  $('.popup-close').click(function(){
      $('.newsletter-overlay').hide();
      
      //when closed create a cookie to prevent popup to show again on refresh
      setCookie('newsletter-popup', 'popped', 30);
  });
});

function showNewsletterPopup(){
  if( getCookie('newsletter-popup') == ""){
     $('.newsletter-overlay').show();
     setCookie('newsletter-popup', 'popped', 30);
  }
  else{
    console.log("Newsletter popup blocked.");
  }
}


function setCookie(cname,cvalue,exdays)
{
    var d = new Date();
    d.setTime(d.getTime()+(exdays*24*60*60*1000));
    var expires = "expires="+d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires+"; path=/";
}

function getCookie(cname)
{
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) 
    {
        var c = jQuery.trim(ca[i]);
        if (c.indexOf(name)==0) return c.substring(name.length,c.length);
    }
    return "";
}
  </script>


	
</body>
</html>