<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Op extends CI_Controller {

	public function index()
	{
		$this->load->model('load_db');
		$result=$this->load_db->getDetail();
		$emp=$this->load_db->getDetail_emp();
		$data = array("datalist"=>$result,"emp"=>$emp);
		$this->load->view('backdrop/all_order',$data);
	}
	public function update_order(){
		$confirm=$_POST['status'];
		$id_emp=$_POST['id'];
		$order_id=$_POST['product_id'];
		if($confirm=='true'){
		$this->load->model('load_db');
		$this->load_db->update_order($id_emp,$order_id);
		redirect('/op/');
	}
	else
	{
		$this->load->model('load_db');
		$this->load_db->cancel_order($order_id);
		redirect('/op/');

	}
}


public function op_emp()
	{
		$this->load->model('load_db_emp');
		$result=$this->load_db_emp->getDetailAll();
		$data = array("datalist"=>$result);
//		$this->load->view('backdrop/all_order',$data);
		$this->load->view('backdrop/all_order_emp',$data);
	}
	public function update_emp_tran($order_id){
		$this->load->model('load_db_emp');
		$result=$this->load_db_emp->update_emp_tran($order_id);
		redirect('/op/op_emp','refresh');
	}
	public function delete_emp_tran($order_id){
		$this->load->model('load_db_emp');
		$result=$this->load_db_emp->delete_emp_tran($order_id);
		redirect('/op/op_emp','refresh');
	}

}
