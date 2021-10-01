<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Schedule  extends RestController
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
            "vehicle" => "",
            "order_number" => "",
            "order_type" => "",
            "driver" => "",
            "phone_number" => "",
            "vechicle_type" => "",
            "date" => ""
        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "vehicle_id" => "",
            "order_number" => "",
            "order_type" => "",
            "driver_id" => "",
            "phone_number" => "",
            "plate_number" => "",
            "vechicle_type" => "",
            "start_date" => "",
            "end_date" => "",
            "address" => [
                "region" => "",
                "city" => "",
                "subcity" => "",
                "wereda" => "",
                "location" => ""
            ]
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

       //for vehicles get
       public function get_vehicles_get()
       {
           $this->response([
               ["value" => "", "text" => ""],
               ["value" => "", "text" => ""],
               ["value" => "", "text" => ""]
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
