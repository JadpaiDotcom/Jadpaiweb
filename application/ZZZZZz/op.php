<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op extends CI_Controller {
///////////////////////EMP รับงาน///////////////////////////////////////
	public function index()
	{
		$this->load->model('load_db');
		$result=$this->load_db->getDetailAll();
		$data = array("datalist"=>$result);
//		$this->load->view('backdrop/all_order',$data);
		$this->load->view('backdrop/all_order_emp',$data);
	}
	public function update_emp_tran($order_id){
		$this->load->model('load_db');
		$result=$this->load_db->update_emp_tran($order_id);
		redirect('/op/','refresh');
	}
	public function delete_emp_tran($order_id){
		$this->load->model('load_db');
		$result=$this->load_db->delete_emp_tran($order_id);
		redirect('/op/','refresh');
	}
//////////////////////////////////////////////////////////////

}
