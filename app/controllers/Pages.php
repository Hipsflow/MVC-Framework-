<?php
    class Pages extends Controller {
        public function __construct(){

        }
        public function index(){
            $data = [
                'title' => 'Cauas Php Framework',
            ];


            $this->view('pages/index', $data);
        }

        public function products(){
            $data = [
                'title' => 'Products'
            ];
            $this->view('pages/products', $data);
        }
    }