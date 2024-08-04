<?php


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
/*
| Rule URL Pattern   |
------------------
• /resource/action/id
• /resource/action/id/sub-resource/sub-action
------------------
• /users
• /products/view/{id}
• /customers/update/{id}
• /students/add
• /users/detail/{id}/photos
• /products/view/{id}/comments/add
• /students/show/{id}/marks
. /students?location=ygn&sex=female
-------------------
*/

/*
what is MVC ? => M data-Modal ,V view, C controler<->request|responce
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/articles",function(){
//     return "Article Page";
// });

// Route::get("/articles/action/{id}",function($id){
//     return "Article Page $id";
// });

// Route::get("/articles/more",function(){
//     return redirect()->route("articles.detail");
// });

// Route Names
// Route::get("/articles/detail",function(){
//     return " Articles/detail ";
// })->name("articles.detail");

// route with controller

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\product\ProductController;
use Illuminate\Support\Facades\Route;


Route::get("/articles",[ArticleController::class,"index"]);

Route::get("/articles/detail/{id}",[ArticleController::class,"detail"]);

Route::get("/product",[ProductController::class,"index"]);

Route::get("/test",[ArticleController::class,"test"]);
