<?php
class setting_model extends CI_Model{



function __construct() {
parent::__construct();

	// $this->load->database();
    //$this->load->library('mongo_db');
    $this->load->library('mongo_db');


}


function get_all_types(){

  /*	$query=$this->db->get('excel_fields');

       return $query->result();*/
    

}


/*function get_user_column_names($user_id){

$this->db->where('user_id',$user_id);
$query = $this->db->get('user_excel_columns');
$data = $query->result_array();
$value=$data[0]['column_names'];
return explode(",", $value);

 }


function add_column_names($column_names_array,$user_id){
$column_names=implode(',',$column_names_array);

$data = array
            (
                'user_id' => $user_id,
                'column_names' =>$column_names
            );



 $query=$this->db->insert('user_excel_columns', $data);

	return $query;

 }




function update_column_names($column_names_array,$user_id){
$column_names=implode(',',$column_names_array);
$this->db->where('user_id',$user_id);

$data = array
            (
                'column_names' =>$column_names
            );



 $query=$this->db->update('user_excel_columns', $data);
return $query;

 }*/


}
?>