<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Config  extends RestController
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

    //for detail
    public function index_get()
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
