<?php 

class Load_db_product extends CI_Model {

    public function food_product()
    {
        $sql = "SELECT * FROM product where product_type = '1';";
        $result=$this->db->query($sql);
        return $result;
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function snack_product()
    {
        $sql = "SELECT * FROM product where product_type = '2';";
        $result=$this->db->query($sql);
        return $result;
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function drink_product()
    {
        $sql = "SELECT * FROM product where product_type = '3';";
        $result=$this->db->query($sql);
        return $result;
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function etc_product()
    {
        $sql = "SELECT * FROM product where product_type = '4';";
        $result=$this->db->query($sql);
        return $result;
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function write_product()
    {
        $sql = "SELECT * FROM product where product_type = '5';";
        $result=$this->db->query($sql);
        return $result;
    }

////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function product_detail($product_id){
        $sql = "SELECT * FROM product where product_id = '".$product_id."';";
        $result=$this->db->query($sql);
        return $result;



    }




}

 ?>