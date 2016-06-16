<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op extends CI_Controller {

	public function index()
	{
		$this->load->model('db');
		$result=$this->db->getDetail();
		$datalist = array("data_result"=>$result);
		$this->load->view('backdrop/all_order',$datalist);
	}

}
