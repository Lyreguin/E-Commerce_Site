



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
						 </div>
						 <div class="register-top-grid">
						 	<form method="post" action="register.php">
							<!--<h3>PERSONAL INFORMATION</h3>-->
							 <div>
								<span>First Name<label>*</label></span>
								<input type="text" name="firstName" required pattern="[A-Za-z '-]{1,30}" title="Letters only"> 
							 </div>
							 <div>
								<span>Last Name<label>*</label></span>
								<input type="text" name="lastName" required pattern="[A-Za-z '-]{1,30}" title="Letters only"> 
							 </div>
							 <div>
								 <span>Email<label>*</label></span>
								 <input type="text" name="email" required placeholder="Enter a valid email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$" title="example@test.com"> 
							 </div>
							 <div style="visibility:hidden">
								 <span>Invisible Placeholder<label>*</label></span>
								 <input type="text"> 
							 </div>
							 
							 <div>
								 <span>Address</span>
								 <input type="text" name="address" pattern="[A-Za-z0-9 ]{1,30}$" title="Alphanumeric characters only"> 
							 </div>
							 <div>
								 <span>City</span>
								 <input type="text" name="city" pattern="[A-Za-z ]{1,30}$" title="Letters only"> 
							 </div>
							 <div>
								 <span>State</span>
								 <select name="state" size="1">
									  <option value="AK">AK</option>
									  <option value="AL">AL</option>
									  <option value="AR">AR</option>
									  <option value="AZ">AZ</option>
									  <option value="CA">CA</option>
									  <option value="CO">CO</option>
									  <option value="CT">CT</option>
									  <option value="DC">DC</option>
									  <option value="DE">DE</option>
									  <option value="FL">FL</option>
									  <option value="GA">GA</option>
									  <option value="HI">HI</option>
									  <option value="IA">IA</option>
									  <option value="ID">ID</option>
									  <option value="IL">IL</option>
									  <option value="IN">IN</option>
									  <option value="KS">KS</option>
									  <option value="KY">KY</option>
									  <option value="LA">LA</option>
									  <option value="MA">MA</option>
									  <option value="MD">MD</option>
									  <option value="ME">ME</option>
									  <option value="MI">MI</option>
									  <option value="MN">MN</option>
									  <option value="MO">MO</option>
									  <option value="MS">MS</option>
									  <option value="MT">MT</option>
									  <option value="NC">NC</option>
									  <option value="ND">ND</option>
									  <option value="NE">NE</option>
									  <option value="NH">NH</option>
									  <option value="NJ">NJ</option>
									  <option value="NM">NM</option>
									  <option value="NV">NV</option>
									  <option value="NY">NY</option>
									  <option value="OH">OH</option>
									  <option value="OK">OK</option>
									  <option value="OR">OR</option>
									  <option value="PA">PA</option>
									  <option value="RI">RI</option>
									  <option value="SC">SC</option>
									  <option value="SD">SD</option>
									  <option value="TN">TN</option>
									  <option value="TX">TX</option>
									  <option value="UT">UT</option>
									  <option value="VA">VA</option>
									  <option value="VT">VT</option>
									  <option value="WA">WA</option>
									  <option value="WI">WI</option>
									  <option value="WV">WV</option>
									  <option value="WY">WY</option>
									</select>
							 </div>
							 <div>
								 <span>Zip Code</span>
								 <input type="text" name="zip" pattern="[0-9]{5}" title="5 digit numeric zip code"> 
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
								$db = mysqli_connect('localhost', 'root', '', 'siteusers') or die('Problem connection to server.');
								$email = $_POST['email'];
								$query = "SELECT * FROM customers WHERE email='$email'";
						 		mysqli_query($db, $query) or die("error");
						 		$result = mysqli_query($db, $query);
						 		if (mysqli_fetch_array($result) !=0 )
						 		{
									echo "<script type='text/javascript'>alert('This email address is already associated with an account.')</script>";
						 		} 
						 		else 
						 		{						 			// Here we say that you registered effectively and make a post request to our sql database!
						 			// I'm going to sleep now.
						 			// Also I had to change my database table name to customers because I couldn't delete siteUsers.
						 			$name = $_POST['firstName']." ".$_POST['lastName'];
						 			$email = $_POST['email'];
						 			$address = $_POST['address'];
						 			$city = $_POST['city'];
						 			$state = $_POST['state'];
						 			$zip = $_POST['zip'];
						 			$sql = "INSERT INTO customers (`Name`, `Email`, `Address`, `City`, `State`, `Zip Code`) 
						 			VALUES ('$name', '$email', '$address', '$city', '$state', '$zip')";
						 			if (mysqli_query($db, $sql)) 
						 			{
						 				echo "<script type='text/javascript'>alert('Account Created Successfully!')</script>";
						 			}
						 			else
						 			{
							 			echo $name;
							 			echo $email;
							 			echo $address;
							 			echo $city;
							 			echo $state;
							 			echo $zip;
							 			echo "We failed. <br>";
							 			echo mysqli_error($db);

							 		}
							 		require 'PHPMailerAutoload.php';

									$mail = new PHPMailer;

									//$mail->SMTPDebug = 3;                               // Enable verbose debug output

									// $mail->isSMTP();                                      // Set mailer to use SMTP
									// $mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
									// $mail->SMTPAuth = true;                               // Enable SMTP authentication
									// $mail->Username = 'user@example.com';                 // SMTP username
									// $mail->Password = 'secret';                           // SMTP password
									// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
									// $mail->Port = 587;                                    // TCP port to connect to

									$mail->setFrom('from@example.com', 'Pimped Up Plants');
									$mail->addAddress('jbh8qz@virginia.edu', $name);     // Add a recipient
									$mail->addAddress($email, $name);               // Name is optional
									//$mail->addReplyTo('info@example.com', 'Information');
									//$mail->addCC('cc@example.com');
									//$mail->addBCC('bcc@example.com');

									//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
									//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
									$mail->isHTML(true);                                  // Set email format to HTML

									$mail->Subject = 'Pimped Up Plants';
									$mail->Body    = 'Thank you for subscribing to the Pimped Up Plants mailing list!';
									$mail->AltBody = 'Thank you for subscribing to the Pimped Up Plants mailing list!';

									if(!$mail->send()) {
									    echo 'Message could not be sent.';
									    echo 'Mailer Error: ' . $mail->ErrorInfo;
									} else {
									    echo 'Message has been sent';
									}
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
