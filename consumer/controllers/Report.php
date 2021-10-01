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

    //load report type
    public function get_problem_report_type_get()
    {
        $this->response([[
            "value" => "",
            "title" => "",
        ]]);
    }
    //get reports
    public function problem_report_get($id)
    {
        $this->response([[
            "id"=>"983h5i43",
            "report_type"=>"lost my item",
            "description"=>"We were in the road and he started to panic",
            "status"=>"solved",
            "date"=>"07/09/21",
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

