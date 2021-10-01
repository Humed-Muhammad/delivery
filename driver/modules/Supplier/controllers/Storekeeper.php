<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Storekeeper  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //storekeeper
    public function index_get($id)
    {
        $this->response([[
            "id" => "7879",
            "storekeeper_name" => "john",
            "warehouse_name" => "mogula",
            "store_name" => "Electronics",
        ]]);
    }

    public function index_post()
    {
        $this->response([
           "status"=>true,
           "message"=>"Saved successfully"
        ]);
    }
    public function index_delete($id)
    {
        $this->response([
           "status"=>true,
           "message"=>"Deleted successfully"
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
}
