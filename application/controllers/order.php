<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function index()
	{	
		$this->load->model('load_db_order');
		$result = $this->load_db_order->add_order();
	foreach ($this->cart->contents() as $row) {
    $id=$row['id'];
   	$qty=$row['qty'];
	$result = $this->load_db_order->add_order_product($id,$qty);
	}


	$this->cart->destroy();
	redirect('/Welcome/');
}



	}

	
