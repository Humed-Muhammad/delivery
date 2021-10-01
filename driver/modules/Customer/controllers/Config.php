<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Config  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

   //confirm delivery
//    public function logout_get()
//    {
//     $this->response([
//         "status" => true,
//         "message" => "Delivery successfully confirmed!"
//        ]);
//    }
   
}

