<?php
foreach ($data_result -> result() as $row) {
	$fname = $row->customer_name;
	$lname = $row->customer_lastname;
	$tel = $row->customer_tel;
	$address = $row->customer_address;
	$password = $row->customer_password;

}








?>
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
						    	<h2><span></span>Edit</h2>
						 	 </div>
						  	<form action="<?php echo site_url('login_customer/update_user')?>" method="POST">
						  		Username:<input type="text" disabled name="username" value="<?php echo $_SESSION['customer_username'];?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'username';}" >
						  		FirstName:<input type="text" name="fname" value="<?php echo $fname; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $fname; ?>';}" >
						  		LastName:<input type="text" name="lname" value="<?php echo $lname; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $lname; ?>';}" >
						  		Address:<input type="text" name="address" value="<?php echo $address; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $address; ?>';}" >
						  		
						  		<br>Tel number:<input type="text" name="tel" value="<?php echo $tel; ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $tel; ?>';}" >
								Password:<input type="password" name="password" value="<?php echo $password;?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php echo $password; ?>';}" >
								<div class="p-container">
								<div class ="clear"></div>
							</div>
												 
								<div class="submit">
									<input type="submit" onclick="myFunction()" value="Update>" >
								</div>
									<div class="clear"> </div>
								</div>
											
						  </form>
					</div>
				
			</div>
				<!--//End-login-form-->	
						<div class ="copy-right">
							<p>Powered by <a href="#">Jadpai.com</a></p>
						</div>
			  </div>
	</body>
</html>


