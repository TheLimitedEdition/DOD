<?php
class addsites_model extends CI_Model{



function __construct() {
parent::__construct();

	                             $this->load->database();

}


function get_user_column_names($user_id){

$this->db->where('user_id',$user_id);
$query = $this->db->get('user_excel_columns');
$data = $query->result_array();
return $data;

 }

 function save_sites_value($column_values){
	
$query=$this->db->insert('locrm_sites', $column_values); return $query;

}

}
?>