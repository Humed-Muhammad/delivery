<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Account  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

       //for login
       public function login_post()
       {
           $this->response([
               "status" => true,
               "message" => [
                   "id" => "",
                   "key" => "",
                   "name" => ""
               ]
           ]);
       }
   
       //for find account
       public function find_post()
       {
           $this->response([
               "status" => true,
               "message" => [
                   "id" => "",
                   "name" => "",
               ]
           ]);
       }
   
       //for send verification code
       public function send_post()
       {
           $this->response([
               "status" => true,
               "message" => "code sent successfully."
           ]);
       }
   
       //for verifay the code sent to email address
       public function verify_post()
       {
            $this->response([
                "status" => true,
                "message" => "success."
            ]);
    
       }
   
        //for set new password
        public function setPassword_post()
        {
            $this->response([
                "status" => true,
                "message" => "new password set successfully."
            ]);
        }
   
       //for set change password
       public function changePassword_post()
       {
           $this->response([
               "status" => true,
               "message" => "Password changed successfully."
           ]);
       }


}
