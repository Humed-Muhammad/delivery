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

       //for register
       public function index_post()
       {
           $this->response([
               "status" => true,
               "message" => "Succesfully registerd!"
           ]);
       }

        //for profile update
       public function update_profile_post()
       {
           $this->response([
               "status" => true,
               "message" => "Profile succesfully updated!"
           ]);
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

       //for get profile (account page-setting)
       public function index_get($id)
       {
           $this->response([
            "full_name"=> "john mike",
            "email"=> "john@gamil.comk",
            "phone_number"=> "8768726575",
            "profile_image"=> "image"
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
                    "message" => "Code sent successfully check your email!"
                ]);
            }
            
            //for verifay the code sent to email address
            public function verify_post()
            {
                $this->response([
                    "status" => true,
                    "message" => "successfully verified!"
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
            // change profile image
            public function change_profile_image_post()
            {
                $this->response([
                    "status" => true,
                    "message" => "Profile image changed successfully."
                ]);
            }
            
            //for get address (account page-setting)
            public function address_get($id)
            {
                $this->response([
                    "id"=>"789hjgs45987qjk",
                    "region"=>"Addis abab",
                    "city"=>"Megenagna",
                    "subcity"=>"shola",
                    "woreda"=>"02",
                    "location"=>"bole",
                    "house_number"=>"557",
                ]);
            }
            // address add and update
            public function address_post()
            {
                $this->response([
                    "status" => true,
                    "message" => "Address successfully added"
                ]);
            }
        }