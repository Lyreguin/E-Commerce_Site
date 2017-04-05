<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
	session_start();
?>

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
					<li><a href="#">Shop</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="login.php">Log In</a></li>
					<li><a href="register.php">Sign Up</a></li>
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
			<!-- <div class="product">
				<div class="product-listy">
					<h3>Our Products</h3>
					<ul class="product-list">
						<li><a href="">New Products</a></li>
						<li><a href="">Old Products</a></li>
						<li><a href="">Abstract</a></li>
						<li><a href="">Classical</a></li>
						<li><a href="">New trend</a></li>
						<li><a href="">Artisinal</a></li>
						<li><a href="login.html">Log In</a></li>
						<li><a href="register.html">Register</a></li>
					</ul>
				</div>
				
				<div class="latest-bis">
					<img src="images/offer.jpg" class="img-responsive">
					<div class="offer">
						<p>40%</p>
						<small>Top Offer</small>
					</div>
				</div>
				<div class="tags">
				    	<h4 class="tag_head">Tags Widget</h4>
				         <ul class="tags_links">
							<li><a href="#">Kitesurf</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
							<li><a href="#">Best</a></li>
							<li><a href="#">Accessories</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="#">Apparel</a></li>
							<li><a href="#">Super</a></li>
							<li><a href="#">Duper</a></li>
							<li><a href="#">Theme</a></li>
							<li><a href="#">Responsiv</a></li>
					        <li><a href="#">Women</a></li>
							<li><a href="#">Equipment</a></li>
						</ul>
						<a href="#" class="link1">View all tags</a>
				     </div>
				
			</div> -->
			<div class="new-product prodys">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.html">Home</a>&nbsp;<span>&gt;</span></li>
						<li><a href="#">Account</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act"><a href="login.php">Log In</a></span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.html">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="account_grid">
				   <div class="col-md-6 login-right">
				  	<h3>REGISTERED CUSTOMERS</h3>
					<p>If you have an account with us, please log in.</p>
					<h2>Login Here</h2>
					<form method="post" action="login.php">
					<p>
					<label for="username">Email Address</label>
					<input type="text" id="username" name="username" value="" maxlength="20" />
					</p>
					<p>
					<label for="password">Password</label>
					<input type="text" id="password" name="password" value="" maxlength="20" />
					</p>
					<p>
					<input type="submit" value="Login" name="login"/>
					</p>
					</form>
					
					<?php
					if(isset($_POST['login']))
					{
						display();
					}
					?>
				   </div>	
				   <div class="col-md-6 login-left">
				  	 <h3>NEW CUSTOMERS</h3>
					 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
					 <a class="acount-btn" href="register.php">Create an Account</a>
				   </div>
				   <div class="clearfix"> </div>
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

<?php

function display()
{
	/*** check if the users is already logged in ***/
	if(isset( $_SESSION['user_id'] ))
	{
		echo "<script type='text/javascript'>alert('Users is already logged in')</script>";
	}
	/*** check that both the username, password have been submitted ***/
	if(!isset( $_POST['username'], $_POST['password']))
	{
		echo "<script type='text/javascript'>alert('Please enter a valid username and password')</script>";
	}
	/*** check the username is the correct length ***/
	elseif (strlen( $_POST['username']) > 100 || strlen($_POST['username']) < 4)
	{
		echo "<script type='text/javascript'>alert('Username must be between 4 and 100 characters')</script>";
	}
	/*** check the password has only alpha numeric characters ***/
	elseif (ctype_alnum($_POST['password']) != true)
	{
			/*** if there is no match ***/
		echo "<script type='text/javascript'>alert('Password must be alpha numeric')</script>";
	}
	else
	{
		/*** if we are here the data is valid and we can insert it into database ***/
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
		$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);


		$db = mysqli_connect('localhost', 'root', '', 'siteusers') or die('Problem connection to server.');
		$sql ="SELECT Name FROM customers WHERE Email = '$username' AND Password = '$password'";
		$result = mysqli_query($db, $sql) or die('query failed');
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		$count = mysqli_num_rows($result);
		if($count == 1) {
			// session_register("Name");
			$_SESSION['login_user'] = $username;
			echo "<script>window.location = 'memberIndex.php'</script>";
			//header("Location: memberIndex.php");
		}else {
			 $error = "Your Login Name or Password is invalid";
		}
	}
}
	
?>

