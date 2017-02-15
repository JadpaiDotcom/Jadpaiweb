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


<table border="1" class="three" bgcolor="red" style="color:white">
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
        <tr style="color:black">
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

<script type="text/javascript">

   function changeFunc($i) {
    alert("จัดส่งไปยัง "+$i);
   }

  </script>


</div>
<?php// var_dump($_SESSION['customer_address']) ?>
</body>
</html>
