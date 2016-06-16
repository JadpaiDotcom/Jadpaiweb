<?php 

class load_db extends CI_Model {

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
        	$sql = "SELECT * FROM employee where username = '".$u."'and password = '".$p."';";
        	$query=$this->db->query($sql);
            $db_u="";
            $db_p="";
            $db_c=false;
        	foreach($query->result() as $row){
                $db_p = $row->password;
                $db_u = $row->username;
                if($db_p == $p){
                    $db_c = true;
                    //set session//
                    $_SESSION['employee_username']=$row->username;
                    $_SESSION['employee_type']=$row->employee_type;
                }
                else{
                    $this->session->set_flashdata('msg_type','error');
                    $this->session->set_flashdata('msg_data','Username or Password wrong!!!!! ');
                }
        }
            return $db_c;

}

        public function getDetail(){
            $sql = "SELECT * FROM order ;";
            $result=$this->db->query($sql);
            return $result;

        }

         public function getDetail_edit($lc_plate){
            $sql = "SELECT * FROM carid join cartype on type=id_type where lc_plate ='".$lc_plate."';";
            $result=$this->db->query($sql);
            return $result;

        }

        public function type_Detail(){
            $sql = "SELECT * FROM cartype ;";
            $result=$this->db->query($sql);
            return $result;

        }



         public function add_data($type,$color,$lc_plate,$time_start,$time_end,$dec_start,$dec_end){
            $sql="INSERT INTO carid VALUES ('".$type."','".$color."','".$lc_plate."','".$time_start."','".$time_end."','".$dec_start."','".$dec_end."','1'  );";
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

        public function se_Detail($lc_plate,$color,$type){
            if($lc_plate=="" and $color=="" and $type==""){
                $sql = "SELECT * FROM carid join cartype on type=id_type;";
            }
            else{
                $sql = "SELECT * FROM carid join cartype on type=id_type WHERE lc_plate = '".$lc_plate."' or color='".$color."' or type='".$type."';";
            }
            $result=$this->db->query($sql);
            return $result;

        }









}

 ?>