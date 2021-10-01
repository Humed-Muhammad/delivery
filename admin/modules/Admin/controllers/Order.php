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
            "message" => "saved successfully !"
        ]);
    }

    //for list
    public function index_get()
    {
        $this->response([[
            "id" => "",
            "order_number" => "",
            "from" => "",
            "to" => "",
            "vehicle_type_id" => "",
            "driver_id" => "",
            "client" => "",
            "price" => "",
            "delivery_type" => "",
            "status" => "",
            "created_at" => "",
        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "order_number" => "",
            "from" => "",
            "to" => "",
            "vehicle_type_id" => "",
            "driver_id" => "",
            "client" => "",
            "price" => "",
            "delivery_type" => "",
            "round_type" => "",
            "labour" => "",
            "sender" => "",
            "receiver" => "",
            "specific_location" => "",
            "status" => "",
            "date" => "",
            "remark" => "",
            "created_by" => "",
            "created_at" => "",
        ]);
    }

    //for delete
    public function index_delete($id)
    {
        $this->response([
            "status" => true,
            "message" => "deleted successfully !"
        ]);
    }



}
