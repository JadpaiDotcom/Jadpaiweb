<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{
		if ($_SESSION['customer_username']==""){
			echo "<script>alert('กรุณาทำการ Log-in ก่อนนะครับ'); window.location ='login_customer';</script>";
		}else if($this->cart->total_items()==0){
			echo "<script>alert('กรุณา เลือกสินค้าก่อนนะครับ'); window.location ='shop';</script>";
		}else{
			$this->load->model('load_db_order');
			$result = $this->load_db_order->add_order();
			foreach ($this->cart->contents() as $row) {
		    	$id=$row['id'];
		   		$qty=$row['qty'];
				$result = $this->load_db_order->add_order_product($id,$qty);
			}
			redirect('/invoice/');
		}

	}
}
