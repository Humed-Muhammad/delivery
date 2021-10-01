<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Orders  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //logout
    public function orders_list_post()
    {
        $this->response([[
            "order_id" => "7879",
            "order_number" => "",
            "consumer_name" => "John Mike",
            "consumer_photo" => "photo",
            "order_type" => "ecommerce",
            "order_date" => "20-Dec-2021 3:00 PM",            
            "estimated_price" => "",
            "estimated_distance" => "",
        ]]);
    }



    public function requested_orders_post()
    {
        $this->response([
            "order_id" => "7879",
            "order_number" => "",
            "consumer_name" => "John Mike",
            "consumer_photo" => "photo",
            "order_type" => "ecommerce",
            "order_date" => "20-Dec-2021 3:00 PM",  
            "specific_pickup_location" => "",
            "specific_dropoff_location" => "",
            "estimated_price" => "",
            "estimated_distance" => ""
        ]);
    }
}
