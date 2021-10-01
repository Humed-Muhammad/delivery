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
            "message" => "code sent successfully check your email."
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
  //for listing profile information
  public function getProfile_post()
  {
      $this->response([
          [
              "full_name"=>"john mike",
              "email"=>"john@gamil.comk",
              "phone_number"=>"8768726575",
              "profile_image"=>"",
          ]
      ]);
  }

   //logout
   public function update_profile_post()
   {
       $this->response([
        "status" => true,
        "message" => "Profile updated successfully."
       ]);
   }

      //update profile image
      public function update_profile_image_post()
      {
          $this->response([             
           "status" => true,
           "message" => "Profile image  updated successfully."
          ]);
      }
   





}
