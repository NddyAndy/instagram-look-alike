<?php

class Router{

    public $get = array();
    public $post = [];

   
    public function get($url, $controller) {

        $this->get[$url] = $controller;
    }
    public function post($url, $controller) {
        $this->post[$url] = $controller;
    }
    public function processData($url, $request) {


        if($request === "GET") {

           if(array_key_exists($url, $this->get)) {

               return $this->get[$url];

           }else {
               return "This routes is not found, sorry";
           }
       } else if ($request === "POST") {
        
            if(array_key_exists($url, $this->post)) {
        
                return $this->post[$url];
        
            }else {
                return "This routes is not found, sorry";
            }
        }else {
            return "error";
        }
    }
}

