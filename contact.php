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
<head>
	<title>
		Contact Us	
	</title>
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel ="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body >
	<div class="container">
		<h1 style="color:black"> Connect with us</h1>
		<p>We would love to answer your queries. Feel free to get into touch with us.</p>
		

		<div class="contact-box">
			<div class="contact-left">
				<h3>Send your Request</h3>
				<form method="post" name="sentMessage" id="contactForm" onsubmit="return confirm('Dear user,your query has been sent, Admin team will contact');">
					<div class="input-row">
						<div class="input-group">
							<label>Name</label>
							<input type="text" name="name" id="name" required>
						</div>
						<div class="input-group">
							<label>Email ID</label>
							<input type="text" name="email" id="email" required>
						</div>
					</div>
					<div class="input-row">
						<div class="input-group">
							<label>Phone No</label>
							<input type="text" name="phone" id="phone" required>
						</div>
						<div class="input-group">
							<label>Subject</label>
							<input type="text" name="subject" id="subject" required>
						</div>
					</div>
					<label>Message</label>
					<textarea rows="10" placeholder="your message" name="message" id="message"></textarea>
					<input type="submit" name="sub" value="Send Now" class="btn btn-primary">
				</form>
				<?php
				include('db.php');
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$subject = $_POST['subject'];
					$message = $_POST['message'];
					$sql = "INSERT INTO `contactus`(`name`, `email`, `phno`, `subject`,`message`) VALUES ('$name','$email','$phone','$subject','$message')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"";
				}
				?>
			</div>
			<div class="contact-right">
				<h3>Reach Us</h3>
				<table>
					<tr>
						<td>Email</td>
						<td>thebelfry@gmail.com</td>
					</tr>
					<tr>
						<td>Phone</td>
						<td>(+91) 604-33-565</td>
					</tr>
					<tr>
						<td>Address</td>
						<td>96,Little Italy, Heritage Town, Pondicherry,605001</td>
					</tr>
				</table>
				<div class="social-icons">
				<div class="small-container">
				<div class="rows">
					<div class="col-1"><i class="fa fa-facebook" aria-hidden="true"></i></div>
					<div class="col-1"><i class="fa fa-instagram" aria-hidden="true"></i></div>
					<div class="col-1"><i class="fa fa-twitter" aria-hidden="true"></i></div>
				<!------
				<img src="images/fb.png">
				<img src="images/tw.png">
				<img src="images/gp.png"> 
				------->
				</div>
			</div>
			</div>
		</div>
	</div>	
</body>
</html>