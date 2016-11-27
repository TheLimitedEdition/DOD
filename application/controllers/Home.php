<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('home');
    }



 function cron(){


//$message=shell_exec("/var/www/scripts/testscript 2>&1");
	$message="hello";
      print_r($message);

}

public function sendemail(){

	 
	
		require 'application/third_party/phpmailer/PHPMailerAutoload.php';
		
   $mail = new PHPMailer;
             $mail = new PHPMailer;
          $mail->isSMTP();                                
          $mail->Host = 'smtp.zoho.com';
          $mail->SMTPAuth = true;    
          $mail->Username = 'campaignshare@locad.net'; 
          $mail->Password = 'locad1234';     
          $mail->SMTPSecure = 'ssl';
          $mail->Port = 465;
          $mail->setFrom('campaignshare@locad.net', 'LOCRM Campaign Share');
          $mail->addAddress("goelvibhor4@gmail.com","vibhor goel"); 
              $mail->isHTML(true);
              $subject = 'vibhor has shared a campaign with you';
              $mail->Subject = "hello";
			$this->load->helper('url');

         
		
              $mail->Body = 
              '<!DOCTYPE html>
              <html lang="en">
              <head>
                <title>Bootstrap Example</title>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                
              </head>
              <body>
              <h4>NAME OF CAMPAIGN SHARED : </h4>

              </body>
              </html>';


              if(!$mail->send()) 
              {
                  return 'Message could not be sent.';
                  return 'Mailer Error: ' . $mail->ErrorInfo;
              } 
              else 
              {
                  return 'success';
              };
}
	


}

