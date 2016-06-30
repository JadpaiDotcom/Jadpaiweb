<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>style/shop/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>style/shop/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>style/shop/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>style/shop/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>style/shop/css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            <?php
 foreach($data_result->result_array() as $row){
               echo "<div class='col-md-3 col-sm-6'>
                    <div class='single-shop-product'>
                      <div class='product-upper'>
                        <img src=";echo base_url()."img/shop/".$row['product_link']." alt= ></div>";
               echo  "<h2><a href=''>".$row['product_name']."</a></h2>
                        <div class='product-carousel-price'>
                            <ins>".$row['product_cost']."บาท</ins>
                        </div>"; 
                echo "<form method='POST' action='".site_url('cart')."' >";
                echo "<input type='text' name='product_id' value='".$row['product_id']."'hidden>";   
               echo         "<div class='product-option-shop'>
                            <input type='submit' value='Add to cart'></a></form>
                        </div>                       
                    </div>
                </div>";
          
}
                ?>






<!-- ////////////////////////////////////////////// 1 Item /////////////////////////////////////////////////////////////////////// -->

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="<?php echo base_url()?>style/shop/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>style/shop/js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="<?php echo base_url()?>style/shop/js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="<?php echo base_url()?>style/shop/js/main.js"></script>

  </body>
</html>