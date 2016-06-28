<?php
$_SESSION['customer_username']=(isset($_SESSION['customer_username'])?$_SESSION['customer_username']:"");

?>


<!DOCTYPE html>
<html>
<head>
<title>Jadpai.com</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url();?>style/homepage/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="<?php echo base_url();?>"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="<?php echo site_url('welcome/tracking')?>">Tracking</a></li>
        <li><a href="<?php echo site_url('welcome/contact')?>">Contact</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
         <?php
        if ($_SESSION['customer_username']==""){
        echo "<li><a href=";
        echo site_url('login_customer');
        echo ">Login</a></li>";
        echo "<li><a href=";
        echo site_url('login_emp');
        echo ">Admin</a></li>";
        echo "<li><a href=";
        echo site_url('login_customer/register');
        echo ">Register</a></li>";
        }
        else
        {
          echo "<li> welcome :".$_SESSION['customer_username']."</li>";
          ////sign-out////
          echo "<li><a href=";
          echo site_url('logout');
          echo ">Logout</a></li>";

        }
        ?>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1>Jadpai.com</h1>
      <p>Dormitory Delivery</p>
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="<?php echo base_url();?>">Home</a></li>
        <li><a class="drop" href="<?php echo site_url('shop');?>">รายการสินค้า</a>
          <ul>
            <li><a href="<?php echo site_url('shop/food')?>">อาหาร</a></li>
            <li><a href="<?php echo site_url('shop/snack')?>">ของกินเล่น</a></li>
            <li><a href="<?php echo site_url('shop/drink')?>">เครื่องดิ่ม</a></li>
            <li><a href="<?php echo site_url('shop/etc')?>">จิปาถะ</a></li>
            <li><a href="<?php echo site_url('shop/sta')?>">เครื่องเขียน</a></li>
          </ul>
        </li>
          </ul>
      </ul>
    </nav>

  </header>
</body>
</html>