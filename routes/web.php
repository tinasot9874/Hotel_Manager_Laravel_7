<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
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

Route::get('/', function () {
    toast('Your Post as been submited!','success');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'admin'], function (){

        Route::get('/', 'HomeController@index')->name('index');
        Route::get('/login/', 'Auth\LoginController@showLoginForm' )->name('login');
        Route::post('/login/', 'Auth\LoginController@login');
        Route::post('/logout/', 'Auth\LoginController@logout');

        Route::resource('roomtype', 'RoomType\RoomTypeController');
        Route::resource('service', 'Service\ServiceController');
        Route::resource('coupon', 'Coupon\CouponController');
        Route::resource('status', 'Status\StatusController');
        Route::resource('facility', 'Facility\FacilityController');
        Route::post('coupon/changeStatus', 'Coupon\CouponController@changeStatus')->name('coupon.changeStatus');
        Route::post('coupon/updateWithAjax', 'Coupon\CouponController@updateWithAjax')->name('coupon.updateWithAjax');

});






