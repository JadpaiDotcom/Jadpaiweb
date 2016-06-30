<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {
	
	public function search(){
		$tracking = isset($_POST['tracking'])?$_POST['tracking']:"";
		$this->load->model('load_db_tracking','lbt');
		$query = $this->lbt->search($tracking);
		$data = array('datalist' => $query);
		$this->load->view('top');
		$this->load->view('backdrop/search_tracking',$data);
		$this->load->view('down');
	}
}
