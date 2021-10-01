<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Catalogue extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function area_list_get()
    {
        $this->response([
            "id" => "7879",
            "icon" => "Logo",
            "area_name" => "Industy",
            "description" => "This is the area of industry",
        ]);
    }

    public function add_area_post()
    {
        $this->response([
            "status" => true,
            "message" => "Area successfully created!"
        ]);
    }

    public function update_area_post()
    {
        $this->response([
            "status" => true,
            "message" => "Area successfully updated!"
        ]);
    }

    public function delete_area_post()
    {
        $this->response([
            "status" => true,
            "message" => "Area successfully deleted!"
        ]);
    }

    public function category_list_get()
    {
        $this->response([
            "id" => "7879",
            "icon" => "Logo",
            "area_name" => "Industy",
            "category_name" => "Fashion",
            "description" => "This is the area of industry",
        ]);
    }
    public function add_category_post()
    {
        $this->response([
            "status" => true,
            "message" => "Category successfully created!"
        ]);
    }
}
