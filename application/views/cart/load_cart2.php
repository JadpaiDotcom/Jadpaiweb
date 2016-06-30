<?php
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
?>

<?php

foreach ($this->cart->contents() as $row) {
        echo $row['id'];
        echo "<br>";
        echo $row['name'];
}

echo $this->cart->total_items();

?>