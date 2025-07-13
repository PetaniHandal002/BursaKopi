<?php 
	include "inc/konek.php";
	$id='1';
	$con=mysqli_connect($DB_host,$DB_User,$DB_Pswd,$DB_Nama);
	$sql="select * from profile where id='$id'";
	$result=mysqli_query($con,$sql);
	$iden=mysqli_fetch_array($result);

	$founder=$iden[1];
	$description=$iden[2];
	$alamat=$iden[3];
	$no_telp=$iden[4];
	$email=$iden[5];
		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>BURSA KOPI</title>
		<!-- meta -->
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

	    <!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="css/ionicons.min.css"> -->
		<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
	    <link rel="stylesheet" href="css/animate.css">
	    <link rel="stylesheet" href="js/nivo-lightbox/nivo-lightbox.css">
		<link rel="stylesheet" href="js/nivo-lightbox/nivo-lightbox-theme.css">
		<link rel="stylesheet" href="css/custom.css">
		
	    <!-- js -->
		<script type="text/javascript">
		if (typeof document.onselectstart!="undefined") {
			document.onselectstart=new Function ("return false");
		}
		else{
			document.onmousedown=new Function ("return false");
			document.onmouseup=new Function ("return true");
		}
		</script>
		<script src="js/jquery.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
	    <script src="js/owl.carousel.min.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.ui.shake.js"></script>
		<script src="js/jquery.actual.min.js"></script>
		<script src="js/falidasi.js"></script>
	</head>

	<header id="header">
			<div id="wrapper">
			<div id="overlay-1">
				<section id="navigation-scroll"> 
					<div class="text-center starting-text wow animated zoomInDown">
						<h2>Welcome to Bursa Kopi
						</br></h2>
					</div>
				</section>	
				
				<section>

						<nav class="navbar navbar-default navbar-fixed-top">
							<img src="image/logo.jpg" style="width:200px">
						
						<div class="navbar-header" id="navbar-example">
					      <ul class="nav navbar-right">
						 	<li><a href="index1.php" class="active">Home</a>&nbsp&nbsp<li>
					        <li><a href="sign.php">Sign In</a>&nbsp&nbsp</li>
	    					<li><a href="register.php">Registration</a>&nbsp&nbsp</li>
						   </ul>
					    </div>
						
					</div><!-- /.navbar-collapse -->
				</section>	<!-- #navigation -->	
				</section>
					<div id="bottom" class="bottom text-center">
			    	    <a href="#about"><i class="ion-ios7-arrow-down"></i></a>
				    </div>
				</div><!-- overlay-1 -->
			</div>	<!-- wrapper -->		
	</header>

	<!-- footer -->
	<section id="footer" class="main-footer">
		<div class="container">
			<center><p>&copy;Bursa Kopi </p>
			<a href="#starting" class="up"><i class="fa fa-arrow-circle-up"></i></a></center>
		</div>
	</section><!-- footer -->
	
	<body data-spy="scroll" data-target="#navbar-example">	
<?php
koneksi_buka();
?>
		</script>
        <script src="js/jquery-ui-1.10.3.min.js"></script>
        <script src="js/jquery.knob.js"></script>
        <script src="js/daterangepicker.js"></script>
        <script src="js/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="js/smoothscroll.js"></script>
        <script src="js/nivo-lightbox/nivo-lightbox.min.js"></script>
        <script src="js/script.js"></script>
       
	</body>
</html>
