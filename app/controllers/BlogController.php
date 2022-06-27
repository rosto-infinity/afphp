<?php
namespace App\controllers;
class BlogController{
   
    public function index(){
       echo "index";
    }
    public function show($id){
        echo "show $id";
    }
}