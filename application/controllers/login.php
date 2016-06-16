<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/login');
	}

	public function checklogin()
	{
		$u=(isset($_POST["username"])?$_POST["username"]:"");
		$p=(isset($_POST["password"])?$_POST["password"]:"");
		$this->load->model('db');
		$confirm=$this->db->checklogin($u,$p);
		if( $_SESSION['employee_type']==1){
			
		}
		else if ( $_SESSION['employee_type'] == 2){
			redirect('/op/', 'refresh');
		}
		else if ( $_SESSION['employee_type'] == 3){


		}
		else{
			Echo "Error!";
			redirect('/login/');
		}
	}

	public function register()
	{
		$this->load->view('login/register');
	}

}
