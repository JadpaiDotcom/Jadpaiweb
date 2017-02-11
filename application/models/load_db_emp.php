<?php 

class Load_db_emp extends CI_Model {
        public function getDetailAll(){
            $sql = "SELECT * FROM `order` 
                join sale_status on id_sale_status = sale_status 
                join order_status on order_status = id_order_status 
                join customer on customer_id = customer_customer_id 
                JOIN order_has_product on order_order_id = order_id 
                JOIN product on product_id = product_product_id;";
            $result=$this->db->query($sql);
            return $result;

        }

        public function update_emp_tran($order_id){
            $sql = "UPDATE `order` SET `order_status`='3' , `sale_status`='2' WHERE `order_id`='".$order_id."';";
            $result=$this->db->query($sql);
            return $result;
        }
        public function delete_emp_tran($order_id){
            $sql = "UPDATE `order` SET `order_status`='4' WHERE `order_id`='".$order_id."';";
            $result=$this->db->query($sql);
            return $result;
        }

}

 ?>