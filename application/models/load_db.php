<?php 

class Load_db extends CI_Model {

    
        public function checklogin($u,$p){
            $sql = "SELECT * FROM employee where employee_username = '".$u."'and employee_password = '".$p."' and   employee_status = '1' ;";
            $query=$this->db->query($sql);
            $db_u="";
            $db_p="";
            $db_c=false;
            foreach($query->result() as $row){
                $db_p = $row->employee_password;
                $db_u = $row->employee_username;
                if($db_p == $p && $db_u == $u){
                    $db_c = true;
                    //set session//
                    $_SESSION['employee_username']=$row->employee_username;
                    $_SESSION['employee_type']=$row->employee_type;
                }
                else{
                    $this->session->set_flashdata('msg_type','error');
                    $this->session->set_flashdata('msg_data','Username or Password wrong!!!!! ');
                }
        }
            return $db_c;

}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function getDetail(){
            $sql = "SELECT * FROM `order` join sale_status on id_sale_status = sale_status join order_status on order_status = id_order_status join customer on customer_id = customer_customer_id ;";
            $result=$this->db->query($sql);
            return $result;

        }

         public function getDetail_emp(){
            $sql = "SELECT * FROM `employee` WHERE employee_type='3'";
            $result=$this->db->query($sql);
            return $result;
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

        public function update_order($id_emp,$order_id){
            $sql="UPDATE `order` SET `order_status`='2' WHERE `order_id`='".$order_id."';";
            $this->db->query($sql);
            $sql2="INSERT INTO buy (buy_date, `order_order_id`, `employee_employee_id`) VALUES (now(), '".$order_id."', '".$id_emp."');";
            $result=$this->db->query($sql2);
            return $result;

        }

        public function cancel_order($order_id){
             $sql="UPDATE `order` SET `order_status`='4' WHERE `order_id`='$order_id'";
           /* $sql="UPDATE order SET order_status='4' WHERE order_id='".$order_id."';";*/
            $result=$this->db->query($sql);
            return $result;

        }

}

        

 ?>
