	<?php 
		include "inc/konek.php";
		$id='1';
		$con=mysqli_connect($DB_host,$DB_User,$DB_Pswd,$DB_Nama);
		$sql="select * from profile where id='$id'";
		$result=mysqli_query($con,$sql);
		$ndy=mysqli_fetch_array($result);

		$founder=$ndy[1];
		$description=$ndy[2];
		$alamat=$ndy[3];
		$no_telp=$ndy[4];
		$email=$ndy[5];
		
		?>

<!DOCTYPE html>
<html>
	<head>
		<title>Bursa Kopi</title>
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
		<script>
		jQuery(function ($) {
			
			$("#daftardisik").validate({
			
			rules: {
				firstname: "required",
				lastname: "required",
				username: {
					required: true,
					minlength: 5
				},
				 password_name: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password_name: {
                        required: true,
                        minlength: 5,
                        equalTo: "#password_id"
                    },
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				firstname: "Enter your first name",
				lastname: "Enter your last name",
				username: {
					required: "Enter your username",
					minlength: "Minimal 5 character",
				},
				password_name: {
					required: "Enter your password",
					minlength: "Minimal 5 character",
				},
				confirm_password_name: {
					required: "Reenter your password",
					minlength: "Minimal 5 character",
					equalTo: "Password not match",
				},
				email: "Enter your valid email",
				
			}
		});


		// propose username by combining first- and lastname
		$("#username").focus(function() {
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			if (firstname && lastname && !this.value) {
				this.value = firstname + "." + lastname;
			}
		});

			});
		</script>
		<script>
			$(document).ready(function() {
			
			$('#login').click(function()
			{
			var username=$("#username").val();
			var password=$("#password").val();
			var dataString = 'username='+username+'&password='+password;
			if($.trim(username).length>0 && $.trim(password).length>0)
			{
			
 			$.ajax({
            type: "POST",
            url: "ajaxlogin.php",
            data: dataString,
            cache: false,
            beforeSend: function(){ $("#login").val('Connecting...');},
            success: function(data){
            if(data)
            {
            window.location = "user/a7c715ebc42bf47e1f516344507ec9c5";
            }
            else
            {
             $('#box').shake();
			 $("#login").val('Login');
			 $("#error").html("<span style='color:#cc0000'>Error:</span>  username or password not correct !!!. ");
            }
            }
            });
			
			}
			return false;
			});
			
				
			});
		</script>
		<script type="text/javascript">
 
        function checkAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
			url: "lib.php",
			data:'username='+$("#username").val(),
			type: "POST",
			success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide();
			},
			error:function (){
			<?php $username="";?>
			}
			});
		}
		function checkemail() {
			$("#isun").show();
			jQuery.ajax({
			url: "libra.php",
			data:'email='+$("#email").val(),
			type: "POST",
			success:function(data){
			$("#emailstatus").html(data);
			$("#isun").hide();
			},
			/*error:function (){
			<?php $email="";?>
			}*/
			});
		}
   	   </script>
	</head>

	<body data-spy="scroll" data-target="#navbar-example">
	
<?php

koneksi_buka();
?>
		<div id="wrapper">
			<div id="overlay-1">
			<section id="navigation-scroll">
					<nav class="navbar navbar-default navbar-fixed-top">
						<img src="image/logo.jpg" style="width:200px">
						<div class="container">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					    </div>
			    
					    <!-- Collect the nav links, forms, and other content for toggling -->

					    <div class="navbar-header" id="navbar-example">
					      <ul class="nav navbar-right">
						 	<li><a href="index1.php" class="active">Home</a>&nbsp&nbsp<li>
					        <li><a href="sign.php">Sign In</a>&nbsp&nbsp</li>
	    					<li><a href="register.php">Registration</a>&nbsp&nbsp</li>
						   </ul>
					    </div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
					</nav>	<!-- navbar -->
				</section>	<!-- #navigation -->	
					
				<section id="starting">
					
				</section>
				<div id="bottom" class="bottom text-center">
			        <a href="index1.php"><i class="ion-ios7-arrow-down"></i></a>
			    </div>
		
		<!-- contact -->
	    <section id="formasi">
	    	<div class="container text-center">
				<div class="row text-center">
					<div class="bg-image">
						<div class="col-md-6 col-md-offset-3 text-center share-text wow animated zoomInDown heading-text">
		                	<class="heading">
							<div><p><br></p></div>
		                	<h1 style='color:#ffffff'><?php echo "Sign-In";?>
							</h1>
						</div>
					</div>
				</div>
				<div class="row  main_content col-md-12">
				<div id="box">
					<form method="post" action="ajaxlogin.php">
						<div class="col-md-6 col-md-offset-3 well">
							<div class="form">
							
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-user fa-fw"></i>
	  								</span>
								 	<input type="text" required="" placeholder="Username" id="username" autocomplete="off" class="form-control" name="username" minlength="5">
								</div>
								<div class="input-group margin-bottom-sm">
	  								<span class="input-group-addon">
	  									<i class="fa fa-lock fa-fw"></i>
	  								</span>
								 	<input type="password" required="" placeholder="Password" id="password" autocomplete="off" class="form-control" name="password">
								</div>						
								
							</div>
							<br/><br>				
							<input class="btn btn-sub" type="submit" value="Sign In" id="login">
							<div id="error"></div>
						</div>
						<div><p><br><br><br><br><br><br><br><br><br></p></div>
					</form>	
				</div>
		</section>	<!-- contacts --> 		
		
		<!-- footer -->
		<section id="footer" class="main-footer">
			<div class="container">
				<center><p><br>&copy;Bursa Kopi</p>
				<a href="#starting" class="up"><i class="fa fa-arrow-circle-up"></i></a></center>
			</div>
		</section><!-- footer -->
		</div><!-- overlay-1 -->
		</div>	<!-- wrapper -->		
	
		<!-- js -->
		<script>
 			new WOW().init();
		</script>
		<script>
			$( function() {
  
			  // change is-checked class on buttons
			  	$('.button-group').each( function( i, buttonGroup ) 
			  	{
			    	var $buttonGroup =$( buttonGroup );
			    	$buttonGroup.on( 'click', 'button', function() 
			    	{
			      		$buttonGroup.find('.is-checked').removeClass('is-checked');
			      		$( this ).addClass('is-checked');
			    	});
			  	});
			  
			});
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
