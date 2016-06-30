<!DOCTYPE html>
<html>
<head>

</head>
<div class="wrapper bgded overlay" style="background-image:url('<?php echo base_url('img/homepage/n1.jpg')?>');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <div align="center">
        <p class="heading">ติดตามสินค้า</p>
        <?php 
        //ใช้เพื่อ ตรวจสอบว่า ป้อนข้อมูลมามี การสั่งของหรือปล่าว
        if($datalist->num_rows()!=0){
             echo '<br><br>';       
             echo '<table  border="2" style="color: #000000">
                    <tr>
                    <th>สถานะ</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>สถานที่จัดส่ง</th>
                    <th>ปี/เดือน/วัน</th>';
              foreach($datalist->result() as $row){
                echo "<tr>";
                echo "<td>".$row->order_name."</td>";
                echo "<td>".$row->customer_name."</td>";
                echo "<td>".$row->customer_lastname."</td>";
                echo "<td>".$row->order_place."</td>";
                echo "<td>".$row->order_date."</td>";
                echo "</tr>";
              }
              echo '</table>';
        }
        else{
          echo "Data Not Found!";
        }     
        ?>
      </div>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
</body>
</html>