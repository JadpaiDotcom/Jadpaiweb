
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Employee</title>
    <link rel="stylesheet" href="<?php echo base_url();?>style/backdrop/style.css">
  </head>
  <body>
 <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
                    <?php echo "welcome   ".$_SESSION['employee_username']."(พนักงาน)";    ?>
                    <form method="post" action="<?php echo site_url();?>">
                        <br><br><input type="submit" value="logout" >
                    </form>
                 </h4>

            </div>
            <div class="col-md-4">

<?php 
  if($datalist->num_rows()==0)echo '<font color="red">Data not found!</font>';   
  else{        
 echo '<table border="1" class="three">
                <tr>
                <th>นำสินค้าส่งสำเร็จ</th>
                <th>ไม่สามารถส่งสิ้นค้า</th>
                <th>Order_ID</th>
                <th>วันที่สั่ง</th>
                <th>ผู้สั่ง</th>
                <th>สถานที่จัดส่ง</th>
                <th>สิ้นค้า</th>
                <th>ราคา</th>
                <th>จำนวน</th>';
                $check=0;
               foreach($datalist->result() as $row){
                if ($row->order_status == 2 ) {
                    echo "<tr>";
                    if ($check!=$row->order_id) {
                        echo '<td style=text-align:center aline="center"><a href="'.site_url('op/update_emp_tran/'.$row->order_id).'">
                        <input type="button" value="ยืนยัน"></a></td>';
                        echo '<td style=text-align:center ><a href="'.site_url('op/delete_emp_tran/'.$row->order_id).'">
                        <input type="button" value="ยกเลิก"></a></td>';
                    }else{
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "<td>".$row->order_id."</td>";
                    echo "<td>".$row->order_date."</td>";
                    echo "<td>".$row->customer_name."</td>";
                    echo "<td>".$row->order_place."</td>";
                    echo "<td>".$row->product_name."</td>";
                    echo "<td>".$row->product_cost."</td>";
                    echo "<td>".$row->order_qty."</td>";
                    echo "</tr>";
                    $check=$row->order_id;
                } 
        }
        echo '</table>';
        echo "<br><br><br>";
       }

?>
          </div>
        </div>
    </div>

    
  </body>
</html>