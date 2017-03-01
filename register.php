
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'siteUsers') or die('Problem connection to server.');
?>




<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pimped up Plants</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Doppio+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.etalage.min.js"></script>
<link href="css/component.css" rel='stylesheet' type='text/css' />
<!-- Include the Etalage files -->
<!----//details-product-slider--->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
			   </script>	
</head>
<body>
<!-- Header Starts Here -->
<div class="header">
	<div class="container">
		<div class="header-top">
				<div class="logo">
					<a href="index.html"><img src="images/logo2.png"></a>
				</div>
			
				<div class="logotitle" style="float: left; padding-top: 23px; font-size: 45px; color: white;">PIMPED UP PLANTS
				</div>
			<div class="clear"></div>
			
			<div class="navigation">
				<ul class="navig">
					<li><a href="index.html">Home</a></li>
					<!--
					<li><a href="bikes.html">Pots</a></li>
					<li><a href="best.html">Best Buy</a></li>
					<li><a href="bikes.html">Offers</a></li>
					<li><a href="best.html">Accessories</a></li>
					<li><a href="contact.html">Contact</a></li>
				-->
					<li><a href="">Shop</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="register.php">Sign In</a></li>

				</ul>
				<script>
					$( "span.menu" ).click(function() {
					  $( ".navigation ul.navig" ).slideToggle( "slow", function() {
					    // Animation complete.
					  });
					});
				</script>

			</div>
			<div class="clearfix"></div>
		
		</div>
		<div class="about">
			<div class="prody">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.html">Home</a>&nbsp;<span>&gt;</span></li>
						<li><a href="#">Account</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act"><a href="register.php">Register</a></span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.html">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				 <h3 class="new-models">For New Customers</h3>
				 <div class="register">
				  	 <form action="register.php" method="post"> 
						 <div>
						 <h3>LOGIN</h3>
						 </div>
						 <div class="register-top-grid">
									 <div>
										<span>Email<label>*</label></span>
										<input type="text"  name="loginEmail">
									 </div>
									 <div>
										<span>Password<label>*</label></span>
										<input type="text"  name="loginPassword">
									 </div>
						 </div>
						 <div style="visibility:hidden">
							<span>Invisible Placeholder<label>*</label></span>
							<input type="text"> 
						 </div>
						 <div style="visibility:hidden">
							<span>Invisible Placeholder<label>*</label></span>
							<input type="text"> 
						 </div>
						 <div>
						 <h3>NEW USER REGISTRATION</h3>
						 <?php
						 	$query = "SELECT Name FROM customers";
						 	mysqli_query($db, $query) or die("error");


						 	$result = mysqli_query($db, $query);
						 	$row = mysqli_fetch_array($result);
						 	echo $row[0];
						 ?>

						 </div>
						 <div class="register-top-grid">
						 	<form method="post" action="register.php">
							<!--<h3>PERSONAL INFORMATION</h3>-->
							 <div>
								<span>First Name<label>*</label></span>
								<input type="text" name="firstName" required> 
							 </div>
							 <div>
								<span>Last Name<label>*</label></span>
								<input type="text" name="lastName" reuquired> 
							 </div>
							 <div>
								 <span>Email<label>*</label></span>
								 <input type="email" name="email" required placeholder="Enter a valid email address"> 
							 </div>
							 <div style="visibility:hidden">
								 <span>Invisible Placeholder<label>*</label></span>
								 <input type="text"> 
							 </div>
							 
							 <div>
								 <span>Address</span>
								 <input type="text" name="address"> 
							 </div>
							 <div>
								 <span>City</span>
								 <input type="text" name="city"> 
							 </div>
							 <div>
								 <span>State</span>
								 <input type="text" name="state"> 
							 </div>
							 <div>
								 <span>Zip Code</span>
								 <input type="text" name="zip"> 
							 </div>
							 
							 </div>
						     <div class="register-bottom-grid">
									 <div style="visibility:hidden">
										<span>Invisible Placeholder<label>*</label></span>
										<input type="text"> 
									 </div>
									 <div style="visibility:hidden">
										<span>Invisible Placeholder<label>*</label></span>
										<input type="text"> 
									 </div>
	<!-- 								 <div>
										<span>Password<label>*</label></span>
										<input type="password" name="password">
									 </div>
									 <div>
										<span>Confirm Password<label>*</label></span>
										<input type="password" name="confirmPassword">
									 </div> -->
									 <div class="clearfix"> </div>
									 <div>
									 <a class="news-letter" href="#">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
									 </a>
									 </div>
							 </div>
							 <input class="register-but" type="submit" value="submit" name="submit">
						</form>
						<?php 

							function display()
							{
								$db = mysqli_connect('localhost', 'root', '', 'siteUsers') or die('Problem connection to server.');
								$email = $_POST['email'];
								$query = "SELECT * FROM customers WHERE email='$email'";
						 		mysqli_query($db, $query) or die("error");
						 		$result = mysqli_query($db, $query);
						 		if (mysqli_fetch_array($result) !=0 )
						 		{
						 			echo "hello";
						 			// Here we say that you are already a member!
						 		} 
						 		else 
						 		{
						 			echo "goodbye";
						 			// Here we say that you registered effectively and make a post request to our sql database!
						 			// I'm going to sleep now.
						 			// Also I had to change my database table name to customers because I couldn't delete siteUsers.
						 		}


							}
							if(isset($_POST['submit']))
							{
								display();
							}
							?>
				   </div>
			</div>
			<div class="clearfix"></div>
			<!--- fOOTER Starts Here --->
		<div class="footer-top abt-ft">
			<ul class="bottom-list">
				<li><a href="#">terms & conditions</a></li>
				<li><a href="#">return policy</a></li>
				<li><a href="#">reviews</a></li>
				<li><a href="#">about shop</a></li>
				<li><a href="#">secure payment</a></li>
			</ul>
		</div>
		<ul class="payment-list">
			<li><i class="paypal"></i></li>
			<li><i class="wi"></i></li>
			<li><i class="visa"></i></li>
			<li><i class="amazon"></i></li>
			<li><i class="sm"></i></li>
		</ul>
		<p class="copyright">2014 Template By <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
	<!--- fOOTER Starts Here --->
</body>
</html>
