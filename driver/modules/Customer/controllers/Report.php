<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Report  extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

    //load reirt type
    public function get_problem_report_type_get()
    {
        $this->response([[
            "value" => "",
            "title" => "",
        ]]);
    }

    //send problem report
    public function problem_report_post()
    {
        $this->response([
            "status"=>true,
            "message"=>"Thanks for reporting!"
        ]); 
    }

     //delete problem report
     public function delete_problem_report_delete($id)
     {
         $this->response([
             "status"=>true,
             "message"=>"Your Problem Report Deleted Successfully. "
         ]);
     }




   
}

