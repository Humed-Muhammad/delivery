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
            "pickup_location" => "photo",
            "dropoff_location" => "photo",
            "order_date" => "20-Dec-2021 3:00 PM"           
            ],
        ]);
    }

    public function order_detail_get($id)
    {
        $this->response([
            "order_id" => "7879",
            "order_number" => "7879",
            "driver_name" => "John Mike",
            "vehicle_category_id" => "",
            "driver_photo" => "photo",
            "order_date" => "20-Dec-2021 3:00 PM",            
            "status" => [[
                "text"=>"pending",
                "date"=>"04/05/2012"]
            ],
            "trip_type" => "",    
            "price" => "230",    
            "pickup_location" => "B2_657s_1",
            "dropoff_location" => "B2_657s_1",
            "specific_pickup_location" => "",
            "specific_dropoff_location" => "",
            "rate" => "",
            "labor" => "",
            "pin_code" => "",
            "recipient" => "address",
            "recipient_phone_number" => "76786",
            "additional_info" => "",
        ]);
    }

    public function create_order_post()
    {
        $this->response([
            "status"=>true,
            "message"=>"Your order is created successfully!"
        ]);
    }


    public function get_vehicle_category_get()
    {
        $this->response([[
            "id" => "",
            "title" => "",
            "icon" => "",
            "price" => ""
        ]]);
    }


    public function rate_driver_post()
    {
        $this->response([
            "status"=>true,
            "message"=>"Thanks for rating!"
        ]);
    }

    public function cancle_order_post()
    {
        $this->response([
            "status"=>true,
            "message"=>"Order cancled!"
        ]);
    }
}
