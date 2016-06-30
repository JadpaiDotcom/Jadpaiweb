<?php 

class Load_db_customer extends CI_Model {

        public $title;
        public $content;
        public $date;

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

       public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }
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
        public function update_data($type,$color,$lc_plate,$time_start,$time_end,$dec_start,$dec_end){
            $sql="UPDATE carid SET type='".$type."' , color='".$color."',time_start='".$time_start."',time_end='".$time_end."',des_start='".$dec_start."',des_end='".$dec_end."' WHERE lc_plate='".$lc_plate."';";
            $result=$this->db->query($sql);
            return $result;

        }

         public function delete_data($lc_plate){
            $sql="DELETE FROM carid WHERE lc_plate = '".$lc_plate."';";
            $result=$this->db->query($sql);
            return $result;

        }
}

 ?>