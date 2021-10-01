<?php
defined('BASEPATH') or exit('No direct script access allowed');
require "vendor/autoload.php";

use \Firebase\JWT\JWT;

require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Supplier extends RestController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_post()
    {

        $this->response([
            "status" => true,
            "message" => "supplier Created successfully"
        ]);
    }
    public function update_post()
    {

        $this->response([
            "status" => true,
            "message" => "supplier Information Updated successfuly"
        ]);
    }
    public function delete_post()
    {

        $this->response([
            "status" => true,
            "message" => "supplier Information Deleted  successfully"
        ]);
    }



    public function list_get()
    {

        $this->response([
            [
                "supplier_name" => "supplier_name",
                "tin_number" => "tin_number",
                "area" => "Area",
                "phone_number" => "PhoneNumber",
                "email" => "email",
                "contact_person" => "contact_person",

            ],
            [
                "supplier_name" => "supplier_name",
                "tin_number" => "tin_number",
                "area" => "Area",
                "phone_number" => "PhoneNumber",
                "email" => "email",
                "contact_person" => "contact_person",

            ],
        ]);
    }

    public function detail_get($id)
    {

        $this->response(
            [
                "supplier_information" => [
                    "company_name" => "name", "tin_number" => "tin_number", "licence_number" => "number", "area" => "area", "attachments" => "url", "category" => "category", "logo" => "logo", "status" => "approved"

                ],
                "supplier_address" => ["region" => "region", "city" => "city", "sub_city" => "sub_city", "woreda" => "woreda", "email" => "email", "alternative_email" => "alternative_email", "phone_number" => "phone_number", "alternative_phone" => "alternative_phone", "address" => "address", "office_phone" => "office_phone"],

                "contact_person" => ["full_name" => "full_name", "email" => "email", "phone_number" => "phone_number",],
                "contact_person_address" => ["region" => "region", "city" => "city", "sub_city" => "sub_city", "woreda" => "woreda",  "house_number" => "house_number"]
            ]

        );
    }

public function area_list(){


$this->response(
[
    ["area_name1"=>"area_list"],
    ["area_name2"=>"area_list"],
    ["area_name3"=>"area_list"],
]


);




}




}
