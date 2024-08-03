<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/welcome", function () {
    $data = "hello world";
    $script = "<script>alert('hello world')</script>";
    $request = $_REQUEST["name"];
    $request1 = request("email");
    return view("test", ["key" => $data, "script" => $script, "req" => $request, "req1" => "$request1"]);
});

// wildcard
Route::get("wildcard/{name}", function ($name) {
    return $name;
    // return view("test",["wildcard"=>$name]);
});


// Route::get("/", function () {
//     $myarray = [
//         "name" => "chan",
//         "age" =>19,
//         "email"=> "chan@gmail.com"
//     ];
//     return view("home",compact("myarray"));
// });

//controller
Route::get("/", [homeController::class, "index"]);

Route::get("/about", [AboutController::class, "index"]);

Route::get("/product", [homeController::class, "product"]);



