<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    //
    public function test(){
        $data = "test";
        return view("test",compact("data"));
    }
}
