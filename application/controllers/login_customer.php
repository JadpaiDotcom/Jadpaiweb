<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_customer extends CI_Controller {

	public function index()
	{
		$this->load->view('login/login');
	}

	public function checklogin()
	{
		$u=(isset($_POST["username"])?$_POST["username"]:"");
		$p=(isset($_POST["password"])?$_POST["password"]:"");
		$this->load->model('load_db_customer');
		$confirm=$this->load_db_customer->checklogin($u,$p);
		if($confirm){
			redirect('/Welcome/');
		}
		else{
			redirect('/login/');
		}
	}

	public function register()
	{
		$this->load->view('login/register');
	}
	public function register_new()
	{
		$fname=(isset($_POST["fname"])?$_POST["fname"]:"");
		$lname=(isset($_POST["lname"])?$_POST["lname"]:"");
		$tel=(isset($_POST["tel"])?$_POST["tel"]:"");
		$address=(isset($_POST["address"])?$_POST["address"]:"");
		$username=(isset($_POST["username"])?$_POST["username"]:"");
		$password=(isset($_POST["password"])?$_POST["password"]:"");
		$this->load->model('load_db');
		$result=$this->load_db->add_user($fname,$lname,$tel,$address,$username,$password);
		if($result){
			redirect('/login/');
		}
		else{
			echo "ERROR Register";
			redirect('/login/');
		}
		
	}


}