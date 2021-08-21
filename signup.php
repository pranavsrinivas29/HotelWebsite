<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVATION SUNRISE HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div>
    <form name="form" method="post">
        <label>Username*</label>
        <input name="name" required>
        <br>
        <label>Email*</label>
        <input name="email" required><br>
        <label>Password*</label>
        <input name="password" required><br>
        <label>Retype Password*</label>
        <input name="retype" required><br>
        <input type="submit" name="submit" class="btn btn-primary">
        <?php
							if(isset($_POST['submit']))
							{
                                $code1=$_POST['password'];
                                $code=$_POST['retype']; 
                                if($code1!="$code")
							    {
                                    echo "<script type='text/javascript'> alert('Invalid passwd')</script>"; 
                                }
                                else
							    {
							
									$con=mysqli_connect("localhost","root","","hotel");
									$check="SELECT * FROM signup WHERE name = '$_POST[name]'";
									$rs = mysqli_query($con,$check);
                                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                    if($data > 1) {
										echo "<script type='text/javascript'> alert('User Already in Exists')</script>";
										
                                    }
                                    else
									{
										
										$newUser="INSERT INTO `sign`(`name`, `emailid`, `password`) VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')";
										if (mysqli_query($con,$newUser))
										{
											echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
											
										}
										else
										{
											echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
											
										}
                                    }
                                    echo "";
                                }
							}
		?>
    </form>
    </div>

</body>
</html>