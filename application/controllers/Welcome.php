<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('top');
		$this->load->view('homepage');
		$this->load->view('down');
	}

	public function tracking(){
		$this->load->view('top');
		$this->load->view('backdrop/tracking');
		$this->load->view('down');
	}

	public function contact(){
		$this->load->view('top');
		$this->load->view('contact');
		$this->load->view('down');
	}
}
