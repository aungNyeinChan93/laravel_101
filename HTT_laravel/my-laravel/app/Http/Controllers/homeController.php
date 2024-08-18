<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{
    function __construct(){
        $this->middleware("auth")->only("product");
    }
    function index()
    {
        $myarray = [
            "name" => "chan",
            "age" => 19,
            "email" => "chan@gmail.com"
        ];
        $data = post::all();
        $customer = customer::all();
        $users = User::all();
        // dd($users);  //DUMP DIE
        return view("home", compact("myarray","customer","users","data"));
    }

    function product(){
        return view("product");
    }

    function home(){
        return redirect()->route("login");
    }
}
