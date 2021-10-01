<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Order extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

    //for create and update
    public function index_post()
    {
        $this->response([
            "status" => true,
            "message" => "Order created successfully !"
        ]);
    }

    //for list
    public function index_get($id)
    {
        $this->response([[
            "id" => "fjkghuy78628",
            "order_number" => "3750",
            "pickup_location" => [
                "latitiude" => "7.909",
                "longtuide" => "9.9868"
            ],
            "dropoff_location" => [
                "latitiude" => "7.909",
                "longtuide" => "9.9868"
            ],
            "price" => "500",
            "date" => "",
        ]]);
    }

    //for detail
    public function detail_post()
    {
        $this->response([
            "id" => "",
            "order_number" => "",
            "vehicle_type" => "motor",
            "driver_name" => "962r3jhvgh3498",
            "driver_photo" => "",
            "order_date" => "23/04/21, july",
            "rate" => "",
            "pin_code" => "9898",
            "round_type" => "single",
            "status" => [
                [
                    "text" => "pending",
                    "date" => "04/05/2012"
                ]
            ],
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


    // rate driver
    public function rate_driver_post()
    {
        $this->response([
            "status" => true,
            "message" => "Thanks for rating!"
        ]);
    }

    // track order
    public function track_order_post()
    {
        $this->response([
            "status" => true,
            "cordinates" => [
                "latitude" => "9.7242",
                "longtiude" => "8.097987"
            ]

        ]);
    }

    // cancle order
    public function cancle_order_post()
    {
        $this->response([
            "status" => true,
            "message" => "Order cancled!"
        ]);
    }
}
