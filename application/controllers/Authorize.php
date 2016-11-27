<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorize extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	$this->load->helper('url');
		$controller= $this->uri->segment(1);
		$data['code']=$this->input->get('code', TRUE);
		//$data['code'] =$controller;
		$this->get_access_token($data['code']);
		$this->load->view('home',$data);

}


function get_access_token(){
//$url=https://cloud.digitalocean.com/v1/oauth/token?client_id=22f79dcd5e935f84f585cccfe2dda121d3b375c64f6cc1b4fcca5d6ae8a8866a&client_secret=d0427833522cad3df5c6c5b8f15c4c6710f728e3337c8aecc6cddc250448b011&grant_type=authorization_code&code=65d5e2d5eddf5b31b132af55f41bae28c3b69b88412511e379b1e379f14baeea&redirect_uri=http://localhost/dod/authorize;
// Create map with request parameters

$data = array ('client_id' => '22f79dcd5e935f84f585cccfe2dda121d3b375c64f6cc1b4fcca5d6ae8a8866a', 'client_secret'=>'d0427833522cad3df5c6c5b8f15c4c6710f728e3337c8aecc6cddc250448b011','grant_type'=>'authorization_code','code'=>'c903d5d282495be02febaa59b1bcf6521403ad163ba11de024d9b12785ed1ad0','redirect_uri'=>'http://localhost/dod/authorize');

    $data_string = json_encode($data);

    $curl = curl_init('https://cloud.digitalocean.com/v1/oauth/token');

    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");

    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
    );

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  // Make it so the data coming back is put into a string
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);  // Insert the data

    // Send the request
    $result = curl_exec($curl);

    // Free up the resources $curl is using
    //curl_close($curl);

   // echo json_encode($result);
}

}