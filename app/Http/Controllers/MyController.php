<?php
namespace App\Http\Controllers;

class MyController extends Controller{

    public function index(){
        $view = view('home');
        return $view;
    }
}