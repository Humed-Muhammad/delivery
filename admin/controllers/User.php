<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class User  extends RestController
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
            "city" => "",
            "subcity" => ""

        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "full_name" => "",
            "email" => "",
            "region" => "",
            "city" => "",
            "subcity" => "",
            "wereda" => "",
            "group_id" => ""
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

    //for group get 
    public function load_group_get()
    {
        $this->response([
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""]
        ]);
    }



}
