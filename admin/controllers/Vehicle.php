<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Vehicle  extends RestController
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
            "plate_number" => "",
            "model" => "",
            "driver" => "",
            "load_capacity" => "",
            "chassis_number" => "",
            "vehicle_type" => "",
            "owner_full_name" => ""
        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "plate_number" => "",
            "model" => "",
            "driver_id" => "",
            "load_capacity" => "",
            "chassis_number" => "",
            "driver_id" => "",
            "attachment" => "",
            "owner_full_name" => "",
            "owner_photo" => "",
            "owner_email" => "",
            "owner_phone_number" => "",
            "owner_address" => "",
            "attachment" => "",
            "remark" => ""
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

    
    //for plate validation
    public function validate_plate_number_get($plate_number)
    {
        $this->response([
            "status" => true,
            "message" => "validation result message"
        ]);
    }





}
