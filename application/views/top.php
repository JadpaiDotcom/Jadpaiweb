<?php
$_SESSION['customer_username']=(isset($_SESSION['customer_username'])?$_SESSION['customer_username']:"");
?>

<!DOCTYPE html>
<html>
<head>
<title>Walailife</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url();?>style/homepage/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
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
        <li><a href="<?php echo base_url();?>"><h1>Jadpai</h1></a></li>
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
        }
        else
        {
          echo "<li> welcome :".$_SESSION['customer_username']."</li>";
          ///edit///
          echo "<li><a href=";
          echo site_url('login_customer/edit_user');
          echo ">แก้ไขข้อมูลส่วนตัว</a></li>";
          ////sign-out////
          echo "<li><a href=";
          echo site_url('logout');
          echo ">Logout</a></li>";
        }
        ?>
        <li><a href="<?php echo site_url('welcome/tracking')?>">ติดตามสถานะ</a></li>
        <li><a href="<?php echo site_url('welcome/contact')?>">ติดต่อเรา</a></li>
        <li><a href="<?php echo site_url('cart');?>">ตะกร้าสินค้า(<?php echo $this->cart->total_items();?>) ยอด <?php echo $this->cart->format_number($this->cart->total());?> บ.</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ##############  ส่วนที่อยู่ด้านล่างของ หน้า Top มีปุ่มให้เลือกด้วย############################## -->
<!-- <div class="wrapper row1">
  <header id="header" class="hoc clear">

    <div id="logo" class="fl_left">
      <h1>Walailife</h1>
      <p>Delivery</p>
    </div>

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
    </nav>
  </header>
  </div>-->
</body>
</html>
