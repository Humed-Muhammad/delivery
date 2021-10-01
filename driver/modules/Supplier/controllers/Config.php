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

    //Dashboard

    public function dashboard_get($id)
    {
        $this->response([
            "cards" => [
                "active_orders" => "56",
                "payment_recievable" => "57478",
                "today_sold_product" => "56",
                "today_sales" => "560",
            ],
            "active_orders" => [[
                "name" => "john",
                "photo" => "wdq",
                "order_number" => "57478",
                "status" => "pending",
                "date" => "9/05/21",
            ]],
            "sold_products" => [[
                "title" => "Canon camera",
                "image" => "",
                "unit_price" => "57478",
                "quantity" => "pending",
                "date" => "9/05/21",
            ]],
        ]);
    }

    // lookups list
    public function get_lookups_post()
    {
        $this->response([
            "region" => [
                [
                    "value" => "7879",
                    "text" => "Mogula",
                ]
            ],
            "city" => [
                [
                    "value" => "7879",
                    "text" => "Mogula",
                ]
            ],
            "subcity" => [
                [
                    "value" => "7879",
                    "text" => "Mogula",
                ]
            ]
        ]);
    }
}
