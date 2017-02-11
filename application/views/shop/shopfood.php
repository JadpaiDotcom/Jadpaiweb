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
        <h2 align="center">เวลาในการส่งสินค้า 10 - 30 นาที โดยประมาณ</h2>
        <!--### ไว้เชื่อมไปยังร้านอื่นๆ ### -->
          <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href='<?php echo site_url('shop') ?>'>รวมสิ้นค้า</a></li>
            <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              ร้านค้า <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <<?php //ใช้สำหรับแสดงร้านค้าที่้ลือก
                $check=0;
                foreach($data_result->result_array() as $row){
                if ($check!=$row['store_id']) {
                        echo "<li><a href="; echo site_url('shop/store?id_store='.$row['store_id'].''); echo ">".$row['store_name']." (".$row['store_religion'].")</a></li>";
                    } 
                $check = $row['store_id'];    
                 }?>
              </ul>
            </li>
          </ul>
          
        <div class="zigzag-bottom">
            <div class="container">
            <div class="row">
            <?php
            foreach($data_result->result_array() as $row){
                echo "<div class='col-md-2 col-sm-6'>
                        <div class='single-shop-product'>
                        <div class='product-upper'>
                        <img alt= width=80 height=80 src=";echo base_url()."img/shop/".$row['product_link']."  ></div>";
                echo  "<h2><a>".$row['product_name']."</a></h2>
                        <div class='product-carousel-price'>
                        <ins>".$row['store_name']." (".$row['store_religion'].")</ins>
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
          
}
                ?>

            </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $('#p').click(function () {
                notify();
            });
        });

        function notify() {
            var havePermission = window.webkitNotifications.checkPermission();
            if (havePermission == 0) {
                // 0 is PERMISSION_ALLOWED
                var notification = window.webkitNotifications.createNotification(
                    'สวัสดีครับ ผมชื่อมะเดี่ยว Deawx ครับ !'
                );
                notification.onclick = function () {
                    //ให้เปิดหน้าต่างใหม่ ตอนกดที่ Notify
                    window.open("http://www.thaicreate.com/community/jquery-desktop-notify.html");
                    //ให้เปิดหน้าต่างปัจจุบัน ตอนกดที่ Notify
                    // window.location.href = 'http://www.thaicreate.com/community/jquery-desktop-notify.html';      
                    notification.cancel();
                }
                notification.show();
                /*
//ตั้งเวลาไว้ 5 วิให้ปิดเอง  
      setTimeout(function () { 
        notification.cancel();
      }, '5000');
*/
            } else {
                window.webkitNotifications.requestPermission();
            }
        }
    </script>
    <div style="width: 100px; height: 100px; background: yellow" onclick="notify()">แสดง POPUP</div>
    <h1 id="p">แสดง POPUP</h1>
    <button  onClick='notify()'>แสดง Popup</button>

<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<script>
// Using https://rawgithub.com/auchenberg/WebNotification.js/master/WebNotification.js as a external lib.

$(function() {

    $('.request').on('click', function() {
        window.Notification.requestPermission(function() {
            alert('Permissions state: ' + window.Notification.permission);
        });
    });

    $('.show').on('click', function() {

        if(window.Notification.permission !== 'granted') {
            alert('Permissions hasnt been granted');
        }
        
        new window.Notification('This is a test');   

    });    

})
</script>

<button class="request">Request permissions</button>
<button class="show">Show notification</button>

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