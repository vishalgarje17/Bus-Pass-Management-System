<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> DKTE Bus Pass Management System || Home Page</title>

<!--<link rel="shortcut icon" href="img/dkte-logo.png">-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />  <!-- flexslider-CSS --> 
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->  
<!-- //Custom Theme files -->  
<!-- web-fonts -->   
<link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
<link rel="icon" type="image/x-icon" href="https://bus.dkte.tech/assets/images/favicon.ico">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://www.redbus.com/stylesheets/home.fad517c240a09fac8afc9d200a614c59.bundle.css" rel="stylesheet">
    <title>BUS @ DKTE</title>

    <style>
        body{
            background-color: darkgoldenrod;
            background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)), url("img/dkte.jpg"); 
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .btn:hover{
        	background: cyan;
        }
        .button{
        	align-content: center;
        	height: 50px;
        	width: 180px;
        	padding: 10px;
        	margin-top: 400px;
        	margin-right: 20px;
        }
    </style>
</head>
<body>  
	<!-- banner -->
    
	 <nav class="navbar navbar-light bg-warning">
        <div class="container-fluid">
            <a href="#"><img src="img/dkte-logo.png" alt="logo"></a>
          <a class="navbar-brand">DKTE's TEXTILE AND ENGINEERING INSTITUTE, ICHALKARANJI<br><b><centre> BUS PASS MANAGEMENT SYSTEM</centre></b></a>
          <a href="#"><form class="d-flex">
            <a href="loginvalidation/Student_Login.php"> 
              <label style="color: black; margin: 15px;">Select user</label>
              <button class="btn btn-outline-primary text-white bg-primary" type="button" style="margin:15px;">Student</button></a>  <br><br>
            <a href="admin/index.php"><button class="btn btn-outline-primary text-white bg-primary" type="button" style="margin: 15px;">Admin</button></a>
          </form></a>
        </div>
      </nav>

      <marquee style="font-size: 20px; font-family: sans-serif; color: white;">
    Welcome to DKTE Bus Pass Management System | Do your Pass Registration on this Official Portal.  
</marquee>

	

	
		
	<!-- footer -->
	
	<!-- js --><center>
	<div class="container-fluid "> 
        
	<a href="includes/findmy.php"><button type="button" class="btn btn-outline-light btn-rounded btn-lg button " style="align-content: center;" data-mdb-ripple-color="danger">Find your Bus</button></a>
<a href="http://vishalgarje.42web.io/"><button type="button" class="btn btn-outline-light btn-rounded btn-lg button" data-mdb-ripple-color="danger">Project Team</button></a>
</div>
</center>
	<script src="js/jquery-2.2.3.min.js"></script> 
	<script src="js/SmoothScroll.min.js"></script> 
	<script src="js/jarallax.js"></script> 
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script> 
    <script src="js/bootstrap.js"></script>

    <?php include_once('includes/footer.php');?>
    </div>

</body>
</html>
