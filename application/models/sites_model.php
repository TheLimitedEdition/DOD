<?php
class sites_model extends CI_Model{



function __construct() {
parent::__construct();

	 $this->load->database();

}




function get_user_column_names($user_id){

$this->db->where('user_id',$user_id);
$query = $this->db->get('user_excel_columns');
$data = $query->result_array();
$value=$data[0]['column_names'];
return explode(",", $value);

 }

function get_user_sites($user_id){

$this->db->where('user_id',$user_id);
$query = $this->db->get('locrm_sites');
$data = $query->result_array();
return $data;
//$value=$data[0]['column_names'];
//return explode(",", $value);

 }


}
?>