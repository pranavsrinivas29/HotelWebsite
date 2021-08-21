<?php
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Bellfry|Home </title> 
	<link rel ="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Quattrocento+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<header>
		<nav>
			<div class="row clearfix">
			<img src="images/logo.jpg" class="logo">
			<ul class="main-nav">
				<li><a href="#">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				
			</ul>
			</div> 
		</nav>
		<div class="rows">
			<div class="main-content-header">
				<h1>Experience comfort like no other</h1>
           		<a href="proto.php" class="btn btn-explore">Book Now</a>
        	</div>	
        </div>  
	</header>

	<div class="descriphead">
		<h3 class="title" padding="25px"> An Aesthetic Hotel on the Amalfi Coast</h3>
	</div>

	<!-----description----->
	<div class="descrip">

		<p align="justify">Sitting on the high cliffs of the Amalfi Coast, The Belfry offers a sublime slice of modern minimalism on the Mediterranean, with an emphasis on elegant simplicity and first-rate food.<br>
		An airy refuge, our boutique 22-room hotel is a place where guests can rediscover the forgotten rhythms of long, drawn-out days and easy, lingering evenings.<br>
		Our hotel serves as a sanctuary, bearing a fresh, pared-back aesthetic and a white-on-white palette that accentuates both the sea and sky blues outside and the contemporary artworks on display inside.<br><br>

		Understated chic is our design ethos and subtle details are our raison d’être: we like to make sure everything is immaculate, from the pillowy and pristine white Etro cotton sheets dressing your bed right down to the carefully placed garnish of garden-grown herbs on your plate.</p>
	</div>

	<!----features images------> 
	<div class="categories">
		<div class="small-container">
			<div class="rows">
			<div class="col-1">
				<h3>Rooms & suites</h3>
				<a href="galleryroom.php">
					<img src="images/pexels-carmen-cobo-1103808.jpg">
				</a>
			</div>
			<div class="col-1">
				<h3>community activties</h3>
				<a href="galleryhotel.php">
					<img src="images/pexels-deeana-creates-2565222.jpg">
				</a>
			</div>
			<div class="col-1">
				<h3>gourmet experiences</h3>
				<a href="gallerydining.php">
					<img src="images/pexels-lina-kivaka-1813503.jpg">
				</a>
			</div>
		</div>
		</div>		
	</div>

	<!-----new features------>
	<div class="jetsetthead">
		<h3>
			Jetsetter guide to the Amalfi Coast 
		</h3>
	</div>

	<div class="jetsetter">
		<div class="container">
			<div class="rows">
				<div class="col-0">
					<p align="justify">
					Most visitors head staright to Amalfi and Sorrerento, but beyond these well-known
					 towns lies a smattering of under-the-radar spots that are ripe for exploration.<br>
					 From fresh octopus in sleepy Prainano to scenic swimming spot Fiordo di furore, all these are the pearls of the Amalfi Coast from in-the-know jetsetters staying at The Belfry.
					</p>
				</div>
				<div class="col-0">
					<img src="images/CA-panorama_2.jpg">
				</div>
			</div>
		</div>
	</div>

	<!------testimonial------>
	<div class="testhead">
		<h3>Testimonials</h3>
	</div>

	<div class="testimonial">
		<div class="small-container">
			<div class="rows">
				<div class="col-2">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<p align="justify">One of the best hotels in the world. The view from the hotel is astounding! Excellenct service and quality. The rooms are spacious and very comfortable.</p>
					<img src="images/sean parker.jpg">
					<h3>Sean Parker</h3>
				</div>
				<div class="col-2">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<p align="justify">Exquiste comfort. Wonderful scenery. Delicious food. You definetely would want to visit again. The stunning view of the ocean can be seen from the comfort of your room. </p>
					<img src="images/sarah connor.jpg">
					<h3>Sarah Connor</h3>
				</div>
				<div class="col-2">
					<i class="fa fa-quote-left" aria-hidden="true"></i>
					<p align="justify">The Belfry makes you feel at home. Wonderful people all around and in the hotel. Top of the line service and quality. And the view from the hotel is breathtaking.</p>
					<img src="images/william hudson.jpg">
					<h3>William Hudson</h3>
				</div>
		</div>
	</div>

<!----hotel membership---->
	<div class="membership">
		<div class="small-container">
			<div class="rows">
				<div class="col-3">
					<img src="images/slh.jpeg">
				</div>
				<div class="col-3">
					<img src="images/Virtuoso Preferred.jpeg" class="logo">
				</div>
				<div class="col-3">
					<img src="images/tajin.png">
				</div>
			</div>
		</div>
	</div>
		
<!-----footer---->
	<div class="footer">
		<div class="container">
			<div class="rows">
				<div class="footer-col-1">
					<img src="images/logo.jpg">
					<p>The Belfry 2020| All rights reserved.</p>
				</div>
				<div class="footer-col-2">
					<h3>Useful Links</h3>
						<ul>
							<li>Blogs</li>
							<li>Refund Policy</li>
							<li>Join Affiliate</li>
						</ul>
				</div>
				<div class="footer-col-3">
					<h3>Follow Us</h3>
						<ul>
							<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
							<li><i class="fa fa-instagram" aria-hidden="true"></i></li>
							<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
							<li><i class="fa fa-youtube-play" aria-hidden="true"></i></li>
						</ul>
				</div>
			</div>
		</div> 
		<div style="color:white;"><?php
		$file='count.txt';
		$count=strval(file_get_contents($file));
		file_put_contents($file,$count+1);
		echo("You are visitor number:".$count);
		?>
		</div>
	</div>
</body>
</html>	