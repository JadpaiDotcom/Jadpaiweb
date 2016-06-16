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
		$this->load->model('load_db');
		$confirm=$this->load_db->checklogin($u,$p);
		if($confirm){
			redirect('/op/', 'refresh');
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
