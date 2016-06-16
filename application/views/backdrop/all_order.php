<style type="text/css">
table.three{ 
    width: 300%;
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
                    <?php echo "welcome   ".$_SESSION['fname']."(ผู้ดูแลระบบ)";    ?>
                    <form method="post" action="<?php echo base_url('index.php/employeeclass/logout');?>">
<br><br><input type="submit" value="logout" >
</form>
                 </h4>

            </div>
            <div class="col-md-4">

<form method="get" action="<?php echo base_url('index.php/employeeclass/seach1');?>">
Name : <input type="text" name="name">
<input type="submit" value="ค้นหา" >
</form>

<?php 
  if($datalist->num_rows()==0)echo '<font color="red">Data not found!</font>';   
  else{        
 echo '<table border="1" class="three">
                <tr>
                <th>Edit</th>
                <th>Delete</th>
                <th>ID</th>
                <th>Brand</th>
                <th>Generation</th>
                <th>Type</th>
                <th>Engine</th>
                <th>Color</th>';
               foreach($datalist->result() as $row){
                echo "<tr>";
                echo '<td><a href="'.site_url('employeeclass/edit/'.$row->idcar).'">
                <input type="button" value="edit"></a></td>';
                echo '<td><a href="'.site_url('employeeclass/delete/'.$row->idcar).'">
                <input type="button" value="delete"></a></td>';
                echo "<td>".$row->idcar."</td>";
                echo "<td>".$row->brand."</td>";
                echo "<td>".$row->generation."</td>";
                echo "<td>".$row->nametype."</td>";
                echo "<td>".$row->engine."</td>";
                echo "<td>".$row->color."</td>";
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

