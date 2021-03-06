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
					<li><a href="index.php">Home</a></li>
					<!--
					<li><a href="bikes.html">Pots</a></li>
					<li><a href="best.html">Best Buy</a></li>
					<li><a href="bikes.html">Offers</a></li>
					<li><a href="best.html">Accessories</a></li>
					<li><a href="contact.html">Contact</a></li>
				-->
					<li><a>Shop</a></li>
					<li><a href="about.php">About</a></li>
					<li><?php
							if(!isset($_SESSION['login_email'])){
								echo '<a href="login.php">Log In</a>';
							}
							else{
								echo '<a href="signout.php">Log Out</a>';
							}
						?></li>
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
			<div class="new-product">
				<div class="new-product-top">
					<ul class="product-top-list">
						<li><a href="index.html">Home</a>&nbsp;<span>&gt;</span></li>
						<li><span class="act">About Us</span>&nbsp;</li>
					</ul>
					<p class="back"><a href="index.html">Back to Previous</a></p>
					<div class="clearfix"></div>
				</div>
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>About Pimped Up Plants</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Additional Information</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Reviews</span></li>
							  <div class="clear"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="facts">
									  <ul class="tab_list">
									  	<li><em>Do you like plants? What about abstract modern art? Fan of combining unusual ideas in a radical new way?</em></li>
									  	<li>Choose from one of our preexisting modern art pieces, then let us know what your favorite plant is and we'll throw it in for you! We make it easy for you to purchase a potted plant and have your own home grown work of modern art.</li>
									  	<li>Or if you have a great idea for your own customized art project send us an email and work with a professional artist to make your piece come to life!</li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">
									  <ul class="tab_list">
									    <li>Our company started when three engineering students had a crazy idea to start making living art instead of staying in school to get high paying jobs at advanced tech companies. From that day onwards they have been hard at work ever since, making the dreams of plant and art enthusiasts everywhere come to life!</li>
									  	<li>So check out our store today, buy one of our popular premade pieces today, or talk to one of our experts to make your own, you won't be disappointed!</li>
									  	<li>And we ship to anywhere in the world from our headquarters in northern Alaska! So no matter where you are, you can enjoy our beautiful work and bring living art into your life.</li>
									  </ul>           
							        </div>
							     </div>	
							      <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
							      	<div class="facts">
										<ul class="tab_list">
										  	<li>Do you really need reviews for putting a plant in a pimped up pot?</li>
										  	<li>Well if you must know, we have a 100% customer satisfaction rate. All customers that were dissatisfied were determined to be unhappy directly due to FedEx tossing their package on the curb and ruining their precious PUP (pimped up plant).</li>
											<DL>
											<DT><STRONG>Martha's Customer Review</STRONG>
										  	<DD><li>Martha, one of our original customers (whose PUP was not destroyed during shipping) has plenty of great things to say about her purchases. The proud mother of 4 personalized PUPs, she displays them prominently on her front porch for all to see. Since owning these PUPs she has seen an exponential trend in the number of her instagram followers, noticed a drastic increase in the number of attractive young suitors visiting her house, and has even had a 30% increase in Tinder matches.</li>
										  	<DT><STRONG>Sally's Customer Review</STRONG>
											<DD><li>Another recent customer, Sally, is a teacher in an elementary school who bought one of our standard PUPs. She has discovered that placing it at the front of the classroom attracts the attention of all the students whether or not they are actually listening to her. This way no matter what boring history lesson she teaches it seems like all the children are engaged when the principal walks by. Sally has even received a promotion for her perceived improvement in teaching!</li>
											</DL>
											<em>You too can be one of our satisfied customers, just order your PUP today!</em>
									  	</ul>  
									</div>    
							     </div>	
							 </div>
					      </div>
					 </div>
					 <div class="new-topday">
					<a href="register.php"><h3 class="new-models" style="width:130px; text-align: center">Sign Up Now</h3></a>
					<div class="clearfix"></div>
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
