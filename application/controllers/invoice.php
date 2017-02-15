<?php
class Invoice extends CI_Controller {

  public function index(){
    $this->load->model('load_db_customer');
    $result = $this->load_db_customer->detail_user();
    $this->load->model('load_db_order');
    $result_order = $this->load_db_order->detail_order();
    $data=array("data_result"=>$result,"data_order"=>$result_order);
    $this->load->view('/cart/invoice',$data);
  }

  public function print(){
    $this->load->model('load_db_customer');
    $result = $this->load_db_customer->detail_user();
    $this->load->model('load_db_order');
    $result_order = $this->load_db_order->detail_order();
    $data=array("data_result"=>$result,"data_order"=>$result_order);
    $this->load->view('/cart/invoice1',$data);
  }
  public function destroy_cart(){
    echo "<script language=\"JavaScript\"> alert('คำสั่งการซื้อได้รับการการบันทึกลงระบบเรียบร้อย สามารถติดตามสถานะการติดตามได้ที่ Tracking');</script>" ;
    $this->cart->destroy();
    redirect('/welcome/');
  }


}
?>
