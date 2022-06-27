<?php
namespace App\controllers;
class BlogController{
   
    public function index(){
       echo "page accueil";
    }
    public function show($id){
        echo "show $id";
    }
}