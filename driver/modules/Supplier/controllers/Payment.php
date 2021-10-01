<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Payment  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //payment
    public function index_post()
    {
        $this->response([[
            "id" => "7879",
            "payer_name" => "Mogula",
            "order_number" => "bole",
            "date" => "date",
            "amount" => "",
            "payment_method"=>"bank",
            "remaining"=>"4567",
            "payment_reciever"=>"Sura",
            "attacment"=>"",
        ]]);
    }


    public function save_post()
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


    public function get_bank_get($id)
    {
        $this->response([
            [
                "value" => "7879",
                "text" => "Mogula",

            ],

        ]);
    }

    public function get_order_get($id)
    {
        $this->response([
            [
                "value" => "7879",
                "text" => "Mogula",

            ],

        ]);
    }
}
