<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op extends CI_Controller {

	public function index()
	{
		
		$this->load->view('backdrop/all_order',$datalist);
	}

}
