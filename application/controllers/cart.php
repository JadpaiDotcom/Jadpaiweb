<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()	{
		$this->load->view('top');
		$product_id=(isset($_POST['product_id'])?$_POST['product_id']:"");
		if($product_id!=""){
			echo "<script language=\"JavaScript\">";
			echo "alert('รับอะไรเพิ่มไหมครับ ^__^');";
			echo "</script>";
			$this->load->model('load_db_product');
			$result=$this->load_db_product->product_detail($product_id);
			$data = array("data_result"=>$result);
			$this->load->view('cart/load_cart',$data);
		}
		else{
			$this->load->view('cart/load_cart');
		}
	}
	public function destroy_cart(){
		$this->cart->destroy();
		redirect('/Welcome/');
	}

	public function delete_order($id){
		$data="";
		$this->cart->update(array('rowid'=>$id,'qty'=>0));
		redirect('cart');
	}

	public function update_qt(){
		$i=1;
		foreach ($this->cart->contents() as $items) {
			$this->cart->update(array('rowid'=>$items['rowid'], 'qty'=>$_POST['qty'.$i]));
			$i++;
		}
		redirect('/cart/');
	}
}
