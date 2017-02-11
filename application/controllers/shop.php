<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop extends CI_Controller {

	public function index()
	{
		$this->load->model('load_db_product');
		$result=$this->load_db_product->food_product();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('shop/shopfood',$data);
		$this->load->view('down');
	}
	public function store()
	{
		$this->load->model('load_db_product');
		$id_store =isset($_GET['id_store'])?$_GET['id_store']:"";
		$result = $this->load_db_product->store_product($_GET['id_store']);
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('shop/shopfood',$data);
		$this->load->view('down');
	}	
}
