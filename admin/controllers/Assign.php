<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Assign  extends RestController
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
            "vehicle_type" => "",
            "vehicle" => "",
            "driver" => "",
            "phone_number" => "",
            "plate_number" => "",
            "supplier" => "",
            "warehouse" => ""
        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "vechicle_type_id" => "",
            "vehicle_id" => "",
            "supplier_id" => "",
            "warehouse_id" => "",
            "driver_id" => "",
            "date" => "",
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


    //for supplier get by search in (filter)
    public function load_supplier_post()
    {
        $this->response([
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""]
        ]);
    }

    //for warehouse get
    public function load_warehouse_get($supplier_id)
    {
        $this->response([
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""]
        ]);
    }

}
