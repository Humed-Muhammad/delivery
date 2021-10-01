<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Delivery extends RestController
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
            "delivery_code" => "",
            "location" => "",
            "order" => "",
            "vehicle_Plate_number" => "",
            "vehicle_type" => "",
            "driver" => "",
            "price" => "",
            "status" => "",
            "total_Km" => ""
        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "delivery_code" => "",
            "start_location" => "",
            "end_location" => "",
            "order" => "",
            "price" => "",
            "vehicle_Plate_number" => "",
            "vehicle_type" => "",
            "driver" => "",
            "delivery_type" => "",
            "status" => "",
            "total_Km" => "",
            "delivery_start_time" => "",
            "time_taken_for_delivery" => "",
            "delivery_end_time" => ""
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

    //for oder get
    public function get_orders_get()
    {
        $this->response([
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""]
        ]);
    }

    //for driver get by searchin (filter) if not the keyword is set return all 
    public function get_drivers_post()
    {
        $this->response([
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""]
        ]);
    }

    //for get all the lookups
    public function get_lookups_post()
    {
        $this->response([
            "name"=>[["value" => "", "text" => ""]],
            "name"=>[["value" => "", "text" => ""]],
            "name"=>[["value" => "", "text" => ""]],
        ]);
    }




}
