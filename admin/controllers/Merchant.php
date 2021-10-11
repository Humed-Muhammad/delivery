<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Merchant  extends RestController
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
            "full_name" => "",
            "email" => "",
            "phone_number" => "",
            "company_name" => "",
            "role" => "",
            "status" => "",
        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "full_name" => "",
            "email" => "",
            "phone_number" => "",
            "company_name" => "",
            "company_address" => "",
            "delivery_team" => "",
            "role" => ""
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
