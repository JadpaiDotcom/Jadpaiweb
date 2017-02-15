<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop Page- Ustora Demo</title>

    <!-- Google Fonts
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    -->

 <link href="<?php echo base_url();?>style/test/style.css?>" rel="stylesheet" type="text/css" media="all">
  <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>style/shop/css/bootstrap.min.css">


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
  <div class="wrapper bgded overlay" align="center" style="background-image:url('<?php echo base_url('img/homepage/page.png')?>');">

    <div class="single-product-area" >
        <p align="center" style="border-color:black;font-size:300%">เวลาในการส่งสินค้า 10 - 30 นาที โดยประมาณ</p>
        <!--### ไว้เชื่อมไปยังร้านอื่นๆ ### -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href='<?php echo site_url('shop') ?>'>รวมสินค้า</a></li>
          </ul>

        <div class="zigzag-bottom">
            <div class="container">
            <div class="row">
            <h1 style="color:orange;border-color:black">อาหาร</h1><hr style="size:100;color:black">
            <?php
            foreach($food->result_array() as $row){
                echo "<div class='col-md-2 col-sm-6'>
                        <div class='single-shop-product'>
                        <div class='product-upper'>
                        <img alt= width=80% height=80% src=";echo base_url()."img/shop/".$row['product_link']."  ></div><br>";
                echo   "<p style='color:black;font-size:120%'>".$row['product_name']."</p>
                        <div class='product-carousel-price'>
                        </div>";
                echo "<form method='POST' action='".site_url('cart')."' target=iframe_target>";
                echo "<iframe id=iframe_target name=iframe_target src=# style=width:0;height:0;border:0px solid #fff;></iframe>";
                echo "<input type='text' name='product_id' value='".$row['product_id']."'hidden>";
                echo         "<div class='product-option-shop'>
                            <input type='submit' value='".$row['product_cost']."บาท'></a>
                            </form>
                        </div>
                    </div>
                </div>";
              };
                ?>
                <hr style="size:100;color:black"><h1 style="color:orange;border-color:black">เครื่องดื่ม</h1><hr style="size:100;color:black">
            </div>
            <div class="row">
            <?php
            foreach($drink->result_array() as $row){
                echo "<div class='col-md-2 col-sm-6'>
                        <div class='single-shop-product'>
                        <div class='product-upper'>
                        <img alt= width=80% height=80% src=";echo base_url()."img/shop/".$row['product_link']."  ></div><br>";
                echo   "<p style='color:black;font-size:120%'>".$row['product_name']."</p>
                        <div class='product-carousel-price'>
                        </div>";
                echo "<form method='POST' action='".site_url('cart')."' target=iframe_target>";
                echo "<iframe id=iframe_target name=iframe_target src=# style=width:0;height:0;border:0px solid #fff;></iframe>";
                echo "<input type='text' name='product_id' value='".$row['product_id']."'hidden>";
                echo         "<div class='product-option-shop'>
                            <input type='submit' value='".$row['product_cost']."บาท'></a>
                            </form>
                        </div>
                    </div>
                </div>";
              };
              ?>
              <hr color="black" size="20"><p>
                  <hr style="size:100;color:black"><h1 style="color:orange;border-color:black">ขนมกินเล่น</h1><hr style="size:100;color:black">
            </div>

            <div class="row">
            <?php
            foreach($snack->result_array() as $row){
                echo "<div class='col-md-2 col-sm-6'>
                        <div class='single-shop-product'>
                        <div class='product-upper'>
                        <img alt= width=80% height=80% src=";echo base_url()."img/shop/".$row['product_link']."  ></div><br>";
                echo   "<p style='color:black;font-size:120%'>".$row['product_name']."</p>
                        <div class='product-carousel-price'>
                        </div>";
                echo "<form method='POST' action='".site_url('cart')."' target=iframe_target>";
                echo "<iframe id=iframe_target name=iframe_target src=# style=width:0;height:0;border:0px solid #fff;></iframe>";
                echo "<input type='text' name='product_id' value='".$row['product_id']."'hidden>";
                echo         "<div class='product-option-shop'>
                            <input type='submit' value='".$row['product_cost']."บาท'></a>
                            </form>
                        </div>
                    </div>
                </div>";
              };
              ?>
                <hr style="size:100;color:black"><h1 style="color:orange;border-color:black">ของใช้ทั่วไป</h1><hr style="size:100;color:black">
            </div>

            <div class="row">
            <?php
            foreach($etc->result_array() as $row){
                echo "<div class='col-md-2 col-sm-6'>
                        <div class='single-shop-product'>
                        <div class='product-upper'>
                        <img alt= width=80% height=80% src=";echo base_url()."img/shop/".$row['product_link']."  ></div><br>";
                echo   "<p style='color:black;font-size:120%'>".$row['product_name']."</p>
                        <div class='product-carousel-price'>
                        </div>";
                echo "<form method='POST' action='".site_url('cart')."' target=iframe_target>";
                echo "<iframe id=iframe_target name=iframe_target src=# style=width:0;height:0;border:0px solid #fff;></iframe>";
                echo "<input type='text' name='product_id' value='".$row['product_id']."'hidden>";
                echo         "<div class='product-option-shop'>
                            <input type='submit' value='".$row['product_cost']."บาท'></a>
                            </form>
                        </div>
                    </div>
                </div>";
              };
              ?>
                <hr style="size:100;color:black"><h1 style="color:orange;border-color:black">เครื่องเขียน</h1><hr style="size:100;color:black">
            </div>

            <div class="row">
            <?php
            foreach($write->result_array() as $row){
                echo "<div class='col-md-2 col-sm-6'>
                        <div class='single-shop-product'>
                        <div class='product-upper'>
                        <img alt= width=80% height=80% src=";echo base_url()."img/shop/".$row['product_link']."  ></div><br>";
                echo   "<p style='color:black;font-size:120%'>".$row['product_name']."</p>
                        <div class='product-carousel-price'>
                        </div>";
                echo "<form method='POST' action='".site_url('cart')."' target=iframe_target>";
                echo "<iframe id=iframe_target name=iframe_target src=# style=width:0;height:0;border:0px solid #fff;></iframe>";
                echo "<input type='text' name='product_id' value='".$row['product_id']."'hidden>";
                echo         "<div class='product-option-shop'>
                            <input type='submit' value='".$row['product_cost']."บาท'></a>
                            </form>
                        </div>
                    </div>
                </div>";
              };
              ?>
            </div>

            </div>
            </div>
        </div>

<!--############ ลองจะใช้ตัวเมนูแสดงแบบใหม่#########-->


<!--############################################################-->

<!--############################################################-->
<!--   ตัวที่ใช้สำหรับเลือกหน้า -->
  <!--
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

-->
<!--############################################################-->

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
