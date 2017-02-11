<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class shop extends CI_Controller {

	public function index()
	{
		$this->load->view('top');
		$this->load->view('shop/food');
		$this->load->view('shop/snack');
		$this->load->view('shop/drink');
		$this->load->view('shop/etc');
		$this->load->view('shop/sta');
		$this->load->view('down');
	}

	public function food()
	{
		$this->load->model('load_db_product');
		$result=$this->load_db_product->food_product();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('shop/food');
		$this->load->view('shop/shopfood',$data);
		$this->load->view('down');
	}
	public function snack()
	{
		$this->load->model('load_db_product');
		$result=$this->load_db_product->snack_product();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('shop/snack');
		$this->load->view('shop/snackshop',$data);
		$this->load->view('down');
	}
	public function drink()
	{
		$this->load->model('load_db_product');
		$result=$this->load_db_product->drink_product();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('shop/drink');
		$this->load->view('shop/drinkshop',$data);
		$this->load->view('down');
	}
	public function etc()
	{
		$this->load->model('load_db_product');
		$result=$this->load_db_product->etc_product();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('shop/etc');
		$this->load->view('shop/etcshop',$data);
		$this->load->view('down');
	}
	public function sta()
	{
		$this->load->model('load_db_product');
		$result=$this->load_db_product->write_product();
		$data=array("data_result"=>$result);
		$this->load->view('top');
		$this->load->view('shop/sta');
		$this->load->view('shop/stashop',$data);
		$this->load->view('down');
	}

}
