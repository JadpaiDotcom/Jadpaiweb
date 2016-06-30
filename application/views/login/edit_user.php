
<!DOCTYPE html>
<html>
	<head>	
		<title>Register-login-form Website Template | Home :: w3layouts</title>
		<link href="<?php echo base_url();?>style/register/css/style.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500' ' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->
	</head>
	<body>	
			<!--start-login-form-->
				<div class="main">
			    	<div class="login-head">
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>Register</h2>
						 	 </div>
						  	<form action="<?php echo site_url('login_customer/register_new')?>" method="POST">
						  		<input type="text" name="fname" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'fname';}" >
						  		<input type="text" name="lname" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'lname';}" >
						  		<input type="text" name="tel" value="Tel." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'tel';}" >
						  		<input type="text" name="address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'address';}" >
						  		<input type="text" name="username" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" >
								<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}" >
								<input type="password" value=" Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" >
								 <div class="Remember-me">
								<div class="p-container">
								<div class ="clear"></div>
							</div>
												 
								<div class="submit">
									<input type="submit" onclick="myFunction()" value="Sign Me Up >" >
								</div>
									<div class="clear"> </div>
								</div>
											
						  </form>
					</div>
				
			</div>
				<!--//End-login-form-->	
						<div class ="copy-right">
							<p>Template by <a href="#">W3layouts</a></p>
						</div>
			  </div>
	</body>
</html>


