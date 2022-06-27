<?php
namespace App\Controllers;
class BlogController extends Controller{
   
    public function index(){
       echo "page accueil";
    }
    public function show($id){
        echo "show $id";
    }
}