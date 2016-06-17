
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

	</head>
	<body>	
			<!--start-login-form-->
				<div class="main">
			    	<div class="login-head">
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span> การสั่งซื้อ</h2>
						 	 </div>
						  	<form>
						  		<input type="text" name="fname" value="First Name" >
						  		<input type="text" name="lname" value="Last Name" >
						  		<input type="text" name"sid" value="StudentID" >
						  		<input type="text" name"product" readonly value="<?php echo $name ;?>" >
								<input type="text" name="piece" value="Piece" >
								<input type="text" name="price" readonly value="<?php echo $price ;?>" >
							</div>
												 
								<div class="submit">
									<input type="submit" onclick="myFunction()" value="ยืนยันการสั่งซื้อ >" >
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


