<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Store  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //store
    public function index_get($id)
    {
        $this->response([[
            "id" => "7879",
            "store_name" => "Mogula",
            "category" => "computer",
            "area" => "Electronics",
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

    public function get_category_get()
    {
        $this->response([
            [
                "value" => "7879",
                "text" => "Mogula",

            ],

        ]);
    }

    public function get_area_get()
    {
        $this->response([
            [
                "value" => "7879",
                "text" => "Mogula",

            ],

        ]);
    }
}
