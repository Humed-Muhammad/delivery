<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Inventory  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //inventory
    public function index_post()
    {
        $this->response([[
            "id" => "7879",
            "image" => "",
            "product_name" => "SOny headset",
            "quantity" => "20",
            "date" => "date",
        ]]);
    }

    public function detail_get($id)
    {
        $this->response([
            "id" => "7879",
            "warehouse_name" => "Mogula",
            "store_name" => "store-988",
            "status" => "in",
            "product_name" => "SOny headset",
            "quantity" => "20",
            "date" => "date",
        ]);
    }

    public function save_post()
    {
        $this->response([
            "status" => true,
            "message" => "Saved successfully"
        ]);
    }
    public function index_delete($id)
    {
        $this->response([
            "status" => true,
            "message" => "Deleted successfully"
        ]);
    }
    public function get_warehouse_get($id)
    {
        $this->response([
            [
                "value" => "7879",
                "text" => "Mogula",

            ],

        ]);
    }

    public function get_store_get($id)
    {
        $this->response([
            [
                "value" => "7879",
                "text" => "Mogula",

            ],

        ]);
    }
    public function get_product_post()
    {
        $this->response([
            [
                "image"=>"",
                "value" => "7879",
                "text" => "Mogula",

            ],

        ]);
    }
}
