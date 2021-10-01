<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Bank  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //warehouse
    public function index_get($id)
    {
        $this->response([[
            "id" => "7879",
            "name" => "CBE",
            "account_number" => "1004564",
            "description" => "Electronics",
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

   
}
