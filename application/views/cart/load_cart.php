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

<?php echo form_open('path/to/controller/update/method'); ?>

<table cellpadding="6" cellspacing="1" style="width:60%" border="1">

<tr>
        <th>จำนวน</th>
        <th>ชื่อสินค้า</th>
        <th style="text-align:right">ราคา/ชิ้นละ</th>
        <th style="text-align:right">ราคาทั้งหมด</th>
        <th align="center">ยกเลิกรายการ</th>
</tr>

<?php $i = 1; ?>
<h1>รายการสินค้า</h1>
<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
                <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
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

</table>



