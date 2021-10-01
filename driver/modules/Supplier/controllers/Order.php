<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Order  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //ordered list
    public function index_post()
    {
        $this->response([[
            "id" => "7879",
            "order_number" => "0007325",
            "consumer_name" => "John Mike",
            "consumer_photo" => "photo",
            "order_date" => "20-Dec-2021 3:00 PM",
            "status" => "",
        ]]);
    }

    public function detail_get($id)
    {
        $this->response([[
            "order_info" => [
                "id" => "",
                "consumer_name" => "",
                "order_number" => "",
                "date" => "",
                "phone_number" => "12335",
                "address" => "Bole",
            ],
            "items" => [
                [
                    "id" => "",
                    "product_image" => "",
                    "product_title" => "",
                    "unit_price" => "",
                    "quantity" => "12335",
                    "total" => "Bole",
                ]
            ],
        ]]);
    }

    public function update_status_post()
    {
        $this->response([
            "status" => true,
            "message" => "Success"
        ]);
    }
}
