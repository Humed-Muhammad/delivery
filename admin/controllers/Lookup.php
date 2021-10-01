<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Lookup  extends RestController
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
            "lookup_type" => "",
            "value" => "",
            "parent" => "",
        
        ]]);
    }

    //for detail
    public function detail_get($id)
    {
        $this->response([
            "id" => "",
            "lookup_type" => "",
            "value" => "",
            "parent_id" => "",
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

     //for load type
     public function load_type_get()
     {
        $this->response([
            ["value" => "", "text" => ""],
            ["value" => "", "text" => ""]
        ]);
     }

      //for load parent
      public function load_parent_get($id)
      {
         $this->response([
             ["value" => "", "text" => ""],
             ["value" => "", "text" => ""]
         ]);
      }



}
