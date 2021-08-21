<?php
	include('db.php');
	/*session_start();  
	if(!isset($_SESSION["user"]))
	{
 	header("location:index.php");
	}*/
?>
<!DOCTYPE html>
<html>
	<head><title>About US</title>
		<link rel="stylesheet" type="text/css" href="css/about.css">
		<link rel="stylesheet" type="text/css" href="css/ab.css">
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="container">
			<h1 class="heading">About Us</h1>
			<div class="small-container">

				<div class="profiles">
					<div class="profile">
						<img src="images/me.jpg" class="profile-img">
						<h3 class="nameofguy">ANAND</h3>
						<h5> Founder, CEO</h5>
						<i class="fa fa-quote-left" aria-hidden="true"></i>
						<p>"No dream is too big if you have the passion and the right mindset. The Belfry is that dream for me. This hotel is a result of all my hardwork for the past five years. We treat our customers like family and provide the best service to them. The Belfry is a home away from home."</p>
					</div>
					<div class="profile">
						<img src="images/pranav.jpg" class="profile-img">
						<h3 class="nameofguy">PRANAV</h3>
						<h5> Founder, CFO</h5>
						<i class="fa fa-quote-left" aria-hidden="true"></i>
						<p>"I always had a vision for the future while keeping an eye on the past. This hotel represents that vision. We have gone to great lengths to provide the utmost comfort and satisfaction to everyone who comes to our hotel. Come visit our hotel to see how great it truly is."</p>
					</div>
				</div>

			</div>
		</div><br>
		<div class="w3-cell-row" style="color:white;width:100%;margin-left:10px;height:300px;">
  			<center><div class="w3-container w3-cell" style="width:450px;height:300px;">
			<p><h3>MakeMyTrip Ratings</h3><h6>App Review</h6></p><hr style="border:3px solid #f1f1f1">
			<img src="mmt.jpg" alt="Norway" style="width:150px;height:100px;">
				<span style="margin-left:30px;" class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
		</div>
		<div class="w3-container w3-cell" style="width:450px;height:300px;">
    			<p><h3>GoIbibo.com Ratings</h3><h6>App Review</h6></p><hr style="border:3px solid #f1f1f1">
				<img src="Goibibo.jpg" alt="Norway" style="width:150px;height:100px;">
				<span style="margin-left:30px;" class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
  			</div>
			  	<div class="w3-container w3-cell" style="width:450px;">
					
					<span class="heading">Customer Rating</span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<p><br>4.1 average based on 281 reviews.</p>
<hr style="border:3px solid #f1f1f1">
<div class="row">
  <div class="side">
    <div>5 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5"></div>
    </div>
  </div>
  <div class="side right">
    <div>150</div>
  </div>
  <div class="side">
    <div>4 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4"></div>
    </div>
  </div>
  <div class="side right">
    <div>93</div>
  </div>
  <div class="side">
    <div>3 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3"></div>
    </div>
  </div>
  <div class="side right">
    <div>25</div>
  </div>
  <div class="side">
    <div>2 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2"></div>
    </div>
  </div>
  <div class="side right">
    <div>6</div>
  </div>
  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1"></div>
    </div>
  </div>
  <div class="side right">
    <div>7</div>
  </div>
</div>

			  	</div>
			</div>
		</div>
	</body>
</html>
