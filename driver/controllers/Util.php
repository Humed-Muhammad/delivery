<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Util  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

   //update driver status
   public function update_status_post()
   {
    $this->response([
        "status" => true,
        "message" => "status updated successfully."
       ]);
   }
   public function confirm_delivery_post()
   {
    $this->response([
        "status" => true,
        "message" => "Delivery successfully confirmed!"
       ]);
   }
   
}

