<?php
//include('db.php');
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
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
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li><a href="#">My Profile</a></li>
			</ul>
			</div> 
        </nav>
        <div>
        <label>Name:</label>
        <?php
        include('db.php');
		$us = $_SESSION["user"];
        $sql = "SELECT * FROM `sign` WHERE (name='$us')" ;
        $re = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($re)
       
        ?>
        <input type="text" value="<?php echo $row['0']; ?>">
        <label>Name:</label>
        <input type="text">
        </div>
    </header>
    
</body>
</html>