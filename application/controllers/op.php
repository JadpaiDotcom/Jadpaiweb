<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op extends CI_Controller {

	public function index()
	{
		$this->load->model('load_db');
		$result=$this->load_db->getDetail();
		$data = array("datalist"=>$result);
		$this->load->view('backdrop/all_order',$data);
	}

}
