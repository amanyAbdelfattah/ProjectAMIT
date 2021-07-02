<?php

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;
use App\Http\Controllers\User\OpinionController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get("/user" , "User\IndexController@index")->middleware('auth','check.user')->name('user-view');
        Route::middleware('auth','check.user')->prefix("user")->group(function(){
            Route::resource("/writepost" , 'User\OpinionController');
            Route::get("/addToCart/{product}" , 'User\IndexController@addToCart')->name('cart.add');
            Route::get("/women" , 'User\IndexController@women')->name('women.items');
            Route::get("/men" , 'User\IndexController@men')->name('men.items');
            Route::get("/kids" , 'User\IndexController@kids')->name('kids.items');
            Route::get("shopping-cart", 'User\IndexController@showcart')->name('cart.show');
            Route::resource("/profile", 'User\IndexController');
            Route::get("/search", 'SearchController@index')->name('search');
        });
    });





Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('/email',function(){
    Mail::to('57769a11ad9d44')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/login/facebook', 'Auth\LoginController@redirectToFacebook')->name('login.facebook');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
