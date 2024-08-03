<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    function index()
    {
        $myarray = [
            "name" => "chan",
            "age" => 19,
            "email" => "chan@gmail.com"
        ];
        return view("home", compact("myarray"));
    }

    function product(){
        return view("product");
    }
}
