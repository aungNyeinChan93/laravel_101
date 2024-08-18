<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\test;
use App\Http\Controllers\TestResourceController;
use Illuminate\Support\Facades\Auth;
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
    return view("welcome", ["key" => $data, "script" => $script, "req" => $request, "req1" => "$request1"]);
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
Route::get("/", [homeController::class, "home"]);

Route::get("/about", [AboutController::class, "index"])->name("about");

Route::get("/product", [homeController::class, "product"]);

// Route::get("/test",[test::class,"test"]);

Route::resource("/resource",TestResourceController::class);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get("/hi",function(){
    return redirect()->route("dashboard");
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[homeController::class,"index"]);
});

Route::get("/logout",function(){
    Auth::logout();
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified'
    ]);
    return redirect()->route("login") ;
});

