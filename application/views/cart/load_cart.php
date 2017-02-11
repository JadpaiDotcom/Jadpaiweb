<?php
$product_id="";
$product_cost="";
$product_name="";
$data_result=(isset($data_result)?$data_result:"");
if($data_result!=""){
        foreach ($data_result->result() as $row){
                $product_id=$row->product_id;
                $product_name = $row->product_name;
                $product_cost = $row->product_cost;
        }
        $product = array(
        'id' => $product_id,
        'qty' => "1",
        'price' => $product_cost,
        'name' => $product_name
         );
$this->cart->insert($product);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Cart Shopping</title>
</head>
<body>
<div class="wrapper bgded overlay" style="background-image:url('<?php echo base_url('img/homepage/n1.jpg')?>');">

<!-- bgcolor="#d9d9d9" -->
 <div class="container">
   <div class="row">
                <h1 align="center"> รายการสินค้า </h1>


<?php echo form_open('cart/update_qt'); ?>


<table border="1" class="three" bgcolor="red">
<tr>
        <th>จำนวน</th>
        <th>ชื่อสินค้า</th>
        <th style="text-align:right">ราคา/ชิ้นละ</th>
        <th style="text-align:right">ราคาทั้งหมด</th>
        <th style="text-align:center">ยกเลิกรายการ</th>
</tr>
<?php $i = 1; ?>
<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
        <tr>
                <td><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '1')); ?></td>
                <td>
                        <?php echo $items['name']; ?> 

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                            <p>
                                <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                        <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                <?php endforeach; ?>
                            </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">฿<?php echo $this->cart->format_number($items['subtotal']); ?></td>
                <td align="center"><a href="<?php echo site_url('cart/delete_order')."/".$items['rowid'];?>">ยกเลิก </a></td>
        </tr>


<?php $i++; ?>

<?php endforeach; ?>

<tr>
        <td colspan="4"> </td>
        <td class="right">Total&nbsp&nbsp฿<?php echo $this->cart->format_number($this->cart->total()); ?></td> 
</tr>

<!-- </table> -->
                </table>
        </div>
        <p align="center" style="color: black;"><?php echo form_submit('', 'อัพเดทจำนวนสินค้า'); ?></p>
        <div align="center">
        <article align="center">
              <footer>
                <ul class="nospace inline pushright"  >
                  <li><a class="btn inverse" href="<?php echo site_url('order') ?>" >ยืนยันการสั่งซื้อ</a></li>
                  <li><a class="btn" href="<?php echo site_url('shop') ?>">กลับไปซื้อสินค้า</a></li>
                </ul>
              </footer>
        </article>
<!-- #################################TestTestTestTest############################# -->
        <br><br>  
        <!--ที่อยู่ในการจัดส่ง<input type="text" name="address" disabled=""  style="color:black" value="<?php echo $_SESSION['customer_address']; ?>"> -->
        <?php if(isset($_SESSION['customer_address'])){?>
        <select name="order_place" style="color:black" onchange="changeFunc(value);">
          <option value="หอ 18"<?php if($_SESSION['customer_address']=='หอ 18') echo 'selected' ?>>หอ 18</option>
          <option value="หอ 17"<?php if($_SESSION['customer_address']=='หอ 17') echo 'selected' ?>>หอ 17</option>
          <option value="หอ 16"<?php if($_SESSION['customer_address']=='หอ 16') echo 'selected' ?>>หอ 16</option>
          <option value="หอ 14"<?php if($_SESSION['customer_address']=='หอ 14') echo 'selected' ?>>หอ 14</option>
          <option value="หอ 13"<?php if($_SESSION['customer_address']=='หอ 13') echo 'selected' ?>>หอ 13</option>
          <option value="หอ 11"<?php if($_SESSION['customer_address']=='หอ 11') echo 'selected' ?>>หอ 11</option>
          <option value="หอ 10"<?php if($_SESSION['customer_address']=='หอ 10') echo 'selected' ?>>หอ 10</option>
          <option value="หอ 7" <?php if($_SESSION['customer_address']=='หอ 7') echo 'selected' ?>>หอ 7</option>
          <option value="หอ 5" <?php if($_SESSION['customer_address']=='หอ 5') echo 'selected' ?>>หอ 5</option>
          <option value="หอ 4" <?php if($_SESSION['customer_address']=='หอ 4') echo 'selected' ?>>หอ 4</option>
          <option value="หอ 3" <?php if($_SESSION['customer_address']=='หอ 3') echo 'selected' ?>>หอ 3</option>
          <option value="หอ 2" <?php if($_SESSION['customer_address']=='หอ 2') echo 'selected' ?>>หอ 2</option>
          <option value="หอ 1" <?php if($_SESSION['customer_address']=='หอ 1') echo 'selected' ?>>หอ 1</option>
          ?></option>
        </select>
         เบอร์โทรติดต่อ<input type="text" name="address"  disabled=""  style="color:black" value="<?php echo $_SESSION['customer_tel']; ?>">
        <?php }?>
        </div>
</div>
<!--
<p>Click the button to demonstrate the prompt box.</p>

<button onclick="myFunction()">Try it</button>

<p id="demo"></p>

<script>
function myFunction() {
    var person = prompt("Please enter your name", "Harry Potter");
    if (person != null) {
        document.getElementById("demo").innerHTML =
        "Hello " + person + "! How are you today <?php $_SESSION['customer_address'] ?>?";
    }
}
</script>

<select name="fname">
 <option value="1" <?php if($_SESSION['fname'] == 1) echo 'selected'; ?>>1</option>
 <option value="2" <?php if($_SESSION['fname'] == 2) echo 'selected'; ?>>2</option>
</select>
-->

<script type="text/javascript">

   function changeFunc($i) {
    alert("จัดส่งไปยัง "+$i);
   }

  </script>


</div>
<?php// var_dump($_SESSION['customer_address']) ?>
</body>
</html>


