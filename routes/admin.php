<?php

use Illuminate\Support\Facades\Route;
// use RealRashid\SweetAlert\Facades\Alert;




use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CatController;
use App\Http\Controllers\Admin\ProductController;
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

Route::get("/dashboard" , "Admin\DashboardController@index")->middleware('auth','check.role')->name('admin-view'); 
Route::middleware('auth','check.role')->prefix("dashboard")->group(function(){
    // toast('Your Post as been submited!','success');
    Route::resource("/user" , 'Admin\UserController');
    Route::resource("/category" , 'Admin\CatController');
    Route::resource("/product" , 'Admin\ProductController');
    Route::resource("/post" , 'Admin\PostController');
});
