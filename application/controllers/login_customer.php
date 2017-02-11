<?php
class Login_customer extends CI_Controller {

	public function index()
	{
		$this->load->view('login/Login_customer');
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
			redirect('/Login_customer/');
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
		$this->load->model('load_db_customer');
		$result=$this->load_db_customer->add_user($fname,$lname,$tel,$address,$username,$password);
		if($result){
			redirect('/Login_customer/');
		}
		else{
			echo "ERROR Register";
			redirect('/Login_customer/');
		}
		
	}

	public function update_user(){
		
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$password=$_POST['password'];
		$address=$_POST['address'];
		$tel=$_POST['tel'];
		$this->load->model('load_db_customer');
		$result=$this->load_db_customer->update_data($fname,$lname,$password,$address,$tel);	
		redirect('Welcome');
	}

	public function edit_user(){
		$this->load->model('load_db_customer');
		$result=$this->load_db_customer->detail_user();
		$data=array("data_result"=>$result);
		$this->load->view('login/edit_form',$data);

	}





}
