<?php
    class User extends MX_Controller{
        public function __construct(){
            parent::__construct();
        }

        public function index(){
            echo "This is the user contoller!";
        }
    }