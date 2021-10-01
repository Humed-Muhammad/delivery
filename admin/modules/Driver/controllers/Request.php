<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Request  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //logout
    public function orders_list_post()
    {
        $this->response([
            "order_id" => "7879",
            "consumer_name" => "John Mike",
            "consumer_photo" => "photo",
            "order_type" => "ecommerce",
            "order_date" => "20-Dec-2021 3:00 PM",            
            "status" => "active",
            "estimation" => [
                "total_price" => "230",
                "estimated_km" => "67",
            ],
            "location" => [
                "pickup_location" => "B2_657s_1",
                "dropoff_location" => "B2_657s_1",
            ],
            "consumer_address" => [
                "address" => "address",
                "phone_number" => "76786",
            ],
        ]);
    }



    public function update_request_status_post()
    {
        $email = $_POST['email'];
        $this->response([
            "status" => true,
            "message" => "status updated successfully."
           ]);
    }
}
