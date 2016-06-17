<style type="text/css">
table.three{ 
    width: 100%;
    padding: 12px 20px;
    font-size: 18px;
} 
table.three th { 
font-weight:bold; 
border-bottom:1px solid #CCC; 
border-top:1px solid #CCC; 
background-color: #4CAF50 ;
text-align: center;
color:#000000;
}
table.three td { 
padding:2px; 
border-bottom:0.5px dotted #CCC;
text-align: left; 
}

input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
p{
    text-align: right;
}
input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>

 <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="page-header">
                    <?php echo "welcome   ".$_SESSION['employee_username']."(ผู้ดูแลระบบ)";    ?>
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
                <th>รับคำสั่งซื้อ</th>
                <th>ยกเลิก</th>
                <th>OrderID</th>
                <th>Sale status</th>
                <th>Order_status</th>
                <th>order_date</th>
                <th>Name Customer</th>
                <th>buy_id</th>';
               foreach($datalist->result() as $row){
                echo "<tr>";
                echo '<td><a href="'.site_url('employeeclass/edit/'.$row->order_id).'">
                <input type="button" value="รับคำสั่งซื้อ"></a></td>';
                echo '<td><a href="'.site_url('employeeclass/delete/'.$row->order_id).'">
                <input type="button" value="ยกเลิก"></a></td>';
                echo "<td>".$row->order_place."</td>";
                echo "<td>".$row->sale_name."</td>";
                echo "<td>".$row->order_name."</td>";
                echo "<td>".$row->order_date."</td>";
                echo "<td>".$row->customer_name."</td>";
                echo "<td>".$row->buy_buy_id."</td>";
                echo "</tr>";
        }
        echo '</table>';
        echo "<br><br><br>";
       }

?>
          </div>
        </div>
    </div>
</div>

