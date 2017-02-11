<?php

class Load_db_order extends CI_Model {

    public function add_order()
    {
        $sql1 = "INSERT INTO `order`
        (order_place,sale_status,order_status,order_date,customer_customer_id)
            VALUES ('".$_SESSION['customer_address']."','1','1',now(),'".$_SESSION['customer_id']."');";
        $this->db->query($sql1);
        $sql="SELECT max(`order_id`) as id FROM `order`WHERE customer_customer_id = '".$_SESSION['customer_id']."';";
        $querys=$this->db->query($sql);
        foreach ($querys->result() as $row){
            /// set order id ////
            $_SESSION['order_id']=$row->id;
        }
        return $querys;
    }



     public function add_order_product($id,$qty){
        $sql = "INSERT INTO `order_has_product`
        (order_order_id,product_product_id,order_qty)
            VALUES ('".$_SESSION['order_id']."','".$id."','".$qty."');";
        $result=$this->db->query($sql);
    }

    public function detail_order(){
       $sql = "SELECT * FROM `order` ;";
       $result=$this->db->query($sql);
       return $result;
   }

       }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
 ?>
