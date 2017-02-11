<?php
$_SESSION['employee_username']=(isset($_SESSION['employee_username'])?$_SESSION['employee_username']:"");

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Manager</title>
    <link rel="stylesheet" href="<?php echo base_url();?>style/backdrop/style.css">
  </head>
  <body>
  <?php
        if ($_SESSION['employee_username']==""){
        redirect('/Welcome/');
        }
        ?>
 <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
                    <?php 
                    echo "welcome   ".$_SESSION['employee_username']." (ผู้ดูแลระบบ)";    ?>
                    <form method="get" action="<?php echo site_url('logout');?>">
                      <br><br>
                      <input type="submit" value="logout" >
                    </form>
                 </h4>
        </div>
            <!-- แสดงรายละเอียด -->
            <div class="col-md-4">
            <?php 
              if($datalist->num_rows()==0)echo '<font color="red">Data not found!</font>';   
              else{ 
              echo '<div class="tbl-content">';       
              echo '<table border="1" class="three">
                            <tr>
                            <th>Employee</th>
                            <th>status</th>
                            <th>confirm</th>
                            <th>Order_ID</th>
                            <th>หอพัก</th>
                            <th>Sale status</th>
                            <th>Order_status</th>
                            <th>order_date</th>
                            <th>Name Customer</th>
                            ';
                           foreach($datalist->result() as $row){
                            if($row->order_status != 4 && $row->order_status !=3){
                              echo "<form method='POST' action='".site_url('op/update_order')."'>";
                              echo "<input name='product_id' value='".$row->order_id."' hidden>";
                              echo "<tr>";
                              echo "<td><select name='id'>";
                                foreach($emp->result() as $item){
                                  echo "<option value=".$item->employee_id.">".$item->employee_name."</option>";
                                    }
                                  echo  "</select></td>";
                                  echo "<td><select name='status'>";
                                        echo "<option value='true'>ยืนยัน</option>";
                                        echo "<option value='false'>ยกเลิก</option>";
                                  echo  "</select></td>";
                                  echo "<td style=text-align:center><input type='submit' value='ตกลง'</td></form>";
                                  echo "<td>".$row->order_id."</td>";
                                  echo "<td>".$row->customer_address."</td>";
                                  echo "<td>".$row->sale_name."</td>";
                                  echo "<td>".$row->order_name."</td>";
                                  echo "<td>".$row->order_date."</td>";
                                  echo "<td>".$row->customer_name."</td>";
                                  echo "</tr>";
                                }
                              }
              echo "</table>";
              echo "</div>";
              }
            ?>
          </div>
        </div>
    </div>    
  </body>
</html>