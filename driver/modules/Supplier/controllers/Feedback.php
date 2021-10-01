<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Feedback  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }


    //feedbacks
    public function index_post()
    {
        $this->response([[
            "id" => "7879",
            "consumer_name" => "Mogula",
            "consumer_photo" => "Mogula",
            "phone_number" => "870234",
            "date" => "",
            "status" => "solved",
            
        ]]);
    }

    public function detail_get($id)
    {
        $this->response([
            "id" => "7879",
            "comment" => "bla bla bla..",
     
        ]);
    }

    public function response_post()
    {
        $this->response([
           "status"=>true,
           "message"=>"response submitted successfully"
        ]);
    }
   
}
