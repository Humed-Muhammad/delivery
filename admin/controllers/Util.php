<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Util  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

    //dashboard
    public function dashboard_get()
    {
        $this->response([
            "cards" => [
                "total_order" => "56",
                "total_income" => "57478",
                "total_customer" => "56",
                "total_pending" => "560",
            ],
            "active_orders" => [[
                "order_no" => "john",
                "client_name" => "wdq",
                "order_type" => "57478",
                "price" => "pending",
                "status" => "9/05/21",
            ]],
            "sales" => [
                "today" => "56",
                "week" => "57478",
                "month" => "56",
                "total" => "560",
            ],
            "visit" => [
                "today" => "56",
                "week" => "57478",
                "month" => "56",
                "total" => "560",
            ],
            "summery" => [
                "pending" => "56",
                "deliverd" => "57478",
                "canceld" => "56",
            ]
        ]);
    }

      //for order summery
      public function order_summery_post()
      {
          $this->response([
            "pending" => "56",
            "deliverd" => "57478",
            "canceld" => "56",
        ]);
      }

    //for lookup
    public function lookup_post()
    {
        $this->response([
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""],
        ]);
    }

      //for vehicle type
      public function load_vehicle_type_get()
      {
          $this->response([
              ["value" => "", "text" => ""],
              ["value" => "", "text" => ""],
          ]);
      }
      
      //for vehicle
      public function load_vehicle_get()
      {
          $this->response([
            ["id"=>"jkhjk9","image" => "", "vehicle_type" => ""],
            ["id"=>"jkhjk9","image" => "", "vehicle_type" => ""],
          ]);
      }

      
      //for driver
      public function load_driver_post()
      {
          $this->response([
              ["id"=>"jkhjk9","name" => "", "image" => "", "driver_type" => "",],
              ["id"=>"jkhjk9","name" => "", "image" => "", "driver_type" => "",],

          ]);
      }



       //for setting create
       public function setting_post()
       {
            $this->response([
                "status" => true,
                "message" => "saved successfully !"
            ]);
       }

       //for setting get detail
       public function setting_get()
       {
            $this->response([
                "id" => "",
                "protocol" => "",
                "host" => "",
                "port" => "",
                "email" => "",
                "password" => ""
            ]);
       }



    

}
