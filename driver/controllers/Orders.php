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


    //order list
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
    //order detail
    public function orders_detail_post()
    {
        $this->response([
            "order_id" => "efwe6547greh",
            "order_number" => "6879",
            "order_date" => "23/04/21, july",
            "round_type" => "single",
            "labour" => [
                "pickup" => true,
                "dropoff" => false
            ],
            "sender" => [
                "full_name" => "humed essie",
                "phone_number" => "76784978678243"
            ],
            "receiver" => [
                "full_name" => "humed essie",
                "phone_number" => "76784978678243"
            ],
            "pickup_location" => [
                "longtiude" => "9.8698",
                "latitiude" => "8.7987"
            ],
            "dropoff_location" => [
                "longtiude" => "9.8698",
                "latitiude" => "8.7987"
            ],
            "specific_location" => [
                "pickup" => "gulf aziz, fith floor",
                "dropoff" => "piassa mart, second floor",
            ],
            "remark" => "",
        ]);
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
