<?php 

class Load_db_customer extends CI_Model {
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
        public function checklogin($u,$p){
        	$sql = "SELECT * FROM customer where customer_username = '".$u."'and customer_password = '".$p."';";
        	$query=$this->db->query($sql);
            $db_u="";
            $db_p="";
            $db_c=false;
        	foreach($query->result() as $row){
                $db_p = $row->customer_password;
                $db_u = $row->customer_username;
                if($db_p == $p && $db_u == $u){
                    $db_c = true;
                    //set session//
                    $_SESSION['customer_username']=$row->customer_username;
                    $_SESSION['customer_id']=$row->customer_id;
                    $_SESSION['customer_address']=$row->customer_address;
                    $_SESSION['customer_tel']=$row->customer_tel;

                }
                else{
                    $this->session->set_flashdata('msg_type','error');
                    $this->session->set_flashdata('msg_data','Username or Password wrong!!!!! ');
                }
        }
            return $db_c;

}
////////////////////////////////////////////////////////////////////////////////////////////////////////////

         public function add_user($fname,$lname,$tel,$address,$username,$password){
            $sql="INSERT INTO customer (customer_username,customer_password,customer_name,customer_lastname,customer_tel,customer_address,customer_status) VALUES ('".$username."','".$password."','".$fname."','".$lname."','".$tel."','".$address."','1');";
            $result=$this->db->query($sql);
            return $result;

        }
        public function update_data($fname,$lname,$password,$address,$tel){
            $sql="UPDATE customer SET customer_name='".$fname."',customer_lastname='".$lname."',customer_tel='".$tel."',customer_password='".$password."',customer_address='".$address."' WHERE customer_id='".$_SESSION['customer_id']."';";
            $result=$this->db->query($sql);
            return $result;

        }


        public function detail_user(){
            $sql="SELECT * FROM customer WHERE customer_id='".$_SESSION['customer_id']."';";
            $result=$this->db->query($sql);
            return $result;

        }

}

 ?>