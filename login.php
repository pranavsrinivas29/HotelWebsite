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
        <input name="eid" required><br>
        <label>Password*</label>
        <input name="password" required><br>
        
        <input type="submit" name="submit" class="btn btn-primary">
        <?php
			if($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $myusername = mysqli_real_escape_string($con,$_POST['name']);
                $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
                $myeid = mysqli_real_escape_string($con,$_POST['eid']);

                $sql = "SELECT id FROM sign WHERE name = '$myusername' and emailid = '$myeid' and password = '$mypassword'";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                $active = $row['active'];
      
                $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
                 if($count == 1) {
         
                    $_SESSION["user"] = $myusername;
         
                    header("location: index.php");
                }else
                {
                    echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
                }
            }
            
		?>
    </form>
    </div>
</body>
</html>