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
		$this->load->view('top');
		$this->load->view('shop/food');
		$this->load->view('shop/shopfood');
		$this->load->view('down');
	}
	public function snack()
	{
		$this->load->view('top');
		$this->load->view('shop/snack');
		$this->load->view('down');
	}
	public function drink()
	{
		$this->load->view('top');
		$this->load->view('shop/drink');
		$this->load->view('down');
	}
	public function etc()
	{
		$this->load->view('top');
		$this->load->view('shop/etc');
		$this->load->view('down');
	}
	public function sta()
	{
		$this->load->view('top');
		$this->load->view('shop/sta');
		$this->load->view('down');
	}

}
