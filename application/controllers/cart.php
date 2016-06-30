<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function index()
	{		$product_id=(isset($_POST['product_id'])?$_POST['product_id']:"");
			if($product_id!=""){
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

	
}
