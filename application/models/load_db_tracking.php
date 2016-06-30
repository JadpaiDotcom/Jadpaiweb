<?php 
	class load_db_tracking extends CI_Model{
		public function search($tracking){
			$sql = "SELECT * FROM jadpai.order 
				Join customer on customer_id = customer_customer_id 
				join order_status on id_order_status = order_status where customer_username = '".$tracking."' ";
			$query = $this->db->query($sql);
			return $query;
		}
	}
 ?>