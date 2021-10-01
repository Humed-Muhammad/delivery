<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Driver  extends RestController
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
            "driver" => "",
            "phone_number" => "",
            "email" => "",
            "user_name" => "",
            "owner" => ""
        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "full_name" => "",
            "phone_number" => "",
            "email" => "",
            "user_name" => "",
            "status" => "",
            "Attachment" => "",
            "owner" => ""
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
