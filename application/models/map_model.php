<?php
class map_model extends CI_Model{



function __construct() {
parent::__construct();

	 $this->load->database();

}


function getcategories(){

  	$query=$this->db->get('main_categories');

       return $query->result();
}

function get_all_brands(){

  	$query=$this->db->get('categories');

       return $query->result();
}





function getbrandname($category){
//echo $category;

$this->db->where('category',$category);
$query = $this->db->get('categories');
$data = $query->result_array();
return $data;

}
function gettwitterhandles($brandname){
//echo $category;

$this->db->where('brand_name',$brandname);
$query = $this->db->get('categories');
$data = $query->result_array();
return $data[0]['hashtags'];

}


}
?>