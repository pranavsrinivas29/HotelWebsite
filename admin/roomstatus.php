<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator	</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="assets/css/roomstatus.css" rel="stylesheet" />
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"> <?php echo $_SESSION["user"]; ?> </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="home.php"><i class="fa fa-dashboard"></i> Status</a>
                    </li>
                    
					<li>
                        <a class="active-menu" href="roomstatus.php"><i class="fa fa-bar-chart-o"></i> Room Status</a>
                    </li>
                    <li>
                        <a href="payment.php"><i class="fa fa-qrcode"></i> Payment</a>
                    </li>
                    <li>
                        <a  href="queries.php"><i class="fa fa-qrcode"></i> Queries</a>
                    </li>
                    <li>
                        <a  href="profit.php"><i class="fa fa-qrcode"></i> Profit</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   


                    
				</ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Room status </small>
                        </h1>
                    </div>
                </div><?php
				include('db.php');
				
				
			   ?>	
                <!-- /. ROW  -->
                <div class="grid-container">
                    
                    <div style="background-image:url(red.jpg)">Single Room:Single Bed<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Single Room' and bedding = 'Single')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label1" id="label1" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(red.jpg)">Single Room:Double Bed<br>
                    <label>Status:</label>
                    <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Single Room' and bedding = 'Double')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                    ?>
                        <input type="text" name="label2" id="label2" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(red.jpg)">Single Room:Triple Bed<br>
                    <label>Status:</label>
                    <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Single Room' and bedding = 'Triple')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                    ?>
                        <input type="text" name="label3" id="label3" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>  

                    <div style="background-image:url(red.jpg)">Single Room:Quadruple<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Single Room' and bedding = 'Quad')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label4" id="label4" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(blue.jpg)">Superior Room:Single Bed<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Superior Room' and bedding = 'Single')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label5" id="label5" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(blue.jpg)">Superior Room:Double Bed
                    <br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Superior Room' and bedding = 'Double')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label6" id="label6" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>  

                    <div style="background-image:url(blue.jpg)">Superior Room:Triple Bed<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Superior Room' and bedding = 'Triple')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label7" id="label7" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(blue.jpg)">Superior Room:Quadruple <br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Superior Room' and bedding = 'Quad')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label1" id="label8" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(green.jpg)">Deluxe Room:Single Bed<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Deluxe Room' and bedding = 'Single')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label1" id="label9" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>"></div>
                    <div style="background-image:url(green.jpg)">Deluxe Room:Double Bed<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Deluxe Room' and bedding = 'Double')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label1" id="label10" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(green.jpg)">Deluxe Room:Triple Bed<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Deluxe Room' and bedding = 'Triple')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label1" id="label11" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>  
                    <div style="background-image:url(green.jpg)">Deluxe Room:Quadruple<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Deluxe Room' and bedding = 'Quad')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        ?>
                        <input type="text" name="label1" id="label12" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(yellow.jpg)">Guest Room:Single<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Guest House' and bedding = 'Single')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label1" id="label13" style="width:150px;height:40px;"  value="<?php echo $row[0]; ?>">
                    </div>
                    <div style="background-image:url(yellow.jpg)">Guest Room:Double<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Guest House' and bedding = 'Double')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label1" id="label14" style="width:150px;height:40px;"  value="<?php echo $row[0]; ?>">
                    </div>  

                    <div style="background-image:url(yellow.jpg)">Guest Room:Triple<br>
                        <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Guest House' and bedding = 'Triple')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label1" id="label1" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>

                    <div style="background-image:url(yellow.jpg)">Guest Room:Quad<br>
                    <label>Status:</label>
                        <?php
                        $sql = "SELECT place FROM `room` WHERE (type='Guest House' and bedding = 'Quad')" ;
                        $re = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($re)
                        
                        ?>
                        <input type="text" name="label16" id="label16" style="width:150px;height:40px;" value="<?php echo $row[0]; ?>">
                    </div>
                    
                </div>
				  
            </div>
        </div>
                   
    </div>

               
    
<!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>

</html>